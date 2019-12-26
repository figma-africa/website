@extends('layouts/internal')

@section('content')
    <div class="container">
        <h1>
            Design Challenges
        </h1>
        <div class="row">
            @foreach ($challenges as $challenge)
                <div class='col-sm-4'>
                    <form action='{{route('challenge.delete')}}' class='card p-2 m-2' method='post'>
                        <button onclick="return confirm('sure to delete?');" class='btn btn-danger btn-sm design-challenge-btn delete--btn'>Delete</button>
                        {{$challenge->title}}
                        @csrf
                        <input type='hidden' name='id' value='{{$challenge->id}}'>
                        <br />
                        <small class='text-muted'>Expires: {{$challenge->expiry}}</small>
                        <br />
                        <a href='{{route('challenge.view', ['id' => $challenge->id])}}'>View</a>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection