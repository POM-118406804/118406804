<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script language="javascript" type="text/javascript">
        function packageTotal()
        // Enter in prices here
        var x = 5;
        var y = 10;
        var p = x + y * 12;
        var b = y * 12
        
        if (document.getElementById('basicProgram').checked) {
            //Basic package is checked
            document.calculator.total.value = b;
            
        } else if (document.getElementById('proProgram').checked) {
            //Pro package is checked
            document.calculator.total. value = p;
            
        }
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <!-- Opening a html file -->
        <form name ="calculator"> 
            
            <!-- User fills out form details here -->
            
            <br />
            <input type="radio" name="programType" id="basicProgram" value="Basic" /> Basic
            <input type="radio" name="programType" id="proProgram" value="Pro" /> Pro
            
            <!-- Here results will be displayed -->
            
            <br />
            Your total price is: <input type="text" name="total">
            
            <input type="button" value="Submit" onClick="javascript:packageTotal();" >
            
            
        </form>
    </body>
</html>
