<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
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
        $response->assertStatus(200);
    }

    public function testdownload()
    {

        $contents = file_get_contents('https://github.com/laravel/framework/archive/v8.11.2.zip');
        Storage::disk('public')->put('default/laravel.zip', $contents);
    }

}