<?php
function autoloader_perso ($className){
    var_dump($className);
    require_once ('Classes/'.$className.'.php');
    
    
}
spl_autoload_register ('autoloader_perso' );

echo 'bonjour';
$parasol = new Product();
 $hamac = new Product();
$voyage = new Categorie();
var_dump ($hamac);
$hamac ->name ='hamac';
$hamac ->descriptions ='pour se reposer';
$hamac ->price =25;
echo  '<p>'.$hamac->price.'€</p>';
echo '<p>'.$hamac -> displayPrice().'</p>';
var_dump ($hamac);