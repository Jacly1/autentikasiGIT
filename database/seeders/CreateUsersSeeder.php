<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@email.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'AdminUser',
                'email' => 'admin@email.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'DosenUser',
                'email' => 'dosen@email.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'SuperAdminUser',
                'email' => 'superadmin@email.com',
                'type' => 3,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'TendikUser',
                'email' => 'tendik@email.com',
                'type' => 4,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'AdminAkademikUser',
                'email' => 'adminakademik@email.com',
                'type' => 5,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'AdminKeuanganUser',
                'email' => 'adminkeuangan@email.com',
                'type' => 6,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'DirekturUser',
                'email' => 'direktur@email.com',
                'type' => 7,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'WakilDirektur1User',
                'email' => 'wakildirektur1@email.com',
                'type' => 8,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'WakilDirektur2User',
                'email' => 'wakildirektur2@email.com',
                'type' => 9,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'WakilDirektur3User',
                'email' => 'wakildirektur3@email.com',
                'type' => 10,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'AdminLppmUser',
                'email' => 'adminlppm@email.com',
                'type' => 11,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'AdminSdmUser',
                'email' => 'adminsdm@email.com',
                'type' => 12,
                'password' => bcrypt('123456'),
            ]
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
