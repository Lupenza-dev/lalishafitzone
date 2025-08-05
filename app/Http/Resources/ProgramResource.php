<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class ProgramResource extends ApiResponse
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
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'price' => $this->price,
            'duration' => $this->duration,
            'status' => $this->status,
            'featured' => $this->featured,
            'cover_url' => $this->getFirstMediaUrl('cover'),
            'category' => new CategoryResource($this->whenLoaded('category')),
            'pictures' => $this->whenLoaded('pictures', function() {
                return $this->pictures->map(function($picture) {
                    return [
                        'id' => $picture->id,
                        'image_url' => $picture->getFirstMediaUrl('default'),
                        'thumb_url' => $picture->getFirstMediaUrl('default', 'thumb'),
                        'order' => $picture->order,
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
