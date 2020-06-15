$(document).on('click', 'div a', function(e) {
    e.preventDefault();
    let page = $(this).attr('href');
    $('.zone-menu').load('/QuizzSA-DB/pages/' + page + '.php');

    console.log(page);

})