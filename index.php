<?php

//1
$categories = [

   0 =>      [
            "code" => "5566",
            "nom" => "categorie1",
            "produits" => [
                  0 => [
                    "nom" => "produit1",
                    "reference" => "reference1",
                    "prix" => 3000,
                    "quantite" => 5 
                  ],
                  1 => [
                    "nom" => "produit2",
                    "reference" => "reference2",
                    "prix" => 8000,
                    "quantite" => 3 
                  ]
            ]
         ],
   1 =>      [
            "code" => "3322",
            "nom" => "categorie2",
            "produits" => []
         ]
];
//2

     function afficheCategorieSansProduit(array $categories): void{
    foreach ($categories as  $categorie ) {
        if (empty($categorie["produits"])) {
            echo $categorie["nom"]."\n";
        }
    }
 }
 afficheCategorieSansProduit($categories);

 function saisieChaine(string $message): string {
     return readline($message);  
 }




 function champObligatoire(string $value,string $message): bool{
    if (empty($value)) {
        echo $message."\n";
        return  false;
    }
        return true;
 }


?>