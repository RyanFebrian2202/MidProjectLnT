<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //Home Page
    public function getHomePage(){
        $books = Book::all();

        return view('home', ['books'=>$books]);
    }

    //Books Page
    public function getBooksPage(Request $request){

        //Search
        if($request->input('search')){
            $books = Book::where('judul','like','%' .request('search'). '%')->get();
        } else{
            $books = Book::all();
        }

        //Sort
        if ($request->input('sort')) {
            $books = Book::orderBy('judul', request('sort'))->get();
        }

        //Filter
        if ($request->input('filter')) {
            $books = Book::where('jumlah_halaman', '>', request('filter'))->get();
        }

        return view('exploreBook', ['books'=>$books]);
    }

    //Manage Books Page
    public function getManagePage(Request $request){

        //Search
        if($request->input('search')){
            $books = Book::where('judul','like','%' .request('search'). '%')->get();
        } else{
            $books = Book::all();
        }

        //Sort
        if ($request->input('sort')) {
            $books = Book::orderBy('judul', request('sort'))->get();
        }

        //Filter
        if ($request->input('filter')) {
            $books = Book::where('jumlah_halaman', '>', request('filter'))->get();
        }

        return view('manageBook', ['books'=>$books]);
    }

    //Contact Us Page
    public function getContactPage(){
        return view('contactUs');
    }

    //Add Book Page
    public function getCreatePage(){
        return view('createPage');
    }

    //Create Book
    public function createBook(BookRequest $request){

        Book::create([
            'judul' => $request -> judul,
            'penulis' => $request -> penulis,
            'jumlah_halaman' => $request -> jumlah_halaman,
            'tahun_terbit' => $request -> tahun_terbit,
        ]);

        return redirect(route('getManagePage'));
    }

    //Update Book Page
    public function getUpdatePage($id){
        $book = Book::find($id);

        return view('updatePage',['book'=>$book]);
    }

    //Update Book
    public function updateBook(BookRequest $request, $id){
        $book = Book::find($id);

        $book->update([
            'judul' => $request -> judul,
            'penulis' => $request -> penulis,
            'jumlah_halaman' => $request -> jumlah_halaman,
            'tahun_terbit' => $request -> tahun_terbit
        ]);

        return redirect(route('getManagePage'));
    }

    //Delete Book
    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getManagePage'));
    }
}
