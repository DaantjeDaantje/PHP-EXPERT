<!DOCTYPE html>

<html>

<body>
	<?php
        $provincies = [
        [   'provincie' => 'Noord-Holland',
            'hoofdstad' => 'Haarlem',
            'bevolking' => '2.853.359',
            'inwoners_gemeente' => 'Amsterdam'
        ],
        [   'provincie' => 'Utrecht',
            'hoofdstad' => 'Utrecht',
            'bevolking' => '1.342.158',
            'inwoners_gemeente' => 'Utrecht'
        ],
        [   'provincie' => 'Gelderland',
            'hoofdstad' => 'Arnhem',
            'bevolking' => '5.136,31',
            'inwoners_gemeente' => 'Nijmegen'
        ],
        ];
        
        foreach($provincies as $provincie ){
            echo '<h2>' . $provincie['provincie']. '</h2>';
            echo '<ul>';
            echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
            echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
            echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
            echo '</ul>';
        
        }
	?>
</body>

</html>
