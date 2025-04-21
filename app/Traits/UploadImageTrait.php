<?php
namespace App\Traits;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait UploadImageTrait
{
    public function uploadImage($image,$oldImage)
    {
        unlink($image);
        $thumbnailPath = $this->model::UPLOAD_DIRECTORY;
        $path = $image->store($thumbnailPath);;
        return $path;
    }
}
