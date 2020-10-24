<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'fsbr',
            'email' => 'fsbr@fsbr.com.br',
            'password' => 'admin',
            'cpf' => '010.986.660-62',
            'telefone' => '(11)94100-8241',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin',
            'password' => 'admin',
            'cpf' => '711.789.620-59',
            'telefone' => '(11)94100-8241',
        ]);
    }
}
