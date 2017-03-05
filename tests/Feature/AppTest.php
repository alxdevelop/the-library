<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Book;

class AppTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRedirect()
    {
        $response = $this->get('/');
        $response->assertRedirect(route('books.index'));
    }



    public function testBooksHome()
    {
        $response = $this->get(route('books.index'));
        $response->assertStatus(200);
    }



    public function testBookNewForm()
    {
        $response = $this->get(route('books.create'));
        $response->assertStatus(200);
    }


    public function testBookEditForm()
    {
        //get a book
        $book = Book::first();
        $response = $this->get(route('books.edit', [$book->id]));
        $response->assertStatus(200);
    }

}
