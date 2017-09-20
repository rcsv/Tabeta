<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book ;
use Validator ;

class BooksController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth') ;
	}


	// index
	public function index( /* Request $request */ ) {
		$books = Book::orderBy('created_at', 'desc')->paginate( 3 ) ;

		return view('books', [
			'books' => $books
		]);
	}

	// edit before update
	public function edit( Book $book ) {
		return view(
			'bookedit', ['book' => $book]
		);
	}

	public function delete( Book $book ) {
		$book->delete() ;
		return redirect('/') ;
	}

    // update
	public function update( Request $request )
	{
		// Validation
		$validator = Validator::make($request->all(), [
			'id'          => 'required',
			'item_name'   => "bail|required|unique:books,item_name,$request->id|min:3|max:255",
			'item_number' => 'required|numeric|min:1|max:999',
			'item_amount' => 'required|numeric|max:999999',
			'published'   => 'nullable|date'
		]);

		// Validation Error
		if ( $validator->fails() ) {
			return redirect('/')
				->withInput()
				->withErrors( $validator ) ;
		}

		// update Data
		$book = Book::find( $request->id ) ;
		$book->item_name   = $request->item_name ;
		$book->item_number = $request->item_number ;
		$book->item_amount = $request->item_amount ;
		$book->published   = $request->published ;
		$book->save() ;

		// redirect to root route.
		return redirect('/') ;
	}

	// store
	public function store( Request $request ) {
		$validator = Validator::make($request->all(), [
			'item_name'   => 'bail|required|unique:books|min:3|max:255',
			'item_number' => 'required|numeric|min:1|max:999',
			'item_amount' => 'required|numeric|max:999999',
			'published'   => 'nullable|date'
		]);

		if ($validator->fails()) {
			return redirect('/')
				->withInput()
				->withErrors($validator);
		}

		$book = new Book ;
		$book->item_name   = $request->item_name ;
		$book->item_number = $request->item_number;
		$book->item_amount = $request->item_amount ;
		$book->published   = $request->published ;
		$book->save () ;

		// redirect to root route.
		return redirect('/') ;
	}
}
