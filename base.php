<?php
session_start();

// Connecting, selecting database
$link = mysql_connect('localhost', 'root', '13Authentic')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('chatlar') or die('Could not select database');
