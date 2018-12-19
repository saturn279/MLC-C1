<?php


error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$code = $_POST["code"];

if($_GET['lang']=="java")
{	
	$language="java";
	$codepath = "C:\\Program Files\\Java\\jdk1.8.0_101\\bin\\itest.java";
	$exepath = "start batch_java.bat";	
	$oppath = "C:\\Program Files\\Java\\jdk1.8.0_101\\bin\\op4.txt";
	$epath = "C:\\Program Files\\Java\\jdk1.8.0_101\\bin\\error.txt";
	
}
else 	if($_GET['lang']=="python"){
	 $codepath = "C:\Users\Admin\AppData\Local\Programs\Python\Python35-32\hello.py";
	  $exepath = "start batch_python.bat";
	  $oppath = "C:\Users\Admin\AppData\Local\Programs\Python\Python35-32\op.txt";
	  $epath = "C:\Users\Admin\AppData\Local\Programs\Python\Python35-32\\error.txt";
	  
	} 

else 	if($_GET['lang']=="perl"){
	 $codepath = "C:\Perl\bin\hello.pl";
	  $exepath = "start batch_perl.bat";
	  $oppath = "C:\Perl\bin\op.txt";
	  $epath = "C:\Perl\bin\\error.txt";
	  
	}
else 	if($_GET['lang']=="ruby"){
	 $codepath = "C:\Ruby24\bin\hello.rb";
	  $exepath = "start batch_ruby.bat";
	  $oppath = "C:\Ruby24\bin\op.txt";
	  $epath = "C:\Ruby24\bin\\error.txt";
	  
	} 
   if($_GET['lang']=="cpp"){
	  $codepath = "C:\MinGW\bin\hello.cpp";
	  $exepath = "start batch_cpp.bat";
	  $oppath = "C:\MinGW\bin\\top2.txt";
	  $epath = "C:\MinGW\bin\\error.txt";
	}
         if($_GET['lang']=="c"){
	  $codepath = "C:\MinGW\bin\hello.c";
	  $exepath = "start batch_c.bat";
	  $oppath = "C:\MinGW\bin\\top3.txt";
	  $epath="C:\MinGW\bin\\error.txt";
	}
	else if($_GET['lang']=="pascal"){
	  $language="pascal";
	$codepath = 'D:\FPC\3.0.4\bin\i386-win32\\test.pas';
  $exepath = 'start C:\xampp\htdocs\\temp5\batch_pascal.bat';
	  $oppath = 'D:\FPC\3.0.4\bin\i386-win32\\op.txt';
	  $epath = 'D:\FPC\3.0.4\bin\i386-win32\\new.txt';
	}  
else if($_GET['lang']=="html"){
	  $language="html";
	$codepath = 'oph.html';
	}  
	else if($_GET['lang']=="php"){
	  $language="php";
	$codepath = 'oph.php';
	}  
	else if($_GET['lang']=="javascript"){
	  $language="js";
	$codepath = 'oph1.php';
	}  

if(isset($_POST['submit'])){
	
	$e = fopen($epath,"w+"); $e1 = fwrite($e," ",1); $op = fopen($oppath,"w+"); $op1 = fwrite($op," ",1); fclose($e);fclose($op);
$a = fopen($codepath,"w+");
fwrite($a,$code);
fclose($a);
 if($_GET['lang']=="html" OR $_GET['lang']=="php" OR $_GET['lang']=="javascript" ){
	 header("location: $codepath");}
if($exepath.intval())
$str = exec($exepath); }

 
	?>
	
	
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
//alert("java1");
function scheduleA(a1){
var opt = a1.value;
//alert(document.getElementById("code").value);
var epath = "path";
if(opt=="java"){
		var code1 = "class itest \n { \n public static void main(String args[]){\n System.out.println(\"Hello World!\");\n }\n}";
	var code2 = "Hello World";
	window.open("compiler.php?lang=java","_self");
	}

if(opt=="cpp"){
	language="cpp";
	code1 = " #include<iostream> \n using namespace std; \n int main() \n { \n cout<<\"Hello World!\"; \n return 0;} \n }";
	code2 = "Hello World!";
    window.open("compiler.php?lang=cpp","_self");
	}
	
	else if(opt=="lan"){
	code1 = "";
	code2 = "";
	  
	}
	
else if(opt=="c"){
	  language="c";
	 // code1 = "#include<stdio.h> \n #include<conio.h> \n int main() \n { \n printf(\"Hello World!\"); \n return 0; \n getch();\n }";
	//  code2 = "Hello World!";
window.open("compiler.php?lang=c","_self");
	}

else if(opt=="python"){
	  language="c";
	//  code1 = "print \" Hello World!\";"
	//  code2 = "Hello World!";
	  codepath = "C:\Users\Admin\AppData\Local\Programs\Python\Python35-32\hello.py";
	  exepath = "start batch_python.bat";
	  oppath = "C:\Users\Admin\AppData\Local\Programs\Python\Python35-32\op.txt";
	  window.open("compiler.php?lang=python","_self");
	} 
	

else if(opt=="pascal"){
	//  language="pascal";
	//   code1 = "program Hello;\nbegin\nwriteln (\'Hello World!!!\');\nend."
	//  code2 = "Hello World!";
	 window.open("compiler.php?lang=pascal","_self");
	} 
	

else if(opt=="html"){
	//  language="html";
	 //  code1 = '<h1>hello world!</h1>';
	window.open("compiler.php?lang=html","_self"); }


else if(opt=="php"){
	//  language="php";
	  // code1 = ''; //'\<\?php \?\>';
window.open("compiler.php?lang=php","_self"); }

else if(opt=="javascript"){
	//  language="js";
	 //  code1 = ''; //'\<\?php \?\>';
	//  code2 = "";
	window.open("compiler.php?lang=javascript","_self"); }


else if(opt=="ruby"){
	//  language="ruby";
	 // code1 = "puts \" Hello World!\";"
	 // code2 = "Hello World!";
	  window.open("compiler.php?lang=ruby","_self");
	} 

else if(opt=="perl"){
	//  language="perl";
	//  code1 = "print \" Hello World!\";"
   window.open("compiler.php?lang=perl","_self");
	} 

}
              
