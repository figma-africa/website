<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Figma Africa Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- CSS files --}}
        <link href="/css/app.css" rel="stylesheet" />
        <script src="/js/app.js"></script>
    </head>
    <body>
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
        {{-- @flexImageGallery
        @endflexImageGallery --}}
        @gridImageGallery
        @endgridImageGallery
        {{-- Image Gallery ends here --}}
        <div class="container">
            <section class="welcome-events-activities">
                <span class="header-span">INSIGHTFUL GATHERINGS</span>
                <h2 class="my-4">Events & activities</h2>
                <p>Our events and activities are designed to enhance learning and understanding of design while bringing together members in the community into a physical or virtual space for them to connect and network.</p>
            </section>

            <section class="event-cards row">
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
            </section>

            @include('partials/moreEvents')
            @include('partials/scaleCareer')

            <section class="more-events">
                <div class="text-center">
                    <span class="small-heading">
                        More Events & Activities
                    </span>
                </div>

                <div class="design-challenges">
                    <div class="row">
                        <div class="col-sm p-0 p-sm-2">
                            <div class="header-xs text-center">
                                <span>CREATIVE COMPETITIONS</span>
                                <h2>
                                    Weekly Design
                                    Challenges
                                </h2>
                                <h3>Design of Physical Products</h3>
                            </div>
                            <div class="challenge-image">
                                <img src="/images/design-challenge.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="header-sm-up">
                                <span>CREATIVE COMPETITIONS</span>
                                <h2>
                                    Weekly Design
                                    Challenges
                                </h2>
                                <h3>Design of Physical Products</h3>
                            </div>
                                <p>
                                        Our design challenge is held on a weekly basis and it is designed to enable people explore design concepts in a manner which pushes our creativity, challenges our exposure while offering competition in a positive approach.
                                        <br />&nbsp; <br />
                                        Submissions are voted and the winning entry gets a prize as well as promotion on all of our platforms. 
                                </p>
                                <a href="#">View all entries &raquo;</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="benefits">
                <div class="row">
                    <div class="col-lg">
                        <span>Values and benefits</span>
                        
                        <h2>Scale your career</h2>
                        
                        <div class="text-for-sm">
                            <p>Our mission is to make design accessible to everyone — by 
                                creating pathways for anyone to become a designer or participate in the design 
                                process collaboratively.
                            </p>
                            
                            <ul>
                                <li>
                                    We offer a free, self-paced design learning program that comes with a well curated curriculum and weekly activities.
                                </li>
                                <li>
                                    Become a digital hub for designers everything related to design in Africa as we will continue to help designers scale their careers.
                                </li>
                                <li>
                                    Boost the African design ecosystem by connecting companies to designers and vice versa.
                                </li>
                            </ul>
                            <button class="btn btn-link">Get Started &raquo;</button>
                        </div>

                    </div>

                    <div class="col-lg d-sm-none d-lg-block">
                        <div class="image-div">
                            <img src="/images/figma-africa-class.jpg" alt="">
                        </div>

                        <div class="text-for-xs">
                            <p>Our mission is to make design accessible to everyone — by 
                                creating pathways for anyone to become a designer or participate in the design 
                                process collaboratively.
                            </p>
                            
                            <ul>
                                <li>
                                    We offer a free, self-paced design learning program that comes with a well curated curriculum and weekly activities.
                                </li>
                                <li>
                                    Become a digital hub for designers everything related to design in Africa as we will continue to help designers scale their careers.
                                </li>
                                <li>
                                    Boost the African design ecosystem by connecting companies to designers and vice versa.
                                </li>
                            </ul>
                            <button class="btn btn-link">Get Started &raquo;</button>
                        </div>
                    </div>
                        
                    </div>
            </section>

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
    </body>
</html>
