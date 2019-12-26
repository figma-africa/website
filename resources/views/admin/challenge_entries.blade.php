@extends('layouts/internal')

@section('content')
    <div class="container">
        <h1>
            Submissions 
        </h1>
        <p>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#challengeModal">
                Add Entry
            </button>
            Submissions to "{{$challenge->title}}"
        </p>
        <div class="row">
            @foreach ($challenge->entries as $entry)
                <div class='col-sm-4'>
                    <form action='{{route('event.delete')}}' class='card p-2 m-2' method='post'>
                        <button onclick="return confirm('sure to delete?');" class='btn btn-danger btn-sm design-challenge-btn delete--btn'>Delete</button>
                        {{$entry->name}}
                        @csrf
                        <input type='hidden' name='id' value='{{$entry->id}}'>
                        <br />
                        <small class='text-muted'>by: {{$entry->email}}</small>
                        <iframe style="border: none;" src="https://www.figma.com/embed?embed_host=astra&url={{$entry->link}}" allowfullscreen></iframe>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="challengeModal" tabindex="-1" role="dialog" aria-labelledby="challengeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="challengeModalLabel">Add Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('entry.add')}}" method="post">
                    @csrf
                    <input type='hidden' name='design_challenge_id' value='{{$challenge->id}}'>
                    <label>Submitted By</label>
                    <input type='text' class="form-control mb-3" name="name" placeholder="eg: Friday Godswill" />

                    <label>Email</label>
                    <input type='email' name='email' class="form-control mb-3" placeholder='eg: namnam@gmail.com' >
                    
                    <label>Link</label>
                    <input type='text' name='link' class="form-control mb-3" placeholder='eg: figma.com/blah?node=ksdjhskdhksdj' >

                    <button type="submit" class="btn btn-block btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection