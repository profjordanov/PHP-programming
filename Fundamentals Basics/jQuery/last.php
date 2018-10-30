<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Учебни материали</title>

    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#specialnosti").change(function () {


            });

        });
    </script>
    <script>
        function showSubjects(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("disciplini").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "getSubjects.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>

<div>
    <select name="specialnosti" id="specialnosti" onchange="showSubjects(this.value)">
        <option value="0" selected>----Моля изберете----</option>
        <?php
        include 'db.php';
        $sqlQuery = 'SELECT * FROM specialnosti';
        $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
        if ($result) {
            while ($spec = mysqli_fetch_array($result)) {
                echo '<option value="' . $spec['id'] . '">' . $spec['ime'] . '</option>';
            }
        }

        ?>
    </select>
    <select name="disciplini" id="disciplini">
        <option>----Моля изберете----</option>
    </select>
</div>
</body>
</html>
