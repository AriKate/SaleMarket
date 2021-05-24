$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Дякуємо за повідомлення! Скоро ми Вам відповімо!");
			$("#form").trigger("reset");
		});
		return false;
	});

    $('.basket__icon').on('click',function () {
        $('.basket__box').show();
    });

    $('.close').on('click',function () {
        $('.basket__box').hide();
    })
});