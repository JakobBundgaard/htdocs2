<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>
    <?= $_title ?? 'Momondo' ?>
  </title>
</head>
<body oncontextmenu="toogle_menu(); return false">  

  <div id="menu" onclick="toogle_menu()">
    <div class="left">
      left
    </div>
  </div>

  <nav>
    <a href="/">Momondo</a>
    <button onclick="toogle_menu()">☰</button>
  </nav>
