<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name'=>'admin','display_name'=>'quản trị hệ thống'],
            ['name'=>'content','display_name'=>'chỉnh sửa nội dung'],
            ['name'=>'manager','display_name'=>'quản trị đơn hàng'],


        ]);
    }
}
