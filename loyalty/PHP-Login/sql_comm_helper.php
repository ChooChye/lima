<style type="text/css">

body {

	background-image: url(img/8119.jpg);

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

	

	// This function creates the table used by the "WeeklyReports" script.

	



	// This function removed the table "WeeklyReports".

	function drop_WeeklyReports_table()

	{

		$query = "DROP TABLE WeeklyReports";

		mysql_query($query) or die (mysql_error());	

	}

	

	

	// This function removed the table "WeeklyReports".

	function clear_WeeklyReports_table()

	{

		$query = "DELETE FROM WeeklyReports";

		mysql_query($query) or die (mysql_error());	

	}

	

	//

	function delete_id_from_WeeklyReports_table($fid)

	{

		$query = "DELETE FROM WeeklyReports WHERE id=$id";

		mysql_query($query) or die (mysql_error());	

	}

	

	//

	function delete_id_file_only_from_WeeklyReports_table($id)

	{

		$query = "UPDATE WeeklyReports SET fileData=NULL WHERE id=$id";

		mysql_query($query) or die (mysql_error());	

		$query = "UPDATE WeeklyReports SET fileSize=0 WHERE id=$id";

		mysql_query($query) or die (mysql_error());	

	}	

	

?>

