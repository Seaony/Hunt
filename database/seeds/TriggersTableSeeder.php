<?php

use Illuminate\Database\Seeder;

class TriggersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = \App\Models\Category::pluck('id')->toArray();

        $tags = \App\Models\Tag::pluck('id')->toArray();

        $covers    = [
            'http://chuangzaoshi.com/assets/images/D/google.png',
            'http://chuangzaoshi.com/assets/images/D/foodiesfeed.png',
            'http://chuangzaoshi.com/assets/images/D/fubiz.png',
            'http://chuangzaoshi.com/assets/images/D/uigradients.png',
            'http://chuangzaoshi.com/assets/images/D/vimeo.png',
            'http://chuangzaoshi.com/assets/images/D/panda.png',
            'http://chuangzaoshi.com/assets/images/D/bestfolios.png',
            'http://chuangzaoshi.com/assets/images/D/cssdesignawards.png',
            'http://chuangzaoshi.com/assets/images/D/theinspirationgrid.png',
        ];

        $datas     = [];

        $timestamp = \Carbon\Carbon::now();

        for ($i = 0; $i < 1000; $i ++) {
            $datas[] = [
                'name'        => 'Material 设计',
                'link'        => 'http://www.baidu.com',
                'cover'       => array_random($covers),
                'describe'    => 'MaterialDesign 设计官方指南',
                'form'        => rand(0,10) ==10 ? 'Seaony' : '',
                'category_id' => array_random($categorys),
                'tag_id'      => array_random($tags),
                'created_at'  => $timestamp,
                'updated_at'  => $timestamp,
            ];
        }

        DB::table('triggers')->insert($datas);
    }
}
