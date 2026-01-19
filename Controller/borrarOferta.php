<?php
require_once '../Model/Oferta.php';
$ofertaAux = new Oferta($_GET['id'],$_GET['titulo'],$_GET['imagen'],$_GET['descripcion']);
$ofertaAux->delete();
header("Location: index.php");