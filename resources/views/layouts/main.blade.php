<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-svg-core/styles.css">
    
    <title>@yield('title') Центр образования и карьеры «ПроЗнание»</title>
    <meta name="description" content="высшее образование среднее профессиональное образование дистанционно Уфа Башкортостан колледж вуз университет бакалавриат магистратура">
</head>
<body>
  <div class="wrapper">

  
    @include('include.header')
    @include('include.modal')
    @yield('body')
  </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'
      
        
      </script>
     <script src="https://api-maps.yandex.ru/2.1/?apikey=0efa812f-58cf-4268-b971-d5a872e39335&lang=ru_RU%22%3E"> </script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/main.js"></script>
</body>
</html>
