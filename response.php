<?php
$result;
$version = 23;
$link = 'https://play.google.com/store/apps/details?id=ua.in.le1b.liberyexerceses';

if($_POST['pass'] == '3fb7a90af6' && $_POST['version'] < $version) {
    if (isset($_POST['lang']) &&
        !empty($_POST['lang']) &&
        file_exists('lang/'.$_POST['lang'].'.php')) {
            $lang = $_POST['lang'];
    } else {
        $lang = 'en';
    }
    require_once('lang/' . $lang . '.php');

    $result = array(
            'language' => $lang,
            'version' => $version,
            'link' => $link,
            'whatNew' => $whatNew,
            'newVersion' => 1
        );
} else {
    $result = array(
            'newVersion' => 0
        );
}
echo json_encode($result);
?>