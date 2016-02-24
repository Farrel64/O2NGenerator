<?php

		$conn = new PDO('mysql:host=localhost;dbname=o2n', 'root', '');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		function getSingleValue($tableName, $prop, $value, $columnName, $conn)
		{
			$q = $conn->query("SELECT `$columnName` FROM `$tableName` WHERE $prop='".$value."'");
			$f = $q->fetch();
			$result = $f[$columnName];
			return $result;
		}
?>
