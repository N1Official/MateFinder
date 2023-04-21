<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserGameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this ->id,
            "user_id" => $this ->id,
            "game_id" => $this -> game_id,
            "goal_id" => $this -> goal_id,
            "rank_id" => $this ->rank_id,
            "level" => $this -> level,
        ];
    }
}
