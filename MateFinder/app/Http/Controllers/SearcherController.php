<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Searcher;
use App\Http\Resources\SearcherResource;
use App\Http\Requests\StoreSearcherRequest;
use App\Http\Requests\UpdateSearcherRequest;
use Illuminate\Support\Facades\Auth;

class SearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*$request*/)
    {
        //$username = Searcher::firstWhere('username',Auth::user()->username);
        $searchers = Searcher::all();//->where('game_id',$username->game_id)->where('goal',$username->goal)->where('server',$username->server);
        return SearcherResource::collection($searchers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreSearcherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSearcherRequest $request)
    {
        $data = $request->validated();
        $username = Searcher::firstWhere('username',$data['username']);
        if (!$username) {
            $searcher = Searcher::create(
                $data
             );
        }
        else{
            $searcher = $username->update(
                $data
            );
        }

        return new SearcherResource($searcher);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $searcher = Searcher::findOrFail($id);
        return new SearcherResource($searcher);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $searcher = Searcher::findOrFail($id);
        $searcher->delete();
    }
}
