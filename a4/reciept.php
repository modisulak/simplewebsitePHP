<?php

require_once('tools.php');

$custDetails = $_SESSION["custDetails"];
$movieDetails = $_SESSION["movieDetails"];
$seats = $_SESSION["seats"];

if(empty($_SESSION)) {
    header("Location: index.php");
}

$fp = fopen('bookings.txt',"a");
flock($fp, LOCK_EX);

fputcsv($fp, $custDetails, "\t");

fputcsv($fp, $movieDetails, "\t");

fputcsv($fp, $seats, "\t");

flock($fp, LOCK_UN);

fclose($fp);

$moviesNames = [
    'ACT' => 'Avengers: Endgame',
    'RMC' => 'Top End Wedding',
    'ANM' => 'Dumbo',
    'AHF' => 'The Happy Prince'];

$total = calcResult($seats,$movieDetails['day'],$movieDetails['hour']);

$pricesObject = [
    'full' => [
        'FCA' =>   30,
        'FCP' => 27,
        'FCC' => 24,
        'STA' => 19.8,
        'STP' => 17.5,
        'STC' =>15.3
    ],
    'disc' => [
        'FCA' => 24,
        'FCP' => 22.5,
        'FCC' => 21,
        'STA' => 14,
        'STP' =>12.5,
        'STC' => 11
    ]
];  

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <link id='stylecss' type="text/css" rel="stylesheet" href="recieptstyle.css">
    </head>
    <body>
        <div id="invoice-POS">

            <center id="top">
                <div class="logo">
                    <span class="image"><img src="../../media/logo.png" style="margin:5px 0px" height="55" alt="Company Logo" /></span>
                </div>
                <div class="info"> 
                    <h2>Lunardo Cinema</h2>
                </div><!--End Info-->

                <div id="mid">
                    <div class="info">
                        <h2>Contact Info</h2>
                        <p> 
                            Address : Small Town, Melbourne<br>
                            Email   : info@lunado.com<br>
                            Phone   : 555-555-5555<br>
                        </p>
                    </div>
                </div><!--End Invoice Mid-->

                <div id="bot">
                    <h2><?php if(isset($movieDetails)) echo $moviesNames[$movieDetails['id']] ?></h2>
                    <div id="table">
                        <table>
                            <tr class="tabletitle">
                                <td class="item"><h2>Item</h2></td>
                                <td class="Hours"><h2>Qty</h2></td>
                                <td class="Rate"><h2>Total</h2></td>
                            </tr>
                            <?php foreach($seats as $seatcode => $quantity) {
                            if($quantity > 0): ?>
                            <tr class="service">
                                <td class="tableitem"><?= $seatstitle[$seatcode] ?> </td>
                                <td class="tableitem"><?= $quantity ?></td>
                                <td class="tableitem"><?= $quantity ?></td>
                            </tr>    
                            
                            <?php endif; } ?>
                                    
                                    
                                    



                                    <tr class="tabletitle">
                                        <td></td>
                                        <td class="Rate"><h2>Total</h2></td>
                                        <td class="payment"><h2><?php echo $total ?></h2></td>
                                    </tr>

                        </table>
                            </div><!--End Table-->

                        <div id="legalcopy">
                            <p class="legal"><strong>Thank you for your purchase.  </strong> Please remember to bring this invoice to get your tickets at the counter.
                            </p>
                        </div>

                    </div><!--End InvoiceBot-->
                    </center>

                </div><!--End Invoice-->
            </body>
        <?php
            preShow($_SESSION)
        ?>
        </html>
