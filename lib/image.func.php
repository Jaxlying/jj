<?php
/**
 * Created by PhpStorm.
 * User: Jaxlying
 * Date: 2016/8/28
 * Time: 13:02
 */
function veryimage($type = 1, $length = 4, $width = 80, $height = 20,$pixcel = true){
    $image = imagecreatetruecolor($width, $height);
    $white = imagecolorallocate($image, 255, 255, 255);//画布
    $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));//画笔
    imagefilledrectangle($image, 1, 1, $width - 2, $height - 2, $white);
    $str = buildRandomString($type, $length);
    $_SESSION['verify'] = $str;
    for ($i = 0; $i < $length; $i++) {
        $size = mt_rand(14, 18);
        $angle = mt_rand(-15, 15);
        $x = 5 + $i * $size;
        $y = mt_rand(14, 18);
        $fonts = array('simkai.ttf','FZLTCXHJW.TTF','simfang.ttf','simhei.ttf','simsun.ttc');
        $fontfile = '../public/fonts/' . $fonts[mt_rand(0, count($fonts) - 1)];
        $text = substr($str, $i, 1);
        $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
        imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
    }
    if($pixcel == true){
        for($i =0 ;$i<100;$i++){
            $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagesetpixel($image,mt_rand(0,$width-1),mt_rand(0,$height-1),$color);
        }
    }

    header('Content-Type: image/gif');
    imagegif($image, 'image/verify.gif');
    imagedestroy($image);
}
