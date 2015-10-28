<?php
$db = "expenser"; //database name
$collection = "daily_expense"; //collection name
$mongo = new MongoClient(); //connect to mongodb
$conn = $mongo->$db; //select db
?>