
<?php
if($_POST)
{
    $name=$_POST['name'];
    $seat=$_POST['seat'];
    $meal=$_POST['meal'];
}
?>
<html>
<head>
    <title>COOKIES</title>
    <script type="text/javascript">
function showDiv(){
    document.getElementById("second").style.display="block";
    document.getElementById("main").style.display="none";

}
</script>

</head>
<body style="background-color: grey;color: white;">
    <center>
        <div id="main">
        <form method="post" action="cookies.php">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center"> Set Tour Flight Preference</th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="name"></th>
        </tr>
        <tr>
            <th>Seat Selection</th><th><input type="radio" name="seat" value="Middle">Middle<input type="radio" name="seat" value="Window">Window<input type="radio" name="seat" value="Center">Center</th>
        </tr> 
        <tr>
            <th>Meal Selection</th><th><input type="radio" name="meal" value="Vegeterian">Vegetarian<input type="radio" name="meal" value="Non-Vegetarian">Non Vegetarian<input type="radio" name="meal" value="Diabetic">Diabetic<input type="radio" name="meal" value="Child">Child</th>
        </tr>       
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="Submit"></th>
        </tr> 
    </table>
    </form>
<?php
date_default_timezone_set('Asia/Calcutta');
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
// set expiry date to two months from now
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Last Visited on : ".$visit;
}
else
echo "You've got some old cookies!";
?>
<p>Click <a href="#" class="btn btn-light" data-placement="top" title="Edit" onclick="showDiv()"><i class="fa fa-edit"> Go</i></a> to view the contents</p>
</div>

<div id="second" hidden style="text-align:left">
    <h1>------JSD FLIGHTS------</h1>
    <br>
    Thank you for choosing JSD Flights<br>
    The cookie values are:<br>
    <?php
        $inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('name',$name, $inTwoMonths);
setcookie('seat',$seat, $inTwoMonths);
setcookie('food',$meal, $inTwoMonths);
echo "Name: ".$_COOKIE["name"];
echo '<br>';
echo "Seat: ".$_COOKIE["seat"];
echo '<br>';
echo "Food: ".$_COOKIE["food"];
?>
</div>
    </center>
</body>
</html> 