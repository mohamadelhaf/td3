<?php
$code = file_get_contents("http://quotes.toscrape.com");
$code = str_replace(">", "<>", $code);

$splitCode = explode("<", $code);

function parseCode($splitCode)
{
    // Find the first occurrence of the opening tag of the quotes:
    $openingTag = array_search('span class="text" itemprop="text"', $splitCode, true);

    // Find the first occurrence of the closing tag of the quotes:
    $closingTag = array_search('/span', $splitCode, true);

    // Now, find the text in between the tags
    $i = $openingTag + 1;
    $total = "";
    while ($i < $closingTag) {
        $total .= $splitCode[$i];
        $i++;
    }

    // Output the extracted text
    echo $total . "<br>";
}

// Run the function for each quote
parseCode($splitCode);
$splitCode = array_slice($splitCode, $closingTag + 1);
parseCode($splitCode);
$splitCode = array_slice($splitCode, $closingTag + 1);
parseCode($splitCode);
$splitCode = array_slice($splitCode, $closingTag + 1);
parseCode($splitCode);
?>
