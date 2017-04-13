<?php
class DVNoticia {
	var $idNoticia;
	var $titulo;
	var $descripcion;
	var $textoCompleto;
	var $idSeccion;
	var $seccion;
	var $fecha;
	var $autor;
	var $idUsuario;
	var $isPublica;

	function __construct($idNoticia, $titulo, $descripcion, $seccion, $idSeccion, $fecha, $textoCompleto, $autor, $idUsuario, $isPublica) {
		$this -> idNoticia = $idNoticia;
		$this -> titulo = $titulo;
		$this -> descripcion = $descripcion;
		$this -> seccion = $seccion;
		$this -> idSeccion = $idSeccion;
		$this -> fecha = $fecha;
		$this -> textoCompleto = $textoCompleto;
		$this -> autor = $autor;
		$this -> idUsuario = $idUsuario;
		$this -> isPublica = $isPublica;
	}
}
?>