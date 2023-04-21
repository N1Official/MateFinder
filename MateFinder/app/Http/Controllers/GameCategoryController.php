<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameCategory;
use App\Http\Resources\GameCategoryResource;
use App\Http\Requests\StoreGameCategoryRequest;
use App\Http\Requests\UpdateGameCategoryRequest;

class GameCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamecategorys = GameCategory::all();
        return GameCategoryResource::collection($gamecategorys);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreGameCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameCategoryRequest $request)
    {
        $data = $request->validated();
        $newGameCategory = GameCategory::create($data);
        return new GameCategoryResource($newGameCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gamecategory = GameCategory::findOrFail($id);
        return new GameCategoryResource($gamecategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateGameCategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameCategoryRequest $request, $id)
    {
        $data = $request->validated();
        $gamecategory = GameCategory::findOrFail($id);
        if ($category->update($data)) {
            return new GameCategoryResource($gamecategory);
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
        $gamecategory = GameCategory::findOrFail($id);
        $gamecategory->delete();
    }
}
