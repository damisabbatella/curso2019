<html>
  <head>
  </head>
  <body>
    <h1>DATOS DEL PAGO</h1>
    <form action="paso3.php" method="POST" id="braintree-payment-form">
      <h2>Informacion del Cliente</h2>
      <p>
        <label>NOMBRE</label>
        <input type="text" name="first_name" id="first_name" />
      </p>
      <p>
        <label for="last_name">APELLIDO</label>
        <input type="text" name="last_name" id="last_name" />
      </p>

      <h2>Tarjeta de Credito</h2>
      <p>
        <label>Numero de tarjeta</label>
        <input type="text" size="20" autocomplete="off" data-encrypted-name="number" value="5105105105105100" name="number" id="number"/>
      </p>
      <p>
        <label>CVV</label>
        <input type="text" size="4" autocomplete="off" data-encrypted-name="cvv" value="123" name="cvv" id="cvv"/>
      </p>
      <p>
        <label>Vencimiento (MM/AAAA)</label>
        <input type="text" size="2" data-encrypted-name="month" value="02" name="month" id="month"/> / <input type="text" size="4" data-encrypted-name="year" value="15" name="year" id="year"/>
      </p>
      <input type="hidden" value="<?php echo $_POST["suc"] ?>" name="sucursales">
      <input type="hidden" value="<?php echo $_POST["tipo"] ?>" name="tipo">
      <input type="hidden" name="habilitado" value="ambient"><br>
      <input type="hidden" name="habilitado" value="si"><br>
      <input type="hidden" name="moneda" value="dolar"><br>
      <input type="hidden" name="origen" value="venta online"><br>
      <input type="hidden" name="tiporadio" value="ambient"><br>
      <input type="submit" value="continuar">
      <input class="submit-button" type="submit" />
    </form>
    <script type="text/javascript" src="https://js.braintreegateway.com/v1/braintree.js"></script>
    <script type="text/javascript">
      var braintree = Braintree.create("eyJ2ZXJzaW9uIjoyLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiI2YzMxOTkzZjc1NTk3Y2ZmMjk0ZGI4NTJhZDAwN2NhNGY5YTZlOTYwZTcyOWUyZjA3MTFhYmZkODY0ODBjNzY2fGNyZWF0ZWRfYXQ9MjAxNS0wOS0wNFQxOTozODo1NC4yNDA1OTg4NjcrMDAwMFx1MDAyNm1lcmNoYW50X2lkPTM0OHBrOWNnZjNiZ3l3MmJcdTAwMjZwdWJsaWNfa2V5PTJuMjQ3ZHY4OWJxOXZtcHIiLCJjb25maWdVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvMzQ4cGs5Y2dmM2JneXcyYi9jbGllbnRfYXBpL3YxL2NvbmZpZ3VyYXRpb24iLCJjaGFsbGVuZ2VzIjpbXSwiZW52aXJvbm1lbnQiOiJzYW5kYm94IiwiY2xpZW50QXBpVXJsIjoiaHR0cHM6Ly9hcGkuc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbTo0NDMvbWVyY2hhbnRzLzM0OHBrOWNnZjNiZ3l3MmIvY2xpZW50X2FwaSIsImFzc2V0c1VybCI6Imh0dHBzOi8vYXNzZXRzLmJyYWludHJlZWdhdGV3YXkuY29tIiwiYXV0aFVybCI6Imh0dHBzOi8vYXV0aC52ZW5tby5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tIiwiYW5hbHl0aWNzIjp7InVybCI6Imh0dHBzOi8vY2xpZW50LWFuYWx5dGljcy5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tIn0sInRocmVlRFNlY3VyZUVuYWJsZWQiOnRydWUsInRocmVlRFNlY3VyZSI6eyJsb29rdXBVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvMzQ4cGs5Y2dmM2JneXcyYi90aHJlZV9kX3NlY3VyZS9sb29rdXAifSwicGF5cGFsRW5hYmxlZCI6dHJ1ZSwicGF5cGFsIjp7ImRpc3BsYXlOYW1lIjoiQWNtZSBXaWRnZXRzLCBMdGQuIChTYW5kYm94KSIsImNsaWVudElkIjpudWxsLCJwcml2YWN5VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3BwIiwidXNlckFncmVlbWVudFVybCI6Imh0dHA6Ly9leGFtcGxlLmNvbS90b3MiLCJiYXNlVXJsIjoiaHR0cHM6Ly9hc3NldHMuYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhc3NldHNVcmwiOiJodHRwczovL2NoZWNrb3V0LnBheXBhbC5jb20iLCJkaXJlY3RCYXNlVXJsIjpudWxsLCJhbGxvd0h0dHAiOnRydWUsImVudmlyb25tZW50Tm9OZXR3b3JrIjp0cnVlLCJlbnZpcm9ubWVudCI6Im9mZmxpbmUiLCJ1bnZldHRlZE1lcmNoYW50IjpmYWxzZSwiYnJhaW50cmVlQ2xpZW50SWQiOiJtYXN0ZXJjbGllbnQzIiwiYmlsbGluZ0FncmVlbWVudHNFbmFibGVkIjpmYWxzZSwibWVyY2hhbnRBY2NvdW50SWQiOiJhY21ld2lkZ2V0c2x0ZHNhbmRib3giLCJjdXJyZW5jeUlzb0NvZGUiOiJVU0QifSwiY29pbmJhc2VFbmFibGVkIjpmYWxzZSwibWVyY2hhbnRJZCI6IjM0OHBrOWNnZjNiZ3l3MmIiLCJ2ZW5tbyI6Im9mZiJ9");
      braintree.onSubmitEncryptForm("braintree-payment-form");
    </script>
  </body>
</html>
