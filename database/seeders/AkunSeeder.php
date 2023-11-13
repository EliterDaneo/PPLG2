<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Lisa',
                'email' => 'lisa@pplg.com',
                'password' => bcrypt('123456'),
                'level' => 'admin',
            ],
            [
                'name' => 'Mutiya',
                'email' => 'mutiya@pplg.com',
                'password' => bcrypt('123456'),
                'level' => 'siswa',
            ]
        ];

        foreach($data as $key => $value){
            User::create($value);
        }
    }
}