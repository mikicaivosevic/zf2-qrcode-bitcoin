<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5.10.15.
 * Time: 14.44
 */

namespace QrCodeBitcoin\QrCode;


use Zend\View\Helper\AbstractHelper;

class Generator extends AbstractHelper
{
    public function __invoke($address, $amount, $width = 300, $height = 300)
    {
        $image = "https://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl=bitcoin:{$address}?amount={$amount}";
        $imageFile = file_get_contents($image);
        $imageData = base64_encode($imageFile);
        $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
        return '<img src="' . $src . '">';
    }
}
