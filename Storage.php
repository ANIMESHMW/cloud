<html>
   
   <head>
      <title> STORAGE SERVICE</title>
      
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
               
               <form action = "" method = "post">
                  <label>STORAGE INSTANCE NAME  :</label><input type = "text" name = "STORAGE" class = "box"/><br /><br />
                  <label>NO. OF STORAGE CONTAINER (1=4GB)  :</label><select name = "dropdown"><option value = "1"class = "box" >1 Container</option>
            <option value = "2"class = "box">2 Container</option>
            <option value = "3"class = "box" >3 Container</option>
            <option value = "4"class = "box" >4 Container</option>
            
            
         </select>
<br><br>                  <input type = "submit" value = " Create Virtual Space "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>