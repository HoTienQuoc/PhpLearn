<?php
$url = 'vegibit.com';
if (strstr ( $url, 'https://www.' ) === false) {
    $url = 'http://www.' . $url;
}
echo $url;
// https://www.vegibit.com