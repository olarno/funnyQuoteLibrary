<?php

use FunnyQuoteLib\FunnyQuoteLibrary;

require_once 'src/FunnyQuoteLibrary.php';

$quoteLibrary = new FunnyQuoteLibrary();
$quote = $quoteLibrary->getRandomQuote();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Funny Quotes</title>
</head>

<body class="container">
    <h1>Funny Quotes library</h1>

    <div id="Description">
        <h2>Why Choose This Library for Your Project</h2>
        <p></p>
    </div>
    <div id="howToUse">
        <h2>Getting Started with <b>FunnyQuoteLib</b>: A Step-by-Step Guide</h2>
        <p></p>
    </div>
    <div id="Example">
        <h2>Example of Displayed Content</h2>
        <p><?php echo "Quote of the day: " . $quote; ?></p>
    </div>
   



</body>

</html>