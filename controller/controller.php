<?php 

//подключение модели
require_once MODEL;

if (isset($_POST['act'])) {
	switch ($_POST['act']) {
		case 'get_books':
			$book=get_books();
			foreach($book as $key){
			echo "
				<tr id=".$key['id'].">
					<td data-target='author'>".$key['author']."</td>
					<td data-target='name'>".$key['name']."</td>
					<td data-target='genre'>".$key['genre']."</td>
					<td data-target='year'>".$key['year']."</td>
					<td>
						<a href='#' data-id='".$key['id']."' data-role='del'><span class='del'>&#10006;</span></a>
						<a href='#' data-id='".$key['id']."' data-role='update' ><span class='rem'>&#9999;</span></a>
					</td>
				</tr>";
			}
			exit;
		case 'send':
			add_book();
			$kundeid= $db->insert_id;
			echo "
				<tr id='$kundeid' >
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
		case 'del':
			del_book();
			exit();
		case 'edit':
			edit_book();
			exit();

	}
}


//подключение вида
require_once TEMPLATE.'index.php';
