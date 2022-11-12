<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Filosifi Teras",
      "slug" => "Filosofi-Teras",
      "author" => "Panji",
      "year" => "2018",
      "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magnam voluptate voluptatem, mollitia beatae esse at earum labore quisquam perspiciatis dignissimos? Sunt iste numquam quo perferendis obcaecati quae ea rerum corrupti eaque nobis, dolore nostrum, mollitia officia explicabo delectus quos. Recusandae impedit eveniet minima suscipit repudiandae consectetur maiores doloremque cum labore ipsum earum unde, repellendus, aut iure, sequi exercitationem. Doloribus obcaecati ullam minima consequuntur, quo dicta numquam, excepturi, consectetur fuga nam repellat nobis. Id dolorem harum iure consequuntur aliquam consequatur."
    ],
    [
      "title" => "Rich Dad Poor Dad",
      "slug" => "Rich-Dad-Poor-Dad",
      "author" => "Krisna",
      "year" => "2020",
      "synopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, beatae voluptate incidunt labore perferendis, excepturi fuga non facilis repellat praesentium nesciunt pariatur eius eveniet, dicta tempora. Aliquam pariatur deleniti modi repudiandae corrupti dolorum voluptates neque culpa enim fugiat nostrum impedit nam magnam, est unde qui, laudantium maxime ducimus ipsum. Dolores?"
    ]
  ];

  public static function all(){
    return collect( self::$blog_posts );
  }

  public static function find($slug){
    $newData = static::all();
    return $newData->firstWhere("slug", $slug);
    return $newData;
  }
}
