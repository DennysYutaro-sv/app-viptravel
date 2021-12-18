<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userA = User::create([
            'name' => 'Dennys Yutaro Sullcahuamán Valdez',
            'email' => 'dennys.sullcahuaman.valdez@gmail.com',
            'password' => bcrypt('144994cmpuck')
        ]);

        $userM = User::create([
            'name' => 'Maria Candia Valdez',
            'email' => 'viptravelcusco@gmail.com',
            'password' => bcrypt('vip101cusco')
        ]);

        $userU = User::create([
            'name' => 'Trabajador1',
            'email' => 'marilyn4106@gmail.com',
            'password' => bcrypt('vip101trab')
        ]);

        $userA->assignRole('admin');
        $userM->assignRole('admin');
        $userU->assignRole('admin');
    }
}
