<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rank;
use App\Http\Resources\RankResource;
use App\Http\Requests\StoreRankRequest;
use App\Http\Requests\UpdateRankRequest;


class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranks = Rank::all();
        return RankResource::collection($ranks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreRankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRankRequest $request)
    {
        $data = $request->validated();
        $newRank = Rank::create($data);
        return new RankResource($newRank);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rank = Rank::findOrFail($id);
        return new RankResource($rank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateRankRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRankRequest $request, $id)
    {
        $data = $request->validated();
        $rank = Rank::findOrFail($id);
        if ($rank->update($data)) {
            return new RankResource($rank);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rank = Rank::findOrFail($id);
        $rank->delete();
    }
}
