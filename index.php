<?php

use App\Component\HeadComponent;
use App\Component\MetaType;

require ("autoload.php");

$head = new HeadComponent();

?>
<html lang="<?=$head->get(MetaType::lang)?>">
    <head>
        <meta charset="<?=$head->get(MetaType::charset)?>">
        <meta name="title" content="<?=$head->get(MetaType::title)?>">
        <meta name="description" content="<?=$head->get(MetaType::description)?>">

        <title><?=$head->get(MetaType::title)?></title>
    </head>
    <body>

    </body>
</html>
