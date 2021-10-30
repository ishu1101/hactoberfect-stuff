<?php
  $movies = json_decode(file_get_content('/films.json'));
  if(empty($movies)){
    echo("The array is empty.");
    }

  include('/index.html');
  
