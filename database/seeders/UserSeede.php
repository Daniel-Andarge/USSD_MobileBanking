<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       // Active with no accounts
    /*     User::factory()->create([
            'phone' => '251982897474',
            'pin' => '1234',
            'name' => 'Daniel'
        ]);
          */
        User::factory()->create([
            'phone' => '251982897474',
            'pin' => '1234',
            'name' => 'Daniel'
        ]); 
      
    }
}
