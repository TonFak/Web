<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);


$client = new \Google_Client();
$client->setApplicationName('BOARD');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$path = 'credentials.json';
$client->setAuthConfig($path);

$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1Q0r9TF0mE50Lzdpvbg4Mb5_GlXY6WLwSZNwpef4_TdY';

if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    $email = $_POST['email'] ?? '';
    $title = $_POST['title'] ?? '';
    $category = $_POST['categories'] ?? '';
    $description = $_POST['text'] ?? '';

    $values = [
        [$email, $title, $category, $description]
    ];
}

$range = 'Лист1';

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit();
?>

