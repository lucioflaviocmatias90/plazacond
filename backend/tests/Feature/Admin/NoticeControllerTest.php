<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\Apartment;
use App\Models\Notice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class NoticeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function it_should_return_error_when_user_try_access_not_logged()
    {
        $response = $this->getJson('/api/admin/notices');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function it_should_list_all_notices()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')
            ->getJson('/api/admin/notices');

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'description',
                    'apartment',
                    'created_at',
                    'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }

    /**
     * @test
     */
    public function it_should_list_notices_by_search_params()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin')
            ->getJson('/api/admin/notices?search=Gol%20Quadrado');

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'description',
                    'apartment',
                    'created_at',
                    'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }

    /**
     * @test
     */
    public function it_should_return_error_when_create_a_new_notice_not_logged()
    {
        $notice = factory(Notice::class)->make();

        $data = [
            'title' => $notice->title,
            'description' => $notice->description,
            'title' => (string) Str::uuid(),
        ];

        $response = $this->postJson('api/admin/notices', $data);

        $response->assertUnauthorized();
    }

    /**
     * @test
     */
    public function it_should_to_create_a_new_notice()
    {
        $admin = factory(Admin::class)->create();
        $apartment = factory(Apartment::class)->create([
            'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c'
        ]);
        $notice = factory(Notice::class)->make([
            'apartment_id' => $apartment->id
        ]);

        $data = [
            'title' => $notice->title,
            'description' => $notice->description,
            'apartment_id' => $notice->apartment_id,
        ];

        $response = $this->actingAs($admin, 'admin')
            ->postJson('api/admin/notices', $data);

        $response->assertOk();
    }
}
