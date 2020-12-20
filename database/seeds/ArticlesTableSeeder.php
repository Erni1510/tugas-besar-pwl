<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            'title'=>'Artikel Umum',
            'content'=>'Animasi'
        ]);

        $this->call(UserTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
    }
    
}
