<?php



require_once('./vboxServiceWrappers.php');

//connect to service
$connection = new SoapClient("vboxwebService.wsdl", array('location' => "http://localhost:18083/"));

//Logon to webservice
$mgr = new IWebsessionManager($connection);
// Dummy username and password (change to appropriate values or set authentication method to null)
$vbox = $mgr->logon("username","password");
$machines = $vbox->machines;
$mach=$_POST["VM"];
echo "hello";

foreach ($machines as $machine){
    echo "hi";
   // $mach="linux";
    if($machine->name==$mach){
   echo "jkj";     
   $Session=$mgr->getSessionObject($vbox);
 //  $machine->lockMachine($Session,);
     $p=$machine->getSettingsFilePath();
      echo $p;
      //$k=$vbox->openmachine($p);
      $pr=$machine->launchVMProcess($Session,"headless","");
      $pr->waitforCompletion(10000);
      

      
      
      
      
      
    }
   // $maching=$vbox->openmachine($p);
    
}
//$k=$vbox->openmachine($p);



