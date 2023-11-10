//Открытие логина и закрытие
$('.open-popup-login').click(function(e) {
    e.preventDefault();
    $('.popup-bg-login').fadeIn(800);
});

$('.close-popup-login').click(function() {
    $('.popup-bg-login').fadeOut(800);
});
//Открытие регистрации и закрытие
$('.open-popup-reg').click(function(e) {
    e.preventDefault();
    $('.popup-bg-reg').fadeIn(800);
});

$('.close-popup-reg').click(function() {
    $('.popup-bg-reg').fadeOut(800);
});
//Открытие добавления фотки
$('.login-main-levo-b1').click(function(e){
    e.preventDefault();
    $('.popup-load-image').fadeIn(400);
    $('.vipadmenu').slideUp();
})
$('.close-popup-load-image').click(function() {
    $('.popup-load-image').fadeOut(400);
});
//Смена аватарки
$('.smenaavatarki-sm').click(function(e){
    e.preventDefault();
    $('.popup-add-avatar').fadeIn(400);
    $('.vipadmenu').slideUp();
})
$('.close-popup-add-avatar').click(function() {
    $('.popup-add-avatar').fadeOut(400);
});

// Открытие выпадающего меню полльзователя
let flag = false;
$('.vipadmenu-block').click(function(){
    if(!flag){
        $('.vipadmenu').slideDown();
    } else{
        $('.vipadmenu').slideUp();
    }
    flag = !flag;
});
// Попап добавление изображения
$('.input-file input[type=file]').on('change', function(){
	let file = this.files[0];
	$(this).closest('.input-file').find('.input-file-text').html(file.name);
});


