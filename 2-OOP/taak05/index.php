<!DOCTYPE html>

<html>

<body>
	<?php
        class lamp{
            public $kleur;
            public $helderheid;
            public $isAan;
            
            function setStatus($status){
                $this->isAan = $status;
                echo $status . "</br>";
            }
        }

        $woonkamerLamp = new lamp();
        $keukenLamp = new Lamp();

        $woonkamerLamp->kleur = 'geel';
        $woonkamerLamp->heldereid = 'zacht';
        $woonkamerLamp->setStatus('uit');

        $keukenLamp->kleur = 'wit';
        $keukenLamp->helderheid = 'fel';
        $keukenLamp->setStatus('aan');


	?>
</body>

</html>