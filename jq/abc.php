<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css" />
<link rel="stylesheet" href="cs.css" />
<script src="dialogbox/jquery.dialogBox.js"></script>
<link rel="stylesheet" href="dialogbox/jquery.dialogbox.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOHIT jQuery practice</title>
</head>

<body>
<div id="slide_up_down" style="display:none;">You r not logged in,do u want to <a href="#" id="slides">signup</a>?</div><br />
<input type="button" class="btn btn-info" value="Show" id="show_starting" /> <input type="button" value="Fade in/out" id="fades_starting" class="btn btn-info" /> <input type="button" value="Slide Toggle" id="slidetoggle" class="btn btn-info"/> <br />
<p id="hs" style="display:none">Mohit Agarwal</p>
<form action="#">
<br />
<p>Name: <input type="text" id="name"  /></p>
<p>Email: <input type="text" id="email" /></p>
<input type="button" class="btn btn-info" value="Sign up" id="newsltr" />
</form><br />
<p><em>KeyDown and KeyUp</em></p>
<input type="text" id="keydown" />
<span id="keydown_text" />


<br />
<select id="dropdownlist">
<option></option>
<option>One</option>
<option>Two</option>
<option>Three</option>
<option>Four</option>
</select>
<span id="dropdownlist_feedback"></span>
<br />Bind 
<a href="#" id="bind_test">Google</a><br />
Live 
<input type="button" class="duplicate" value="Click Me!" />
<br /><br />
<textarea id="textareacodinglength" rows="2" cols="40" maxlength="55" ></textarea>
<div id="textareacodinglength_feedback" style="font-size:12px"></div><br />
<a href="#" class="cordinates" >Google's</a><div id="cord"></div><br />

<div id="hoverdiv"></div>
<a href="http://www.google.com" class="hover" hovertext="Google powerful search engine" >Google</a>
<a href="http://www.yahoo.com" class="hover" hovertext="Yahoo hahaha" >Yahoo</a>
<br />
<strong><em>each()use</em></strong>
<p><input type="text" id="ip1" class="css-input" /> <input type="text" id="ip2" class="css-input" /> <input type="button" id="ipjoins" value="Combine" class="button_example" /></p>
<div id="ip_value"></div>
<img src="1.jpg" id="imgg" />
<br />
<p><textarea id="scroll_test">hi i m mohit kumar cse4th yearasdasdasdasdasdasfasmfdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</textarea> <div id="scroll_test_feedback"></div> <span id="scroll_test_check" style="display:none"><input type="checkbox" id="check" class="glyphicon-check"/>I accept the terms and condition</span></p><br /><br />

<p><strong><em>Adding externally option to dropdown</em></strong> <a href="#" class="extr">Option A</a> <a href="#" class="extr">Option B</a> <a href="#" class="extr">Option C</a> <a href="#" class="extr">Option D</a> <select id="item_add"></select></p>

<!--<a href="#" class="back-to-top">Back to Top</a>-->
<a href="#" class="topbtn">Gototop</a>
<br />
Array
<p><input type="text" id="name_array"  /> <input type="button" id="arr_bttn" value="Search" class="btn btn-info" /><div id="namesarray_feedback"></div></p><br />
Array(each)
<p><input type="text" id="eacharraynames" /> <input type="button" id="eacharraynames_insert" value="Insert" class="btn btn-info" /></p>
<div id="eacharraynames_feedback"></div><div id="eacharraynames_feedback_dialog"></div>

<div id="time"></div><br />
<strong>Get HTTP request</strong>
<p><input type="text" id="http_string" /> <!--<input type="button" class="btn btn-info" id="http_btn" value="Go"/>--></p>
<div id="http_string_feedback"></div><br />


<strong>Post HTTP request</strong>
<p><input type="text" id="post_http_string" /> <textarea rows="5" cols="25" id="post_http_textarea"></textarea> <input type="button" class="btn btn-info" id="post_http_btn" value="Go"/></p>
<div id="post_http_string_feedback"></div><br />
Ajax use
<p><input type="text" id="ajax_string" /> <input type="button" value="Load" class="btn btn-info" id="ajax_btn" /> <div id="ajax_feedback"></div></p>

<strong><em>Radio Button i/p in jQuery</em></strong>
<p>Gender: <input type="radio" value="MALE" id="radio_ip" name="g"/>MALE <input type="radio" value="FEMALE" id="radio_ips" name="g" />FEMALE <div id="radio_feedback"></div></p>

<input type="button" id="dii"  />
<div id="diiiii" ></div>
<script src="js.js"></script>
</body>
</html>