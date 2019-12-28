<section class="more-events">
    <div class="design-challenges container">
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
                    <img src="{{$designChallenge->challenge_image_link}}" alt="">
                </div>
            </div>
            <div class="col-sm">
                <div class="header-sm-up">
                    <span>CREATIVE COMPETITIONS</span>
                    <h2>
                        Weekly Design
                        Challenges
                    </h2>
                    
                    <h3>{{$designChallenge->title}}</h3>
                </div>
                    <p>
                    @if(strlen($designChallenge->description) > 10)
                            {!!$designChallenge->description!!}
                    @else
                    Our design challenge is held on a weekly basis and it is designed to enable people explore design concepts in a manner which pushes our creativity, challenges our exposure while offering competition in a positive approach.
                            <br />&nbsp; <br />
                            Submissions are voted and the winning entry gets a prize as well as promotion on all of our platforms. 
                            @endif
                    </p>
                    <a href="{{route('challenges')}}" class="view-entries" >View all entries &raquo;</a>
            </div>
        </div>
    </div>
</section>