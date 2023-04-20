<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Goal;
use App\Http\Resources\GoalResource;
use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::all();
        return GoalResource::collection($goals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreGoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoalRequest $request)
    {
        $data = $request->validated();
        $newGoal = Goal::create($data);
        return new GoalResource($newGoal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goal = Goal::findOrFail($id);
        return new GoalResource($goal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateGoalRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoalRequest $request, $id)
    {
        $data = $request->validated();
        $goal = Goal::findOrFail($id);
        if ($goal->update($data)) {
            return new GoalResource($goal);
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
        $goal = Goal::findOrFail($id);
        $goal->delete();
    }
}
