<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $event;

    /**
     * The constructor oo
     * 
     * @param EventRepository $event The event repo
     * 
     * @return void
     */
    public function __construct(EventRepository $event)
    {
        $this->event = $event;
        parent::__construct($event);
        $this->rules = [
            "title" => 'required',
            "time" => 'required',
            'date' => 'required'
        ];
    }

    public function index()
    {
        $events = $this->event->all();
        $data = compact('events');
        return view('admin/events', $data);
    }

}
