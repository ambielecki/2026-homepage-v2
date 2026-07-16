<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ResetAdminPassword extends Command
{
    protected $signature = 'admin:reset-password';

    protected $description = 'Reset an admin user password';

    public function handle(): int
    {
        $email = trim((string) $this->ask('Email'));
        $user = User::query()->where('email', $email)->first();

        if (! $user) {
            $this->error('No admin user was found for that email address.');

            return self::FAILURE;
        }

        $password = (string) $this->secret('New password');
        $passwordConfirmation = (string) $this->secret('Confirm new password');

        if ($password === '') {
            $this->error('Password is required.');

            return self::FAILURE;
        }

        if ($password !== $passwordConfirmation) {
            $this->error('The password confirmation does not match.');

            return self::FAILURE;
        }

        $user->forceFill([
            'password' => $password,
        ])->save();

        $this->info('Admin password reset.');

        return self::SUCCESS;
    }
}
