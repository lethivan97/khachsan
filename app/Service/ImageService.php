<?php

namespace App\Service;

use App\Models\Image;
use App\Models\ImageTypeRoom;

class ImageService
{
    protected $image;
    protected $imageTypeRoom;

    public function __construct(Image $image,ImageTypeRoom $imageTypeRoom )
    {
        $this->image = $image;
        $this->imageTypeRoom = $imageTypeRoom;
    }

    public function create($imageInput)
    {
        return $this->image->create([
            'url' => $imageInput
        ]);
    }

    public function getImages()
    {
        return $this->image->all();
    }

    public function delete($id)
    {
        return $this->image->find($id)->delete();
    }

    public function saveImageTypeRoom($idTypeRoom, $images)
    {
        $this->imageTypeRoom->whereTypeRoomId($idTypeRoom)->delete();
        $images = explode(',',$images);
        foreach ($images as $image)
        {
            $image = $this->image->whereUrl($image)->first();
            $this->imageTypeRoom->create([
               'type_room_id' => $idTypeRoom,
               'image_id' => $image->id
            ]);
        }
    }
}
