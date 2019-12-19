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
                <p class="my-4">
                        Figma Africa is a community of web designers and other creatives. 
                        Although we are not the only design community out there but we are fast 
                        becoming the go-to place for designers in Africa, and hopefully 
                        you will also be a part of it too. 
                </p>
                <a href="{{env('SLACK_IV_LINK')}}" class="join-slack-button" target="blank"> <img src="/images/slack_logo.svg" alt="" srcset=""> Join us on Slack</a>
            </section>
        </div>

        <section class="gallery">
            <div class="first-grid">
                <div>
                    <img src="/images/home-image-1.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-2.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-3.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-4.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-5.jpg" alt="Figma africa gallery image" />
                </div>
            </div>
            <div class="second-grid">
                <div>
                    <img src="/images/home-image-6.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-7.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-8.jpg" alt="Figma africa gallery image" />
                </div>
                <div>
                    <img src="/images/home-image-9.jpg" alt="Figma africa gallery image" />
                </div>
            </div>
        </section>

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
        <section class="communities">
            <span>CITIES AND COUNTRIES</span>
            <h2>Our Communities</h2>

            <p>
                    While we position ourselves to be the digital hub for everything design in Africa, 
                    we exist in some cities in several countries across Africa which are 
                    listed below. We also host physical events and activities which brings our members together in their individual cities.
            </p>

            <div class="flags-section">
                <div class="row">
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Ghana.svg" alt=""> Accra, Ghana
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Osun, Nigeria
                    </div>

                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Rwanda.svg" alt=""> Kigali, Rwanda
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Uyo, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Lagos, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Niger, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Kenya.svg" alt=""> Nairobi, Kenya
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Abuja, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Morocco.svg" alt=""> Casablanca, Morocco
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Kwara, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Umuahia, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Enugu, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Benin.svg" alt=""> Cotonou, Benin Republic
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Nigeria.svg" alt=""> Kaduna, Nigeria
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <img src="/images/flags/Congo.svg" alt=""> Kinshasa, Congo
                    </div>
                </div>
            </div>
            <a class="start-figma-group" href="https://docs.google.com/forms/d/e/1FAIpQLSdLQB6pyVBImwLBX-7FqM7GMEIjcIn2JM8u2Vi45wXyEXAzkg/viewform">
                Start a figma group in your city
            </a>
        </section>
        <section class="join-us">
            <div class="join-us">
                <div>
                    <span>Grow your tech ecosystem</span>
                    <h2>Join us in growing the Ecosystem.</h2>
                    <p>
                        <a href="{{env('SLACK_IV_LINK')}}" class="join-slack-button" target="blank"> <img src="/images/slack_logo.svg" alt="" srcset=""> Join us on Slack</a>
                    </p>
                </div>
            </div>
            <div class="image-div">
                <img src="/images/bg.jpg" alt="Figma africa meetup photos" />
            </div>
            <div class="image-div-smaller">
                <img src="/images/footer-image.jpg" alt="Figma africa smiling people" />
            </div>
        </section>
        <footer>
            <ul class="nav nav-pills m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fab fa-twitter"></span> <span>Twitter</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fab fa-dribbble"></span> <span>Dribbble</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fab fa-instagram"></span> <span>Instagram</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fab fa-medium-m"></span> <span>Medium</span></a>
                </li>
            </ul>
        </footer>
    </body>
</html>
