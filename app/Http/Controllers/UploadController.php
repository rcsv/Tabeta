<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest ;
use App\Book ;
use App\BooksPhoto ;

class UploadController extends Controller
{


    public function uploadForm()
    {
        return view('upload_form') ;
    }


    public function uploadSubmit( UploadRequest $request )
    {
        $book = Book::create( $request->all() ) ;
        foreach ( $request->photos as $photo) {
            BooksPhoto::create([
                'book_id'  => $book->id,
                'filename' => $filename
            ]);
        }

        return 'Upload successful!';
    }
}
