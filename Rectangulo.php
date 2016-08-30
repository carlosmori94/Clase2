
<?php
require_once "FiguraGeometrica";
class Rectangulo extends FiguraGeometrica
{
	private $ladoUno;
	private $ladoDos;

	void function __construct($lado1 , $lado2)
	{
		$this->ladoUno = $lado1;
		$this->ladoDos = $lado2;

	}
	public override_function(Dibujar(), void, function_code){}
	public override_function(ToString(), void, function_code)

}
?>