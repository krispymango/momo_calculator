<?php
session_start();
include 'path.php';
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mobile Money Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/mainStyle.css">
    <link rel="stylesheet" href="assets/css/mobileStyle.css">
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css">
    <script src="assets/js/jquery-ui/external/jquery/jquery.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/functionality.js"></script>
  </head>
  <body>

    <!-- Loading Screen content -->
    <div class="loading_screen">
      <img src="assets/img/loading/loading.gif">
    </div>
    <!-- Loading Screen content -->


    <!-- Header content -->
    <?php include(ROOT_PATH . '/include/navContent.php'); ?>
    <!-- Header content -->




    <!-- Main content -->

<div class="">
  <div class="question_box">
    <div class="qtn_sgn">
      <i id="sgn_one" class="fas fa-2x fa-coins"></i>
    </div>
  <h1><span>Mobile Money Calculator</span></h1>
  </div>
  <form class="MMContentWrapper" action="proceses.php" method="post">
    <select id="mn" name="mobile_network" required>
      <option value="">--Mobile Network--</option>
      <option value="1">MTN</option>
      <option value="2">Vodafone</option>
      <option value="3">Airtel/Tigo</option>
    </select>
    <select id="tp" name="transaction_point" required>
      <option value="">--Transaction Point--</option>
      <option value="1">At Merchant / Agent</option>
      <option value="2">Mobile</option>
    </select>
    <select id="tt" name="transaction_type" required>
      <option value="">--Transaction Type--</option>
      <option id="MTransfer" value="1">Money Transfer</option>
      <option id="Cout" value="2">Cash-out</option>
      <option id="PTwoP" value="3">Money Transfer(P2P)</option>
      <option id="ATwoC" value="4">Money Transfer(A2C)</option>
    </select>
    <input id="amnt" onkeypress="return onlyNumberKey(event)" type="number" name="amount" placeholder="--Amount--" required>
    <input id="submit" type="submit" name="submit_calc" value="Calculator">
  </form>

  <div class="calc_container">
    <div class="calc">
      <div class="calc_detail">
      </div>
      <i onclick="CloseDetailButton()" class="fas fa-lg fa-times"></i>
    </div>
</div>

</div>
    <!-- Main content -->


    <script src="assets/js/calculator.js"></script>
  </body>
</html>
