<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
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

        for ($i=1; $i < 5; $i++) {
            Category::create([
                'name' => 'Categoria ' . $i,
                'url' => 'categoria-' . $i
            ]);
        }
        
        Project::factory(15)->create();
    }
}
