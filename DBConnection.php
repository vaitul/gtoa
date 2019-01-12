<?php
	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DB", "gtoa");

	class DataBase
	{
		public $con;
		function __construct()
		{
			$this->con=mysqli_connect(HOST,USER,PASS,DB);
			if(!$this->con)
				echo "Connection error: " . mysqli_connect_error();
		}
	}

	//obj here...

?>