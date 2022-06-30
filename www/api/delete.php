<?php

if (isset($allow) && $allow) {
    echo '{ "method": "processar delete '. $allow .'" }';
}
else {
    echo '{ "method": "forbiden" }';
}
