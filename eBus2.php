<?php
session_start();
$fullNameValue = "";
$totalValue = "";
/*
 * Creat a session variable for th e mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
/**
 * Allocate the mobile number session variable to a text box.
 */


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>eBusiness</title>
        <link href="Style.css" rel="stylesheet">
        
    </head>
    
    <body id='main'>
        
        <header>
           
        <h1>Shop Calculator</h1>
            
            <ul>
                <li><a class="active" href="Index.php">Homepage</a></li>
                <li><a  href="ConsultingServices.html">Consulting Services</a></li>
                <li><a href="eBus1.php">eBusiness</a></li>
            </ul>
        </header>
        
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b><h1 style="background-color:#484848;">Enter your details below:</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" id="txtEmail" name="txtEmail" value="" required/></td>
                        </tr>
                        <tr>
                            <td>Pin (4- Digits)</td>
                            <td><input type="password" id="txtPin" name="txtPin" value="" pattern="(?=.*[0-9]).{4,4}" required /></td>
                        </tr>
                        <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue" />
                </center>
                
            </form>
      
    </body>
</html>