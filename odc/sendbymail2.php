<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "direccion@grupobecm.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario

if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}
/*$name=$_POST["name"];
$last_name=$_POST["last_name"];*/
$email_from=$_POST["email"];


echo $name." ".$last_name." ".$email_from;
echo $_POST['tema']. "    ".$_POST['unidad'];

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Tema de interes: " . $_POST['tema'] .  "\n";
$email_message .= "Unidad de interes: " . $_POST['unidad'] . "\n";
$email_message .= "Nombre: " . $_POST['name'] .  "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "Compañia: " . $_POST['company'] .  "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Telefono: " . $_POST['phone'] . "\n";
$email_message .= "Celular: " . $_POST['cellphone'] .  "\n";
$email_message .= "Estado:" . $_POST['estado'] .  "\n";
$email_message .= "Ciudad: " . $_POST['city'] .  "\n";
$email_message .= "Calle: " . $_POST['street'] .  "\n";
$email_message .= "Colonia: " . $_POST['colonia'] .  "\n";
$email_message .= "CP: " . $_POST['cp'] .  "\n";
$email_message .= "Cantidades de unidades de interes: " . $_POST['un_int'] .  "\n";
$email_message .= "Sector: " . $_POST['sector'] .  "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n BEST REGARDS";


// Ahora se envía el e-mail usando la función mail() de PHP
//$email_from=$email_to;

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
echo "Las cabeceras son:    ". $headers;
mail($email_to, $email_subject, $email_message, $headers);
echo "\nImpresion despues de la funcion mail";
echo "¡El formulario se ha enviado con éxito!";
//header('Location: http://www.grupobecm.com');  
}
?>