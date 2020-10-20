<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'icon' => $this->icon,
            'title' => $this->title,
            'desc' => $this->desc,
            'status' => $this->status
        ];
    }
}
