<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Rowja Mehjabeen', 
                'title' => 'Web Develover', 
                'company' => 'Google', 
                'location'=>'Dinajpur, Bangladesh', 
                'employees'=>150, 
                'industry'=>'computer, software', 
                'email'=>'rowja@mail.com', 
                'password'=>bcrypt('12345678')
            ],

            [
                'name' => 'Sazzad Saju', 
                'title' => 'Backend Develover', 
                'company' => 'NetCoden Inc.', 
                'location'=>'Dhaka, Bangladesh', 
                'employees'=>100, 
                'industry'=>'computer, software', 
                'email'=>'saju@mail.com', 
                'password'=>bcrypt('12345678')
            ],

            [
                'name' => 'Mili Mehjabeen', 
                'title' => 'Frontend Develover', 
                'company' => 'Youtube', 
                'location'=>'Kishoregonj, Bangladesh', 
                'employees'=>50, 
                'industry'=>'computer, software', 
                'email'=>'mili@mail.com', 
                'password'=>bcrypt('12345678')
            ],
            
            [
                'name' => 'John Doe', 
                'title' => 'Web Develover', 
                'company' => 'Google', 
                'location'=>'Dinajpur, Bangladesh', 
                'employees'=>150, 
                'industry'=>'computer, software', 
                'email'=>'john@mail.com', 
                'password'=>bcrypt('12345678')
            ]

        ];

        DB::table('users')->insert($data);
    }
}
