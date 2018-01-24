<?php

/* Categorie = >[manage| edit| update | add | delete| insert | static] */

$do = '';

$do = isset($_GET['do']) ? $_GET['do'] : 'manage';

echo $do;