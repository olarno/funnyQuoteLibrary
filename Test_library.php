<?php

require_once 'src/FunnyQuoteLibrary.php';

$quoteLibrary = new FunnyQuoteLibrary();
$quote = $quoteLibrary->getRandomQuote();

echo "Quote of the day: " . $quote;
