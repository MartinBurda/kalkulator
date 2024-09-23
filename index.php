<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    if (isset($_COOKIE['op']) && isset($_COOKIE['num'])) {
        switch ($_COOKIE['op']) {
            case "+":
                $result = $_COOKIE['num'] + $num;
                break;
            case "-":
                $result = $_COOKIE['num'] - $num;
                break;
            case "*":
                $result = $_COOKIE['num'] * $num;
                break;
            case "/":
                $result = $_COOKIE['num'] / $num;
                break;
            case "√":
                $result = sqrt($num);
                break;
            case "^2":
                $result = $num ** 2;
                break;
        }
        $num = $result;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculator</title>
</head>
<body>
        <div class="calc">
            <form action="" method="post">
                <br>
                <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
                <input type="submit" class="numbtn" name="num"value="7">
                <input type="submit" class="numbtn" name="num"value="8">
                <input type="submit" class="numbtn" name="num"value="9">
                <input type="submit" class="calbtn" name="op"value="+"> <br><br>
                <input type="submit" class="numbtn" name="num"value="4">
                <input type="submit" class="numbtn" name="num"value="5">
                <input type="submit" class="numbtn" name="num"value="6">
                <input type="submit" class="calbtn" name="op"value="-"><br><br>
                <input type="submit" class="numbtn" name="num"value="1">
                <input type="submit" class="numbtn" name="num"value="2">
                <input type="submit" class="numbtn" name="num"value="3">
                <input type="submit" class="calbtn" name="op"value="*"><br><br>
                <input type="submit" class="c" name="num"value="c">
                <input type="submit" class="numbtn" name="num"value="0">
                <input type="submit" class="equal" name="equal"value="=">
                <input type="submit" class="calbtn" name="op"value="/"><br><br>
                <input type="submit" class="calbtn" name="op"value="√">
                <input type="submit" class="calbtn" name="op"value="^2">
            </form>
        </div>
        <div>
    <p>Vyber tvar</p>
    <form action="obsah.php" method="post">
        <input type="radio" id="circle" name="shape" value="kruh" onclick="document.getElementById('dimension1').placeholder='Poloměr'; document.getElementById('dimension2').style.display='none';">
        <label for="circle">Kruh</label><br>
        
        <input type="radio" id="triangle" name="shape" value="trojuhelnik" onclick="document.getElementById('dimension1').placeholder='Základna'; document.getElementById('dimension2').style.display='block';">
        <label for="triangle">Trojúhelnik</label><br>
        
        <input type="radio" id="square" name="shape" value="ctverec" onclick="document.getElementById('dimension1').placeholder='Strana'; document.getElementById('dimension2').style.display='none';">
        <label for="square">Čtverec</label><br><br>
        
        <p>Obvod/obsah</p>
        <input type="radio" id="perimeter" name="calculation" value="obvod">
        <label for="perimeter">Obvod</label><br>
        
        <input type="radio" id="area" name="calculation" value="obsah">
        <label for="area">Obsah</label><br><br>

        <div>
            <label for="dimension1">Rozměr 1:</label>
            <input type="number" name="dimension1" id="dimension1" required><br>
            
            <label for="dimension2" style="display:none;">Rozměr 2:</label>
            <input type="number" name="dimension2" id="dimension2" style="display:none;"><br>
        </div>

        <input type="submit" class="btn btn-primary" value="Vypočítat">
    </form>
</div>


</body>
</html>