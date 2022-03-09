<style type="text/css">
body {
	background-image: url(img/8119.jpg);
}
</style>
<?php

	include "sql_data2.php";  // Contains SQL connection settings.	
	
	// Function that logs into the sql server
	function login_mysql()
	{
		global $host;
		global $user;
		global $password;
		global $connection;
		$connection = mysql_connect($host, $user, $password) or die("Could not connect to database");
	}
	
	// Function logs out from the sql server.
	function logout_mysql()
	{
		global $connection;		
		mysql_close($connection);
	}

	// Hook up to the proper database.
	function select_db($first_time)
	{
		global $database;
		$db = mysql_select_db($database);
		if ($db == null && $first_time == true)
		{
			echo ("creating database...$database.");
			mysql_query("CREATE DATABASE $database");
			select_db(false);
		}
	}
	
	// This function creates the table used by the "upload" script.
	

	// This function removed the table "upload".
	function drop_upload_table()
	{
		$query = "DROP TABLE upload";
		mysql_query($query) or die (mysql_error());	
	}
	
	
	// This function removed the table "upload".
	function clear_upload_table()
	{
		$query = "DELETE FROM upload";
		mysql_query($query) or die (mysql_error());	
	}
	
	//
	function delete_fid_from_upload_table($fid)
	{
		$query = "DELETE FROM upload WHERE fid=$fid";
		mysql_query($query) or die (mysql_error());	
	}
	
	//
	function delete_fid_file_only_from_upload_table($fid)
	{
		$query = "UPDATE upload SET fileData=NULL WHERE fid=$fid";
		mysql_query($query) or die (mysql_error());	
		$query = "UPDATE upload SET fileSize=0 WHERE fid=$fid";
		mysql_query($query) or die (mysql_error());	
	}	
	
?>
