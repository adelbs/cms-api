<?php

if (isset($allow) && $allow) {
    echo '{ "method": "processar post '. $allow .'" }';
}
else {
    echo '{ "method": "forbiden" }';
}
