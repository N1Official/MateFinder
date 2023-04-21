<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GameRank;
use App\Http\Resources\GameRankResource;
use App\Http\Requests\StoreGameRankRequest;
use App\Http\Requests\UpdateGameRankRequest;

class GameRankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gameranks = GameRank::all();
        return GameRankResource::collection($gameranks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreGameRankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRankRequest $request)
    {
        $data = $request->validated();
        $newGameRank = GameRank::create($data);
        return new GameRankyResource($newGameRank);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gamerank = GameRank::findOrFail($id);
        return new GameRankResource($gamerank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param App\Http\Requests\UpdateGameRankRequest;  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRankRequest $request, $id)
    {
        $data = $request->validated();
        $gamerank = GameRank::findOrFail($id);
        if ($gamerank->update($data)) {
            return new GameRankResource($gamerank);
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
        $gamerank = GameRank::findOrFail($id);
        $gamerank->delete();
    }
}
