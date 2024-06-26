<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paiement</title>
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <style>
        .sdk {
            display: block;
            position: absolute;
            background-position: center;
            text-align: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script>
        function checkout() {
            CinetPay.setConfig({
                apikey: '190321107266781b02bd4a18.04091641',
                site_id: '5874577',
                notify_url: 'http://mondomaine.com/notify/',
                mode: 'PRODUCTION'
            });

            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(),
                amount: 100,
                currency: 'XOF',
                channels: 'ALL',
                description: 'Test de paiement',
                customer_name: "sall",
                customer_surname: "awa",
                customer_email: "awasall@esp.sn",
                customer_phone_number: "772145963",
                customer_address: "Pikine",
                customer_city: "dakar",
                customer_country: "SN",
                customer_state: "CM",
                customer_zip_code: "1234",
            });

            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    if (alert("Votre paiement a échoué")) {
                        window.location.reload();
                    }
                } else if (data.status == "ACCEPTED") {
                    if (alert("Votre paiement a été effectué avec succès")) {
                        window.location.reload();
                    }
                }
            });

            CinetPay.onError(function(data) {
                console.log(data);
            });
        }
    </script>
</head>
<body>
    <div class="sdk">
        <h1>SDK SEAMLESS</h1>
        <button onclick="checkout()">Checkout</button>
    </div>
</body>
</html>
