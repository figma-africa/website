<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventRepository;
use App\Repositories\ChallengeRepository;
use Carbon\Carbon;
use App\Models\Ambassador;

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
            ->all()->take(4)->map(
                function ($current, $key) {
                    $current->date = new Carbon($current->date);
                    return $current;
                }
            );
        $designChallenge = $this->_challenge->getLatest();
        $data = compact('events', 'designChallenge');
        return view('welcome', $data);
    }

    /**
     * View for the design challenges
     *
     * @return \Illuminate\View
     */
    public function challenges()
    {
        $allChallenges = $this->_challenge->sortBy('expiry', 'desc')
            ->withCount('entries')->all();
        $data = compact('allChallenges');
        return view('challenges', $data);
    }

    public function ambassadors()
    {
        $ambassadors = Ambassador::get();
        $final = [];
        foreach ($ambassadors as $ambassador) {
            if (isset($final[$ambassador->country])) {
                array_push($final[$ambassador->country], $ambassador);
            } else {
                $final[$ambassador->country] = [$ambassador];
            }
        }
        return view('ambassadors', ['ambassadorObject' => $final]);
    }
}
