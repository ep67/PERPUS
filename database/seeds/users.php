<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'demo',
            'username'  => 'demo',
            'password'  => password_hash('demo', PASSWORD_BCRYPT)
        ]);
    }
}
