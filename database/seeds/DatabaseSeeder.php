<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(MenusTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(TriggersTableSeeder::class);
         $this->call(FriendshipsTableSeeder::class);
    }
}
