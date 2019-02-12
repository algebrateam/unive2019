<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();  // brise sve prethodne podatke
        
        $u1 = new User();
        $u1->name = 'Predrag Mrvic';
        $u1->email = 'pmrvic@123.com';
        $u1->email_verified_at = null;
        $u1->password = '$2y$10$InrA9CXO7Q5Wnxku.YbuGeT277M0W/YL7PQdV2QoNEkIz1DY1Tr7u';  //123456
        $u1->remember_token = 'N48lhfGg5snSCQnr1UZrixUl0hRzvUtttMl2vtulA7LUhoMptvuMcXPc54Mo';
        $u1->save();
        
        
        factory(User::class, 35)->create();
    }
}
