<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use App\Note;

class NotesController extends Controller
{
    public function showNotes($id)
    {
      $notebook = Notebook::find($id);
      $notes = $notebook->notes;
      return view('notes/notes', compact('notes','id'));
    }

    public function showAddForm($id)
    {
      return view('notes/add-note', compact('id'));
    }

    public function saveNote(Request $request,$id)
    {
      $title = $request->title;
      $body = $request->body;

      $notebook = Notebook::find($id);
      $notebook->notes()->create(['title'=>$title, 'body'=>$body]);
      return redirect()->route('notes',$id);
    }

    public function destroy($note_id,$notebook_id)
    {
      Note::destroy($note_id);
      return redirect()->route('notes', $notebook_id);
    }

    public function showEditForm($note_id,$notebook_id)
    {
      $note = Note::find($note_id);
      return view('notes/edit-note', compact('note','notebook_id'));
    }

    public function updateNote(Request $request, $note_id, $notebook_id)
    {
      $title = $request->title;
      $body = $request->body;

      $note = Note::find($note_id);
      $note->update(['title'=>$title, 'body'=>$body]);
      return redirect()->route('notes', $notebook_id);
    }

    public function showDetails($id)
    {
      $note = Note::find($id);
      return view('notes/notes-details', compact('note'));
    }
}
