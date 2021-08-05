<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $book = Books::all();
        return view('admin.list', compact('book'));
    }

    public function create()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $book = new Books();
        $book->book_name = $request->input('name');
        $book->author_name = $request->input('author');
        $book->categories = $request->input('category');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $book->image = $path;
        };
        $book->save();
        return redirect()->route('admin.home');
    }

    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('admin.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Books::findOrFail($id);
        $book->book_name = $request->input('name');
        $book->author_name = $request->input('author');
        $book->categories = $request->input('category');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $book->image = $path;
        };
        $book->save();
        return redirect()->route('admin.home');
    }

    public function delete($id)
    {
        Books::where('id', $id)->first()->delete();
        return redirect()->route('admin.home');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $books = Books::where('book_name','LIKE','%'.$keyword.'%')->get();
        return view('admin.list', compact('books'));
    }

}
