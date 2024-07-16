<?php
function get_user_count()
{
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "PR");
	$user_count = "";
	$query = "select count(*) as user_count from users";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$user_count = $row['user_count'];
	}
	return ($user_count);
}

function get_book_count()
{
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "PR");
	$book_count = "";
	$query = "select count(*) as book_count from BOOKS";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$book_count = $row['book_count'];
	}
	return ($book_count);
}
function get_issued_book_count()
{
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "PR");
	$issued_book_count = "";
	$query = "select count(*) as issued_book_count from ISSUE";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$issued_book_count = $row['issued_book_count'];
	}
	return ($issued_book_count);
}
