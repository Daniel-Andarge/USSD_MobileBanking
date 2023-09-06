<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        $user = [
            'phone' => '251982897474',
            'pin' => '1234',
            'name' => 'Daniel Andarge'
        ];

    User::create($user);


    }
}
