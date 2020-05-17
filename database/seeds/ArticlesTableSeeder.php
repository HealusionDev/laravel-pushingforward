<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $articletest = Article::create([
        	'title' => 'Article Test',
            'detail' => 'Test',
        ]);

    }
}
