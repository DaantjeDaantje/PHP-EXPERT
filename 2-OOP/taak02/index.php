<!DOCTYPE html>

<html>

<body>
	<?php
        class auto{
            public $merk;
            public $kleur;
            public $type;
            public $uitvoering;
            public $brandstof;
        }
        $nieuweAuto = new auto();
        $nieuweAuto->merk = 'Tesla';
        $nieuweAuto->kleur = 'Rood';
        $nieuweAuto->type = 'Model 3';
        $nieuweAuto->uitvoering = 'Cabrio';
        $nieuweAuto->brandstof = 'Elektrisch';

        echo $nieuweAuto->merk . "</br>";
        echo $nieuweAuto->kleur . "</br>";
        echo $nieuweAuto->type . "</br>";
        echo $nieuweAuto->uitvoering . "</br>";
        echo $nieuweAuto->brandstof . "</br>";
	?>
</body>

</html>