<?php

namespace App\Models;


class Flora
{
    
    private static $datafloras = [
        [
            "nama_flora" =>  "Anggrek",
            "slug" => "anggrek",
            "nama_latin" => "Lorem ipsum ",
            "jumlah" => "4",
            "status" => "Langka",
        ],
        [
            "nama_flora" =>  "Tulip",
            "slug" => "tulip",
            "nama_latin" => "Lorem ipsum",
            "jumlah" => "200",
            "status" => "Umum",
        ]
        ];

    public static function all()
    {
        return self::$datafloras;
    }

    public static function cari($slug)
    {
        $floras = self::$datafloras;
        $flora = [];
        foreach ($floras as $f) {
            if ($f['slug']===$slug) {
                $flora=$f;
            }
        }
        return $flora;
    }
}
