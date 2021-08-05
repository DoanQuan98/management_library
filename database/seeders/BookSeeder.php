<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Books();
        $book->book_name = 'Doraemon Thế Giới Khoa Học - Khí Hậu Và Thời Tiết';
        $book->image = 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_42316.jpg';
        $book->author_name = 'Fujiko F Fujio';
        $book->categories = 'Truyện tranh';
        $book->price = '37840';
        $book->description = 'Với cuốn sách này, các bạn nhỏ vừa có thể vui đọc truyện tranh, vừa học thêm được những kiến thức liên quan tới khoa học.';
        $book->save();
    }
}
