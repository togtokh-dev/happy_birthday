<!DOCTYPE html>
<?php 
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; date_default_timezone_set("Asia/Ulaanbaatar");
  $name = "";
  if(isset($_GET['name'])){
    $name = $_GET['name'];
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>(ТӨРСӨН ӨДРИЙН МЭНД)</title>
    <meta property="og:url"                content="<?php echo $actual_link; ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="(ТӨРСӨН ӨДРИЙН МЭНД)" />
    <meta property="og:description"        content="(ТӨРСӨН ӨДРИЙН МЭНД)" />
    <meta property="og:image"              content="<?php echo $actual_link; ?>/banner.png" />
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="<?php echo $actual_link; ?>/favicon.ico" />
  </head>
  <body>
    <div class="card">
      <div class="imgBox">
        <div class="bark"></div>
        <img src="./banner.png">
      </div>
      <div class="details">
        <!-- <h4 class="color1">Munkhbayar Munkhbat</h2> -->
        <h4 class="color2 margin">(ТӨРСӨН ӨДРИЙН МЭНД)</h3>
          <p>Эрхэм <?php echo $name; ?> аа,</p>
          <p>...</p>
          <p>Амьдрал чинь аз жаргалаар дүүрэн</p>
          <p>байг</p>
          <p>Ажил чинь үйлс бүтээлээр дүүрэн</p>
          <p>байг</p>
          <p>Хүсэл бүхэн чинь сэтгэлчлэн бүтэж</p>
          <p>байг</p>
          <p>Хүссэн бүхэн чинь биелэх болтугай</p>
          <p class="text-right">Төрсөн өдрийн мэнд хүргэе,</p>
          <p><?php echo $name; ?> аа!</p>
          <p class="text-right">♥Togtokhoo</p>
      </div>
    </div>
  </body>
</html>
