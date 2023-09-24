<?php
require_once('Connection.php');
require_once('CompanyData.php');

$connection = new Connection();
$db = $connection->getConnection();

$companyData = new CompanyData($db);

$data = array(
    'cover_image_url' => $_POST['cover_image_url'],
    'title' => $_POST['title'],
    'subtitle' => $_POST['subtitle'],
    'personDescription' => $_POST['personDescription'],
    'phone_number' => $_POST['phone_number'],
    'location' => $_POST['location'],
    'category' => $_POST['category'],
    'product1_description' => $_POST['product1_description'],
    'product1_url' => $_POST['product1_url'],
    'product2_description' => $_POST['product2_description'],
    'product2_url' => $_POST['product2_url'],
    'product3_description' => $_POST['product3_description'],
    'product3_url' => $_POST['product3_url'],
    'company_description' => $_POST['company_description'],
    'linkedin_url' => isset($_POST['linkedin_url']) ? $_POST['linkedin_url'] : null,
    'facebook_url' => isset($_POST['facebook_url']) ? $_POST['facebook_url'] : null,
    'twitter_url' => isset($_POST['twitter_url']) ? $_POST['twitter_url'] : null,
    'google_plus_url' => isset($_POST['google_plus_url']) ? $_POST['google_plus_url'] : null
);



$inserted = $companyData->insertCompanyData($data);

if ($inserted) {
    header('Location: page3.php?id=' . $db->lastInsertId());
} else {
    header('Location: index.php?' . $db->lastInsertId());
    echo 'Error: Data could not be inserted.';

}
?>
