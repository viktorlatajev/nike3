var img = document.getElementsByClassName('black_red');
var img1 = document.getElementsByClassName('gold');
var img2 = document.getElementsByClassName('wb');
var img3 = document.getElementsByClassName('white');
var img4 = document.getElementsByClassName('red');
var img5 = document.getElementsByClassName('black');



var elements = document.getElementsByClassName('main')[0];
var elements1 = document.getElementsByClassName('br_verh')[0];
var elements2 = document.getElementsByClassName('br_niz')[0];



console.log(elements);



// навешиваем обработчик на событие клик
img[0].addEventListener('click', function () {
  elements.src = "img/airforce/air_force.jpg";
  elements1.src = "img/br_verh.jpg";
  elements2.src = "img/br_niz.jpg";
})


img1[0].addEventListener('click', function () {
    elements.src = "img/airforce/gold.jpg";
    elements1.src = "img/gold_verh.jpg";
    elements2.src = "img/gold_niz.jpg";
})


img2[0].addEventListener('click', function () {
  elements.src = "img/airforce/wb.jpg";
  elements1.src = "img/wb_verh.jpg";
  elements2.src = "img/br_niz.jpg";
})


img3[0].addEventListener('click', function () {
  elements.src = "img/airforce/white_force.jpg";
  elements1.src = "img/white_verh.jpg";
  elements2.src = "img/gold_niz.jpg";
})


img4[0].addEventListener('click', function () {
  elements.src = "img/airforce/red.jpg";
  elements1.src = "img/red_verh.jpg";
  elements2.src = "img/gold_niz.jpg";
})


img5[0].addEventListener('click', function () {
  elements.src = "img/airforce/black.jpg";
  elements1.src = "img/black_niz.jpg";
  elements2.src = "img/br_niz.jpg";
})


