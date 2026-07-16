<?php
// Formulario de contacto — envía la solicitud a informes@isodec.com.pe.
// Se sube tal cual a GoDaddy junto con el resto de dist/ (PHP disponible en el hosting).

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

$nombre      = trim(strip_tags($_POST['nombre'] ?? ''));
$institucion = trim(strip_tags($_POST['institucion'] ?? ''));
$correo      = filter_var(trim($_POST['correo'] ?? ''), FILTER_VALIDATE_EMAIL);
$tipo        = trim(strip_tags($_POST['tipo'] ?? ''));
$mensaje     = trim(strip_tags($_POST['mensaje'] ?? ''));

if ($nombre === '' || !$correo || $mensaje === '') {
    header('Location: /?error=formulario#contacto');
    exit;
}

$destino = 'informes@isodec.com.pe';
$asunto  = 'Solicitud de reunión — ' . $nombre;

$cuerpo = "Nueva solicitud desde isodec.com.pe\n\n"
    . "Nombre: $nombre\n"
    . "Institución: $institucion\n"
    . "Correo: $correo\n"
    . "Tipo de estudio: $tipo\n\n"
    . "Descripción del proyecto:\n$mensaje\n";

$cabeceras = "From: web@isodec.com.pe\r\n"
    . "Reply-To: $correo\r\n"
    . "Content-Type: text/plain; charset=UTF-8\r\n";

mail($destino, '=?UTF-8?B?' . base64_encode($asunto) . '?=', $cuerpo, $cabeceras);

header('Location: /gracias/');
exit;
