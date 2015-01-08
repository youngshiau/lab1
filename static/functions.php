<?php

function escape($raw_input) { 
    return htmlspecialchars($raw_input, ENT_QUOTES | ENT_HTML401, 'UTF-8');
}  

?>