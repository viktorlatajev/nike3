var img = document.getElementsByClassName('black_red');
var img1 = document.getElementsByClassName('gold');
var img2 = document.getElementsByClassName('wb');
var img3 = document.getElementsByClassName('white');
var img4 = document.getElementsByClassName('red');
var img5 = document.getElementsByClassName('black');



var elements = document.getElementsByClassName('main')[0];
var elements1 = document.getElementsByClassName('br_verh')[0];
var elements2 = document.getElementsByClassName('br_niz')[0];

var imgborder = document.getElementsByClassName('border_heart')[0];
var elements3 = document.getElementsByClassName('pink_heart')[0];


console.log(elements);



// навешиваем обработчик на событие клик
img[0].addEventListener('click', function () {
  elements.src = "img/air_force.jpg";
  elements1.src = "img/br_verh.jpg";
  elements2.src = "img/br_niz.jpg";
})


img1[0].addEventListener('click', function () {
    elements.src = "img/gold.jpg";
    elements1.src = "img/gold_verh.jpg";
    elements2.src = "img/gold_niz.jpg";
})


img2[0].addEventListener('click', function () {
  elements.src = "img/wb.jpg";
  elements1.src = "img/wb_verh.jpg";
  elements2.src = "img/br_niz.jpg";
})


img3[0].addEventListener('click', function () {
  elements.src = "img/white_force.jpg";
  elements1.src = "img/white_verh.jpg";
  elements2.src = "img/gold_niz.jpg";
})


img4[0].addEventListener('click', function () {
  elements.src = "img/red.jpg";
  elements1.src = "img/red_verh.jpg";
  elements2.src = "img/gold_niz.jpg";
})


img5[0].addEventListener('click', function () {
  elements.src = "img/black.jpg";
  elements1.src = "img/black_niz.jpg";
  elements2.src = "img/br_niz.jpg";
})

imgborder[0].addEventListener('click', function () {
  imgborder.src = "img/pink_heart.png";
})
