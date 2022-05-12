<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti:
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

// file dove faremo girare il tutto

require __DIR__ . '/classes/product.php';
require __DIR__ . '/classes/toy.php';
require __DIR__ . '/classes/food.php';

//istanziamo un prodotto tipo
$pappa = new product ( 'Crocchette', 'cibo', 35, 'cane' );

echo $pappa -> getName() . '<br>';
echo $pappa -> getCategory() . '<br>';
echo $pappa -> getPrice() . '<br>';
echo $pappa -> getTypeOfAnimal() . '<br>';

// istanziamo toy
$palla = new toy ( 'pallina', 'giocattolo', 25, 'cane', 50, 'giallo', 'plastica', '63x12' );

echo $palla -> getName() . '<br>';
echo $palla -> getCategory() . '<br>';
echo $palla -> getPrice() . '<br>';
echo $palla -> getTypeOfAnimal() . '<br>';
echo $palla -> getWeight() . '<br>';
echo $palla -> getColor() . '<br>';
echo $palla -> getMaterial() . '<br>';
echo $palla -> getMeasures() . '<br>';

// istanziamo food
$pastone = new food ( 'Crocchelle', 'cibo', 20, 'cane', 'secco', 'pedigree', 50, 2025 );

echo $pastone -> getName() . '<br>';
echo $pastone -> getCategory() . '<br>';
echo $pastone -> getPrice() . '<br>';
echo $pastone -> getTypeOfAnimal() . '<br>';
echo $pastone -> getTypeOfFood() . '<br>';
echo $pastone -> getBrand() . '<br>';
echo $pastone -> getWeight() . '<br>';
echo $pastone -> getExpireDate() . '<br>';



?>