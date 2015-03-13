<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller {

	public function index()
	{
		$books = Book::all();

		return view('pages.videos.index', compact('books'));
	}

}
