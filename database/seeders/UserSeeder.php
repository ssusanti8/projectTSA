<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'susi',
            'email' => 'susanti@gmail.com',
            'password' => bcrypt('12345678'),
            'nomerhp' => '085337250955',
            'Level' => 'Administrator'
        ]);
    }
}
