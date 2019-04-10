<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NoteBook;
use DB;

class NotebooksController extends Controller
{
    public function showAddNotebookForm()
    {
        return view('notebooks.add-notebook');
    }

    public function addNotebook(Request $request)
    {
        $title = $request->title;
        NoteBook::create(['title'=>$title]);
        return redirect()->route('notebooks');
    }

    public function showNotebooks()
    {
        $notebooks = NoteBook::all();
        return view('notebooks.notebooks', compact('notebooks'));  //compact() send data to the view so that we can access it there
    }

    public function destroy($id)
    {
        Notebook::destroy($id);
        return redirect()->route('notebooks');
    }

    public function showEditForm($id)
    {
        $notebook = Notebook::find($id);
        return view('notebooks.updateNotebook', compact('id', 'notebook'));
    }

    public function update(Request $request, $id)
    {
        $title = $request->title;
        $notebook = NoteBook::find($id);
        $notebook->update(['title'=>$title]);
        return redirect()->route('notebooks');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $notebooks = DB::table('notebooks')->where('title', 'LIKE', '%'.$search.'%')->get();
        return view('notebooks.searchNotebooks', compact('notebooks'));
        // return $title;
        // if ($title->count()>0)
        // {
        //     return "Found";
        // }
        // else
        // {
        //     return "Not found";
        // }
    }
}
