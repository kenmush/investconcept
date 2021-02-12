<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_register_and_get_logged_in()
    {
        $this->markTestSkipped();

        $response = $this->post('/register', [
                'firstname' => 'Tara',
                'lastname'  => 'Keith',
                'email'     => 'petysacyd@mailinator.com',
                'password'  => 'Pa$$w0rd!',
        ]);
        $response->assertStatus(200);
    }
}
