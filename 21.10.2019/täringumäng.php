<?php


function veereta(){
    echo rand(1,6);
}

?>
<html>
    <head>
        <script type="application/javascript">
            function veeretamine() {
                document.getElementById("tulemus").innerHTML = <?php veereta();  ?>;
            }
        </script>

    </head>
<body>

<button onclick="veeretamine()">Veereta!</button>

<p id="tulemus"></p>

</body>

</html>
