<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
                'id' => $this->lang,
                'code' => $this->language->code,
                'name' => $this->language->name
            ],
            'image' => $this->image,
            'title' => $this->title,
            'url' => $this->url,
            'status' => $this->status
        ];
    }
}
