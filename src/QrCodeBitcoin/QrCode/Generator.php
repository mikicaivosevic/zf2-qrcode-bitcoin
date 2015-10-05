<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5.10.15.
 * Time: 14.44
 */

namespace QrCodeBitcoin\QrCode;


class Generator
{
    public function __invoke($address, $amount)
    {
        $image = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcoin:{$address}?amount={$amount}";
        $imageFile = file_get_contents($image);
        $imageData = base64_encode($imageFile);
        $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
        return '<img src="' . $src . '">';
    }
}