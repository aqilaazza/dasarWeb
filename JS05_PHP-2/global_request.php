<HTML>
    <body>
        <form method="post" action="<?php echo $SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="frame">
        <input type="submit">
        </form>
    <?php
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
        echo "Name is empty"; 
        } else {
        echo $name;
        }
    }
    ?>
    </Body>
</HTML>