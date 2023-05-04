<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Searcher;
use App\Http\Resources\SearcherResource;
use App\Http\Requests\StoreSearcherRequest;
use App\Http\Requests\UpdateSearcherRequest;

class SearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchers = Searcher::all();
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
        $newSearcher = Searcher::create($data);
        return new SearcherResource($newSearcher);
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
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateSearcherRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSearcherRequest  $request, $id)
    {
        $data = $request->validated();
        $searcher = Searcher::findOrFail($id);
        if ($searcher->update($data)) {
            return new SearcherResource($searcher);
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
        $searcher = Searcher::findOrFail($id);
        $searcher->delete();
    }
}
