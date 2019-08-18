<?php include "conf.php"; ?>
<!DOCTYPE html>
<html>
        <head>
        <meta charsert="utf-8">
        <link href="personalizado.css" rel="stylesheet">
        </head>
    <body>
         <script type="text/javascript" src="jquery.min.js"></script>

            <button onclick="pagamento_boleto()">Pagar</button>
            <span class="endereco" data-endereco="<?php echo URL; ?>"> </span>
            <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"> </script>
            <script type="text/javascript" src="personalizado.js"> </script>


    </body>
</html>