<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
    <script src="https://www.paypal.com/sdk/js?client-id=AZMpIu_oR-911FAicdNUOJC6BtpkIaYCwGeLEj9fO6zfMPzcl6nmbqYMeQIi7-e6ho72HD_sX7lFiKo6&currency=USD"></script>
</head> 
<body>

<div id="paypal-button-container"> </div>

<script>
    paypal.Buttons({
        style:{     // ESTILO DE LOS BOTONES DE PAYPAL (PayPal o Tarjeta Debito/Credito)
            color: 'blue',
            shape: 'pill',
            label: 'pay'
        },   // PARA INDICAR EL VALOR A PAGAR EN EL BOTON DE PAYPAL O TARJETA DE CREDITO
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 70
                    }
                }] 
            });
        },

        onApprove: function(data, actions){
            actions.order.capture().then(function (detalles){
                //console.log(detalles);
                window.location.href="completado.html"

            });

        },

        onCancel: function(data){
            alert("Pago Cancelado");
            console.log(data);
        }
    }).render('#paypal-button-container');
</script>
    
</body>
</html>