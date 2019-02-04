	<?php require_once 'inc/header.php'?>
	<div class="modal" id="modal" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
		<button class="close-button" id="close-button" title="Закрыть модальное окно">Закрыть</button>
		<h1>Добавить книгу</h1>
		<form method="POST" action="#">
			<div>
				<input type="text" name="author" id="author" placeholder="Автор" required>
			</div>
			<div>
				<input type="text" name="name" id="name" placeholder="Назавние книги" required>
			</div>
			<div>
				<input type="text" name="genre" id="genre" placeholder="Жанр" required>
			</div>
			<div>
				<input type="text" name="year" id="year" placeholder="Год издания" required>
			</div>
			<button class="send" name="send" id="send" value="send">Отправить</button>
		</form>  
	</div>
	<div class="modal" id="modal1" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
		<button class="close-button" id="close-button1" title="Закрыть модальное окно">Закрыть</button>
		<h1>Изменить книгу</h1>
		<form method="POST" action="#">
			<div>
				<input type="text" name="author" id="rauthor" placeholder="Автор"  required>
			</div>
			<div>
				<input type="text" name="name" id="rname" placeholder="Назавние книги" required>
			</div>
			<div>
				<input type="text" name="genre" id="rgenre" placeholder="Жанр" required>
			</div>
			<div>
				<input type="text" name="year" id="ryear" placeholder="Год издания" required>
			</div>
			<input type="hidden" id="userId" class="form-control">
			<button class="send" name="send" id="rem" value="Submit">Изменить</button>
		</form>  
	</div>
	<div class="container">
		<div class="wraper">
			<table class="table">
				<tr>
					<th>Автор</th>
					<th>Название книги</th>
					<th>Жанр</th>
					<th>Год издания</th>
					<th>Редактирование</th>
				</tr>
			</table>
			<a href="#" id="open-button" class="add_books">ДОБАВИТЬ КНИГУ &#10010;</a>
		</div>
	</div>
	<script src="<?=TEMPLATE?>script.js"></script>
</body>
</html>