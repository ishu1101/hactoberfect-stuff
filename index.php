<?php
  $movies = json_decode(file_get_content('/films.json'));

  include('/index.html');
  
