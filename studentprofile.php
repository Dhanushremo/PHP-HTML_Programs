<?php
echo "<table align='center' border='0' width='30%' colspan='3'>
    <tr><td align='center' style='color: red;' colspan='3'><STRONG>STUDENT PROFILE<STRONG><BR></td></tr>
        <tr>
            <td>
                <lable>First Name</lable>
            </td>
            <td colspan='3'>";
echo $_POST["fn"];
echo "</td>
        <td>";
        $name = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];
        $loc = 'uploaded_images';
        move_uploaded_file($temp, "$loc/$name");
        echo "<td align='center' rowspan='3' >";
        echo "<img src='$loc/$name' height=100 width=85>";
        echo "</td> </tr>
        <tr>
            <td>
                <lable>Second Name</lable>
            </td>
    
            <td colspan='2'>";
echo $_POST['sn'];
echo "</td> </tr>
        <tr>
            <td>
                <lable>Last Name</lable>
            </td>
            <td colspan='2'>";
echo $_POST['ln'];
echo "</td> <tr>
         <tr>
            <td>
                <lable>Sur Name</lable>
            </td>
            <td colspan='2'>";
echo $_POST['srn'];
echo "</td> </tr>
        <tr>
            <td><lable>Gender<lable></td>
            <td colspan='2'>";
echo $_POST['gen'];
echo "</td></tr>
        <tr>
            <td><lable>Date<lable></td>
            <td colspan='2'>";
echo $_POST['date!'];
echo "</td></tr>
        <tr>
            <td><lable>PhoneNumber<lable></td>
            <td colspan='2'>";
echo $_POST['ph'];
echo "</td></tr>
        <tr>
            <td><lable>E-MailId<lable></td>
            <td colspan='2'>";
echo $_POST['mail'];
echo "</td></tr>
        <tr>
            <td><lable>Address</lable></td>
            <td>";
echo $_POST['address'];
echo "</tr></td>
       ";
?>
