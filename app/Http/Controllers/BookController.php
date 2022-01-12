<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{

public function showBooks(Request $request){
    return book::find($request->id);

}

public function addBook(Request $request){
    return book::create($request->all());
}
public function editBook(Request $request){
    $book = book::find($request->id);
    $book->update($request->all());
    return $book ;
}
public function deleteBook(Request $request){
  $book = book::find($request->id);
  $book->delete();
  return 204;
}
}
