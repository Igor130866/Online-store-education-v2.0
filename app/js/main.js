let reg = document.querySelector('#admin');
console.log(reg);

reg.onsubmit = e => {
  e.preventDefault(); //console.log(e.target);

  let formData = new FormData(reg);
  document.querySelector('.input-admin').value = '';
  document.querySelector('.input-adminn').value = '';
  console.log([formData.get('login'), formData.get('pass')]);
  fetch('../registre.php', {
    method: "POST",
    body: formData
  }).then(response => response.text()).then(result => {
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
        alert("Не удалось добавить пользователя");
        break;

      case "Не все поля заполнены !!!":
        alert("Не все поля заполнены !!!");
        break;

      default:
        alert("Что то пошло не так...");
    }
  });
};
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


$(function () {
  $('.carousel').carousel({
    interval: 1500
  });
});
let forma = document.querySelector('#post');

forma.onsubmit = function (event) {
  event.preventDefault();
  console.log(e.target);
  let formDataa = new FormData(forma);
  document.querySelector('.input-request').value = '';
  document.querySelector('.input-requestt').value = '';
  document.querySelector('.input-requesttt').value = '';
  fetch('lib_query/clients_obr.php', {
    method: 'POST',
    body: formDataa // mode: 'no-cors', // same-origin, no-cors

  }).then(response => response.text()) //.then(result => {console.log(result)});
  .then(result => console.log(result));
};
/* $(document).ready(function() {
alert(jQuery.fn.jquery);
});  
 */


$('.put-basket').click(function () {
  let tid = $(this).attr("tid");
  console.log(tid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/addtocart.php",
    data: "id=" + tid,
    dataType: "html",
    cache: false,
    success: function (data) {
      loadcart();
    }
  });
});
$('.delete-basket').click(function () {
  //let tid = $(this).attr("tid");
  //console.log(tid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/deletecart.php",
    //data: "id="+tid,
    dataType: "html",
    cache: false,
    success: function (data) {
      loadcart();
    }
  });
});
$('.count-minus').click(function () {
  let iid = $(this).attr("iid");
  console.log(iid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/count-minus.php",
    data: "id=" + iid,
    dataType: "html",
    cache: false,
    success: function (data) {
      $('#input-id' + iid).html(data);
      loadcart();
    }
  });
});
$('.count-plus').click(function () {
  let iid = $(this).attr("iid");
  console.log(iid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/count-plus.php",
    data: "id=" + iid,
    dataType: "html",
    cache: false,
    success: function (data) {
      $('#input-id' + iid).html(data);
      loadcart();
    }
  });
});
$(document).ready(function () {
  loadcart();
});
$('.block-basket').click(function () {
  loadcart();
}); // загрузка в  корзину

function loadcart() {
  $.ajax({
    type: "POST",
    url: "../../lib_query/loadcart.php",
    dataType: "html",
    cache: false,
    success: function (data) {
      if (data == "корзина пуста") {
        $(".block-basket").html("Корзина пуста");
      } else {
        $(".block-basket").html(data);
      }
    }
  });
}
//# sourceMappingURL=../maps/main.js.map
