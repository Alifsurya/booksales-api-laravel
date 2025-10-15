<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    private $authors=[
        [
            "name"=>"J.K. Rowling",
            "photo"=>"jk_rowling.jpg",
            "bio"=>" British author, best known for the harry potter series."
        ],
        [
            "name"=>"George R.R Martin ",
            "photo"=>"george_rr_martin.jpg",
            "bio"=>"American novelist and short story writes, known for his works in science fiction."
        ],
        [
            "name"=>"Isaac Asimov",
            "photo"=>"isaac_asimov.jpg ",
            "bio"=>" American author and professor of biochemistry, known for his works in science fiction."
        ],
        [
            "name"=>"Agatha Christie",
            "photo"=>" agatha_christie.jpg",
            "bio"=>"British writer known as the Queen of Crime, famous for detective novels."
        ],
        [
            "name"=>"Stephen King",
            "photo"=>"stephen_king.jpg ",
            "bio"=>"American author of horror, supernatural fiction, suspense, and fantasy novels."
        ]
    ];
    public function getAuthors() {
        return $this->authors;
    }
}
