<?php
	if(!@mysql_connect("localhost","root",""))die("Database Error");
	if(!@mysql_select_db("alpha_store"))die("Database Error");
?>