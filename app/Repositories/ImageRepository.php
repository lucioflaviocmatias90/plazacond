<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ImageRepository
{
    private $imageName;
    private $imageField;
    private $folderDestination;
    private $storageDisk;
    private $newWidth;

    public function __construct($imageField, $folderDestination, $storageDisk = 'public', $newWidth = 500)
    {
        $this->imageName = str_random(10) . '.png';
        $this->imageField = $imageField;
        $this->folderDestination = $folderDestination;
        $this->storageDisk = $storageDisk;
        $this->newWidth = $newWidth;
    }

    public function uploadImage($request)
    {
        if ($request->hasFile($this->imageField)) {
            $this->resizeImage($request->file($this->imageField));
        }

        if (!is_null($request->input($this->imageField))) {
            $base64String = $request->input($this->imageField);
            $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String));
            $this->resizeImage($image);
        }

        switch ($this->storageDisk) {
            case 'public_uploads':
                return '/uploads/'.$this->folderDestination.'/'.$this->imageName;
                break;

            case 'public':
                return '/storage/'.$this->folderDestination.'/'.$this->imageName;
                break;
        }
    }

    public function resizeImage($image_to_resize)
    {
    	$image = Image::make($image_to_resize);

    	if ($image->width() > $this->newWidth) {    		
    		$image->resize($this->newWidth, null, function($constraint) {
	            $constraint->aspectRatio();
	        })->stream('png', 100);
    	} 

        Storage::disk($this->storageDisk)->put($folderDestination.'/'.$this->imageName, $resized_image);
    }

    public function verifyImageInStorage($fileName)
    {
        if (!is_null($fileName)) {
            switch ($this->storageDisk) {
                case 'public_uploads':
                    Storage::disk($this->storageDisk)->delete(str_replace('/uploads/', '', $fileName));
                    break;

                case 'public':
                    Storage::disk($this->storageDisk)->delete(str_replace('/storage/', '', $fileName));
                    break;
            }
        }
    }

    public function cropImage($image, $width, $heigth, $x = 0, $y = 0)
    {
    	Image::make($image)->crop($width, $heigth, $x, $y);
    }
}