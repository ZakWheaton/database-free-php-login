Database Free PHP Login Script
=======================

Setup Steps
=======================
1) Change Username / Password variables to desired Username / Password <br>
2) Change the variable to where you'd like the script to redirect to if it successfully logs in <br>
3) Add 
<code> 
<?php
session_start();
if(!isset($_SESSION['loggedin'])) die("dead");
?>
</code>
before any HTML on desired password-protected login page!<br>
4)???<br>
5)PROFIT!!

