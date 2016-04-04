<?php

	class homeView extends View {
		
		public function __construct() {
			parent::__construct();
			
			
			$this->loadHomePage();
			
			
		}
		
		
		
		private function loadHomePage() {
			
			$title = "Controllers - KCPHP";
			$template = "controllersTemplate.php";
			
			$this->pageName = "Controller";
			
			$this->loadPage($title, $template);	
			
		}
		
	}

?>
