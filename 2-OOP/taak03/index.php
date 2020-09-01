<!DOCTYPE html>

<html>

<body>
	<?php
        class product{
            public $merk;
            public $prijs;
            public $type;
            public $kleur;
        }

        $dweil = new product();
        $stofzuiger = new product();

        $dweil->merk = "Hema";
        $dweil->prijs = 10;
        $dweil->type = "lang";
        $dweil->kleur = "rood";

        $stofzuiger->merk = "Aegon";
        $stofzuiger->prijs = 50;
        $stofzuiger->type = "ggfs505";
        $stofzuiger->kleur = "grijs";


	?>
</body>

</html>