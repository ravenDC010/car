<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Agency',
               'email'=>'agency@agency.com',
                'is_agency'=>'1',
                'gender'=>'male',
                'phone'=>'1231231231',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Customer',
               'email'=>'customer@customer.com',
                'is_agency'=>'0',
                'gender'=>'male',
                'phone'=>'1011011011',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
