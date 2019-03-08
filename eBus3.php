<!DOCTYPE html>
<html>
    <head>
        <title> eBusiness </title>
           <link href="Style.css" rel="stylesheet">
    </head>
    <body id="main">
        <header>
           
        <h1> Purchase Receipt:</h1>
            
            <ul>
                <li><a class="active" href="Index.php">Homepage</a></li>
                <li><a  href="ConsultingServices.html">Consulting Services</a></li>
                <li><a href="eBus1.php">eBusiness</a></li>
            </ul>
        </header>
        
        <?php
       
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo '<div style="font-size:3em;color:#4CAF50;font-weight:bold;">The name is: <span style="font-size:1.25em;color:#484848;">'.$fullNameValue.''.'</span></div>';
       echo "<br></br>";
       echo '<div style="font-size:3em;color:#4CAF50;font-weight:bold;">The total value is: <span style="font-size:1.25em;color:#484848;">'.$totalValue.''.'</span></div>';
       
        ?>
    </body>
</html>