<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return  [
          'title' => "제목 : " . $this->title,
          'content' => "내용 : " . $this->content,
          'create_at' => $this->created_at->diffForHumans() . " 전에 작성되었다."
      ];
        //return parent::toArray($request);
    }
}
