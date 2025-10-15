<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya',
            'price' => '40000',
            'stock' => '15',
            'cover_photo' => 'pulang.jpg',
            'genre_id' => '1',
            'author_id' => '1',
        ]);
       
        Book::create([
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang',
            'price' => '25000',
            'stock' => '5',
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => '2',
            'author_id' => '2',
        ]);

        Book::create([
            'title' => 'Naruto',
            'description' => 'Buku yang membahas tentang jalan ninja seseorang',
            'price' => '30000',
            'stock' => '55',
            'cover_photo' => 'naruto.jpg',
            'genre_id' => '3',
            'author_id' => '3',
        ]);

        Book::create([
            'title' => 'One Piece',
            'description' => 'Petualangan Luffy dan kru Topi Jerami mencari harta karun legendaris One Piece.',
            'price' => '35000',
            'stock' => '40',
            'cover_photo' => 'onepiece.jpg',
            'genre_id' => '3',
            'author_id' => '2',
        ]);

        Book::create([
            'title' => 'Attack on Titan',
            'description' => 'Kisah perjuangan manusia melawan raksasa untuk bertahan hidup di balik tembok.',
            'price' => '40000',
            'stock' => '30',
            'cover_photo' => 'aot.jpg',
            'genre_id' => '3',
            'author_id' => '4',
        ]);

    }
}
