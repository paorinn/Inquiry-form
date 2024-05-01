<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-size:16px;
      margin: 5px;
    }
    h1 {
      font: Inika; 
      font-size: 35px;
      font-weight: 400;
      color: #8B7969;
      letter-spacing:-4px;
      margin: 45.61px;
    }
    .content__table {
      margin:10px;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content__table">
    @yield('content')
  </div>
</body>
</html>