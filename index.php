<?php
include_once "header.php";   

if (isset($_SESSION['user_id'])) {
    echo 'PRIJAVLJEN';
}
else {
    echo 'NEPRIJAVLJEN';
}

?>

<a href="users.php?username=vssscv&visina=190&teza=90&oci=modre">Uporabniki</a>

<?php
include_once "footer.php";
?>