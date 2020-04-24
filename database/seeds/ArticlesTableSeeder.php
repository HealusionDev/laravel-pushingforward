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

        $article1 = Article::create([
        	'title' => 'Article Test',
            'detail' => 'Bla bla',
        ]);

        $article2 = Article::create([
            'title' => 'Article Test 2',
            'detail' => 'Bla bla bla',
        ]);
    }
}
