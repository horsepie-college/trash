<link rel="stylesheet" href="style.css">

<h1>You have submitted a form with the following values:</h1>
<h2>GET variables:</h2>
<?php

foreach ($_GET as $key => $value) {
    echo "<p>";
    echo "{$key} = {$value}";
    echo "</p>";
}
?>

<h2>POST variables:</h2>
<?php

foreach ($_POST as $key => $value) {
    echo "<p>";
    echo "{$key} = {$value}";
    echo "</p>";
}