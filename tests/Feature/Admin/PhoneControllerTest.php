<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PhoneControllerTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_return_error_when_user_try_access_not_logged()
    {
        $response = $this->getJson('/api/admin/phones');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function it_should_list_all_phone_numbers_registered()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')
            ->getJson('/api/admin/phones');

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'name', 'number', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }

    /**
     * @test
     */
    public function it_should_list_all_phone_numbers_by_name_parameter()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')
            ->getJson('/api/admin/phones?search=Policia');

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'name', 'number', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }
}
