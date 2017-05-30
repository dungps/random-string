<?php

$start = (int) isset( $_GET['start'] ) ? $_GET['start'] : 0;
$end = (int) isset( $_GET['end'] ) ? $_GET['end'] : 13;

echo substr( md5( uniqid( rand( 10000, 99999 ), true ) ), $start, $end);