<?php

require_once 'src/FunnyQuoteLibrary.php';
use PHPUnit\Framework\TestCase;
use FunnyQuoteLib\FunnyQuoteLibrary;


class FunnyQuoteLibraryTest extends TestCase
{
    public function testGetRandomQuote()
    {
        $quoteLibrary = new FunnyQuoteLibrary();

        $quote = $quoteLibrary->getRandomQuote();

        $this->assertNotEmpty($quote);
    }
}