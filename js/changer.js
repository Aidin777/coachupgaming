var all_spec = [
    'order_pripiat', 'case_pripiat_profi',
    'order_pripiat_set', 'case_pripiat_set'
];

// var data = $('.spec_form').serialize();
// console.log(data);

 $(document).ready(function () {
     var n = 0;
    for(var i = 0; i < all_spec.length; i++){
        n++;
        id = '#' + all_spec[i];
        console.log(id + ' Номер операции ' + n);
    }

});

//При нажатии на форму делается считывание данных формы

$('spec_form').val();
//iteam - элемент, i - номер, arr - массив
all_spec.forEach(function(item, i, all_spec){
    console.log('Элемент массива - ' + item);


});

$("form .spec_form").forEach(function (item, i, arr) {
    console.log(item);
    item.on('submit', function (e) {
        all_spec.forEach(function (elem, k, all) {
           if(elem == item.val()){

               $('#' + elem).on('submit', function () {

               })
               //отправка запроса


           }
        });
    })
});




function sendOrder() {
    $.ajax({
        async: true,
        cache: false,
        type: 'POST',
        url: 'views/v_warface/v_changer.php',
        //Отправка на сервер
        // data: {param: 'select', server: 'server'},
        data: data,
        ifModified: true,
        timeout: 3000,
        //Получаем с сервера, можно не указывать, по умолчанию сам понимает
        // dataType: 'text', // xml, html, script, json, text
        error: function (response) {
            console.log('Ошибка при запросе');
        },
        success : function (data) {
            $('#server').val(data['server']);
            console.log('Запрос выполнен!');
        }
    });
}