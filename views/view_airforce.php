<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIKE AIR FORCE 1 LOW CR7 BY YOU</title>
    <link rel="icon" href="img/logo1.ico" type="images/x-icon">
    <link rel="stylesheet" href="css/styleproduct.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


  <section id="product">
    <!-- NAVBAR -->
    <a class="navbar-brand" href="index.php">
      <img src="img/logos/logoblack.png" alt="logo">
    </a>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item1">
                <a class="nav-link smooth-scroll" aria-current="page" href="index.php#new">Новинки</a>
              </li>
              <li class="nav-item2">
                <a class="nav-link" href="#">Мужчины</a>
              </li>
              <li class="nav-item3">
                <a class="nav-link" href="#">Женщины</a>
              </li>
              <li class="nav-item4">
                <a class="nav-link" href="#">Дети</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="#">Распродажи</a>
              </li>
              <li class="nav-item6">
                <a class="nav-link" href="index.php#collection">Коллекции</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <a class="korzina" href="korzina.html">
      <img class="korzina" src="img/icons/korzinablue.png" alt="korzina">
    </a>
    <img class="heart" src="img/icons/border_heart.png" alt="heart">
    <!-- NAVBAR END -->


    <!-- PRODUCT -->
    <p class="unisex">Унисекс обувь   /Nike Air Force 1 Low CR7 By You</p>
    <img class="main" src="img/airforce/air_force.jpg" alt="airforce">
    <p class="model">Модель  DD3746-991</p>
    <h1 class="name">Nike Air Force 1 Low CR7 By You</h1>
    <p class="price">204 €</p>
    <!-- COLOR CHOICE -->
    <img class="black_red" src="img/airforce/air_force.jpg" alt="br">
    <img class="gold" src="img/airforce/gold.jpg" alt="gold">
    <img class="wb" src="img/airforce/wb.jpg" alt="wb">
    <img class="white" src="img/airforce/white_force.jpg" alt="white">
    <img class="red" src="img/airforce/red.jpg" alt="red">
    <img class="black" src="img/airforce/black.jpg" alt="black">
    <!-- COLOR CHOICE END -->

    <!-- SIZE CHOICE -->
    <p class="razmer">Выбери размер</p>
    <a class="razmer" href="#">Расчет моего размера</a>

    <div class="rectangle39"></div>
    <p class="razmer39">39</p>
    <div class="rectangle405"></div>
    <p class="razmer405">40.5</p>
    <div class="rectangle41"></div>
    <p class="razmer41">41</p>
    <div class="rectangle415"></div>
    <p class="razmer415">41.5</p>
    <div class="rectangle42"></div>
    <p class="razmer42">42</p>
    <div class="rectangle425"></div>
    <p class="razmer425">42.5</p>
    <div class="rectangle43"></div>
    <p class="razmer43">43</p>
    <div class="rectangle435"></div>
    <p class="razmer435">43.5</p>
    <!-- SIZE CHOICE END -->

    <button class="korzina">Добавить в корзину</button>

    <a href="#" class="soob">Сообщить о наличии моего размера</a>

    
    

  </section>

  <section id="description">

    <img class="br_verh" src="img/up/br_verh.jpg" alt="br_verh">
    <img class="br_niz" src="img/down/br_niz.jpg" alt="br_niz">


    <p class="hdescr">Описание товара</p>
    <p class="descr">
      Кроссовки Nike Air Force 1 Low CR7 By You дополнены
      деталями в безупречном вкусе Криштиану Роналду. 
      Это уникальная версия AF1. Выбери материал верха, 
      например гладкую или мятую кожу, серебристые и золотые накладки
      с зеркальным хромированным покрытием, а также тщательно продуманные детали. 
      Если любишь сдержанную роскошь или суперпрокачанный дизайн, 
      то эти кроссовки будут именно такими, какими захочешь ты.
    </p>
    <!-- PRODUCT END -->

    <div class="new">
      <h1 class="new">Тебе может понравиться</h1>

      <?php foreach ($arrayAll[3] as $data) {?>

        <!-- СКИДКА, КОТОРАЯ НАЗНАЕТСЯ ТОЛЬКО ТАМ, ГДЕ НУЖНО -->
        <?php if ($data["discount"] == "1") {
            $discount = '<span class="skidka">СКИДКА</span>';
        } else {
            $discount = "";
        }?>

        <!-- НОВИНКА, КОТОРАЯ НАЗНАЕТСЯ ТОЛЬКО ТАМ, ГДЕ НУЖНО -->
        <?php if ($data["new"] == "1") {
            $new = '<span>НОВИНКА</span>';
        } else {
            $new = "";
        }?>

        <!-- ВЫВОД ТОВАРОВ "ТЕБЕ МОЖЕТ ПОНРАВИТЬСЯ" -->
        <div class="<?=$data["class"]?>">
          <a href="#description">
            <img src="<?=$data["image_path"]?>" alt="lebron">
          </a>
          <p class="new"><?=$new?></p>
          <p class="through"><?=$data["price"]?></p>
          <p class="price"><?=$data["discount_price"].$discount?></p>
          <p class="name"><?=$data["name"]?></p>
          <p class="colors"><?=$data["colors"]?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- СКРИПТ ОТВВЕЧАЮЩИЙ ЗА СМЕНУ КАРТИНОК И ВЫБОРА РАЗМЕРА ПО НАЖАТИЮ -->
  <script src="scripts.js"></script>
