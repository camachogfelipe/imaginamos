<?php

/**
 * Get all the users from UserOnline class and pass them to
 * javascript with json
 */
$users = new UsersOnline();
echo json_encode($users->Get());

?>