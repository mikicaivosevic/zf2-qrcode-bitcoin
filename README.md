# ZF2 QR Code Generator Helper
Simple library for generating qr code.

## Install

```
composer require mikicaivosevic/zf2-qrcode-bitcoin:dev-master
```

You need to register new module. Add in file **config/application.config.php**:

```
'modules' => array(
    '...',
    'QrCodeBitcoin'
),
```

The module is ready to use.

## Using in View

```
<?php echo $this->btc_qrcode("1J19TLLqu8DH2cv3ze7g1xZNwyyXWyGLKc","1.32"); ?>
```





