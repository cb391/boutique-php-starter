<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

        $product = ["Vêtements", "Chaussures", "Accessoires","Sport"];

        //vérifie si chaussure existe
        $produitRecherche1 = "Chaussures";
        if(in_array($produitRecherche1, $product)):
        echo "Trouvé, le produit ".$produitRecherche1." existe dans le tableau";
        else :
        echo "Inconnu, le produit ".$produitRecherche1." n'existe pas dans le tableau";
        endif;

        // Vérifie si Electronique existe
        $produitRecherche2 = "Electronique";
        if(in_array($produitRecherche2, $product)):
        echo "Trouvé, le produit ".$produitRecherche2." existe dans le tableau";
        else :
        echo "Inconnu, le produit ".$produitRecherche2." n'existe pas dans le tableau";
        endif;
        ?>
    </body>

</html>