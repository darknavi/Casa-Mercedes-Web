<?php
class ReportesController extends AppController {
	var $name = 'Reportes';
	var $uses = array();
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	/**
	* Genera reportes segun la selecci�n de tipo de reporte y la persona buscada
	*/
	function index() {
		$this->layout = "panel_control";
		Debug($this->data);
		//TODO ejecuta m�todo para la generaci�n de reporte segun el tipo selecionado
	}

	function ficha_identificacion() {
		$this->layout = "reportes";
		Debug($this->params["named"]);
		//TODO genera reporte ficha de identificaci�n
		
	}
	
	function estudio_social(){
		$this->layout = "reportes";
		//TODO genera reporte estudio_social
		
	}
}
