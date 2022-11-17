<?php
require '../controleDeSessao/controle.php';
session_destroy();
header ('Location: /tsi-php-2022-bkp/login');
