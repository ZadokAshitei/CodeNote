@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Note
                </h1>


                <div class="clearfix">
                </div>
                <br>

                <!-- ================ Add Note form==================== -->
                <form action="{{route('notes.save', $id)}}" method="post">
                  {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter Note Title Here">
                    </div>
                    <div class="form-group">
                        <textarea name="body" class="form-control" rows="10" placeholder="Enter Note Body Here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </form>
            </div>
@endsection
