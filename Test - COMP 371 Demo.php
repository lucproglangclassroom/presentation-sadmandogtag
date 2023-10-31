<?php
// PHP code to generate HTML with a PHP logo image
$html = '
<!DOCTYPE html>
<html>
<head>
    <title>PHP-Generated HTML</title>
</head>
<body>
    <h1>Hello from PHP-Generated HTML!</h1>
    <img src="https://www.php.net/images/logos/php-med-trans.png" alt="PHP Logo">
</body>
</html>
';

// Save the generated HTML to an HTML file called generated.html
$file = 'generated.html';
file_put_contents($file, $html);

// Print a message that the HTML file has been generated
echo "HTML file '$file' has been generated.\n";
?>
