<?php
class Landing extends BaseController {
	public function index() {
		$this->view('header');	
		$this->view('landing_view');	
		$this->view('footer');
	}
}
?>