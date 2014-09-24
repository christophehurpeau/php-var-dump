php-var-dump
============

html var dump with syntax highlighting


### How to use


```php
$formatter = new HtmlFormatter();
$varDump = new VarDump($this->formatter, 99);
echo '
<html style="margin:0; padding:0;">
    <body style="margin:0; padding:0;">
        <pre>' . $varDump->dump($data) . '</pre>
    </body>
</html>';
```
