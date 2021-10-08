     <?PHP

                
                 mysqli_set_charset('utf8');
                  $Nombre=trim($_POST['Nombre']);
                  $Apellido_Paterno=trim($_POST['Apellido_Paterno']);
                  $Apellido_Materno=trim($_POST['Apellido_Materno']);
                  $Fecha=trim($_POST['Fecha']);
                  $Email=trim($_POST['Email']);
                  $Celular=trim($_POST['Celular']);
                  $myPassword=trim($_POST['myPassword']);
                  $pas=md5($myPassword);

               
                    include('conexion.php');
                    $instruccion = ("insert into usuarios(
                    Nombre,Apellido_Paterno,Apellido_Materno,Fecha_de_Nacimiento,Email,Telefono_Celular,Contra) 
                    values
                    ('$Nombre','$Apellido_Paterno','$Apellido_Materno','$Fecha','$Email','$Celular','$pas')");
                    $consulta = mysqli_query ($conexion,$instruccion)
                    or die ("Fallo en la consulta");
    
                    echo "Se han guardado con exito los Datos.";
                    return "ok";
                  //echo "<p>Se ha registrado con exito.</p>";
                  //header('Location: index.php?ok=1');
                  //exit;
                  ?>