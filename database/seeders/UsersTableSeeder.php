<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'cedula' => '0400000712',
            'address' => 'Av. Universitaria',
            'phone' => '0968000009',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Paciente 1',
            'email' => 'paciente1@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'role' => 'paciente',
        ]);

        User::create([
            'name' => 'Medico 1',
            'email' => 'medico1@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'role' => 'doctor',
        ]);

        User::factory()
            ->count(50)
            ->state(['role' => 'paciente'])
            ->create();
    }
}
