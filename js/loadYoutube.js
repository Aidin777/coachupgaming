
let data = $('.list-group a');
console.log('скрипт 2');

let modifyContent = function (panel, oldContent) {
    // console.log(panel);
    panel = panel.split(' ').join('');
//                console.log(panel);
    $(oldContent).empty();
    $(oldContent).append('<iframe width="100%" height="541" src="https://www.youtube.com/embed/' + panel + '" frameborder="0" allow="accelerometer"; autoplay; clipboard-write;  encrypted-media; gyroscope; picture-in-picture allowfullscreeen=""></frame>');
}

let checkData = [];

data.each(function(){
    $(this).on('click', function() {
        // console.log('НАчало');
        let oldContent = $(this).attr('href');
        // console.log('href= '+ oldContent);
        let panel = $(oldContent).text();
        // console.log('Середина' + panel);

        // Проверка на существование подобного элемента в массиве
        if(checkData.length == 0){
            checkData.push(oldContent);
            modifyContent(panel, oldContent);
        }else{
            let n = 0;
            checkData.forEach(function(item, i,arr){
                if(item == oldContent) {
                    n++;
                }
            });
            if( n == 0){
                checkData.push(oldContent);
                modifyContent(panel, oldContent);
            }
        }

    });
});


// <script>
// let data = $('.list-group a');
// console.log('срипт');
// data.each(function(){
//     $(this).on('click', function() {
//         console.log('НАчало');
//         let oldContent = $(this).attr('href');
//         console.log('href= '+ oldContent);
//         let panel = $(oldContent).text();
//         console.log('Середина' + panel);
//         if(panel != ''){
//             console.log('Апгред НУЖЕН');
// //                panel = 'src="https://www.yotube.com/embed/' + panel + '"';
//             console.log(panel);
//             panel = panel.split(' ').join('');
// //                console.log(panel);
//             $(oldContent).empty();
//             $(oldContent).append('<iframe width="100%" height="541" src="https://www.youtube.com/embed/' + panel + '" frameborder="0" allow="accelerometer"; autoplay; clipboard-write;  encrypted-media; gyroscope; picture-in-picture allowfullscreeen=""></frame>');
// //                $(oldContent).append(panel);
//         }else{
// //
//             console.log('ролик сорммирован');
//         }
//
//         console.log('конец');
//     });
// });
// </script>