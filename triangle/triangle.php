<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หาสามเหลี่ยม</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="triangle">
        <div class="form">
            <form method="post">
                <table>
                    <tr>
                        <td> <input type="number" name="num1" value="" placeholder="ตัวเลขด้านที่ 1" min="0.00" max="100.00" step=".01" required/>
                        </td>
                    </tr>
                    <tr>
                        <td> <input type="number" name="num2" value="" placeholder="ตัวเลขด้านที่ 2" min="0.00" max="100.00" step=".01"required/>
                        </td>
                    </tr>
                    <tr>
                        <td> <input type="number" name="num3" value="" placeholder="ตัวเลขด้านที่ 3" min="0.00" max="100.00" step=".01"required/>
                        </td>
                    </tr>
                    <tr>
                        <td> <input type="submit" name="submit" value="ยืนยัน" id="button"/> 
                        </td>
                    </tr>
                </table>
            </form>
            <p>
                <?php
                    if(isset($_POST['submit']))
                    {
                    $a = $_POST['num1'];
                    $b = $_POST['num2'];
                    $c = $_POST['num3'];
                    echo "ค่าที่ได้รับ : ".$a." , ".$b." , ".$c. "</br></br>";
                          
                    if(($a)+($b)<($c) || ($b)+($c)<($a) || ($c)+($a)<($b))
                    {
                    echo("Not a triangle");
                    }
                    
                    else
                    if(($a*$a)+($b*$b)==($c*$c) || ($b*$b)+($c*$c)==($a*$a) || ($c*$c)+($a*$a)==($b*$b))
                    {
                    echo("Right angle triangle");
                    }
                    else
                    if(($a==$b) && ($b==$c))
                    {
                    echo("Equilateral triangle");
                    }
                    else
                    if(($a==$b) || ($b==$c) || ($c==$a))
                    {
                    echo("Isosceles triangle");
                    }
                    else
                    if(($a!=$b && $b!=$c && $c!=$a))
                    {
                    echo("Scalene triangle");
                    }
                    return 0;
                    }
                ?>
        </div>
    </div>
</body>
</html>