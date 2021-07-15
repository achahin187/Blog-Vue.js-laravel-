<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          \App\User::create([
            'name'=>'Abdelrhaman',
            'email'=>'achahin187@gmail.com',
            'password'=>bcrypt('123456789'),
            'profile_img'=>'profile_img1.jpg',
            'is_admin'=>true
        ]);
    }
}
