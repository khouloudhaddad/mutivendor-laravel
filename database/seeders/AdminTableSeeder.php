<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRecords = [
            [
                'id' => 2,
                'name' => 'John',
                'type' => 'vendor',
                'vendor_id' => 1,
                'mobile' => '98000000',
                'email' => 'john@admin.com',
                'password' => Hash::make('123456') , //'$2a$12$KIPtjP5.8qC9hfceKmjusuUG9gvjeFmZxqd3YZBv3bNfOpYC4NMKO',
                'image' => '',
                'status' => 1
            ]
        ];

        Admin::insert($adminRecords);

    }
}
