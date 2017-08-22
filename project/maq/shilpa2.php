<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

	<body style="border:1px solid #009; width:100%; height:620px;">

		<div class="heaader" style="border:1px solid #009; width:100%; height:100px;">
			<div claas="logo" style="border:1px solid #009; width:250px; height:100%; float:left ">
			<img src="images/loggo.png" style="height:100%; width:100%;">
			</div>

			<div class="heading" style="float:left;width:1094px; height:100%;  background-color:#CC6666;">
			<h1 style="color:#FFFFFF; margin-left:300px; font-size:50px; margin-top:5px; margin-bottom:5px;">MediOn</h1>
			<h4 style="color:#FFFFFF; margin-left:400px;  margin-top:0px;">Online Doctor 24X7...</h4>

			</div>

		</div>


			<form action="shilpa2.php" method="post">
				<div class="main" style="height:580px; width:100%; border:3px solid #000; background-image:url(images/aaabbb.jpg);">

					<div class="login_box" style="border:2px solid #000; width:35%; height:550px;; margin-left:370px; margin-top:10px; border-radius:10px;">

						<div class="login_head" style="width:100%; height:40px; border:2px solid #000; background-color:#CC6666; border-radius:10px;">

							<h1 style="color:#FFFFFF; margin-left:160px; font-size:24px; margin-top:5px;">Signup It's Free...</h1>

						</div>

						<div class="fields" style="border-radius:10px; background-color:#FFF; width:100%; heig">

							<input type="text" placeholder="First Name" name="p_fname" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px;">
							<!-- <input type="text" placeholder="last Name" name="p_lname" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px;">
                             <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             DOB : <input type="date" placeholder="DOB" name="p_dob" style="border-radius:10px; margin-top:18px; width:60%; height:25px; margin-left:30px;"><br>
                             <input type="radio" name="gender" placeholder="p_gender" value="Male" required="required" />MALE <input required="required" type="radio" name="gender" value="Female" />FEMALE<br />

                             <select name="blood_group" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px">
                                 <option value="O+">O+</option>
                                 <option value="O-">O- </option>
                                 <option value="A+">A+</option>
                                 <option value="A-">A-</option>
                                 <option value="B+">B-</option>
                                 <option value="AB+">AB+</option>
                                 <option value="AB-">AB-</option>
                             </select>

                             <input type="text" placeholder="allergy" name="allergy" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px">
                             <input type="email" placeholder="Email Id" name="p_emailid" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px">
                             <input name="password" type="password" placeholder="p_password" maxlength=" 10" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px">
                             <input type="number" placeholder="Phone No." name="p_pno" style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px"/>
                             <textarea placeholder="Address" name="p_address"  style="border-radius:10px; margin-top:15px; width:90%; height:25px; margin-left:20px"></textarea>
                        --> <p>  <input name="action" type="hidden" value="forgetpass" /></p>
                            <input type="submit" value="SUBMIT" style="border-radius:10px; margin-top:15px; width:60%; height:25px; margin-left:100px;" >
                    </div>
                </div>

            </div>

        </form>
</body>
</html>


<?php
if(isset($_POST['action'])){
	$name=$_POST['p_fname'];
	echo $name ;

}
?>