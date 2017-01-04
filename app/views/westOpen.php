<?php
include "../web/boostrap.php";

include $controllersList[$path]; //include via index.php

print($textWestOpen);


?>
<a href="/message">Read the message</a>
<br>
<a href="/intro">Back to Opera</a>