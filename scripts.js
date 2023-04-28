var button = document.getElementsByClassName('black_red');
var button1 = document.getElementsByClassName('gold');
var button2 = document.getElementsByClassName('wb');
var button3 = document.getElementsByClassName('white');
var button4 = document.getElementsByClassName('red');
var button5 = document.getElementsByClassName('black');



var elements = document.getElementsByClassName('main')[0];
console.log(elements);


// навешиваем обработчик на событие клик
button[0].addEventListener('click', function () {
  elements.src = "img/air_force.jpg";
})


button1[0].addEventListener('click', function () {
    elements.src = "img/gold.jpg";
})


button2[0].addEventListener('click', function () {
  elements.src = "img/wb.jpg";
})


button3[0].addEventListener('click', function () {
  elements.src = "img/white_force.jpg";
})


button4[0].addEventListener('click', function () {
  elements.src = "img/red.jpg";
})


button5[0].addEventListener('click', function () {
  elements.src = "img/black.jpg";
})
