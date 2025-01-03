<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '男性'
        ];
        DB::table('genders')->insert($param);
        $param = [
            'name' => '女性'
        ];
        DB::table('genders')->insert($param);
        $param = [
            'name' => 'その他'
        ];
        DB::table('genders')->insert($param);
    }
}
