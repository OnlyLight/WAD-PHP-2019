<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <title>Bill</title>
  <?php
    $checkName = false;
    $checkAddress = false;
    $checkCountry = false;
    $checkSex = false;
    $checkDateStart = false;
    $checkDateEnd = false;
    $checkNumStart = false;
    $checkNumEnd = false;
    $dateEndValue = 0;
    $dateStartValue = 0;
    $numStart = 0;
    $numEnd = 0;
    if(isset($_POST["complete"])) {
      if($_POST["name"]) {
        $checkName = true;
      }
      if($_POST["address"]) {
        $checkAddress = true;
      }
      if($_POST["ctry"]) {
        $checkCountry = true;
      }
      if($_POST["sex"]) {
        $checkSex = true;
      }
      if($_POST["date-start"]) {
        $checkDateStart = true;
        $dateStartValue = $_POST["date-start"];
      }
      if($_POST["date-end"]) {
        $checkDateEnd = true;
        $dateEndValue = $_POST["date-end"];
      }
      if($_POST["num-start"]) {
        $checkNumStart = true;
        $numStart = $_POST["num-start"];
      }
      if($_POST["num-end"]) {
        $checkNumEnd = true;
        $numEnd = $_POST["num-end"];
      }
    }

    $total = 0;

    if($numEnd >= $numStart) {
      $sum = $numEnd - $numStart;

      if($sum <= 100) {
        $total = $sum * 1500;
      } else if ($sum > 100 && $sum <= 300) {
        $total = $sum * 2100;
      } else {
        $total = $sum * 3500;
      }
    }
  ?>
</head>
<body>
  <form class="form" method="POST" action="#">
    <div class="form__control">
      <label for="name">Họ tên</label>
      <input id="name" name="name" type="text" require value="<?php
        if($checkName) {
          echo $_POST["name"];
        }
      ?>">
      <?php
        if(isset($_POST["complete"])) {
          if($checkName) echo "<span style='color: green;'>OK !!!!</span>"; 
          else echo "<span style='color: red;'>Please input data !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label for="address">Địa chỉ</label>
      <input id="address" name="address" type="text" require value="<?php
        if($checkAddress) {
          echo $_POST["address"];
        }
      ?>">
      <?php
        if(isset($_POST["complete"])) {
          if($checkAddress) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='color: red;'>Please input data !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label for="country">Tỉnh thành</label>
      <select name="ctry" id="country" class="form__group-select">
        <option value="1">Đà Nẵng</option>
        <option value="2">Huế</option>
        <option value="3">Khác...</option>
      </select>
      <?php
        if(isset($_POST["complete"])) {
          if($checkCountry) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='color: red;'>Please input data !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label>Giới tính</label>
      <div class="form__group-radio">
        <input id="male" type="radio" name="sex" value="0" checked>
        <label for="male" class="form__sex">Nam</label>
        <input id="female" type="radio" name="sex" value="1">
        <label for="female" class="form__sex">Nữ</label>
      </div>
      <?php
        if(isset($_POST["complete"])) {
          if($checkSex) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='display: block; color: red;'>Please input data !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label for="date-start">Ngày sử dụng đầu kỳ</label>
      <input id="date-start" name="date-start" type="date" value="<?php
        if ($checkDateStart) {
          echo $dateStartValue;
        }
      ?>">
      <?php
        if(isset($_POST["complete"])) {
          if($checkDateStart) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='color: red;'>Please input data !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label for="date-end">Ngày sử dụng cuối kỳ</label>
      <input id="date-end" name="date-end" type="date" value="<?php
        if (($checkDateEnd) && ($dateEndValue >= $dateStartValue)) {
          echo $dateEndValue;
        }
      ?>">
      <?php
        if(isset($_POST["complete"])) {
          if($checkDateEnd) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='color: red;'>Please input data !!!!</span>";
  
          if($dateEndValue < $dateStartValue) echo "<span style='color: red;'>Please input date end greater date start !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label for="num-start">Số điện đầu kỳ</label>
      <input id="num-start" name="num-start" type="number" value="<?php
        if($checkNumStart) {
          echo $numStart;
        }
      ?>">
      <?php
        if(isset($_POST["complete"])) {
          if($checkNumStart) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='color: red;'>Please input data !!!!</span>";
        }
      ?>
    </div>
    <div class="form__control">
      <label for="num-end">Số điện cuối kỳ</label>
      <input id="num-end" name="num-end" type="number" value="<?php
        if($checkNumEnd && ($numEnd >= $numStart)) {
          echo $numEnd;
        }
      ?>">
      <?php
        if(isset($_POST["complete"])) {
          if($checkNumEnd) echo "<span style='color: green;'>OK !!!!</span>";
          else echo "<span style='color: red;'>Please input data !!!!</span>";
  
          if($numEnd < $numStart) echo "<p style='color: red;'>Please input num end greater num start</p>";
        }
      ?>
    </div>
    <div class="form__control">
      <button type="submit" name="complete" class="form__button">Complete</button>
    </div>
  </form>
</body>
</html>