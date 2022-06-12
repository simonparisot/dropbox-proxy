<?php

$lien = 'https://www.dropbox.com/sharing/fetch_user_content_link';
$postfields = array(
    't' => 'aErTMsMk06St8MP13g3c2cM9',
    'url' => 'https://www.dropbox.com'.$_SERVER['REQUEST_URI'],
);
$headers = array(
    'Cookie: t=aErTMsMk06St8MP13g3c2cM9'
);

echo "<pre>";
var_dump($postfields);
echo "</pre>";


$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $lien);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$return = curl_exec($curl);
curl_close($curl);

echo $return;

?>