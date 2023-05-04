<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SearcherResource extends JsonResource
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
            "id" => $this->id,
            "username" => $this->username,
            "profilelink" => $this->profilelink,
            "game_id" => $this->game_id,
            "goal_id" => $this->goal_id,
            "server_id" => $this->server_id,
            "gender_id" => $this->gender_id,
            "last_online" => $this->last_online,
        ];
    }
}
