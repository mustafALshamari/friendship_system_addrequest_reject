<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
     
     $usersQuantity = 5;
     
     factory(User::class, $usersQuantity)->create();
 
    }
}
