<!DOCTYPE html>
<html>
<head>
    <title>Business plan</title>
    <style>
         #container{
                width:1200px ;
            }
            form{
            padding:120px 450px;
            margin-bottom: 25px;
            margin-top:-100px
            }
            input[type="text"]{
            width: 500px;
            height: 45px;
            border:none;
            border-bottom: 1px solid silver;
            padding:10px;
            outline-color: darkgreen;
            background: #f1f1f1;
            }
            input[type="submit"]{
                margin-top:50px;

            }
            input[type="submit"]:hover{
                background:darkgreen;
                color:white;
                cursor:pointer;
            }
            input[type="file"]{
                margin-top:50px;
            }
            img{
                margin-top: 50px;
                padding-top: 30px;
                width: 330px;
                height: 100px;
                padding-left: 550px;
            }
            label{
                color:darkgreen;
            }
            Select{
            width: 500px;
            height: 45px;
            border:none;
            border-bottom: 1px solid silver;
            padding:10px;
            outline-color: darkgreen;
            background: #f1f1f1;
        }
    </style>
</head>
<div id="conatiner">
<img src="logo-button/logo.jpg">
<form action="" method="POST">
<P><h3 style="text-align:center; color: darkgreen;">We got you cover with your business problem, And You Can also Generate your Business plan by pressing a button.</h3></P>
<p><label>Company Name:</label><br><input type="text" name="cName" value=""></p>
<p><label>Company Email:</label><br><input type="text" name="cEmail" value=""></p>
<p><label>Company's Address:</label><br><input type="text" name="cAddr" value=""></p>
<p><label>Type of company :</label><br><input type="text" name="cType" value=""></p>
                <td ><b><p style="color:darkgreen">Select Your bussibess Type:<p></b><Select name="usertype"><br><br>
                    <option >Select Your Business type </option>
                    <option value="programing">Programmimg</option>
                    <option value="marketing">Marketing</option> 
                    <option value="farming">Farming</option>
                    <option value="doctor">Doctor</option>
                </Select></td>
<p><input type="submit" name="submit" value="Generte Bussiness plan"></p>
</form>
</div>
</html>