<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TitleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'lang' => [
                'id' => $this->language->id,
                'code' => $this->language->code,
                'name' => $this->language->name
            ],
            'block' => $this->block,
            'title' => $this->title,
            'desc' => $this->desc,
            'status' => $this->status
        ];
    }
}
