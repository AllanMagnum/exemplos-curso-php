<?php
class HomeController extends FrontController
{
	
	public function index()
	{
		//Aqui vai qualquer coisa que precise ser feita antes da view ser mostrada
		$view = VIEW_PATH.'home.php';
		
		
		
		
		$this->showView($view);
	}
	
	public function listar()
	{
		//Eu sou outro m�todo do HomeController e n�o fa�o nada
	}
	
}