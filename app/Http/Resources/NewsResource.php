<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class NewsResource extends ApiResponse
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
            'caption' => $this->caption,
            'description' => $this->description,
            'status' => $this->status,
            'cover_url' => $this->getFirstMediaUrl('cover'),
            'category' => new NewsCategoryResource($this->whenLoaded('category')),
            'media' => $this->whenLoaded('media', function() {
                return $this->getMedia('default')->map(function($media) {
                    return [
                        'id' => $media->id,
                        'file_name' => $media->file_name,
                        'mime_type' => $media->mime_type,
                        'size' => $media->size,
                        'original_url' => $media->getFullUrl(),
                        'responsive_images' => $media->responsive_images
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
