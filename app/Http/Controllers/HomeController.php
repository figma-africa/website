<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventRepository;
use App\Repositories\CountryRepository;

class HomeController extends Controller
{

    public $events;
    public $countries;

    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct(
        EventRepository $events,
        CountryRepository $countries
    )
    {
        $this->events = $events;
        $this->countries = $countries;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = $this->events->all();
        $countries = $this->countries->all();
        $data = compact('events', 'countries');
        return view('admin.home', $data);
    }
}
