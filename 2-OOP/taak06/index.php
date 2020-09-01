<!DOCTYPE html>

<html>

<body>
	<?php
        class robot{
            public $naam;
            public $geluid;
            public $voortstuwing; 

            function setSound($sound){ 
                $this->geluid = $sound;
            }
        
            function getSound(){
                return $this->geluid . "<br>";
            }
        }

        $wally = new robot();
        $wolly = new robot();

        $wally->naam = "wal-e";
        $wally->geluid = "beepboop";
        $wally->voorstuwing = "rollend";

        $wolly->naam = "wol-e";
        $wolly->geluid = "boopbeep";
        $wolly->voorstuwing = "lopend";

        echo $wally->getSound(); 
        echo $wolly->getSound(); 
	?>
</body>

</html>