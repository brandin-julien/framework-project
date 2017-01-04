<?php
include "../web/boostrap.php";

include $controllersList[$path]; //include via index.php

print("<h1>".$title."</h1>");
print("<br>");
print("Where you want go !? ");
print("<br>");
print("<a href='/north'>North</a>");
print("<br>");
print("<a href='/south'>Go to bar</a>");
print("<br>");
print("<a href='/west'>West</a>")

?>