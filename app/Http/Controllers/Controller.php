<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $repo;
    protected $rules = [];

    public function __construct($repo = null)
    {
        $this->repo = $repo;        
    }

    /**
     * The create method for design challenges
     * 
     * @param Request $request the request object
     * 
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(Request $request)
    {

        if (!empty($this->rules)) {
            $request->validate($this->rules);
        }

        $data = $request->all();
        unset($data['_token']);
        
        try{

            $create = $this->repo->create($data);
            if ($create) {
                return back()->with('success', 'Created successfully!');
            }
        } catch (\Exception $e) {
            return back()->with(
                'danger',
                "Could not be created.".$e->getMessage()
            );
        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        try {
            $delete = $this->repo->delete($id);

            if ($delete) {
                return back()->with('success', 'Deleted successfully!');
            } else {
                return back()->with('danger', 'Could not be deleted!');
            }
        } catch(Exception $e) {
            \Log::error($e->getMessage());
            return back()->with('danger', 'Could not be deleted!');
        }

    }
}
