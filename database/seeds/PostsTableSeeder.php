<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Test title 1',
                'body' => 'text1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Test title 2',
                'body' => 'text2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Test title 3',
                'body' => 'text3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }  
}
