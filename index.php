//1
<?php
    $categories = [
        0=>[
            "code" => "5566",
            "nom" => "categorie1",
            "produits" =>[
                 0 => [
                    "nom" => "produit1",
                    "reference" => "reference1",
                    "prix" => 700,
                    "quantite" => 10
                  ],
                  1 => [
                    "nom" => "produit2",
                    "reference" => "reference2",
                    "prix" => 8000,
                    "quantite" => 36
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
    foreach ($categories as  $categorie ) {
    if (empty($categorie["produits"])) {
         echo $categorie["nom"]."\n";
    }
 }
  






?>