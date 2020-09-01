<!DOCTYPE html>

<html>

<body>
	<?php
        class Scooter{
            public $merk;
            public $kleur;
            public $tank;
        
            public function checkInhoud(){
                if($this->tank == 10){
                    echo 'de emmer is vol!'  . "</br>";
                }
                else{
                    echo 'de emmer is niet vol!' . "</br>";
                }
            }
        }

        $piago = new scooter();
        $peugeot = new scooter();

        $piago->merk = 'Piago';
        $piago->kleur = 'rood';
        $piago->checkInhoud(6);

        $peugeot->merk = 'Peugeot';
        $peugeot->kleur = 'zwart';
        $peugeot->checkInhoud(7);
	?>
</body>

</html>