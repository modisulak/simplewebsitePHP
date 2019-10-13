<?php

require_once('tools.php');

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

                    <div id="table">
                        <table>
                            <tr class="tabletitle">
                                <td class="item"><h2>Item</h2></td>
                                <td class="Hours"><h2>Qty</h2></td>
                                <td class="Rate"><h2>Total</h2></td>
                            </tr>

                            <tr class="service">
                                <td class="tableitem"><p class="itemtext">Communication</p></td>
                                <td class="tableitem"><p class="itemtext">5</p></td>
                                <td class="tableitem"><p class="itemtext">$375.00</p></td>
                            </tr>

                            <tr class="service">
                                <td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
                                <td class="tableitem"><p class="itemtext">3</p></td>
                                <td class="tableitem"><p class="itemtext">$225.00</p></td>
                            </tr>

                            <tr class="service">
                                <td class="tableitem"><p class="itemtext">Design Development</p></td>
                                <td class="tableitem"><p class="itemtext">5</p></td>
                                <td class="tableitem"><p class="itemtext">$375.00</p></td>
                            </tr>

                            <tr class="service">
                                <td class="tableitem"><p class="itemtext">Animation</p></td>
                                <td class="tableitem"><p class="itemtext">20</p></td>
                                <td class="tableitem"><p class="itemtext">$1500.00</p></td>
                            </tr>

                            <tr class="service">
                                <td class="tableitem"><p class="itemtext">Animation Revisions</p></td>
                                <td class="tableitem"><p class="itemtext">10</p></td>
                                <td class="tableitem"><p class="itemtext">$750.00</p></td>
                            </tr>

                            <tr class="tabletitle">
                                <td></td>
                                <td class="Rate"><h2>Total</h2></td>
                                <td class="payment"><h2>$3,644.25</h2></td>
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
