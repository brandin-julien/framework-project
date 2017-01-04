<?php
include "../web/boostrap.php";

include $controllersList[$path]; //include via index.php

print($testSouthController);


?>

<p>Si on prend nord on back en arriere si on prend sud west etc on renvoit VOUS DERANGER UN TRUCK DANS L'OMBRE</p>
<a href="/north">Go out</a> <!-- good route -->
<a href="/intro">Go to Foyer of Opera</a>
<a href="/westShadow">Go west</a> <!-- wrong route -->


