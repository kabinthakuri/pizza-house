<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->name= 'Kabin Khand';
        $user->email = 'kabinkhand@gmail.com';
        $user->is_admin = 1;
        $user->password = bcrypt('Kabin@000');
        $user->save();
    }
}
