<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ChallengeRepository;
use App\Repositories\EntryRepository;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ChallengeController extends Controller
{
    protected $challenges;
    protected $entry;

    /**
     * Initialize the Controller
     * 
     * @param App\Repositories\Interfaces\RepositoryInterface $challenges implicit
     * 
     * @return void
     */
    public function __construct(
        ChallengeRepository $challenges,
        EntryRepository $entry
    )
    {
        $this->challenges = $challenges;
        $this->entry = $entry;
        parent::__construct($challenges);
    }

    /**
     * The index controller
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $challenges = $this->challenges->all();
        $data = compact('challenges');
        return view('admin.challenges', $data);
    }

    public function entries($id)
    {
        $challenge = $this->challenges->with('entries')->fetch($id);
        $data = compact('challenge');
        return view('admin.challenge_entries', $data);
    }

    public function addEntry(Request $request)
    {
        try {

            $add = $this->entry->create($request->all());
            if ($add) {
                return back()->with('success', 'Created Successfully!');
            } else {
                return back()->with('error', 'Could not be created !');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Could not be created !');
        }
    }

}
