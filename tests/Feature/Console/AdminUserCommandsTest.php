<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('the create admin command creates an admin user', function () {
    $this->artisan('admin:create')
        ->expectsQuestion('Name', 'Andrew Bielecki')
        ->expectsQuestion('Email', 'admin@example.com')
        ->expectsQuestion('Password', 'secret-password')
        ->expectsQuestion('Confirm password', 'secret-password')
        ->expectsOutput('Admin user created.')
        ->assertSuccessful();

    $user = User::query()->where('email', 'admin@example.com')->first();

    expect($user)->not->toBeNull()
        ->and($user->name)->toBe('Andrew Bielecki')
        ->and(Hash::check('secret-password', $user->password))->toBeTrue();
});

test('the create admin command rejects duplicate emails', function () {
    User::factory()->create([
        'email' => 'admin@example.com',
    ]);

    $this->artisan('admin:create')
        ->expectsQuestion('Name', 'Andrew Bielecki')
        ->expectsQuestion('Email', 'admin@example.com')
        ->expectsQuestion('Password', 'secret-password')
        ->expectsQuestion('Confirm password', 'secret-password')
        ->expectsOutput('An admin user with that email already exists.')
        ->assertFailed();
});

test('the reset password command updates an admin password', function () {
    $user = User::factory()->create([
        'email' => 'admin@example.com',
        'password' => Hash::make('old-password'),
    ]);

    $this->artisan('admin:reset-password')
        ->expectsQuestion('Email', 'admin@example.com')
        ->expectsQuestion('New password', 'new-password')
        ->expectsQuestion('Confirm new password', 'new-password')
        ->expectsOutput('Admin password reset.')
        ->assertSuccessful();

    expect(Hash::check('new-password', $user->fresh()->password))->toBeTrue();
});

test('the reset password command handles unknown emails', function () {
    $this->artisan('admin:reset-password')
        ->expectsQuestion('Email', 'missing@example.com')
        ->expectsOutput('No admin user was found for that email address.')
        ->assertFailed();
});
