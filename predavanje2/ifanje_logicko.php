<?php

$network = 'Twitter';
$name = 'Oscar Godson';
if($name == 'Oscar Godson' && $network == 'Twitter'):
    echo 'One of the best programming skills you can have is when to walk away for awhile';
elseif ($name == 'Ellen Ullman' || $network == 'Facebook'):
    echo 'We build our computer (systems) the way we build our cities';
elseif ($name == 'Fred Brooks' && $network != 'Instagram'):
    echo 'What one programmer can do in one month, two programmers can';
else:
    echo 'CodeWisdom is a Twitter account sharing quotes and computing';
endif;