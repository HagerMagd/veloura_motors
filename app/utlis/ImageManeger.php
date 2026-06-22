<?php
namespace App\utlis;
use Illuminate\Support\Str;
class ImageManeger{

public static function uploadImages($request,$sellcar=null){
    if ($request->hasFile('images')) {
                foreach ($request->images as $image) {
                    $image_name = self::generateImageName($image);
                    $path=self::storeImageInLocal($image,'sellcars',$image_name);

                      $sellcar->sellImages()->create([
                        'sell_request_id' => $sellcar->id,
                        'image_path' => $path,
                    ]);
                }
            }

}

public static function generateImageName($image){
      $image_name = Str::uuid() . time() . '.' . $image->getClientoriginalExtension();
      return $image_name;

}
public static function storeImageInLocal($image,$path,$image_name){
    return $path = $image->storeAs('uploads/'.$path, $image_name, ['disk' => 'uploads']);
    


}

}