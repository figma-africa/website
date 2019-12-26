@extends('layouts/internal')

@section('content')
    <div class="container">
        {{session('message')}}
        <h1>
            Dashboard
        </h1>
        <div class="row">

            <div class="col-md-6">
                <form method="post" action="{{route('event.create')}}" class="card p-3 ">
                    <h4>Create Event</h4>
                    @csrf
                    <label for="name">Event Name</label>
                    <input type="text" name="title" placeholder="Event Name" class="form-control mb-3" id="">

                    <label for="name">Event time</label>
                    <input type="text" name="time" placeholder="Event Time eg 1:00 am - 2:00 am" class="form-control mb-3" id="">

                    <label>Event Date</label>
                    <input type='date' name='date' class='form-control mb-3' />

                    <label>Event Link</label>
                    <input type='text' name='link' class='form-control mb-3' />

                    <label for="name">State</label>
                    <input type="text" name="state" placeholder="State eg. Lagos" class="form-control mb-3">

                    <label for="name">Country</label>
                    <select name="country_id" id="" class="form-control">
                        @foreach($countries as $country)
                        <option value='{{$country->id}}'>{{$country->name}}</option>
                        @endforeach
                    </select>

                    <label for="color">Event Color</label>
                    <input type="color" name="color" id="color" class="form-control mb-3">
                    <button class="btn btn-info">Create Event</button>
                </form>
            </div>
            <div class="col-md-6">
                <form method="post" class="card p-3" action="{{route('challenges.create')}}">
                    @csrf
                    <h4>Create Design Challenge (current:)</h4>
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control mb-3" placeholder='Name of Challenge eg: "design of physical objects"' id="">

                    <label for="link">Challenge link</label>
                    <input type='text' name='link' class='form-control mb-3' placeholder='Link eg: https://dribble.com/namnsoukpanah' />

                    <label>Expiry</label>
                    <input type='date' name='expiry' class='form-control mb-3' />

                    <button class='btn btn-info'>Create Design Challenge</button>
                </form>
            </div>
        </div>
    </div>
@endsection