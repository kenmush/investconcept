<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingPageTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function can_edit_the_tag_line()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('herosection.store'), [
                'tagline'                      => $tagline = 'Grow Your Wealth With Others',
                'tagdescription'               => 'Contribute to emerging markets development while making a healthy return.\n Emerging markets offer the strongest investor returns in the coming decades. Alleviating poverty and creating value for investors go hand-in-hand. ',
                'calltoactionone'              => 'Impact',
                'calltoactiononedescription'   => 'Support emerging market entrepreneurs',
                'calltoactiontwo'              => 'Transparent',
                'calltoactiontwodescription'   => 'Keep track of your impact',
                'calltoactionthree'            => 'Attractive',
                'calltoactionthreedescription' => 'Build wealth',
        ]);
        $response->assertStatus(200);
    }
}