<?php
class Home extends BaseController {
	public function index() {
		$msg = '';
		if($_POST['item']) {
			foreach($_POST['item'] as $item) {
				//print_r($item); exit;
				//if($item['name']!='' && $item['amt']!='' && $item['tag']!='') {
					//if(is_numeric($item['amt'])) {
						$data['msg'] = $this->model('home_model')->saveData($item);
					//}
				//}
				/*else {
					$data['msg'] = "Please enter valid fields!";
				}*/
			}
		}
		$this->view('header');
		$this->view('home_view', $data);
		$this->view('footer');	
	}
}
?>