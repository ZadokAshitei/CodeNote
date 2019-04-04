@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Notebook
                </h1>


                <div class="clearfix">
                </div>
                <br>

                <!-- ================ Add Notebook form==================== -->
                <form action="{{route('notebooks.save')}}" method="post">
                    <div class="form-group">
                      {{ csrf_field() }}
                        <input type="text" class="form-control" name="title" placeholder="Enter Notebook Title Here">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Notebook</button>
                </form>
            </div>
@endsection          
