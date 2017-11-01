<?php
/**
 *  @author: Hasan Shahriar
 *  Resize Images proportionaly example
 */

require_once ('class.imageresizer.php');

// Create launch
$items = array(
    array(
        'height'    => 640,
        'width'     => 960,
        'image_name' => 'Default~iphone.png'
    ),
    array(
        'height'    => 640,
        'width'     => 960,
        'image_name' => 'Default@2x~iphone.png'
    ),
    array(
        'height'    => 640,
        'width'     => 1136,
        'image_name' => 'Default-568h@2x~iphone.png'
    ),
    array(
        'height'    => 750,
        'width'     => 1334,
        'image_name' => 'Default-375w-667h@2x~iphone.png'
    ),
    array(
        'height'    => 1242,
        'width'     => 2208,
        'image_name' => 'Default-414w-736h@3x~iphone.png'
    ),
    array(
        'height'    => 2208,
        'width'     => 1242,
        'image_name' => 'Default-Landscape-414w-736h@3x~iphone.png'
    ),
    array(
        'height'    => 768,
        'width'     => 1024,
        'image_name' => 'Default-Portrait~ipad.png'
    ),
    array(
        'height'    => 768,
        'width'     => 1024,
        'image_name' => 'Default-PortraitUpsideDown~ipad.png'
    ),
    array(
        'height'    => 1024,
        'width'     => 768,
        'image_name' => 'Default-Landscape~ipad.png'
    ),
    array(
        'height'    => 1024,
        'width'     => 768,
        'image_name' => 'Default-LandscapeRight~ipad.png'
    ),
    array(
        'height'    => 1536,
        'width'     => 2048,
        'image_name' => 'Default-Portrait@2x~ipad.png'
    ),
    array(
        'height'    => 1536,
        'width'     => 2048,
        'image_name' => 'Default-PortraitUpsideDown@2x~ipad.png'
    ),
    array(
        'height'    => 2048,
        'width'     => 1536,
        'image_name' => 'Default-LandscapeLeft@2x~ipad.png'
    ),
    array(
        'height'    => 2048,
        'width'     => 1536,
        'image_name' => 'Default-LandscapeRight@2x~ipad.png'
    ),
    array(
        'height'    => 2048,
        'width'     => 2732,
        'image_name' => 'Default-Portrait@2x.png'
    ),
    array(
        'height'    => 2732,
        'width'     => 2048,
        'image_name' => 'Default-Landscape@2x.png'
    ),
    array(
        'height'    => 1125,
        'width'     => 2436,
        'image_name' => 'Default-Portrait~iphonex.png'
    ),
    array(
        'height'    => 2436,
        'width'     => 1125,
        'image_name' => 'Default-Landscape~iphonex.png'
    ),
    array(
        'height'    => 1664,
        'width'     => 2224,
        'image_name' => 'Default-Portrait~ipadpro.png'
    ),
    array(
        'height'    => 2224,
        'width'     => 1664,
        'image_name' => 'Default-Landscape~ipadpro.png'
    )
);

foreach($items as $i){
    $img = new ImageResizer($i);
    $img->create();
}