<?php
require './vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager();

$image = $manager->make('images/asd.jpg')->resize(null, 400, function ($image) {
    $image->aspectRatio();
});

$image->text("dacidon", $image->width()/2, $image->height()/2, function($font) {
    $font->file('font/Roboto/Roboto-Bold.ttf');
    $font->size(72);
    $font->align('center');
    $font->valign('top');
});

$image->save('images/result.jpg', 80);
echo 'done!';