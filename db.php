<?php

	function get_connection(){
		return new PDO('mysql:host=localhost;dbname=bd', 'root', 'mamochka71');
	}

	function getUserByEmail(string $property){
		$query = "SELECT * FROM users WHERE email = ?";
		$db = get_connection();
		$stmt = $db->prepare($query);
		$stmt->execute([$property]);

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($result){
			return $result;
		} 
		return false;
	}

	function getUserList(){
		$query = "SELECT * FROM users ORDER BY id DESC";
		$db = get_connection();
		$stmt = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
		return $stmt;
	}

	function insert(array $data){
		$query = "INSERT INTO users (name, email, password, created_at) VALUES (?,?,?,?)";
		$db = get_connection();
		$stmt = $db->prepare($query);
		return $stmt->execute($data);
	}

?>