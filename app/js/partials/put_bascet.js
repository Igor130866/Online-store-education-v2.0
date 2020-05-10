$('.put-basket').click(function(){
  let tid = $(this).attr("tid");
  console.log(tid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/addtocart.php",
    data: "id="+tid,
    dataType: "html",
    cache: false,
    success: function(data){
      loadcart();
    }
  });
});

$('.delete-basket').click(function(){
  //let tid = $(this).attr("tid");
  //console.log(tid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/deletecart.php",
    //data: "id="+tid,
    dataType: "html",
    cache: false,
    success: function(data){
      loadcart();
    }
  });
});

$('.count-minus').click(function() {
  let iid = $(this).attr("iid");
    console.log(iid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/count-minus.php",
    data: "id="+iid,
    dataType: "html",
    cache: false,
    success: function(data) {     
      $('#input-id'+iid).html(data);
      loadcart();
    }   
  });
});

$('.count-plus').click(function() {
  let iid = $(this).attr("iid");
    console.log(iid);
  $.ajax({
    type: "POST",
    url: "../../lib_query/count-plus.php",
    data: "id="+iid,
    dataType: "html",
    cache: false,
    success: function(data) {     
      $('#input-id'+iid).html(data);
      loadcart();
    }   
  });
});

$(document).ready(function () {
  loadcart();
});

$('.block-basket').click(function(){
  loadcart();
});

// загрузка в  корзину
function loadcart() {
  $.ajax({
    type: "POST",
    url: "../../lib_query/loadcart.php",
    dataType: "html",
    cache: false,
    success: function(data){
      if (data == "корзина пуста")
      {
        $(".block-basket").html("Корзина пуста");
      } else {
        $(".block-basket").html(data);
      }

    }
  })
}