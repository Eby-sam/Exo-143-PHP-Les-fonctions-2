<?php

//exo 1
$exo1 = function(){
    return true;
};
$exo1();

//exo 2
function exo2 ($prenom){
    echo $prenom."<br>";
}
exo2("Sam");

//exo 3
function exo3 ($prenom, $nom){
    echo $prenom." ".$nom."<br>";
}
exo3("Samuel", "Coquelet");

//Exo 4
function exo4 ($nombre1, $nombre2){
    if ($nombre1 > $nombre2) {
        echo "$nombre1 est plus grand que $nombre2 <br>";
    } elseif ($nombre1 < $nombre2) {
        echo "$nombre1 est plus petit que $nombre2 <br>";
    } else {
        echo "Ils sont égaux <br>";
    }
}
exo4(2, 5);

//Exo 5
function exo5 ($nombre, $string){
    echo $nombre." ".$string."<br>";
}
exo5(1, "chat1");

//exo 6
function exo6 ($nom, $prenom, $age){
    echo "Bonjour $nom $prenom, tu as $age ans <br>";
}
exo6("Coquelet", "Samuel", 31);

//exo 7
function exo7 ($age, $genre){
    if ($age < 18 && $genre === "Homme"){
        echo "Vous êtes un homme et vous êtes mineur <br>";
    }
    elseif ($age >= 18 && $genre === "Homme"){
        echo "Vous êtes un homme et vous êtes majeur <br>";
    }
    elseif ($age < 18 && $genre === "Femme"){
        echo "Vous êtes une femme et vous êtes mineur <br>";
    }
    else{
        echo "Vous êtes une femme et vous êtes majeur <br>";
    }
}
exo7(31, "Homme");

//exo 8
function exo8 ($nombre1, $nombre2, $nombre3){
    echo $nombre1 + $nombre2 + $nombre3;
}
exo8(10, 3, 29);
