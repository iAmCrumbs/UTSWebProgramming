<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage(Request $request)
    {
        $books = DB::table('books')->select('books.id', 'books.title', 'books.author', 'books.image')->get();
        return view('home')->with(compact('books'));
    }

    public function contactus(){

        return view('contactus');
    }

    public function bookdetail(Request $request){
        $id = $request->route('id');

        $books = DB::table('books')->where('id', '=', $id)->first();
        $publishers = DB::table('publishers')->where('id', '=', $books->publisher_id)->first();

        return view('bookdetail')->with((compact('books', 'publishers')));
    }

    public function publisherlist(){

        $publisher = DB::table('publishers')->get();

        return view('publisherlist')->with(compact('publisher'));
    }

    public function publisher(Request $request){
        $id = $request->route('id');

        $publisher = DB::table('publishers')->where('id', '=', $id)->first();
        $books = DB::table('books')->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                                    ->where('publishers.id', '=', $id)
                                    ->select('books.id', 'books.title', 'books.author', 'books.image')->get();

                                    return view('publisher')->with(compact('books', 'publisher'));
    }

    public function category(Request $request)
    {
        $id = $request->route('id');

        $categories = DB::table('categories')->where('id', '=', $id)->first();
        $books = DB::table('books')->join('book_categories', 'books.id', '=', 'book_categories.book_id')
                                    ->where('book_categories.category_id', '=', $id)
                                    ->select('books.id', 'books.title', 'books.author', 'books.image')->get();
        return view('category')->with(compact('books', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
