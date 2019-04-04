@extends ('layouts.master')

@section('main')
        <!-- Main component for call to action -->
        <div class="jumbotron">
            <h1>{{$note->title}}</h1>
            <p>
                {{$note->body}}
            </p>
        </div>
    </div>
@endsection
