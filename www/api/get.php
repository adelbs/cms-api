<?php

if (isset($allow) && $allow) {
    echo '{ "method": "processar get '. $allow .'" }';
}
else {
    echo '{ "method": "forbiden" }';
}
