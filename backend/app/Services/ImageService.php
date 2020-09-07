<?php

/*
 * Adicione essa configuraÃ§Ã£o na pasta /config/filesystems.php
 *
 * Obs: essa configuraÃ§Ã£o Ã© opcional caso queria salvar nas pasta /public
 *
 *
 * 'public_uploads' => [
        'driver' => 'local',
        'root'   => public_path() . '/uploads',
        'url' => env('APP_URL').'/uploads',
        'visibility' => 'public',
    ],
*/

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ImageService
{
    private $imageFields;
    private $folderDestination;
    private $storageDisk;
    private $newWidth;
    private $path;

    public function __construct($imageFields, $folderDestination = 'photos', $storageDisk = 'public', int $newWidth = 500)
    {
        $this->imageFields = $imageFields;
        $this->folderDestination = $folderDestination;
        $this->storageDisk = $storageDisk;
        $this->newWidth = $newWidth;
    }

    public function resizeImage($image_to_resize)
    {
        $width = Image::make($image_to_resize)->width();

        if ($width > $this->newWidth) {

            $resized_image = Image::make($image_to_resize)->resize($this->newWidth, null, function($constraint) {
                $constraint->aspectRatio();
            })->stream('jpg', 75);

        } else {

            $resized_image = Image::make($image_to_resize)->stream('jpg', 75);
        }

        return $resized_image;
    }

    public function saveImage($image)
    {
        $resized_image = $this->resizeImage($image);

        $filename = Str::random(12) . '.jpg';

        Storage::disk($this->storageDisk)->put($this->folderDestination.'/'.$filename, $resized_image, 'public');

        return $this->folderDestination.'/'.$filename;
    }

    public function updateImage($old_image, $new_image)
    {
        if (Storage::disk($this->storageDisk)->exists($old_image))
        {
            Storage::disk($this->storageDisk)->delete($old_image);
        }

        return $this->saveImage($new_image);
    }

    public function saveImageBase64($base64String)
    {
        $resized_image = $this->resizeImage(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String)));

        $filename = Str::random(12) . '.jpg';

        Storage::disk($this->storageDisk)->put($this->folderDestination.'/'.$filename, $resized_image, 'public');

        return $this->folderDestination.'/'.$filename;
    }

}