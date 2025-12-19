<?php
POST_start();
ob_start();

if(isset($_POST['btnSubmit'])){

$service = $_POST['service'];
$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$date = $_POST['date'];
$time = $_POST['time'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$pasagers = $_POST['pasagers']; 
$bags = $_POST['bags'];
$vehicle = $_POST['vehicle'];

$roundTrip = $_POST['roundTrip'];



// Desde aquí datos y cuerpo del mensaje //

$asunto = "QUOTE FROM WEB";
$correo = "verdaluno@gmail.com";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Long Island Riders <no-reply@longislandriders.com>\r\n";


$mensaje = "
<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
</head>
<body style='margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, sans-serif;'>

  <table width='100%' cellpadding='0' cellspacing='0' style='background-color:#f4f4f4; padding:20px 0;'>
    <tr>
      <td align='center'>

        <table width='600' cellpadding='0' cellspacing='0' style='background-color:#ffffff; border-radius:6px; overflow:hidden;'>

          <!-- Header -->
          <tr>
            <td style='background-color:#111827; color:#ffffff; padding:20px; text-align:center;'>
              <h2 style='margin:0; font-size:22px;'>NEW QUOTE FROM THE WEB</h2>
            </td>
          </tr>

          <!-- Contenido -->
          <tr>
            <td style='padding:20px; color:#333333; font-size:14px; line-height:1.6;'>

              <p><strong>Service type: </strong> $service</p>
              <p><strong>Pickup Location: </strong> $pickup</p>
              <p><strong>Drop-off Location: </strong> $dropoff</p>
              <p><strong>Date: </strong> $date</p>
              <p><strong>Time: </strong> $time</p>
              <p><strong>Passenger Name: </strong> $name</p>
              <p><strong>Phone number: </strong> $phone</p>
              <p><strong>Email addres: </strong> $mail</p>
              <p><strong>Number of passegers: </strong> $pasagers</p>
              <p><strong>Number of bags: </strong> $bags</p>
              <p><strong>Vehicle Type: </strong> $vehicle</p>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style='background-color:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#666666;'>
              Este mensaje fue enviado desde el formulario web.<br>
              <strong>Long Island Riders</strong>
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>
";


mail($correo, $asunto, $mensaje, $headers);

  echo "<script>
    alert('Thanks!');
    window.location= 'index.php'
  </script>";

}


?>