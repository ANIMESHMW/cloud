<?php



require_once('./vboxServiceWrappers.php');

//connect to service
$connection = new SoapClient("vboxwebService.wsdl", array('location' => "http://localhost:18083/"));

//Logon to webservice
$mgr = new IWebsessionManager($connection);
// Dummy username and password (change to appropriate values or set authentication method to null)
$vbox = $mgr->logon("username","password");
$instance=$_POST['username'];
$os=$_POST["dropdown1"];
$cpu=$_POST["dropdown2"];
$ram=$_POST["dropdown3"];
$storage=$_POST["dropdown4"];


 //for ( $i=0; $i<100; $i++)
        //{
            // $baseFolder =$vbox->getDefaultMachineFolder();
            // $desktop = new Desktop(i);
             $machine =  $vbox->createMachine("",
                                                   $instance,
                                                   "",
                                                   $os,
                                                   true);
           // $machine=$vbox->openMachine("C:\Users\Dell\VirtualBox VMs\linux\linux.vbox");
            
  $machine->setcpucount($cpu);
  $machine->setVRAMSize($ram);
  
         
            
            
$machine->saveSettings();

ECHO "<h1>VIRTUAL MACHINE IS CREATED</H1>";
echo "DESCRIPTION";
ECHO "<BR>VIRTUAL MACHINE NAME-".$instance;
ECHO "<br>OS TYPE-".$os;
ECHO "<br>RAM-".$ram;
echo "<br>CPU COUNT-".$cpu;
echo "<br>STORAGE-".$storage;


?>
<html>
<head>
<title>VM PAGE</title></head>
<body>
<form action="MACHINESTART.PHP" method ="POST"><br><br>
<input TYPE= "TEXT" NAME="VM">
MACHINE NAME<br><input type = "submit" value = " STARTVM "/><br />
</form>

</body>


</html>
































