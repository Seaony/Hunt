<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     *Runthedatabaseseeds.
     *
     * @returnvoid
     */
    public function run()
    {
        $data      = [];

        $timestamp = Carbon::now();

        foreach (array_values((array) Route::getRoutes())[2] as $index => $value) {
            $data[] = [
                'name'       => $index,
                'alias'      => $index,
                'describe'   => $index,
                'guard_name' => 'web',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }

        DB::table('permissions')->insert($data);
    }
}
