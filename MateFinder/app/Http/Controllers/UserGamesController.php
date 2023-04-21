<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserGames;
use App\Http\Resources\UserGameResource;
use App\Http\Requests\StoreUserGameRequest;
use App\Http\Requests\UpdateUserGameRequest;

class UserGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usergames = UserGames::all();
        return UserGameResource::collection($usergames);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreUserGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserGameRequest $request)
    {
        $data = $request->validated();
        $newUserGame = UserGames::create($data);
        return new UserGameResource($newUserGame);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usergame = UserGames::findOrFail($id);
        return new UserGameResource($usergame);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateUserGameRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserGameRequest $request, $id)
    {
        $data = $request->validated();
        $usergame = UserGames::findOrFail($id);
        if ($usergame->update($data)) {
            return new UserGameResource($usergame);
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
        $usergame = UserGames::findOrFail($id);
        $usergame->delete();
    }
}
