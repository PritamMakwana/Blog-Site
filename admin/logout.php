<?php

include("./include/config.php");


unset($_SESSION["a_id"]);
unset($_SESSION["a_user"]);

header("Location: {$homename}/index.php");


?>