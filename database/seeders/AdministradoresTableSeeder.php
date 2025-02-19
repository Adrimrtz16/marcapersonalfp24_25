<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('administradores')->truncate();

        $users = User::all();

        foreach($users as $user){
            $administrador = $user->administrador()->make();
            $user->administrador()->save($administrador);
        }
    }
}
