<?php
include 'db.php';
$q = intval($_GET['q']);
$sqlQuery = "SELECT * FROM disciplini WHERE id_spec={$q}";
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
if ($result) {
    while ($subj = mysqli_fetch_array($result)) {
        echo '<option value="' . $subj['id'] . '">' . $subj['ime'] . '</option>';
    }
}

?>
