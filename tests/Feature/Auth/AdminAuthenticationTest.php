<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('the login page renders', function () {
    $this->get('/login')
        ->assertOk()
        ->assertSee('Log in')
        ->assertSee('name="email"', false)
        ->assertSee('name="password"', false)
        ->assertSee('name="_token"', false);
});

test('an admin can log in with valid credentials', function () {
    User::factory()->create([
        'email' => 'admin@example.com',
        'password' => Hash::make('correct-password'),
    ]);

    $this->post('/login', [
        'email' => 'admin@example.com',
        'password' => 'correct-password',
    ])
        ->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticated();
});

test('invalid credentials do not authenticate an admin', function () {
    User::factory()->create([
        'email' => 'admin@example.com',
        'password' => Hash::make('correct-password'),
    ]);

    $this->from('/login')->post('/login', [
        'email' => 'admin@example.com',
        'password' => 'wrong-password',
    ])
        ->assertRedirect('/login')
        ->assertSessionHasErrors('email');

    $this->assertGuest();
});

test('guests are redirected away from the admin dashboard', function () {
    $this->get('/admin')
        ->assertRedirect('/login');
});

test('authenticated admins can view the dashboard', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/admin')
        ->assertOk()
        ->assertSee('Homepage admin')
        ->assertSee('Log out');
});

test('an admin can log out', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post('/logout')
        ->assertRedirect('/login');

    $this->assertGuest();
});
