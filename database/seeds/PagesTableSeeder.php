<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Page;
use App\User;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();

        $admin = User::find(1);

        $admin->pages()->saveMany([
            new Page([
                'title' => 'About',
                'url' => '/about',
                'content' => 'This is about us.',
            ]),
            new Page([
                'title' => 'Contact',
                'url' => '/contact',
                'content' => 'You can contact me via phone at 123-456-7890.',
            ]),
            new Page([
                'title' => 'Another Page',
                'url' => '/another-page',
                'content' => 'This is another page.',
            ]),
        ]);

        // $users = User::all();

        // foreach ($users as $user){
        //     for ($i = 0; i < 3; $i++){
        //         $page = Page::create([
        //             'user_id' => $user::id(),
        //             'content' => Str::random(10),
        //             'title' => Str::random(10),
        //             'url' => "$user::name() + '_' + $i",
        //         ]);

        //     }
        // }
    }
}
