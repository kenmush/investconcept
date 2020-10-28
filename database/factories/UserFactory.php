<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name'              => $this->faker->name,
                'email'             => $this->faker->unique()->safeEmail,
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt($this->faker->password),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
                'api_id'            => $this->faker->word,
        ];
    }
}
