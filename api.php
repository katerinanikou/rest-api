<?php 
    header("Access-Control-Allow-Origin: *");
    require('settings.php');
	//skicka statuskoder för underlätta om du får fel
	//500 server error
	//200 ok
	//400 bad request
	switch ($_SERVER["REQUEST_METHOD"]) {
		case 'GET':
            if(isset($_GET['tasks'])){
                $sql = "SELECT * FROM tasks";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result =$stmt->fetc hAll();
                echo json_encode($result);
            }
			//hantera get anrop
			//get brukar vara hämta något från databasen och skicka tillbaka det.
			//glöm inte att skicka tillbaka data med json
			break;
		case 'POST':
            if(isset($_POST['data'])){
                $data = jason_decode($_POST['data']);
                $title = $data->title;
                $task = $data->task;
                
                $sql  = "INSERT INTO tasks (title, task) VALUES (:title, :title)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':title', $title);
            }
			//hantera post anrop
			//post brukar vara spara något
			break;
		case 'DELETE':
            if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$sql = "DELETE FROM tasks WHERE id = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':id', $id);
				$stmt->execute();
			//hantera delete anrop
			//delete är ta bort
			break;
		case 'PUT':
			//hantera put anrop
			//uppdatera data
			break;
	}