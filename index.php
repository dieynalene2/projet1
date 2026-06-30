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
  //3
   $codeIsValid = true;
    
   do { 
        
        $code = readline("Entrer votre code :");
        if (empty($code)) {
            echo "le code est obligatoire \n";
             $codeIsValid = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["code"]) === $code) {
                $codeIsValid = false;
                echo "ce code existe deja ...\n"; 
         }
       }  
}
        


    } while (!$codeIsValid);
    
     $nomIsValid = true;
  do { 
        
        $nom = readline("donner votre  nom : ");
        if (empty($nom)) {
            echo "le nom est obligatoire";
             $nomIsValid= false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["nom"]) === $nom) {
                $nomIsValid = false;
                echo "le nom existe deja ..."; 
         }
       }  
}
    } while (!$nomIsValid);



    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

         $categories[] = $categorie;
    //4
     $categorieExiste =  false;
          $code = readline("donner le code :");
             foreach ($categories as $index => $categorie ) {
               if (($categorie["code"]) === $code) {
                    $categorieExiste = true;
                    break;
         }
       } 

       if ($categorieExiste) {
        $produit =   [
                    "nom" => readline("donner le nom : "),
                    "reference" => readline("donner la reference : "),
                    "prix" => (int)readline("donner le prix : "),
                    "quantite" => (int)readline("donner la quantité : ")
                  ] ;
          $categories[$index]["produits"][] = $produit;
       }else {
          echo " désolé , la categorie n'existe pas...";
       }
       //5

          $codeIsValid = true;
    
   do { 
        
        $code = readline("saisir le code :");
        if (empty($code)) {
            echo "le code est obligatoire \n";
             $codeIsValid = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["code"]) === $code) {
                $codeIsValid = false;
                echo "le code existe deja ...\n"; 
         }
       }  
}
        


    } while (!$codeIsValid);
    
     $nomIsValid = true;
  do { 
        
        $nom = readline("saisir le nom : ");
        if (empty($nom)) {
            echo "le nom est obligatoire";
             $nomIsValid= false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["nom"]) === $nom) {
                $nomIsValid = false;
                echo "le nom existe deja ..."; 
         }
       }  
}
    } while (!$nomIsValid);

     $produits = [];
     do {
         $produit =   [
                    "nom" => readline("saisir le nom : "),
                    "reference" => readline("saisir la reference : "),
                    "prix" => (int)readline("saisir le prix : "),
                    "quantite" => (int)readline("saisir la quantité : ")
                  ];
          $produits[]= $produit;

          $choix = strtolower(readline(" voulez vous continuer  oui/non "));
          
     } while ($choix === "oui");

    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" =>  $produits 
         ];

         $categories[] = $categorie;





?>