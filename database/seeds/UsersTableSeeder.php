<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'name'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => '123456',
            ])->syncRoles(Role::pluck('name')->toArray());
    }
}
