<?php

use Illuminate\Database\Seeder;
use appModels\User;
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
            'name'  => 'Carolina Araujo',
            'email' => 'carolina@gmail.com',
            'password' => password_hash('123456', PASSWORD_BCRYPT),
        ]);
    }
}
