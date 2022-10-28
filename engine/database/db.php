<?php
date_default_timezone_set('Africa/Accra');
session_start();
include('../../path.php');



          // should return JSON with success as true

if (isset($_POST['submit_calc']))
{
  $mobile_network = stripcslashes(trim($_POST['mobile_network']));
  $transaction_type = stripcslashes(trim($_POST['transaction_type']));
  $transaction_point = stripcslashes(trim($_POST['transaction_point']));
  $amount = stripcslashes(trim($_POST['amount']));

  echo "<script>$
  ('.calc_container').show();
  $('.loading_screen').fadeOut();
  </script>";

  //$mobile_network = mysqli_real_escape_string($conn,$mobile_network);
  //$transaction_type = mysqli_real_escape_string($conn,$transaction_type);
  //$transaction_point = mysqli_real_escape_string($conn,$transaction_point);
  //$amount = mysqli_real_escape_string($conn,$amount);

  function MoneyTransfer($mm_mobile_network,$mm_amount,$mm_transaction_type,$mm_transaction_point)
  {
    //Merchant or Agent
    if ($mm_transaction_point == 1)
    {
      //Money Transfer
      if ($mm_transaction_type == 1)
      {
        if ($mm_amount > 0 && $mm_amount < 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : $mm_amount - 2.50;
          //$mm_fee_amount = $mm_amount - 1.50;
        $mm_e_levy_fee = 1.75/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
        elseif ($mm_amount >= 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : 5/100 * $mm_amount;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }
      //Cash out
      elseif ($mm_transaction_type == 2)
      {
        if ($mm_amount > 0 && $mm_amount < 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : $mm_amount - 0.50;
          //$mm_fee_amount = $mm_amount - 1.50;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
        elseif ($mm_amount >= 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : 1/100 * $mm_amount;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 0;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }
      //Money Transfer(P2P)
      if ($mm_transaction_type == 3)
      {
        if ($mm_amount > 0 && $mm_amount < 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : $mm_amount - 0.50;
          //$mm_fee_amount = $mm_amount - 1.50;
        $mm_e_levy_fee = 1.75/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
        elseif ($mm_amount >= 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : 1/100 * $mm_amount;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }
      //Money Transfer(A2C)
      elseif ($mm_transaction_type == 4)
      {
        if ($mm_amount > 0 && $mm_amount < 50)
        {
        $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : $mm_amount - 1.50;
        //$mm_fee_amount = $mm_amount - 1.50;
        $mm_e_levy_fee = 1.75/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
        elseif ($mm_amount >= 50)
        {
        $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : 3/100 * $mm_amount;
        //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }
    }

    //Mobile
    elseif ($mm_transaction_point == 2)
    {
      //Money Transfer(P2P)
      if ($mm_transaction_type == 3)
      {
        if ($mm_amount > 0 && $mm_amount < 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : $mm_amount - 0.50;
          //$mm_fee_amount = $mm_amount - 1.50;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
        elseif ($mm_amount >= 50)
        {
          $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : 1/100 * $mm_amount;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }
      //Money Transfer(A2C)
      elseif ($mm_transaction_type == 4)
      {
        if ($mm_amount > 0 && $mm_amount < 50)
        {
        $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : $mm_amount - 1.50;
        //$mm_fee_amount = $mm_amount - 1.50;
        $mm_e_levy_fee = 1.75/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
        elseif ($mm_amount >= 50)
        {
        $mm_fee_amount = ($mm_mobile_network > 1) ? 0 : 3/100 * $mm_amount;
        //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 1.5/100 * $mm_amount;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }
      //Money Transfer
      else if ($mm_transaction_type == 1)
      {
        $mm_fee_amount = 0;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 0;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
      }
      //Cash out
      else if ($mm_transaction_type == 2)
      {
        $mm_fee_amount = 0;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 0;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
        }
      }


      else
      {
        $mm_fee_amount = 0;
          //$mm_fee_amount = 3/100 * $mm_amount;
        $mm_e_levy_fee = 0;
        $mm_initial_amount = $mm_amount;
        $mm_new_amount = $mm_amount - $mm_e_levy_fee - $mm_fee_amount;
      }



return $MoneyTransferValue = array('Final_Amount' => number_format($mm_new_amount,2), 'E_Levy_Fee' => number_format($mm_e_levy_fee,2), 'Mobile_Money_Amount' => number_format($mm_initial_amount,2), 'Mobile_Money_Fee' => number_format($mm_fee_amount,2));
  }


  switch ($mobile_network)
  {
    case 1:
    //MTN
    $MoneyTransferValue = MoneyTransfer($mobile_network,$amount,$transaction_type,$transaction_point);
    echo "
    <div class='calc_detail_box'>
      <h2>Details</h2>
      <table>
        <tbody>
          <tr>
            <td>Amount:</td>
            <td>GHC ".$MoneyTransferValue['Mobile_Money_Amount']."</td>
          </tr>
          <tr>
            <td>E-levy charge:</td>
            <td>GHC ".$MoneyTransferValue['E_Levy_Fee']."</td>
          </tr>
          <tr>
            <td>Mobile Money charge:</td>
            <td>GHC ".$MoneyTransferValue['Mobile_Money_Fee']."</td>
          </tr>
          <tr>
            <td>New amount:</td>
            <td>GHC ".$MoneyTransferValue['Final_Amount']."</td>
          </tr>
        </tbody>
      </table>
    </div>";
      break;
    case 2:
    //Vodafone
    $MoneyTransferValue = MoneyTransfer($mobile_network,$amount,$transaction_type,$transaction_point);
    echo "
    <div class='calc_detail_box'>
      <h2>Details</h2>
      <table>
        <tbody>
          <tr>
            <td>Amount:</td>
            <td>GHC ".$MoneyTransferValue['Mobile_Money_Amount']."</td>
          </tr>
          <tr>
            <td>E-levy charge:</td>
            <td>GHC ".$MoneyTransferValue['E_Levy_Fee']."</td>
          </tr>
          <tr>
            <td>Mobile Money charge:</td>
            <td>GHC 0</td>
          </tr>
          <tr>
            <td>New amount:</td>
            <td>GHC ".$MoneyTransferValue['Final_Amount']."</td>
          </tr>
        </tbody>
      </table>
    </div>";
      break;
    case 3:
      //AirtelTigo
      $MoneyTransferValue = MoneyTransfer($mobile_network,$amount,$transaction_type,$transaction_point);
      echo "
      <div class='calc_detail_box'>
        <h2>Details</h2>
        <table>
          <tbody>
            <tr>
              <td>Amount:</td>
              <td>GHC ".$MoneyTransferValue['Mobile_Money_Amount']."</td>
            </tr>
            <tr>
              <td>E-levy charge:</td>
              <td>GHC ".$MoneyTransferValue['E_Levy_Fee']."</td>
            </tr>
            <tr>
              <td>Mobile Money charge:</td>
              <td>GHC ".$MoneyTransferValue['Mobile_Money_Fee']."</td>
            </tr>
            <tr>
              <td>New amount:</td>
              <td>GHC ".$MoneyTransferValue['Final_Amount']."</td>
            </tr>
          </tbody>
        </table>
      </div>";
        break;
    default:
      echo "Error";
  }

}
 ?>
