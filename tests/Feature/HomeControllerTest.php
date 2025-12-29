<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_can_be_randered()
    {
        $response = $this->get(route('home.index'));

        $response->assertStatus(200)
            ->assertSeeText('Landing Page');
    }

    public function test_user_dashboard_can_be_randered()
    {
        $user = User::factory()->user()->create();
        $response = $this->actingAs($user)->get(route('home.index'));

        $response->assertStatus(200)
            ->assertSeeText('Dashboard');
    }

    public function test_admin_dashboard_can_be_randered()
    {
        $user = User::factory()->admin()->create();
        $response = $this->actingAs($user)->get(route('home.index'));

        $response->assertStatus(200)
            ->assertSeeText('Admin Dashboard');
    }
}
