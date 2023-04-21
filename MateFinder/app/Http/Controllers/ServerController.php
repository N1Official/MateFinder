<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;
use App\Http\Resources\ServerResource;
use App\Http\Requests\StoreServerRequest;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servers = Server::all();
        return ServerResource::collection($servers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreServerRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServerRequest $request)
    {
        $data = $request->validated();
        $newServer = Server::create($data);
        return new ServerResource($newServer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $server = Server::findOrFail($id);
        return new ServerResource($server);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
