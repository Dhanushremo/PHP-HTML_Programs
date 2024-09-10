<?php

$host = "localhost";
$name = "root";
$password = "";
$db = "module5";
$con = new mysqli($host, $name, $password, $db);

$fn = $_POST["fn"];
$sn = $_POST["sn"];
$ln = $_POST["ln"];
$surn = $_POST["srnn"];
$gender = $_POST["gen"];
$date = $_POST["date!"];
$ph = $_POST["ph"];
$email = $_POST["mail"];
$uid = $_POST["uname"];
$pwd = $_POST["pwd"];
$rpwd = $_POST["rpwd"];

if (empty($fn) || empty($ln)) {
    echo "<div style='color:red; font-size:30px;'>invalid,please Enter the First or last names!!</div>
        <div style='text-align:center; font-size:20px; color:blue;'>Please Enter The Names OnceAgain</div>
        <div style='text-align:center; font-size:20px; color:blue;'><a href='SignUP.html'><button type='button'>Click Here</button></a></div>";
} elseif ($pwd === $rpwd) {
    $insert = "insert into user_info values('$fn','$sn','$ln','$surn','$gender','$date','$ph','$email','$uid','$pwd')";
    if ($con->query($insert) === TRUE) {
        echo "<div style='text-align:center; color:blue;text-decoration:none; font-size:30px;'>Congratulations Your REGISTRATION IS COMPLETED Successfully</div>
                <div style='text-align:center; color:brown; font-size:10px; font-size:20px'>Click Below to SIGNIN</div>
                <div style='text-align:center';><a  style='text-decoration:none'; href='SignIN.html'><button type='button'>CLICKME!!</button></a></div>";
    }

}
 else {
    echo "<div style='color:red; font-size:35px; font-family:italic;'>Invalid, password mismatch!!</div>
      <div style='text-align:center; font-size:20px; color:blue;'>Please check & enter the password again</div>
      <div style='text-align:center; font-size:20px; color:blue;'>
          <a href='SignUP.html'>
              <button type='button'>Click Here To Enter</button>
          </a>
      </div>";
}

$con->close();
?>
