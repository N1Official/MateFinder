<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use App\Http\Resources\GenderResource;
use App\Http\Requests\StoreGenderRequest;
use App\Http\Requests\UpdateGenderRequest;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Genders = Gender::all();
        return GenderResource::collection($Genders);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreGenderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenderRequest  $request)
    {
        $data = $request->validated();
        $newGender = Gender::create($data);
        return new GenderResource($newGender);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Gender = Gender::findOrFail($id);
        return new GenderResource($Gender);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateGenderRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenderRequest $request, $id)
    {
        $data = $request->validated();
        $Gender = Gender::findOrFail($id);
        if ($Gender->update($data)) {
            return new GenderResource($Gender);
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
        $Gender = Gender::findOrFail($id);
        $Gender->delete();
    }
}
