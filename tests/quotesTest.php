<?php
use PHPUnit\Framework\TestCase;
require_once 'src/Api.php';

class quotesTest extends TestCase
{
    public function testdata()
    {
        $code = '<span class="text" itemprop="text">Quote 1</span><span class="text" itemprop="text">Quote 2</span>';

        $splitCode = explode("<", $code);

        $expectedQuotes = ['Quote 1', 'Quote 2'];
        $actualQuotes = [];

        // Mock the echo statement to capture the output
        $this->expectOutputString('');
        $this->iniSet('display_errors', '1');
        $this->iniSet('error_reporting', E_ALL);

        // Test the parseCode function
        parseCode($splitCode);

        // Capture the output
        $output = ob_get_clean();

        // Extract the quotes from the output
        preg_match_all('/Quote: (.*)<br>/', $output, $matches);
        if (isset($matches[1])) {
            $actualQuotes = $matches[1];
        }

        // Assert that the extracted quotes match the expected quotes
        $this->assertEquals($expectedQuotes, $actualQuotes);
    }
}
