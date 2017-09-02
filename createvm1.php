<html>
   
   <head>
      <title>CREATE VM</title>
      
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
   
   <body >
	
      <div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>VIRTUAL MACHINE PROPERTIES</b></div>
				
            <div style = "margin:30px">
               
               <form action = "vmpage.php" method = "post">
                  <label>INSTANCE NAME  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>SELECT OS :       </label><select name = "dropdown1"><option value = "Linux"class = "box" >Linux</option>
            <option value = "Microsoft Windows"class = "box">Microsoft Windows</option>
            <option value = "BSD"class = "box" >BSD</option>
            <option value = "Solaris"class = "box" >Solaris</option>
            <option value = "others"class = "box" >others(upload .iso file)</option>
            
         </select><br><br>
          <label>CPU Count :</label><select name = "dropdown2"><option value = "1cpu"class = "box" >1 vCPU</option>
            <option value = "2cpu"class = "box">2 vCPU</option>
            <option value = "3cpu"class = "box" >3 vCPU</option>
            <option value = "4cpu"class = "box" >4 vCPU</option>
            
            
         </select><br><br> <label>RAM Size :</label><select name = "dropdown3"><option value = "1Gb"class = "box" >1 GB</option>
            <option value = "2Gb"class = "box">2 GB</option>
            <option value = "3Gb"class = "box" >3 GB</option>
            <option value = "4Gb"class = "box" >4 GB</option>
            
            
         </select><br><br>
         
         
          <label>Storage:</label><select name = "dropdown4"><option value = "4gb"class = "box" >4 GB</option>
            <option value = "8gb"class = "box">8 GB</option>
            <option value = "16gb"class = "box" >16 GB</option>
            <option value = "32gb"class = "box" >32 GB</option>
          
            
         </select><br><br>
         
         
         
         
        
         <br/>
         <br/>            
<input type = "submit" value = " launchvm "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>




