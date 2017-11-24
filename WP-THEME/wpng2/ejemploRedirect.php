asdascsd

<?php
 
$url = 'http://michoacantrespuntocero.com/cultura30/wp-json/wp/v2/posts/113';
$obj = json_decode(file_get_contents($url), true);


return makePage($obj); 

function makePage($obj) {
    // 1. get the page
    //$pageUrl = "http://michoacantrespuntocero.com/public_html/cultura30/wp-content/themes/wpng2/redirect" . $obj->id;
    // 2. generate the HTML with open graph tags
    $pageUrl = "http://michoacantrespuntocero.com/cultura30/113";
    $html  = '<!doctype html>'.PHP_EOL;
    $html .= '<html>'.PHP_EOL;
    $html .= '<head>'.PHP_EOL;
    $html .= '<meta name="author" content="'.$obj->id.'"/>'.PHP_EOL;
    $html .= '</head>'.PHP_EOL;
    $html .= '<body></body>'.PHP_EOL;
    $html .= '</html>';
    // 3. return the page
    echo $html;

}








?>
 	
 