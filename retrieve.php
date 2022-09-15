<?php
Class retrieve{

    public function __construct(){
        
    }

    public function getData(){
        $dsn = "mysql:host=localhost;dbname=pdc10_db";
        $user = "root";
        $password = "";
        $pdo = new PDO($dsn, $user, $password);
		try {
			$sql = "SELECT * FROM registrations";
			$statement = $pdo->prepare($sql);
			$statement->execute();
            return $statement->fetchAll();

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
    }
}
?>