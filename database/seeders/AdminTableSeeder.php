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
                'id' => 1,
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'vendor_id' => 0,
                'mobile' => '99000000',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password') , //'$2a$12$KIPtjP5.8qC9hfceKmjusuUG9gvjeFmZxqd3YZBv3bNfOpYC4NMKO',
                'image' => '',
                'status' => 1
            ],
        ];

        Admin::insert($adminRecords);

    }
}
