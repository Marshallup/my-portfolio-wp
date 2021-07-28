<?php

$NAME_INC_FILES = ['include-style-scripts.php'];

foreach ($NAME_INC_FILES as $FILE) {
  require_once ('inc/' . $FILE);
}

