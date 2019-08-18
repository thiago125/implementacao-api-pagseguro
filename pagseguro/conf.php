<?php
    define("URL", "https://localhost/pagseguro/");
$sandbox = true;

if($sandbox){
    define("EMAIL_PAGSEGURO", "thiagosantosg@outlook.com.br");
    define("TOKEN_PAGSEGURO", "3225DABF6F1B4CBB8C5F1F7B5A9EFD7C");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "thiagosantosg@outlook.com.br");
    define("TOKEN_PAGSEGURO", "ae36535b-273b-4671-a2e9-7451f594ddfe16557aa54cb997bcd14dd81e1c6d5b2bf841-6887-4106-9c99-ed7ee6bff2a5");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}

?>