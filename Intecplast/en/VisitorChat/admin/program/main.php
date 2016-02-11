<?php

/**
 * Set the variables for user identification and output them in the browser
 */
$first_class = new FirstUser();
$first_result = $first_class->GetFirstUser();
$first_user = isset($first_result->user_id) ? $first_result->user_id : "";
$first_nick = isset($first_result->nick) ? $first_result->nick : "";

include 'views/template/index.html';

?>