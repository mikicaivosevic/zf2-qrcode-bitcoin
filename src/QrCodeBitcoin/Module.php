<?php

namespace QrCodeBitcoin;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'btc_qrcode' => function($sm) {
                    $bitcoinQrCodeGenerator = new QrCode\Generator();
                    return $bitcoinQrCodeGenerator;
                }
            )
        );
    }
}