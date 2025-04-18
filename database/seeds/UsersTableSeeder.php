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
            [
                'email' => 'admin@gmail.com',
                'name' => 'shakthi sachintha',
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'acccccccccccccccccadc',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '774345234',
                'user_type' => 'admin'
            ],

            [
                'email' => 'admin@gmail.com',
                'name' => "Ravi Valecha",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'acccccccccccccccccadc',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '767035067',
                'user_type' => 'doctor'
            ],

            [
                'email' => 'pharmacist@gmail.com',
                'name' => "Sumeet Verlyani",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'acccccccccccccccccadc',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '714193432',
                'user_type' => 'pharmacist'
            ],

            [
                'email' => 'general@gmail.com',
                'name' => "sanduni iresha",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'acccccccccccccccccadc',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '713843043',
                'user_type' => 'general'
            ],

            [
                'email' => 'general2@gmail.com',
                'name' => "hasika dilshani",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'acccccccccccccccccadc',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '703169302',
                'user_type' => 'general'
            ]
        ]);
    }
}
