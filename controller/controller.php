<?php 

//подключение модели
require_once MODEL;

$book=books();

if ($_POST['act']=='send'){
	add_book();
	$kundeid= $db->insert_id;
	echo "  <tr id='$kundeid' >
				<td data-target='author'>".$_POST['author']."</td>
				<td data-target='name'>".$_POST['name']."</td>
                <td data-target='genre'>".$_POST['genre']."</td>
                <td data-target='year'>".$_POST['year']."</td>
                <td>
                	<a href='#' data-id='$kundeid' data-role='del' ><span class='del'>&#10006;</span></a>
                  	<a href='#' data-id='$kundeid' data-role='update'><span class='rem'>&#9999;</span></a>
                </td>
            </tr>";
	exit();
}
if($_POST['act']=='del'){
	del_book();
   	exit();
}

if($_POST['act']=='edit'){
	edit_book();
	exit();
}
//подключение вида
require_once TEMPLATE.'index.php';
