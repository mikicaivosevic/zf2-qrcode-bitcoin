# ZF2 QR Code Generator Helper
Simple library for generating QR code.

## Install

```
composer require mikica/zf2-qrcode-bitcoin
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

```php
//width and height are optional.
echo $this->btc_qrcode($address, $amount, $width, $height);
echo $this->btc_qrcode("1J19TLLqu8DH2cv3ze7g1xZNwyyXWyGLKc","1.32");
```





