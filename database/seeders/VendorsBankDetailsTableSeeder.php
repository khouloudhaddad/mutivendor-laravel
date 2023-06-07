<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBankDetail;

class VendorsBankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorBankDetailsRecords = [
            [
                'id' => 1,
                'vendor_id' => 1,
                'account_holder_name' => 'John Doe',
                'bank_name' => "BankName",
                'account_number' => '112233445566',
                'bank_ifsc_code' =>  'BWS123'
            ]
        ];
        VendorsBankDetail::insert($vendorBankDetailsRecords);
    }
}
