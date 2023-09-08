<?php

class FunnyQuoteLibrary
{
    private $configFile;

    public function __construct($configFile = 'config/quotes.json')
    {
        $this->configFile = $configFile;
    }

    public function getRandomQuote()
    {
        $quotes = $this->loadQuotes();
        if (empty($quotes)) {
            return "No quotes available? That's like trying to find a needle in a haystack, but the haystack is actually a pile of marshmallows!";
        }

        $randomIndex = array_rand($quotes);
        return $quotes[$randomIndex];
    }

    private function loadQuotes()
    {
        $configPath = __DIR__ . '/../' . $this->configFile;

        if (file_exists($configPath)) {
            $config = json_decode(file_get_contents($configPath), true);
            if (isset($config['quotes']) && is_array($config['quotes'])) {
                return $config['quotes'];
            }
        }

        return [];
    }
}
