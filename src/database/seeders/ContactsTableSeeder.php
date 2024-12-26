<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category_id' => '1',
            'first_name' => 'コーチテック',
            'last_name' => '一郎',
            'gender' => '1',
            'email' => 'test1@test',
            'tel' => '01234567891',
            'address' => '東京都中央区',
            'building' => 'コーチテックビル１号館',
            'detail' => '到着予定日を過ぎても、まだ商品が到着しておりません。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'category_id' => '2',
            'first_name' => 'コーチテック',
            'last_name' => '二郎',
            'gender' => '2',
            'email' => 'test2@test',
            'tel' => '01234567892',
            'address' => '東京都千代田区',
            'building' => 'コーチテックビル２号館',
            'detail' => '届いた商品に破損が確認されたために、交換してください。詳細は添付画像を参照してください。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'category_id' => '3',
            'first_name' => 'コーチテック',
            'last_name' => '三郎',
            'gender' => '3',
            'email' => 'test3@test',
            'tel' => '01234567893',
            'address' => '東京都文京区',
            'building' => 'コーチテックビル３号館',
            'detail' => '3ヵ月前に購入したイヤホンで、最近、ノイズが頻繁に発生するようになりました。改善方法があれば、教えてください。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'category_id' => '4',
            'first_name' => 'コーチテック',
            'last_name' => '四郎',
            'gender' => '1',
            'email' => 'test4@test',
            'tel' => '01234567894',
            'address' => '東京都新宿区',
            'building' => 'コーチテックビル４号館',
            'detail' => '〇△店舗の連絡先を教えてください？'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'category_id' => '5',
            'first_name' => 'コーチテック',
            'last_name' => '五郎',
            'gender' => '2',
            'email' => 'test5@test',
            'tel' => '01234567895',
            'address' => '東京都渋谷区',
            'building' => 'コーチテックビル５号館',
            'detail' => '小麦粉アレルギーでも、安心して利用できるピザ用途の生地をさがしております。お取り扱いの販売店があればおしえてください。'
        ];
        DB::table('contacts')->insert($param);
    }
}
