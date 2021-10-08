<!DOCTYPE html>
<html lang="es" >
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">

<title>Karati</title>


<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/formulario.css">

<script type="text/javascript">
    
    if (document.location.search.match(/type=embed/gi)) {
  window.parent.postMessage("resize", "*");
}



function verificarPasswords() {
 
 // Ontenemos los valores de los campos de contraseñas 
 pass1 = document.getElementById('myPassword');
 pass2 = document.getElementById('confirmapass');

 // Verificamos si las constraseñas no coinciden 
 if (pass1.value != pass2.value) {

     // Si las constraseñas no coinciden mostramos un mensaje 
     document.getElementById("error").classList.add("mostrar");
     // Desabilitamos el botón de login 
     //document.getElementById("login").disabled = true;
     return false;
 } else {

     // Si las contraseñas coinciden ocultamos el mensaje de error
     document.getElementById("error").classList.remove("mostrar");

     // Mostramos un mensaje mencionando que las Contraseñas coinciden 
     document.getElementById("ok").classList.remove("ocultar");

     $.ajax({
    type: 'POST',
    url: 'guardar.php',
    data: $('#myform').serialize(),
    success: function(respuesta) {
        if(respuesta=='ok'){
        
          return true;
        }
        else {
        
        }
    }
    });

     //document.getElementById("myform").submit();

  



 }

}
</script>
</head>

<body >
<div class="panel-body">
    <div class="row">
        <div class="col-xs-12">

        <form id="myform" onsubmit="verificarPasswords(); return false" accept-charset="utf-8">
            <table class="tg">
                <thead>
                  <tr>
                    <th class="tg-ojqr bg-primary" align="center" >:: Registrar Usuario ::</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="tg-8jgo" BGCOLOR="black">Karati</td>
                   
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Nombre: </label> 
                       <input required type="text" class="form-control" name="Nombre" placeholder="Usuario." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}">
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Apellido Paterno: </label> 
                       <input required type="text"  class="form-control" name="Apellido_Paterno" placeholder="Apellido Paterno" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}">
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Apellido Materno: </label> 
                       <input required type="text"  class="form-control" name="Apellido_Materno" placeholder="Apellido Materno." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}">
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Fecha de Nacimiento: </label> 
                       <input required type="date"  class="form-control" name="Fecha" value="1985-01-01" min="1920-01-01" max="2010-01-01">
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Email: </label> 
                       <input required type="email"  class="form-control" name="Email" placeholder="Email.">
                     </div>
                    </td>
                  </tr>
                   <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Teléfono Celular: </label> 
                       <input required type="text" maxlength="10" class="form-control" name="Celular" onkeypress="return solonumeros(event)" onblur="limpia()" placeholder="Celular.">
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m">
                       <div class="form-group">
                      <label>Contraseña: </label><p><small>La contraseña debe tener minimo 8 caracteres y almenos una mayuscula, minuscula, numero y caracter especial.</small></p>
                      <input required type="password" id="myPassword" min="8" name="myPassword" class="form-control"  pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" >
                      <BR>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                       <label>Confirmar Contraseña: </label>
                         <input required type="password" id="confirmapass" name="confirmapass" class="form-control"  >

                         </div>
                                                    <!-- Mensajes de Verificación -->
                           <div id="error" class="alert alert-danger ocultar" role="alert">
                                                       Las Contraseñas no coinciden, vuelve a intentar !
                            </div>
                            <div id="ok" class="alert alert-success ocultar" role="alert">
                                                       Se registro con exito !
                            </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-zv4m" BGCOLOR="White">
                       <div class="form-group">
                           <button type="submit" id="Registrar" name="Registrar" class="btn btn-block btn-primary">Registrar</button>
                        </div>
                    </td>
                  </tr>
                </tbody>
                </table>

	     </form>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/strength.min.js"></script>
<script id="rendered-js">
  $(document).ready(function ($) {
  $('#myPassword').strength({
    strengthClass: 'strength',
    strengthMeterClass: 'strength_meter',
    strengthButtonClass: 'button_strength',
    strengthButtonText: 'Mostrar Password',
    strengthButtonTextToggle: 'Ocultar Password' });
});
</script>

<script type="text/javascript">
    
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}

function solonumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }


    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}

function solonumerosyletras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789áéíóúabcdefghijklmnñopqrstuvwxyz,:;¿?#()";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}


</script>

</body>
</html>


