<!DOCTYPE html>


<html>

<head>
    <style type="text/css">
        #demo{
            color: darkcyan;
            font-size: 38px;
            
        }
        input {
            font-size: 18pt;
        }
        select{
            font-size: 18pt;
        }
        input:focus, textarea:focus{
            background-color:blanchedalmond;
        }
        input submit{
            font-size: 12pt;
        }

       a:link {
           color:darkslategray;
           background-color:bisque;
           text-decoration: none;
        }
        a:hover {
            color:coral;
            background-color: transparent;
            text-decoration: none;
        }
        
        .home{
            font-size: 30px;
            padding-right: 410px;
        }
        .class {
            padding-top: 5px;
            
        }
        p{
            font-family: cursive;
            font-size: 20px;
            font-style: italic;
            //font-family: sans-serif;
        }
        
        form {
            background-color: antiquewhite;
  /* Just to center the form on the page */
    //margin-top: 5%;
  width: 750px;

  /* To see the limits of the form */
  padding-top: .75em;
  padding-bottom: 3em;
  padding-left: 3em;
  padding-right: 3em;
  border: 1px solid #CCC;
  border-radius: 1em;
}
    </style>
</head>

<body>

<center>
    
    <form action="insert.php" method="POST" onsubmit="return isValid()">
        <div class="home">
            <a  href="index.php">Home</a>
     </div>
    
        <table>
            <center><p id="demo">Admin Registration Form</p></center>
            <tr>
                <td><p>First Name:</p></td>
                <td>
                    <input type="text" name="firstname" id="fname"><span id="fn" style="color:red"></span>
                </td>
            </tr>


            <tr>
                <td><p>Last Name:</p></td>
                <td>
                    <input type="text" name="lastname" id="lname"><span id="ln" style="color:red"></span>

                </td>
            </tr>
            
            <tr>
                <td><p>User Name:</p></td>
                <td>
                    <input type="text" name="username" id="uname"><span id="un" style="color:red"></span>

                </td>
            </tr>
            <tr>
                <td><p>Email:</p></td>
                <td>
                    <input type="text" name="email" id="email"><span id="eml" style="color:red"></span>

                </td>
            </tr>
            <tr>
                <td><p>Mobile:</p></td>
                <td><input type="text" name="mobile" id="mb"><span id="mbl" style="color:red"></span></td>
            </tr>
            <tr>
                <td><p>Password:</p></td>
                <td>
                    <input type="password"  name="password" id="pswrd" value="">
                    <span id="pass" style="color:red"></span>
                </td>
            </tr>
            <tr>
                <td><p>Gender:</p></td>
                <td>
                    <input type="radio" name="gender" value="male" />male
                    <input type="radio" name="gender" value="female" />female
                    <!-- <span id="rc" style="color:red"></span> -->
                    <span id="rNc" style="color:red"></span>
                </td>
            </tr>


           
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form></center>


    <script type="text/javascript">
        function isValid() {
            var m1 = 0;
            var true_count = 0;

            var f_name = document.getElementById('fname');
            var l_name = document.getElementById('lname');
            var u_name = document.getElementById('uname');
            var mail = document.getElementById('email');
            var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
            
            var moblie = document.getElementById('mb');
            
            var mbpattern = /^(\+)?(88)?(01)(1|([5-9]))([0-9]{8})$/;
            
            var password = document.getElementById('pswrd');
            
            var radio = document.getElementsByName('gender');
            var select = document.getElementById('districts');
            var status = false;

            if (f_name.value.length == 0) {
                document.getElementById('fn').innerHTML = "*Enter First Name";
                //return false;
                //status = false;
            } else {
                document.getElementById('fn').innerHTML = "Ok";
                //status = true;
                true_count+=1;
            }
            
            if (l_name.value.length == 0) {
                document.getElementById('ln').innerHTML = "*Enter Last Name";
                //return false;
                //status = false;
            } else {
                document.getElementById('ln').innerHTML = "Ok";
                //status = true;
                true_count+=1;
            }
            
            if (u_name.value.length == 0) {
                document.getElementById('un').innerHTML = "*Enter User Name";
                //return false;
                //status = false;
            } else {
                document.getElementById('un').innerHTML = "Ok";
                //status = true;
                true_count+=1;
            }

            if (mail.value.length == 0 || (!pattern.test(mail.value))) {
                if (mail.value.length == 0)
                    document.getElementById('eml').innerHTML = "*Enter Email";
                //m1 = 1;
                else
                    document.getElementById('eml').innerHTML = "*Email is not Valid";
                //return false; 
                //status = false;

            } else {
                document.getElementById('eml').innerHTML = "Valid";
                //status = true;
                true_count+=1;
            }
            
            
            
            if (moblie.value.length == 0 || (!mbpattern.test(moblie.value))) {
                if (moblie.value.length == 0)
                    document.getElementById('mbl').innerHTML = "*Enter mobile no.";
                //m1 = 1;
                else
                    document.getElementById('mbl').innerHTML = "*Number is not Valid";
                //return false; 
                //status = false;

            } else {
                document.getElementById('mbl').innerHTML = "Valid";
                //status = true;
                true_count+=1;
            }
            
            if (password.value.length == 0) {
                document.getElementById('pass').innerHTML = "*Enter password";
                //return false;
                //status = false;
            }else if (password.value.length < 6) {
                document.getElementById('pass').innerHTML = "*Password must be atleast 6 characters";
                //return false;
                //status = false;
            } 
            else {
                document.getElementById('pass').innerHTML = "Ok";
                //status = true;
                true_count+=1;
            }

            for (var i = 0; i < radio.length; i++) {
                if (radio[i].checked) {
                    document.getElementById('rNc').innerHTML = radio[i].value;
                    //status = true;
                    true_count+=1;
                    break;
                } else {
                    if (i == radio.length - 1)
                        document.getElementById('rNc').innerHTML = " *Pleae click in male/felame";
                    //alert("Pleae checked male/felame");
                    //return false;
                    //status = false;
                }
            }
            
            if(true_count == 7)
                return status = true;
            else
                return status=false;

        }
    </script>


</body>

</html>