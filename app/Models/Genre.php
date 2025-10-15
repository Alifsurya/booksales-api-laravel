<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    private $genres=[
        [
            "name"=>"Fiction",
            "description"=>"A literary work based on imagination and not necessarily on fact"
        ],
        [
            "name"=>" Non Fiction",
            "description"=>"A literary work based on facts and real events"
        ],
        [
            "name"=>" Science Fiction",
            "description"=>" A genre that deals with imaginative and futuristic concepts"
        ],
        [
           "name"=>" Romance",
            "description"=>" A genre focused on love, relationships, and emotional connection" 
        ],
        [
            "name"=>"Mystery",
            "description"=>"A genre involving suspense, crime, and problem solving" 
        ]
    ];
    public function getGenres() {
        return $this->genres;
    }

}
