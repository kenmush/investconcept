<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;


    public function test_can_register_and_get_logged_in()
    {
        $response = $this->post('/register', [
                'firstname' => 'Tara',
                'lastname'  => 'Keith',
                'email'     => 'petysacyd@mailinator.com',
                'password'  => 'Pa$$w0rd!',
        ]);
        dd($response);
        $response->assertStatus(200);
    }
}