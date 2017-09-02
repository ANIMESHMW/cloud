
<html>
   
   <head>
      <title>REMOTE DATABASE SERVICE</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body>
	
      <div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Virtual Storage Properties</b></div>
				
            <div style = "margin:30px">
               
               <form action = "SQL.PHP" method = "post">
                  <label>USERNAME :</label><input type = "text" name = "STORAGE" class = "box"/><br /><br />
                  <label>PASSWORD  :</label><input TYPE="PASSWORD" NAME= "PASSWORD" CLASS="BOX"/><BR><br>            
               <input TYPE="SUBMIT" VALUE="LOGIN">
               
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>


</html>





















<?php
$link = mysqli_connect("127.0.0.1", "root", "", "cloud");
echo "and";
//
//$output1 = shell_exec($link . 'C:\Users\Dell\Documents\dumps\Dump20170828.sql');
//$sql=$link->query("C:\Users\Dell\Documents\dumps\Dump20170828.sql");

//print_r($sql->fetch_all());
//echo $output1;
$query2 = file_get_contents("C:\Users\Dell\Documents\dumps\Dump20170828.sql");

$query1 = file_get_contents("C:\Users\Dell\Downloads\Sample-SQL-File-100-Rows.sql");
/*$stmt = $link->prepare($query);
$d=$stmt->execute();
if ($stmt->execute())
     echo "Success";
else 
     echo "Fail";
*/
$queries = explode(";", $query2);
    foreach($queries as $query){
       $d= mysqli_multi_query($link,$query);
        echo $d;
    }
//$a=mysqli_query($link,$query1);
//echo $a;



?>







