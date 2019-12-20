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
                <a href="{{env('SLACK_IV_LINK')}}" class="join-slack-button" target="blank"> <img src="/images/slack_logo.svg" alt="" srcset=""> Join us on Slack</a>
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
                    @for($i = 0; $i < 4; $i++)
                    <a class="event-card col-sm m-3">
                        <span class="day">
                            14
                        </span>
                        <span class="month">December</span>
                        
                        <h3>Figma Africa Abuja (Design Workshop)</h3>
                        
                        <span class="datetime">
                            10:00 AM - 01:00 PM
                        </span>
                        <span class="datetime">
                            Abuja, Nigeria
                        </span>
                    </a>
                    @endfor
                </div>
                <div class="text-center more-events">
                    <a href="https://www.meetup.com/figma-africa/" class="small-heading">
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
        {{-- Ecosystem ends her --}}
        @include('partials/footerBar')
    @endsection
