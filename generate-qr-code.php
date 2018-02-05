<?php 
session_start();    
$er=(string)session_id();
    if(isset($_POST) && !empty($_POST)) {

    include('library/phpqrcode/qrlib.php'); 
     
    $image_location = "qrcodes/";

    $image_name = $er.$_POST['dataContent'].'.png';

    $dataContent = $er.$_POST['dataContent'];
    $ecc = 'H';
    $size = '10';

    // generating the QR code
    QRcode::png($dataContent, $image_location.$image_name, $ecc, $size); 
    
    // displaying the QR code on the web page
    echo '<img class="img-thumbnail" src="'.$image_location.$image_name.'" />';
    
    } else {
        header('location:./');
    }
?>