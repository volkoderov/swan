<?php 

function clean($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

// Функция выбора всех книги из БД

function books(){
	global $db;
	$query="SELECT * FROM books";
	$result = $db->query($query);
	while($user = $result->fetch_assoc()) {
		$book[]=$user;
	}
	return $book;
}

// Функция добавление книги

function add_book(){
	if($_POST['author']  and $_POST['name']  and $_POST['genre']  and $_POST['year']){
	$author=clean($_POST['author']);
	$name=clean($_POST['name']);
	$genre=clean($_POST['genre']);
	$year=clean($_POST['year']);
	global $db;
	$query="INSERT INTO books (author,name,year,genre) 
	VALUES ('$author','$name','$year','$genre')";
	$result = $db->query($query);
	};
} 

// Функция удаления книги

function del_book(){
	$id=clean($_POST['id']);
	global $db;
	$query="DELETE FROM books WHERE id = '$id'";
	$db->query($query);
} 

// Функция редактирования книги

function rem_book(){
	$id=clean($_POST['id']);
	$author = clean($_POST['author']);
	$name = clean($_POST['name']);
	$genre = clean($_POST['genre']);
	$year = clean($_POST['year']);

	global $db;
	$query="UPDATE books SET author='$author',name='$name',genre = '$genre',year = '$year' WHERE id = '$id'";
	$db->query($query);
} 
