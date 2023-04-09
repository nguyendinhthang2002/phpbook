<?php
// Create array of greetings then get random value
$greetings    = ['Hi ', 'Howdy ', 'Hello ', 'Hola ',
                 'Welcome ', 'Ciao ',];
//tra ve mot khoa ngau nhien
$greeting_key = array_rand($greetings);
$greeting     = $greetings[$greeting_key];

// Array of best sellers, count items, list top items
$bestsellers      = ['notebook', 'pencil', 'ink',];
$bestseller_count = count($bestsellers);
// tach mang $bestsellers bang dau ','
$bestseller_text  = implode(', ', $bestsellers);

// Array holding customer details
$customer     = ['forename' => 'Ivy',
                 'surname'  => 'Stone',
                 'email'    => 'ivy@eg.link', ];

// If you have a customer forename add it to greeting
// kiem tra xem 'forename' co trong co ton tai trong mang ko
if (array_key_exists('forename', $customer)) {
    $greeting .= $customer['forename'];
}
?>
<?php include 'includes/header.php'; ?>

  <h1>Best Sellers</h1>
  <p><?= $greeting ?></p>
  <p>Our top <?= $bestseller_count ?> items today are:
    <b><?= $bestseller_text ?></b></p>

<?php include 'includes/footer.php'; ?>