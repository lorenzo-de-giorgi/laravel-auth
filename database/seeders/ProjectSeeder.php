<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Faker
use Faker\Generator as Faker;
// model
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0 ; $i < 10; $i++){
            $newPost = new Project();
            $newPost->title = $faker->sentence();
            $newPost->description = $faker->text();
            $newPost->slug = Project::generateSlug($newPost->title);
            $newPost->save();
        }
    }
}
