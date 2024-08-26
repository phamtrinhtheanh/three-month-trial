<?php

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Media\Helpers\FileHelper;
use Modules\User\Models\User;

class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'        => fake()->firstName(),
            'last_name'         => fake()->lastName(),
            'name'              => fake()->name(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'phone'             => mt_rand(1111111111, 9999999999),
            'avatar'            => FileHelper::DEFAULT_AVATAR,
            'password'          => Hash::make('123456'),
            'last_login_at'     => now(),
            'status'            => fake()->randomElement(['active', 'banned']),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}