@extends('layouts/app')
    @section('content')
        @include('partials/navbar')
        <div class="container welcome-container">
            <h1 class="welcome-header">
                Become part of our design community.
            </h1>
            <section class="welcome-body">
                <p class="">
                        Figma Africa is a community of web designers and other creatives. 
                        Although we are not the only design community out there but we are fast 
                        becoming the go-to place for designers in Africa, and hopefully 
                        you will also be a part of it too. 
                </p>
                <a href="{{env('SLACK_IV_LINK')}}" class="join-slack-button" target="blank" rel='noopener'> <img src="/images/slack_logo.svg" alt="" srcset=""> Join us on Slack</a>
            </section>
        </div>
        {{-- Image Gallery begins here --}}
        @flexImageGallery
        @endflexImageGallery
        <div class="container">
            <section class="welcome-events-activities">
                <span class="header-span">INSIGHTFUL GATHERINGS</span>
                <h2 class="my-4">Events & activities</h2>
                <p>Our events and activities are designed to enhance learning and understanding of design while bringing together members in the community into a physical or virtual space for them to connect and network.</p>
            </section>

            <section class="event-cards">
                <div class="row">
                    @foreach($events as $event)
                    <a class="event-card col-sm m-3" 
                    @if($event->color != '#000000')
                    style="background-color: {{$event->color}}" 
                    @endif
                    target="blank" rel='noopener' href='{{$event->link}}'>
                        <span class="day">
                            {{$event->date->format('d')}}
                        </span>
                        <span class="month">{{$event->date->englishMonth}} {{$event->date->format('Y')}}</span>
                        
                        <h3>{{$event->title}}</h3>
                        
                        <span class="datetime">
                            {{$event->time}}
                        </span>
                        <span class="datetime">
                            {{$event->state}}, {{$event->country->name}}
                        </span>
                    </a>
                    @endforeach
                </div>
                <div class="text-center more-events">
                    <a href="https://www.meetup.com/figma-africa/" target="blank" rel='noopener' class="small-heading">
                        More Events & Activities
                    </a>
                </div>
            </section>

            @include('partials/moreEvents')
            @include('partials/scaleCareer')

        </div>
        {{-- Our community begins here --}}
        @ourCommunity
        @endourCommunity
        {{-- Our community ends here --}}
        {{-- Eco system begins here --}}
        @ecoSystem
        @endecoSystem
        <!-- Start a conversation section -->
        <section class="start-conversation mt-0 container">
            <div class="row">
                <div class="col container">
                    <h2>Let’s start a conversation</h2>
                    <p>
                        Obviously, people need to hear about design first before being 
                        interested and we are always open to ideas and suggestions on how to 
                        make this work so talk to us. If you have a different conversation in mind 
                        or question, still reach out to us.
                    </p>
                    <a href="mailto:support@figmaafrica.com" target="blank" rel='noopener' class="join-slack-button">Reach out to us &raquo;</a>
                </div>
            </div>
        </section>
        {{-- Ecosystem ends her --}}
        @include('partials/footerBar')

    @endsection
