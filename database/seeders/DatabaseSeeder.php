<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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

        User::factory()->create([
            'name' => 'christian',
            'email' => 'great.chriz@gmail.com',
            'password' => Hash::make('11111111'),
        ]);

        User::factory()
            ->count(50)
            ->hasCards(1)
            ->create();
    }
}
