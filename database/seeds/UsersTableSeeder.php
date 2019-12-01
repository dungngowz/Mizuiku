<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@mizuiku.com';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
