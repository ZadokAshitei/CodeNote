@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Update Notebook
                </h1>


                <div class="clearfix">
                </div>
                <br>

                <!-- ================ Add Notebook form==================== -->
                <form action="{{route('notebooks.update', $id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter Notebook Title Here" value="{{$notebook->title}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Notebook</button>
                </form>
            </div>
@endsection
