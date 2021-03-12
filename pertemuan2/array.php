<?php
// Array 1 dimensi
$superhero = ['Superman ','Batman ','The flash'];

// Perulangan
foreach ($superhero as $sh){
    echo $sh;

}
echo '<br/>';

// Hitung array superhero 
echo 'Panjang Array: '.count($superhero);

?>

<?php
// Array multi dimensi (key, value)
$superhero1 = ['Nama'=>'Superman','power'=>50];
$superhero2 = ['Nama'=>'Batman','power'=>70];
$superhero3 = ['Nama'=>'Hulk','power'=>100];

$superhero = [$superhero1,$superhero2,$superhero3];

foreach ($superhero as $sh){
    echo '<h1>'.$sh['Nama'].'</h1>';
    echo '<h3>'.$sh['power'].'</h3>';
    echo '<br/>';

}

?>