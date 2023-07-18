<?php

    $connect = mysqli_connect('localhost', 'root', '', 'test');

    if (!$connect) {
        die('No connection to db.');
    }