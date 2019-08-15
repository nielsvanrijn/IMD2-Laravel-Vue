<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Movie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->$id,
            'title' => $this->$title,
            'year' => $this->$year,
            'score' => $this->$score,
            'description' => $this->$description,
            'duration' => $this->$duration,
            'traler_url' => $this->$traler_url,
            'poster_url' => $this->$poster_url
        ];
    }
}
