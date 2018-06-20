<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\In;

class TodoController extends Controller
{
    public function index(Request $request)
    {

        $items = Auth::user()->items;


        return view('todo.index', [
            'items' => $items
        ]);


    }

    public function currentTasks()
    {
        $items = Auth::user()->items;

        return view('todo.current_tasks', [
            'items' => $items
        ]);


    }

    public function doneTasks()
    {
        $items = Auth::user()->items;

        return view('todo.done_tasks', [
            'items' => $items
        ]);


    }

    public function postIndex()
    {
        $id = Input::get('item_id');
        $item = Item::findOrFail($id);

        $userId = Auth::user()->id;
        if ($item->user_id == $userId)
        {
            $item->mark();
        }

        //return Redirect::route('todo');
        return back();
    }

    public function getNew()
    {
        return view('todo.layouts.new');
    }

    public function postNew(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required|min:5|max:200',
        ]);

        $item = new Item();
        $item->name = Input::get('name');
        $item->user_id = Auth::user()->id;
        $item->done = '0';
        $item->save();

        return Redirect::route('todo');

    }

    public function getDelete(Item $item)
    {
        if ($item->user_id == Auth::user()->id)
        {
            $item->delete();
        }

        return Redirect::route('todo');
    }
}
