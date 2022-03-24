<?php
$directorio = 'server/';

$archivo = $directorio . basename($_FILES["file"]["id"]);

move_uploaded_file($_FILES["file"]["id"], $directorio)

?>