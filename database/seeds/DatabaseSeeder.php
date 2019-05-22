<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Techname;
use App\ProjectsTechnames;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $project = Project::create([
            'title'=>'abc',
            'description'=>'abc',
            'liveLink'=>'abc',
            'githubLink'=>'abc',
            'imageName'=>'abc'
            ]);

        $techname = Techname::create([
            'techName' => 'HTML'
        ]);

        $linkingTable = new ProjectsTechnames();
        $linkingTable->project_id = $project->id;
        $linkingTable->techname_id = $techname->id;
        $linkingTable->save();
    }
}
