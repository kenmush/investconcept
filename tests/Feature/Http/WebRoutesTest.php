<?php

namespace Tests\Feature\Http;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WebRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_landing_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_view_water_atm_assets()
    {
        $this->get('water-atms')->assertStatus(200)->assertSeeText('ATMs');
    }

    /** @test */
    public function it_can_view_moto_taxis_assets()
    {
        $this->get('moto-taxis')->assertStatus(200)->assertSeeText('Moto Taxis');
    }

    /** @test */
    public function it_can_view_irrigation_pump_assets()
    {
        $this->get('irrigation-pumps')->assertStatus(200)
                ->assertSeeText('Irrigation pumps');
    }

    /** @test */
    public function it_can_view_login_page()
    {
        $this->get('login')->assertStatus(200)->assertSeeText('Email');
    }


}