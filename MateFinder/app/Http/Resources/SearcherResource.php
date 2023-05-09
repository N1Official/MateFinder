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
            "avatar" => $this->avatar,
            "game_id" => $this->game_id,
            "goal" => $this->goal,
            "server" => $this->server,
            "gender" => $this->gender,
            "last_online" => $this->last_online,
        ];
    }
}
