<?php

	class homeView extends View {
		
		public function __construct() {
			parent::__construct();
			
			
			$this->loadHomePage();
			
			
		}
		
		
		
		private function loadHomePage() {
			
			$title = "Daddy Day Care";
			$template = "homeTemplate.php";
			
			$this->loadPage($title, $template);	
			
		}
		
	}

?>
