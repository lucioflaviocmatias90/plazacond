<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\Condition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApartmentControllerTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_error_when_user_try_access_not_logged()
    {
        $response = $this->getJson('/api/admin/apartments');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function it_should_to_list_all_apartments()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')->getJson('/api/admin/apartments');

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'blap', 'condition', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }

    /**
     * @test
     */
    public function it_should_to_list_only_by_blap_parameter()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')
            ->getJson('/api/admin/apartments?blap=A/21');

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'blap', 'condition', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }

    /**
     * @test
     */
    public function it_should_to_list_sending_any_condition_parameter()
    {
        $admin = factory(Admin::class)->create();

        $conditionId = 'sdf23sdlkn2o';

        $response = $this->actingAs($admin, 'admin')
            ->getJson("/api/admin/apartments?condition={$conditionId}");

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'blap', 'condition', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }

    /**
     * @test
     */
    public function it_should_to_list_sending_specific_condition_parameter()
    {
        $admin = factory(Admin::class)->create();

        $condition = Condition::inRandomOrder()->first();

        $response = $this->actingAs($admin, 'admin')
            ->getJson("/api/admin/apartments?condition={$condition->id}");

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'blap', 'condition', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }
}
