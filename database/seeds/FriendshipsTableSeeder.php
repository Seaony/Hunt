<?php

use Illuminate\Database\Seeder;

class FriendshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => '流浪小猫',
            'cover' => 'http://chuangzaoshi.com/assets/images/F/xcatliu.png',
            'describe' => 'A cat who writes code',
            'link' => 'https://www.baidu.com'
        ];

        $frs = [];
        for ($i = 0;$i<10;$i++) {
            $frs[] = $data;
        }

        DB::table('friendships')->insert($frs);
    }
}
