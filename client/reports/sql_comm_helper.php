<style type="text/css">
body {
	background-image: url(img/bg.jpg);
}
</style>
<?php

	include "sql_data.php";  // Contains SQL connection settings.	
	
	// Function that logs into the sql server
	function login_mysql()
	{
		global $host;
		global $user;
		global $password;
		global $connection;
		global $database;
		$connection = mysqli_connect($host, $user, $password, $database) or die("Could not connect to database");
	}
	
	// Function logs out from the sql server.
	function logout_mysql()
	{
		global $connection;		
		mysqli_close($connection);
	}

	// Hook up to the proper database.
	function select_db($first_time)
	{
		global $database;
		$db = mysqli_select_db($database);
		if ($db == null && $first_time == true)
		{
			echo ("creating database...$database.");
			mysql_query("CREATE DATABASE $database");
			select_db(false);
		}
	}
	
	// This function creates the table used by the "DailyReportss" script.
	

	// This function removed the table "DailyReportss".
	function drop_membership_table()
	{
		$query = "DROP TABLE membership";
		mysqli_query($query) or die (mysqli_error());	
	}
	
	
	// This function removed the table "DailyReportss".
	function clear_membership_table()
	{
		$query = "DELETE FROM membership";
		mysqli_query($query) or die (mysqli_error());	
	}
	
	//
	function delete_id_from_membership_table($fid)
	{
		$query = "DELETE FROM membership WHERE id=$id";
		mysqli_query($query) or die (mysqli_error());	
	}
	
	//
	function delete_id_file_only_from_membership_table($id)
	{
		$query = "UPDATE membership SET fileData=NULL WHERE id=$id";
		mysqli_query($query) or die (mysql_error());	
		$query = "UPDATE membership SET fileSize=0 WHERE id=$id";
		mysqli_query($query) or die (mysqli_error());	
	}	
	
?>
