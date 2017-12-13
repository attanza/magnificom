<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\Resource;

class UserR extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['role'] = $this->getRole();
        $data['gamePoint'] = $this->getPoint($this);
        return $data;
    }

    private function getPoint($user)
    {
        if ($user->gamePoint) {
            return $user->gamePoint->point;
        } else {
            return 0;
        }
    }
}
