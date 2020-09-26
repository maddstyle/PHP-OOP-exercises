<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="container">
  
 <div class="page-header">
   <h1 class="text-muted">fun times php</h1>
 </div>

 <?php
     
     function sum( $a, $b )
     {
       return $a * $b;
     }

     function discount( $selling_price, $discount_price = 10, $format = FALSE )
     {
       $actual_price = $selling_price - $selling_price  * ($discount_price / 100);
       
       if( $format )
        {
         $actual_price = money( $actual_price );
        }
        return $actual_price ;
     }

     function money( $sum, $currency_symbol = '&dollar;' )
     {
       return $currency_symbol.' '.number_format($sum, 2);
     }


//----------------------------we are pretendint that first part is in different a file


     $item_count = 15;
     $item_price = 122.30;

     $sum = sum($item_count, $item_price);

     echo "$item_count <strong>x</strong> $item_price <strong> = $sum</strong> ";
     echo '<br><br>';

     //discount
     $coupon = 13;
     
     if ( $coupon ){
       $sum = discount( $sum, $coupon);
     }

     echo 'It will cost you <strong>'. money($sum) .'</strong>';

 ?>

</body>
</html>