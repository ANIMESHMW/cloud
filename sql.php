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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>REMOTE DATABASE SERVICE</b></div>
				
            <div style = "margin:30px">
               
               <form action = "SQL.PHP" method = "post">
                  <label>UPLOAD SCHEMA FILE(.sql):</label>< <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
                  <label>PASSWORD  :</label><input TYPE="PASSWORD" NAME= "PASSWORD" CLASS="BOX"/><BR><br>            
               <input TYPE="SUBMIT" VALUE="">
               
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>


</html>