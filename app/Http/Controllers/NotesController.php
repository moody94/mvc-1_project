<?php

namespace App\Http\Controllers;

use App\Todo;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{

    public function index(Request $request)
    {
        $todos = DB::table('todos')->get();

        $request->session()->put('todos', $todos);

        return view('home', ['todos' => $todos]);
    }


    public function store()
    {
        try {
            $this->validate(request(), [
                'title' => ['required'],
                'date' => ['required'],
                'content' => ['required'],
                'color' => ['required'],
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();


        $user = Auth::user();

        $todo = new Todo([
            "title" => $data['title'],
            "content" => $data['content'],
            "starts_at" => $data['date'],
            "type" => 'text',
            "author_name" => $user->name,
            "author_email" => $user->email,
            "color" => $data['color'],
        ]);

        $todo->save();

        session()->flash('success', 'Todo created succesfully');

        return redirect('/');
    }


    public function edit($id)
    {
        $todo = DB::table('todos')->find($id);

        $userEmail = Auth::user()->email;

        if ($todo && $todo->author_email === $userEmail) {
            return view('todos.edit', ['todo' => $todo]);
        } else return redirect('/');
    }


    public function details($id)
    {
        $todo = DB::table('todos')->find($id);

        $userEmail = Auth::user()->email;

        if ($todo && $todo->author_email === $userEmail) {
            return view('todos.details', ['todo' => $todo]);
        } else return redirect('/');
    }


    public function update(Todo $todo)
    {
        try {
            $this->validate(request(), [
                'title' => ['required'],
                'date' => ['required'],
                'content' => ['required'],
                'color' => ['required'],
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $res = $todo->find($data['id']);

        $res->title = $data['title'];
        $res->content = $data['content'];
        $res->starts_at = $data['date'];
        $res->type = 'text';

        $res->author_name = Auth::user()->name;

        $res->author_email = Auth::user()->email;
        $res->color = $data['color'];
        $res->save();

        session()->flash('success', 'Your note has been modified succesfully!');

        return redirect('/');
    }


    public function delete(Todo $todo, $redirectTo, Request $request)
    {
        if ($redirectTo == 'home') {
            $todo->delete();

            return redirect('/');
        } elseif ($redirectTo == 'notes') {
            $todo->delete();
            $todos = DB::table('todos')->get();
            $request->session()->put('todos', $todos);

            return redirect('/notes');
        } else return redirect('/');
    }
}
