let reg = document.querySelector('#admin');
console.log(reg);

reg.onsubmit = (e) => {
  e.preventDefault();
  //console.log(e.target);
  let formData = new FormData(reg);

  document.querySelector('.input-admin').value = '';
  document.querySelector('.input-adminn').value = ''; 

  console.log( [formData.get('login'), formData.get('pass')] );

  fetch('../registre.php', {
    method: "POST",
    body: formData,
  })
    .then(response => response.text())
    .then(result => {
      console.log(result);

      switch (result) {
          case "admin":
            window.location.href = "admin/index.php";
              break;
          case "Такой пользователь уже зарегистрирован":
            window.location.href = "lk.php";
              break;
          case "ok":
            window.location.href = "lk.php";
              break;
          case "Не удалось добавить пользователя":
            alert ("Не удалось добавить пользователя");
              break;   
          case "Не все поля заполнены !!!":
            alert ("Не все поля заполнены !!!");
              break;
          default:
                alert("Что то пошло не так...");
      }
    });
}

          /*     if (result == "admin") {
                  alert("Вход админом");
                  window.location.href = "admin/index.php";
                } else {
                alert("ошибка админа");
              } 
              if (result == "ok" && result == "Такой пользователь уже зарегистрирован") {
                alert("Пользователь уже зарегистрирован");
                window.location.href = "lk.php";
              } else {
              alert("Регистрация прошла успешно");
              window.location.href = "lk.php";
              } */
 
 
//   window.location.href = "admin/data.php";
/*
$('#exampleModal').on('hiden.bs.modal', function (event) {
  let button = $(event.relatedTarget) // Button that triggered the modal
  //let recipient = button.data('whatever') 
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  let modal = $(this);
  //modal.find('.modal-title').text('New message  to ' + recipient);
  //modal.find('.modal-body input').val(recipient);
  let title = document.querySelector(this.modal-title);
  title.innerHTML = "ВХОД В Личный кабинет";
  document.querySelector('.input-admin').value = '';
  document.querySelector('.input-adminn').value = '';



})*/