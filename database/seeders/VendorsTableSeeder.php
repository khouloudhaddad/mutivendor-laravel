<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorRecords = [
            [
                'id' => 1,
                'name' => 'John',
                'address' => 'CP-112',
                'city' => 'New Jeresey',
                'state' => 'Florida',
                'country' => 'USA',
                'pincode' => '80000',
                'mobile' => '98000000',
                'email' => 'john@admin.com',
                'status' => 0
            ]
        ];

        Vendor::insert($vendorRecords);
    }
}
