@extends('layouts/app')
@section('content')
        @include('partials/navbar')
        <div class="container welcome-container">
            <h1 class="welcome-header">The Team empowering designers in Africa</h1>
            <section class="welcome-body">
                <p class="">
                The best way to grow from not knowing how to design, growing your craft as a new designer, 
                and becoming an expert that is continually looking to improve is through learning from each 
                other.  The more people get out of the community, the more they are also willing to give back, 
                and contribute to the community.</p>
                <a href="{{env('SLACK_IV_LINK')}}" class="join-slack-button" target="blank"> <img src="/images/slack_logo.svg" alt="" srcset=""> Join us on Slack</a>
            </section>
        </div>
        {{-- Image Gallery begins here --}}
        @flexImageGallery
        @endflexImageGallery
        {{-- Image Gallery ends here --}}
        <div class="container">
            <div class="container-ambassadors">
                @include('partials/amboDetails')
                <div class="figma-leaders">
                    <p class="gatherings">CITIES & COUNTRIES</p>
                    <h2>Figma Africa community leaders</h2>
                    <p>See our communities and know which to join</p>
                </div>
                {{-- Community leaders begins here --}}
                @communityLeaders(['location'=> 'Nigeria', 'numOfAmbo'=> '14 Ambassadors'])
                @endcommunityLeaders
                @communityLeaders(['location'=> 'Ghana', 'numOfAmbo'=> '14 Ambassadors'])
                @endcommunityLeaders
                @communityLeaders(['location'=> 'Morocco', 'numOfAmbo'=> '14 Ambassadors'])
                @endcommunityLeaders
                @communityLeaders(['location'=> 'Rwanda', 'numOfAmbo'=> '14 Ambassadors'])
                @endcommunityLeaders
                {{-- Community leaders ends here --}}
            </div>
        </div>
        {{-- Our community begins here --}}
        @ourCommunity
        @endourCommunity
        {{-- Our community ends here --}}
        {{-- Eco system begins here --}}
        @ecoSystem
        @endecoSystem
        {{-- Ecosystem ends her --}}
        @include('partials/footerBar')
@endsection