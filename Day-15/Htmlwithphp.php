<?php
    $single_quote = '<b><a href = "https://www.google.co.in/">Google</a></b>';
    echo $single_quote;
    echo '<br>';

    $single_quote1 = '<b><a href = "https://www.php.net/">Click Here....</a></b>';
    echo $single_quote1;
    echo '<br>' . '<br>' . '<br>';

    echo <<<abc
    <div class='a'></div>
    <h2>Helloooo...Hiii</h2>
    <h4>How are you???</h4>
    abc;
?>