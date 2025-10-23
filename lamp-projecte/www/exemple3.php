<?php
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
?>
<h3>str_contains() ha devuelto true</h3>
<p>Está utilizando Firefox</p>
<?php
} else {
?>
<h3>str_contains() ha devuelto false</h3>
<p>No está utilizando Firefox</p>
<?php
}
?>

