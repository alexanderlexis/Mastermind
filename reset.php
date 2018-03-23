<!--<script>
alert ("Yooo");
</script>-->

<?php
include 'credentials.php';

$sqlDelete = "TRUNCATE TABLE try";

$conn->query($sqlDelete);