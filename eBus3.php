<!DOCTYPE html>
<html>
    <body>
        <!-- //Starting the session to get the session variable from last page.-->
        <h1> Purchase Receipt:</h1>
        <?php
       
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
       
        ?>
    </body>
</html>