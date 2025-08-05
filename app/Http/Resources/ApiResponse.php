<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiResponse extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string|null
     */
    public static $wrap = 'data';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    /**
     * Customize the outgoing response for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function withResponse($request, $response)
    {
        $original = $response->getOriginalContent();
        
        $response->setData([
            'success' => true,
            'data' => $original['data'] ?? $original,
            'meta' => $original['meta'] ?? null,
            'message' => $original['message'] ?? 'Request was successful',
            'timestamp' => now()->toDateTimeString()
        ]);
    }
}
