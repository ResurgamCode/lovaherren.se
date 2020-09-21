<?php

file_put_contents('./orders/'.date('m-d-Y_his'), json_encode($_POST));
?>

<html>
<?php include("headmeta.php");?>

    <body>
        <?php include("header.php");?>
        <div id="content">
            <div id="content-inner">
                <h1>Tack för din beställning!</h1>
            </div>
        </div>
    </body>
</html>