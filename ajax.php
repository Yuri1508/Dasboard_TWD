<?php
    include 'class/twd.class.php';
    $api = new twd();

    $dd = $_POST['dd'];
    $df = $_POST['df'];

    $data = $api->getData($dd,$df);

    echo $data;