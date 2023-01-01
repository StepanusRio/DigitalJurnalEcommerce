<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create(
            [
                'name' => 'Stepanus Rio Defa Ardiantoro',
                'email' => 'stepanusriodefaardian@gmail.com',
                'address' => 'Karangrejo Timur III Rt 04 Rw 01',
                'phone' => '+6282354052834'
            ]
        );
    }
}
