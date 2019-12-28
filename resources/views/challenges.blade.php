@extends('layouts/app')
@section('content')
        @include('partials/navbar')
        <div class="container welcome">
            <h1 class="welcome-header">Design Challenge</h1>
            <section class="welcome-body">
                <p class="">
                    Figma Africa is a community made up of web designers, web developers, 
                    graphic designers, marketers, illustrators, beginners, 
                    all-stars, and hopefully you will be a part of it 
                    too. It isn’t the only design community out 
                    there but it aims to be the go-to place 
                    for the designers in Africa.
                </p>
            </section>
        </div>
        <div class="container design-challenges">
            @foreach ($allChallenges as $challenge)
                <div class='card shadow'>
                    <div class='row'>
                        <div class="col-sm-4">
                            <div>
                                <img src="{{$challenge->challenge_image_link}}" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-sm-8 pr-3">
                            @if($challenge->expiry_status == true)
                            <span class="expiry-status">Expired</span>
                            @else
                            <span class="expiry-status">Still Ongoing</span>
                            @endif
                            <h2>{{$challenge->title}}</h2>
                            <span class="small heading">Ends: <span>{{$challenge->carbon_expiry->toDayDateTimeString()}}</span></span>
                            <p class="pr-3">
                                {{$challenge->description}}
                            </p>
                            <span class="entry-count">
                                
                                {{$challenge->entries_count}} 
                                @if($challenge->entries_count == 1)
                                Entry
                                @else 
                                Entries
                                @endif
                                submitted
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @include('partials/footerBar')
@endsection