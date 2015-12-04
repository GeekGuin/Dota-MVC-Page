<?php
class Template{
	private $vars = array();

	public function __get($name){
		return $this->vars[$name];
	}

	public function __set($name, $value){
		$this->vars[$name] = $value;
	}

	public function render($viewTemplateFile){
		extract($this->vars);
		ob_start();
		include($viewTemplateFile);
		return ob_get_clean();
	}
}
?>