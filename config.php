<?php
# Configuration file

# root path for requiring files
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/plasticreservoirs/');
# base url for links
define('BASE_URL', '/plasticreservoirs/');


$all_products = array(
  array (
    "name" => "Reservoirs",
    "descShort" => "Reservoirs are used to store water for various purposes.",
    "descLong" => "Reservoirs are used to store water for various purposes. They are made of high-quality plastic and are designed to withstand the toughest environmental conditions.",
    "image" => "reservoirs.jpg",
    "link" => "reservoirs.php"
  ),
);

###############################################

$all_manufacturers = array(
  array (
    "name" => "Reservoirs",
    "logo" => "reservoirs.jpg",
    "description" => "Reservoirs are used to store water for various purposes.",
    "website_link" => "reservoirs.php",
    "products" => array (
      "Reservoirs",
      "Septic Tanks",
      "Wastewater Purifiers",
      "Pontoons",
    ),
  ),
);

?>