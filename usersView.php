<?php
    echo '<table class=\"table\"><tr><th scope=\"col\"><b>First Name<b/><th/><th scope=\"col\"><b>Last Name<b/><th/><tr/>';
    foreach($users as $user)
    {
        echo "<tr><td>".($user->get_first_name())."<td/><td>".($user->get_last_name())."<td/><tr/>";
    }
    echo "<table/>"
?>