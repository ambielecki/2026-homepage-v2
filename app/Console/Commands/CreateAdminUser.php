<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create an admin user account';

    public function handle(): int
    {
        $name = trim((string) $this->ask('Name'));
        $email = trim((string) $this->ask('Email'));
        $password = (string) $this->secret('Password');
        $passwordConfirmation = (string) $this->secret('Confirm password');

        if ($name === '' || $email === '' || $password === '') {
            $this->error('Name, email, and password are required.');

            return self::FAILURE;
        }

        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('The email address must be valid.');

            return self::FAILURE;
        }

        if ($password !== $passwordConfirmation) {
            $this->error('The password confirmation does not match.');

            return self::FAILURE;
        }

        if (User::query()->where('email', $email)->exists()) {
            $this->error('An admin user with that email already exists.');

            return self::FAILURE;
        }

        User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        $this->info('Admin user created.');

        return self::SUCCESS;
    }
}
