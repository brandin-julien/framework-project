# framework-project
First help


**Use symfony component HttpFoundation**

#Run server

**Go to web directory**
    
     run server : php -S localhost:8000
     
#How its works ?
      /web/index.php
      => Manage route system, get the route and give the template and controller link to that route 
      => Manage session for game win condition and loose condition 
      
      /app/config/controller.php || routing.php
      => Do the link between the URL and the route template (/app/views)
      => Do the link between the URL and the controller to call (/app/controllers)
      
      **Template (/app/views/*)**
      => Include the controllers to use 
      => return variable in that controller
      
      
      **Controller (/app/controllers/*)**
      => Definie variable and all treatmens and be called in the view link into the config controller.php and routing.php
      
      
#Story
The Foyer of the Opera House is where the game begins. This empty room has doors to the south and west, also an unusable exit to the north. There is nobody else around.
The Bar lies south of the Foyer, and is initially unlit. Trying to do anything other than return northwards results in a warning message about disturbing things in the dark.
On the wall of the Cloakroom, to the west of the Foyer, is fixed a small brass hook.
Taking an inventory of possessions reveals that the player is wearing a black velvet cloak which, upon examination, is found to be light-absorbent. The player can drop the cloak on the floor of the Cloakroom or, better, put it on the hook.
Returning to the Bar without the cloak reveals that the room is now lit. A message is scratched in the sawdust on the floor.
The message reads either "You have won" or "You have lost", depending on how much it was disturbed by the player while the room was dark.
The act of reading the message ends the game.

