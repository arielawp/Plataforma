<?php

namespace App\Http\Controllers;

use Session;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::orderBy('id', 'ASC')->paginate(10);
        return view ('books.index',compact('books'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'actividad'=>'required',
            'inicio'=>'required',
            'fin'=>'required',
            'fecha'=>'required',
            'terminado'=>'required',
            'comentarios'=>'required',
        ]);
        Book::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'nombre'=>'required',
            'actividad'=>'required',
            'inicio'=>'required',
            'fin'=>'required',
            'fecha'=>'required',
            'terminado'=>'required',
            'comentarios'=>'required',
        ]);
        $book->update($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    
    {
        $book->delete();
        Session::flash('message','Libro ha sido borrado  correctamente');
        return redirect()->route('books.index');
    }
    public function if(Book $book)
    
    {

        $books = Book::where('books', '=', $book)->get();
       

        if  (($books[0]['book'])==$book)
          {
          echo 'Si eres usuario';
          $books = Book::where('book', '=', $book)->get();
          $books=$books[0]['id'];
          //Obtenemos todos los registros de los users
          $books = Book::where('books', '=', $books)->get();
       
          return view('books.index', ['books'=>$books]);
        
          } else {
          echo 'No eres usuario';
          }

    }
}
