<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
        ->count(3)
        ->state(new Sequence(
            ['name' => 'Information Technology'],
            ['name' => 'Business'],
            ['name' => 'Economics'],
        ))
        ->create();
    }
}