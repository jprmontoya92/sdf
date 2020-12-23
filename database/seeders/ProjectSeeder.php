<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Mi primer proyecto',
            'url' => 'mi-primer-proyecto',
            'description' => "Descripcion de mi primer proyecto"
        ]);
        Project::create([
            'title' => 'Mi segundo proyecto',
            'url' => 'mi-segundo-proyecto',
            'description' => "Descripcion de mi segundo proyecto"
        ]);
        Project::create([
            'title' => 'Mi tercer proyecto',
            'url' => 'mi-tercer-proyecto',
            'description' => "Descripcion de mi tercer proyecto"
        ]);
    }
}
