@extends('layouts/internal')

@section('content')
    <div class="container">
        <h1>
            Events
        </h1>
        <div class="row">
            @foreach ($events as $event)
                <div class='col-sm-4'>
                    <form action='{{route('event.delete')}}' class='card p-2 m-2' method='post'>
                        <button onclick="return confirm('sure to delete?');" class='btn btn-danger btn-sm design-challenge-btn delete--btn'>Delete</button>
                        {{$event->title}}
                        @csrf
                        <input type='hidden' name='id' value='{{$event->id}}'>
                        <br />
                        <small class='text-muted'>Date: {{$event->date}}</small>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection