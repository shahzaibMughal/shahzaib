<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Techname;
use App\ProjectsTechnames;
use App\User;


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




        //** Register admin user */
        User::create([
            'name' => "Shahzaib Zaheer",
            'email' => "admin@shahzaib.com",
            'password' => bcrypt('Pakistan143143143')

        ]);
    }
}
