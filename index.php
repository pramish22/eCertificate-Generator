<?php 
    // Get the name from the URL or GET Parameters.
    $name = isset($_GET["name"]) ? $_GET["name"] : "Pramish Shrestha";

    //Create an image from PNG file
    $image = imagecreatefrompng("Cert.png");

    //Create a text color
    $textColor = imagecolorallocate($image, 0, 0, 0);

    //Get the font path
    $fontPath = __DIR__ . "/font.otf";

    // Get the bounding box of the text.
	$coords = imagettfbbox(60, 0, $fontPath, $name);

    //Import the custom font from path
    //Write text inside image
    imagettftext($image, 60, 0, 1000 - ($coords[2] / 2), 720, $textColour, $fontPath, $name);

    //Instruct the browser to read this page as image
    header("Content-type: image/png");

    //Show the image to browser
    imagepng($image);

    //Destroy the image in memory
    imagedestroy($image);
?>