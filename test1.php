<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
<?php echo("c'est un test de nouveau") ?>
<p> <?php echo date('d/m/Y h:i:s'); ?> </p>
<?php
$userAge = 24;

//$isAdult = ($userAge >= 18) ? true : "false";

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 28);
echo $isAdult;
?>
<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // "mathieu.nebra@exemple.com"; ?>
<?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

?>
<?php  echo '<br>' .$recipe[author]; ?>
<?php
$recipe1 = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe1 as $value) {
    echo $value['recipe'];
};
?>
<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo nl2br("\n"). $recipe['title'] . ' contribué(e) par : ' . $recipe['author']; 
} ?>
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo nl2br("\n").'[' . $property . '] vaut ' . $propertyValue ;
} ?>
<?php echo '<pre>';
print_r($recipes);
echo '</pre>'; 
$c="je suis anas";
echo strlen($c)?>


</html>