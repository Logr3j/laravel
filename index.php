<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        body 
        {
        background-image: url("http://studiootisak.co.rs/Fakturisanje/files/memorandum_web.png");
        background-repeat: no-repeat;
        background-color: #ffffff;
        }
        div.racun {
            position: fixed;
            top: 180px;
            left: 120px;
            font-family:    Arial, Helvetica, sans-serif;
            font-size: 28px;}
        div.klijent {
            position: fixed;
            top: 150px;
            left: 450px;
            width: 200px;
            font-family:    Arial, Helvetica, sans-serif;
            text-align: center;
            border: 1px solid black;}
        div.racunbr {
            position: fixed;
            top: 280px;
            left: 100px;
            font-family:    Arial, Helvetica, sans-serif;
            }
        div.datum {
            position: fixed;
            top: 280px;
            left: 240px;
            font-family:    Arial, Helvetica, sans-serif;
            }
        </style>
    <body>
        
        <div class="racun">
        <?php
        echo "RAČUN-otpremnica"; 
        ?>
        </div>
        <div class="klijent">
        <?php   
        print '</br><b>Naziv firme</b></br></br>';
        print 'Adresa</br>';
        print 'PIB</br>';
        ?>
        </div>
        <div class="racunbr">
        <?php   
        echo "Račun br:<br>";
        echo "Mesto izdavanja:<br>";
        echo "Datum izdavanja:<br>";
        echo "Valuta:";
        ?>
        </div>
        <div class="datum">
        <?php   
        echo "150-17<br>";
        echo "Beograd<br>";
        echo "12.03.2017.<br>";
        echo "22.03.2017.";
        ?>
        </div>
        
    </body>
</html>
