<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Inicio Sesión | Registrarse</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="user login">
          <div class="img-box">
            <img src="./images/farmacia.jpg" alt="" />
          </div>
          <div class="form-box">
            <div class="top">
              <p>
                <span data-id="#ff0066">Regístrate ahora</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <br>
                <h2>Iniciar Sesión</h2>
                <br>
                <input id="correo" type="text" placeholder="Correo Electrónico" />
                <div>
                  <input id="contrasena" type="password" placeholder="Contraseña" />
                  <div class="icon form-icon">
                  </div>
                </div>
                <span>¿Olvidaste tu contraseña?</span>
                <input type="Submit" onclick="Login()" value="Ingresar"/>
              </div>
            </form>
          </div>
        </div>

        <!-- Registrarse -->
        <div class="user signup">
          <div class="form-box">
            <div class="top">
              <p>
                <span data-id="#1a1aff">Inicia sesión ahora</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <br>
                <h2>Registrate</h2>
                <br>
                <input type="email" placeholder="Ingrese un correo" />
                <div>
                  <input type="password" placeholder="Ingrese una contraseña" />
                  <div class="icon form-icon">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <div>
                  <input type="password" placeholder="Confirme la contraseña" />
                  <div class="icon form-icon">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <input type="Submit" value="Registrarse" />
              </div>
            </form>
          </div>
          <div class="img-box">
            <img src="./images/r.webp" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- IndexJs -->
    <script src="./js/index.js"></script>
  </body>
</html>

<script>

    function Login()
    {

        var Correo = document.getElementById('correo').value;
        var Password = document.getElementById('contrasena').value;

// alert(Correo + " " + Password);


       $.post("/php/loginWS.php",
        {
            "Correo" : Correo,
            "Password" : Password
        },

        function(Data)
        {
            var respuesta = JSON.parse(Data);

            if(respuesta.Ok == 1)
            {
                location.href = "/MenuPrincipal/menu.html";
            }else{
                alert(Data);
            }
        }
      );
    }


</script>
