<?php 

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\Lead;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = 'EAAElBpWgTGYBO9uadCHyUt1ROZCgl7nQiPbYB7hcYgY7ohVAPwpDaxx6bsurKPd4kJWu5MfQBkjXnlb7Tzv1ZBwPkl6bzs2MgkifrsYYvKXRrQwkj2DsL8spRJwpe1ZCKZCONU8SSbFuLS1WiUIXXRVPtWO2nrhtgvjBPS4eBpgEFSn2MNce5OXYctwBLu24';
$app_secret = '3852632b02e9da9d220d51ccbc811364';
$app_id = '322185187052646';
$id = '6470841347126';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
  "name",

 
);
$params = array(
);
echo json_encode((new Lead($id))->getSelf(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);




// $access_token = 'EAAElBpWgTGYBO9uadCHyUt1ROZCgl7nQiPbYB7hcYgY7ohVAPwpDaxx6bsurKPd4kJWu5MfQBkjXnlb7Tzv1ZBwPkl6bzs2MgkifrsYYvKXRrQwkj2DsL8spRJwpe1ZCKZCONU8SSbFuLS1WiUIXXRVPtWO2nrhtgvjBPS4eBpgEFSn2MNce5OXYctwBLu24';
// $app_secret = '3852632b02e9da9d220d51ccbc811364';
// $app_id = '322185187052646';
// $id = '6470841347126';
?>