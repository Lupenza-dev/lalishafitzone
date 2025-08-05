<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends ApiResponse
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
            'sub_title' => $this->sub_title,
            'caption' => $this->caption,
            'status' => $this->status,
            'image_url' => $this->getFirstMediaUrl('default'),
            'image_thumb_url' => $this->getFirstMediaUrl('default', 'thumb'),
            'media' => $this->whenLoaded('media', function() {
                return $this->getMedia('default')->map(function($media) {
                    return [
                        'id' => $media->id,
                        'file_name' => $media->file_name,
                        'mime_type' => $media->mime_type,
                        'size' => $media->size,
                        'original_url' => $media->getFullUrl(),
                        'thumb_url' => $media->getFullUrl('thumb'),
                        'responsive_images' => $media->responsive_images
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
