<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['f_name'=>'patrick', 'email'=>'bulletroswell@gmail.com', 'password'=>'123456'],
        	['f_name'=>'elaine', 'email'=>'layneignacio@gmail.com', 'password'=>'1234567'],
            ['f_name'=>'ron', 'email'=>'ronlupera@gmail.com', 'password'=>'12345678'],
            ['f_name'=>'test', 'email'=>'test@gmail.com', 'password'=>'123456789'],
        ];
        foreach ($data as $key => $value) {
        	User::create($value);
        }
    }
}
