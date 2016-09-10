$('.bestReceptsMain').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});


$('.bestReceptsLink').hover(
  function() {
    $(this).children('.bestReceptsImg').addClass('imageHover');
    $(this).children('.bestReceptsDesc').css('display', 'block');
  }, function() {
    $(this).children('.bestReceptsImg').removeClass('imageHover');
    $(this).children('.bestReceptsDesc').css('display', 'none');
  }
);


$("#zayavka").click(function(){

    var name = $("#itemScheduleFormName").val();
    var phone = $("#itemScheduleFormPhone").val();

      $.ajax({
          type: "POST",
          url: "../inc/mailZayavka.php",
          data: { name: name, phone: phone }
        }).done(function() {
          alert( "Заявка успешно отправлена");
          $("#itemScheduleFormName").val("")
          var phone = $("#itemScheduleFormPhone").val("");
        });
  });


$('#tab-container').easytabs();