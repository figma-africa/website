<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventRepository;
use App\Repositories\ChallengeRepository;
use Carbon\Carbon;

class ExternalPagesController extends Controller
{
    private $_events;
    private $_challenge;

    /**
     * Constructor
     * 
     * @param \App\Repositories\EventRepository     $events              Event repo
     * @param \App\Repositories\ChallengeRepository $challengeRepository Challenge Repo
     * 
     * @return void
     */
    public function __construct(
        EventRepository $events,
        ChallengeRepository $challengeRepository
    )
    {
        $this->_events = $events;
        $this->_challenge = $challengeRepository;
    }

    /**
     * Index controller for homepage
     * 
     * @return \Illuminate\View
     */
    public function index()
    {
        $events = $this->_events->with('country')->sortBy('created_at', 'desc')
            ->take(4)->map(
                function ($current, $key) {
                    $current->date = new Carbon($current->date);
                    return $current;
                }
            );
        
        $designChallenge = $this->_challenge->getLatest();
        $data = compact('events', 'designChallenge');
        return view('welcome', $data);
    }
}
