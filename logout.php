<?php

session_start();
// session_unset("user");
// session_unset("");
// session_destroy("user");
unset($_SESSION["user"]);
header("Location: index.php");