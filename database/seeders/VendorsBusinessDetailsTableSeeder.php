<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetail;

class VendorsBusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorBusinessDetailsRecords = [
            [
                'id' => 1,
                'vendor_id' => 1,
                'shop_name' => 'Shop Name',
                'shop_address' => '75 st hryt',
                'shop_city' => 'city',
                'shop_state' => 'florida',
                'shop_country' => 'USA',
                'shop_pincode' => 'CA-2365',
                'shop_mobile' => '220000',
                'shop_website' => 'www.myshop-eadress.com',
                'shop_email' => 'shop@gmail.com',
                'address_proof' => 'Passport',
                'address_proof_image' => 'passport.jpg',
                'business_license_number' => '12233445566',
                'gst_number' => '12546878',
                'pan_number' => '22558899'
            ]
        ];
        VendorsBusinessDetail::insert($vendorBusinessDetailsRecords);
    }
}
