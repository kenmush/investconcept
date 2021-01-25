<?php

namespace Tests\Unit;

use App\Services\Investor;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APIService extends TestCase
{
    use WithFaker;

    /** @test */
    public function can_register_an_investor()
    {
        $data = [
                'phoneNumber'  => $this->faker->phoneNumber,
                'firstName'    => $this->faker->firstName,
                'middleName'   => $this->faker->lastName,
                'lastName'     => $this->faker->lastName,
                'username'     => $this->faker->userName,
                'language'     => 'English',
                'email'        => $this->faker->email,
                'organization' => $this->faker->company,
                'password'     => $this->faker->password,
        ];
        $response = (new Investor())->registerInvestor($data);
        self::assertIsArray($response);
    }

    /** @test */
    public function can_get_categories()
    {
        $response = (new Investor())->getAssetCategories();
        self::assertArrayHasKey('categoryName', $response[0]);
    }
}
