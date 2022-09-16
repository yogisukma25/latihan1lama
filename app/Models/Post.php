<?php

namespace App\Models;



class Post
{
    static $blog_post = [
        
            [
                "title"  => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Yogi Sukmawati",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum sint incidunt reprehenderit facere minus eius error ipsum, praesentium ut rerum. Atque earum accusantium totam. Quod nisi voluptas voluptates? Beatae minus esse, fuga ratione dolorum aperiam, voluptatibus, cumque incidunt inventore ipsam fugiat soluta accusamus sint ea ducimus error temporibus suscipit saepe! Animi voluptates labore eos natus nostrum rem earum aut. Aliquid sed quas ea sequi libero quod, quam, assumenda sapiente quasi ex temporibus fugiat. Temporibus rem consequuntur odit debitis, eius natus." 
            
            ],
            [
                "title"  => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Yogi Sukmawati",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum sint incidunt reprehenderit facere minus eius error ipsum, praesentium ut rerum. Atque earum accusantium totam. Quod nisi voluptas voluptates? Beatae minus esse, fuga ratione dolorum aperiam, voluptatibus, cumque incidunt inventore ipsam fugiat soluta accusamus sint ea ducimus error temporibus suscipit saepe! Animi voluptates labore eos natus nostrum rem earum aut. Aliquid sed quas ea sequi libero quod, quam, assumenda sapiente quasi ex temporibus fugiat. Temporibus rem consequuntur odit debitis, eius natus." 
            
            ],
            [
                "title"  => "Judul Post Ketiga",
                "slug" => "judul-post-ketiga",
                "author" => "Yogi Sukmawati",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum sint incidunt reprehenderit facere minus eius error ipsum, praesentium ut rerum. Atque earum accusantium totam. Quod nisi voluptas voluptates? Beatae minus esse, fuga ratione dolorum aperiam, voluptatibus, cumque incidunt inventore ipsam fugiat soluta accusamus sint ea ducimus error temporibus suscipit saepe! Animi voluptates labore eos natus nostrum rem earum aut. Aliquid sed quas ea sequi libero quod, quam, assumenda sapiente quasi ex temporibus fugiat. Temporibus rem consequuntur odit debitis, eius natus." 
            
            ]
        ];

        public static function all(){
            return collect(self::$blog_post);
        }

        public static function find($slug){
            $post = static::all();
            
        // foreach($post as $p){
        //     if($p['slug'] === $slug){
        //         $post = $p;
        //     }
        // }
            return $post -> firstWhere ('slug', $slug);
        }
}

