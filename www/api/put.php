<?php

if (isset($allow) && $allow) {
    echo '{ "method": "processar put '. $allow .'" }';
}
else {
    echo '{ "method": "forbiden" }';
}
