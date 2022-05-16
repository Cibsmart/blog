<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'php', 'color' => 'gray']);
        Tag::create(['name' => 'laravel', 'color' => 'red']);
        Tag::create(['name' => 'javascript', 'color' => 'yellow']);
        Tag::create(['name' => 'tech', 'color' => 'green']);
    }
}
