<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $article = new Article();

        $article->insert([
            [
                'title'=> Lorem::sentance(5),
                'content'=> Lorem::text()
            ],
            [
                'title'=> Lorem::sentance(5),
                'content'=> Lorem::text()
            ]
        ]);
    }
}
