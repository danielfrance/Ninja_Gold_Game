Ninja_Gold_Game
===============

The first PHP assignments that gave me a bit of trouble.  My biggest hurdle was wrapping my mind around SESSION Variables


This project caused me some frustration.  Understanding the global variables concept and how to get the Session varibales
to play nice was frustrating.  Anyways, lets go through the code.

index.php

Pretty standard here.  I broke the page up in to 3 main sections; the Player Score, the 4 "buildings" and the Activity Log.

style.css

I've been experimenting with bootstrap.  I enjoy it but I still have some difficulties manipulating it to my will.  Either 
way, I gave it some basic styling and moved on to the nitty gritty.

process.php

I start by setting the time zone to Pacific time and create a variable to store the current date. I move on to checking to
see if the session variables has not been set.  if they havent been, then we'll set the activities to a new array and 
the users total gold to 0. After that, just a few simple IF statements.  

array_unshift was a cool new function.  After I had built everything, the activity log wasn't populating with the most
current activity.  I used array_unshift to push each new value in to the index position[0]
