<?php require_once 'inc/header.php'?>
      <div class="modal" id="modal" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
    <button class="close-button" id="close-button" title="Закрыть модальное окно">Закрыть</button>
            <h1>Добавить книгу</h1>
            <form method="POST" action="#">
                <div>
                  <label for="name">Автор</label>
                  <input type="text" name="author" id="author" required>
                </div>
                <div>
                  <label for="name">Название книги</label>
                  <input type="text" name="name" id="name" required>
                </div>
                <div>
                  <label for="name">Жанр</label>
                  <input type="text" name="genre" id="genre" required>
                </div>
                <div>
                  <label for="name">Год издания</label>
                  <input type="text" name="year" id="year" required>
                </div>
                <button class="send" name="send" id="send" value="send">Отправить</button>
            </form>  
        </div>
        <div class="modal" id="modal1" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
    <button class="close-button" id="close-button1" title="Закрыть модальное окно">Закрыть</button>
            <h1>Изменить книгу</h1>
            <form method="POST" action="#">
                <div>
                  <label for="name">Автор</label>
                  <input type="text" name="author" id="rauthor" required>
                </div>
                <div>
                  <label for="name">Название книги</label>
                  <input type="text" name="name" id="rname" required>
                </div>
                <div>
                  <label for="name">Жанр</label>
                  <input type="text" name="genre" id="rgenre" required>
                </div>
                <div>
                  <label for="name">Год издания</label>
                  <input type="text" name="year" id="ryear" required>
                </div>
                <input type="hidden" id="userId" class="form-control">
                <button class="send" name="send" id="rem" value="Submit">Изменить</button>
            </form>  
        </div>
    <div class="container">
        <div class="wraper">
          <?php if ($book):  ?> 
            <table class="table">
                <tr >
                  <th>Автор</th>
                  <th>Название книги</th>
                  <th>Жанр</th>
                  <th>Год издания</th>
                  <th>Редактирование</th>
                  </tr>
                  <?php foreach ($book as $key) :?>
                 <tr id="<?=$key['id']?>">
                  <td data-target="author"><?=$key['author']?></td>
                  <td data-target="name"><?=$key['name']?></td>
                  <td data-target="genre"><?=$key['genre']?></td>
                  <td data-target="year"><?=$key['year']?></td>
                  <td><a href="#" data-id="<?=$key['id']?>" data-role="del"><span class="del">&#10006;</span></a>
                  <a href="#" data-id="<?=$key['id']?>" data-role="update" ><span class="rem">&#9999;</span></a></td>
                 </tr>
                 <?php endforeach ?>
            </table>
          <?php endif ?>
            <a href="#" id="open-button" class="add_books">ДОБАВИТЬ КНИГУ &#10010;</a>
        </div>
    </div>
    <script src="<?=TEMPLATE?>script.js"></script>
</body>
</html>