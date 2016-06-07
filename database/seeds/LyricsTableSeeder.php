<?php

use Illuminate\Database\Seeder;

class LyricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lyrics')->insert([
        	'title' => 'abcd',
            'lyrics' => 'this is abcd lyrics'
        	'slug' => 'abcd',
        ]);
    }
}
