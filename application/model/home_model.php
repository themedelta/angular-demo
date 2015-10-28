<?php
class Home_model {
	public function saveData($item) {
		include "config/config.php"; //include db connection from config
		$options = array(
		    "w" => 1,
		    "j" => true,
		);
		$collection = "daily_expense"; //collection name
		try {
		    $conn->$collection->insert($item, $options);
		    $msg = "Expense saved successfully!";
		} catch(MongoCursorException $e) {
		    $msg = "Sorry. Something went wrong!";
		}

		return $msg;
	}
}
?>