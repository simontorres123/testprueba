<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body > 
    <section style="position: relative; width: 400px; height: 480px;
        background-color: #0f4611; border-radius: 30%;">
      <h1  align="center" style="position: relative; color: #eef5ee; top: 60px;
        left:140px; font-style: arial;">Bienvenido a: </h1>
      <img  align="center" style="{position: relative;top: 50%; left: 50%;" class="img-responsive" src="http://conedmex.com/images/conedlogo%20copy.png" alt="" width="40%" height="25%" top="15%" }>
      <br>
      <br>
      <p  align="center" style="position: relative; left: 15%; color: #eef5ee;">
      Hola,

        Gracias por registrarte 
        <br>
         comunidad,coned lo que mas nos interesa
        <br> 
        son nuestros clientes,
        siendo una aplicacion facil
        <br> de usar, ademas brindando una
        seguridad de 
        <br> 
        primer nivel.
      </p>
      <section align="center"s tyle="position: relative; height: 15%; width: 55%;
        background-color: #eef5ee; top: 20px ; left: 50px !important; border-radius: 10%;">
        <ul style="position: relative; top: 10px;">
          <a style="color:black" href="{{url()}}/base/{{$data['emails']}}/token/{{$data['token']}}">Confirmar mi cuenta</a>
        </ul>

      </section>
    </section>
  </body>
</html>