<?php
    echo '<table><tr><td><b>First Name<b/><td/><td><b>Last Name<b/><td/><tr/>';
    foreach($user as $user)
    {
        echo "<tr><td>".($user->get_first_name())."<td/><td>".($user->get_last_name())."<td/><tr/>";
    }
    echo "<table/>"
?>