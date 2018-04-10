<?php 
require('settings.php');
	//skicka statuskoder för underlätta om du får fel
	//500 server error
	//200 ok
	//400 bad request
	switch ($_SERVER["REQUEST_METHOD"]) {
		case 'GET':
			//hantera get anrop
			//get brukar vara hämta något från databasen och skicka tillbaka det.
			//glöm inte att skicka tillbaka data med json
			break;
		case 'POST':
			//hantera post anrop
			//post brukar vara spara något
			break;
		case 'DELETE':
			//hantera delete anrop
			//delete är ta bort
			break;
		case 'PUT':
			//hantera put anrop
			//uppdatera data
			break;
	}