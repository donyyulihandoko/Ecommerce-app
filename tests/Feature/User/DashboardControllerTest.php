<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_dashboard_page_can_be_randered()
    {
        $user = User::factory()->user()->create();
        $response = $this->actingAs($user)->get(route('user.dashboard'));

        $response->assertStatus(200);
    }

    public function test_admin_dashboard_page_failed_randered_wrong_role_users()
    {
        $user = User::factory()->admin()->create();
        $response = $this->actingAs($user)->get(route('user.dashboard'));

        $response->assertStatus(302)
            ->assertRedirectToRoute('login');
    }
}
