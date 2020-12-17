<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_getting_portfolio_returns_correct_set_of_data()
    {
        $this->withoutExceptionHandling();
        $actingUser = User::factory()->create([
                'name'   => 'Kennedy Mutisya',
                'email'   => 'kenmsh@gmail.com',
                'api_id' => 31
        ]);
        $response = $this->actingAs($actingUser)->get('/assets/portfolio');
        $response->assertStatus(200);
    }

    protected function setUp(): void
    {
        parent::setUp();
    }
}