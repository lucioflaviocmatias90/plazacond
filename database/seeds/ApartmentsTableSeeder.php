<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            [
                'id' => '1f99c064-adba-43ed-a578-56cb7e257132',
                'blap' => 'A/01',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        	[
                'id' => '2064bf82-ef8b-4807-bf92-93c55ce15e48',
                'blap' => 'A/02',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        	[
                'id' => '2c9157fa-523b-474c-896a-073100d978d7',
                'blap' => 'A/03',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        	[
                'id' => 'c9ff995e-20e6-40ff-a71f-831ef9003336',
                'blap' => 'A/04',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5f627f6f-cdba-4438-a0d4-970dd138a96b',
                'blap' => 'A/11',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '31d431e7-d05c-4517-94e5-018b762088bc',
                'blap' => 'A/12',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '460492e4-98a5-49ba-8f59-d846064cff6f',
                'blap' => 'A/13',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'a2a7beab-b612-4b03-8a07-a20760ff7d64',
                'blap' => 'A/14',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '7bd9c217-ef1a-485d-b930-3b2f03f9e635',
                'blap' => 'A/21',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '079d8ad5-4233-4de3-a921-dd2f00011a00',
                'blap' => 'A/22',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'dce8a1d7-0b70-4e3a-be6e-d3a70d9acbcc',
                'blap' => 'A/23',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2ed11b15-a23b-4af4-8975-4cb9a761921b',
                'blap' => 'A/24',
                'condition_id' => 'ad33c8ff-fcba-446d-be90-8f72a7275e2c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
