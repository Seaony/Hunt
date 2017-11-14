<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['工作利器', '设计天堂', '色彩搭配', '域名操作', '设计规范', '捕捉灵感', '热门推荐'];

        $icons = ['fa-ravelry', 'fa-adjust', 'fa-asterisk', 'fa-beer', 'fa-bolt', 'fa-bookmark', 'fa-bug'];

        $timestamp = \Carbon\Carbon::now();

        $tags = [];

        for ($i = 0; $i < 10; $i ++) {
            $tags[] = [
                'name'       => array_random($names),
                'icon'       => array_random($icons),
                'describe'   => '长相思兮长相忆，短相思兮无穷极，早知如此绊人心，何若当初无相识。',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }

        DB::table('tags')->insert($tags);
    }
}