</script>
<script language="Javascript" type="text/javascript" src="../edit_area/edit_area_full.js"></script>
	<script language="Javascript" type="text/javascript">
		// initialisation
		editAreaLoader.init({
			id: "code"	// id of the textarea to transform		
			,start_highlight: true	// if start with highlight
			,allow_resize: "both"
			,allow_toggle: true
			,word_wrap: true
			,language: "en"
			,syntax: "php"	
		});
		
		// callback functions
		function my_save(id, content){
			alert("Here is the content of the EditArea '"+ id +"' as received by the save callback function:\n"+content);
		}
		
		function my_load(id){
			editAreaLoader.setValue(id, "The content is loaded from the load_callback function into EditArea");
		}
		
		function test_setSelectionRange(id){
			editAreaLoader.setSelectionRange(id, 100, 150);
		}
		
		function test_getSelectionRange(id){
			var sel =editAreaLoader.getSelectionRange(id);
			alert("start: "+sel["start"]+"\nend: "+sel["end"]); 
		}
		
		function test_setSelectedText(id){
			text= "[REPLACED SELECTION]"; 
			editAreaLoader.setSelectedText(id, text);
		}
		
		function test_getSelectedText(id){
			alert(editAreaLoader.getSelectedText(id)); 
		}
		
		function editAreaLoaded(id){
			if(id=="example_2")
			{
				open_file1();
				open_file2();
			}
		}
		
		function open_file1()
		{
			var new_file= {id: "to\\ é # € to", text: "$authors= array();\n$news= array();", syntax: 'php', title: 'beautiful title'};
			editAreaLoader.openFile('example_2', new_file);
		}
		
		function open_file2()
		{
			var new_file= {id: "Filename", text: "<a href=\"toto\">\n\tbouh\n</a>\n<!-- it's a comment -->", syntax: 'html'};
			editAreaLoader.openFile('example_2', new_file);
		}
		
		function close_file1()
		{
			editAreaLoader.closeFile('example_2', "to\\ é # € to");
		}
		
	function toogle_editable(id)
		{
			editAreaLoader.execCommand(id, 'set_editable', !editAreaLoader.execCommand(id, 'is_editable'));
		}
	
	</script>
	

<!--<script src="//tinyimage.cachefly.net/4.2/tinymce.min.js"></script>
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>-->
<script>tinymce.init([selector:'#code']);</script>
<!--<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>-->

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles1.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body align="center">
	
	<div class="limiter">
		<div class="container-login100">

					
			<div class="wrap-login100" style="padding: 10px 130px 33px 95px">
			<div id='cssmenu' style="align: center;">
<ul align =" center" style="align: center;">
   <li class='active' ><a href='#'>Compiler</a></li>
   <li><a href='index.php?logout=1'>Home</a></li>
   <li><a href='comment.php'>Feedback </a></li>
   <li><a href='help1.php'>Help</a></li>
</ul>
</div>	

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						
					</span>
				
			





<select onchange="scheduleA(this)" style="color:rgb(100,100,100); border-color:#FFFFFF; outline:none ;" id="lang" name="lang">
    <option value="lan"> language </option>

	<option value="ruby">RUBY</option> 
	<option value="perl">PERL</option> 
    <option value="cpp" rel="icon-temperature">CPP</option>
    <option value="java">java</a></option>
    <option value="c">C</option>
	<option value="python">python</option>
	<option value="pascal">pascal</option>
	<option value="html">HTML</option>
	<option value="php">PHP</option>
	<option value="javascript">JAVASCRIPT</option>
	 </select> 
<br>
<br>
		
					<div>Program</div>

	<div><textarea style="height: 350px; width: 100%;" placeholder="Code here" rows="10" cols="90" style="border:5px1 border-color:#FFFFFF" id="code" name="code"><?php $cd = fopen("$codepath","r+"); $cd1 = fread($cd,1000); echo $cd1;?></textarea> </div>
			
					<div>Output</div>
					<div></div>
<textarea name="output" id="output" placeholder="Output" rows="5" cols="90" style=" background-color: #FFFFFF 
  border: 2px solname #FFF; " readonly ><?php $e = fopen($epath,"r+"); $e1 = fread($e,300);if($e1.intval()) echo $e1."\n"; $op = fopen($oppath,"r+"); $op1 = fread($op,300); echo $op1;  ?></textarea>
<div class="container-login100-form-btn">
	<input type="submit" value="Compile" id="submit" name="submit" class="login100-form-btn" />
	</div> 
<div class="container-login100-form-btn">
						<input type="button" name="Release" onClick="window.location.reload()" value="run" class="login100-form-btn" /						
						
					</div>
					</form>
			</div>
		</div>
	</div>
	
	
</body>
</html>
