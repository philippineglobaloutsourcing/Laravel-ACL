<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use App;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        Model::unguard();

        App\User::truncate();
        App\Post::truncate();
        // Comment::truncate();
        factory(App\Post::class, 10)->create();
        
        Model::reguard();
    }
}
