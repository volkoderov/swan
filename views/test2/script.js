    //Модально окно
    var modal = document.querySelector("#modal"),
            closeButton = document.querySelector("#close-button"),
            openButton = document.querySelector("#open-button"),
            send = document.querySelector("#send"),
            modal1 = document.querySelector("#modal1"),
            closeButton1 = document.querySelector("#close-button1"),
            rem = document.querySelector("#rem");

          closeButton.addEventListener("click", function() {
          modal.classList.toggle("closed");
    });
          closeButton1.addEventListener("click", function() {
          modal1.classList.toggle("closed");
    });
          send.addEventListener("click", function() {
          modal.classList.toggle("closed");
    });
          rem.addEventListener("click", function() {
          modal1.classList.toggle("closed");
    });

        openButton.addEventListener("click", function() {
            modal.classList.toggle("closed");
    });
  
      $(document).ready(function(){

        //Добавление книги

      $("#send").click(function(e){
        e.preventDefault();
        var author=$("#author").val();
        var name=$("#name").val();
        var genre=$("#genre").val();
        var year=$("#year").val(); 

        $.ajax({
           url: './',
           type: 'POST',
           data: {author: author, name: name, genre: genre, year: year,act: 'send'},
           success: function(res){
           $(".table").append(res);
           $('#author').val('');
            $('#name').val('');
            $('#genre').val('');
            $('#year').val('');
         },
        });
    });

        //Удаление книги

      $(document).on('click','a[data-role=del]',function(){
            var id = $(this).data('id');
            $(this).closest('tr').remove();
            $.ajax({
           url: './',
           type: 'POST',
           data: {id: id,act: 'del'},
            });
        });

      //Редактирование книги
      
       $(document).on('click','a[data-role=update]',function(){
            var id = $(this).data('id');
            var author  = $('#'+id).children('td[data-target=author]').text();
            var name  = $('#'+id).children('td[data-target=name]').text();
            var genre  = $('#'+id).children('td[data-target=genre]').text();
            var year  = $('#'+id).children('td[data-target=year]').text();
            $('#rauthor').val(author);
            $('#rname').val(name);
            $('#rgenre').val(genre);
            $('#ryear').val(year);
            $('#userId').val(id);
            modal1.classList.toggle("closed");
          });


        $("#rem").click(function(e){
        e.preventDefault();
        var author=$("#rauthor").val();
        var name=$("#rname").val();
        var genre=$("#rgenre").val();
        var year=$("#ryear").val(); 
        var id=$("#userId").val();  

            $.ajax({
              url      : './',
              method   : 'POST', 
              data     : {author: author, name: name, genre: genre, year: year, id: id, act:'edit'},
               success  : function(){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=author]').text(author);
                             $('#'+id).children('td[data-target=name]').text(name);
                             $('#'+id).children('td[data-target=genre]').text(genre);
                             $('#'+id).children('td[data-target=year]').text(year);
                         }    
              });
          });
       });