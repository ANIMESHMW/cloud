<?php



require_once('./vboxServiceWrappers.php');

//connect to service
$connection = new SoapClient("vboxwebService.wsdl", array('location' => "http://localhost:18083/"));

//Logon to webservice
$mgr = new IWebsessionManager($connection);
// Dummy username and password (change to appropriate values or set authentication method to null)
$vbox = $mgr->logon("username","password");
  try
        {
           // $i = 0;
            $m=new IMachine($connection, $handle = null);
            $machines=$vbox->Machines;
            echo "vgasd";
            foreach ( $machines as $machine)
            {
            $nam = $machine->getMemorySize();
            echo $nam;
            $s=$machine->getSettingsFilePath();
            echo "<br/>";
            echo $s;
            }
        }
        catch (Exception $e)
        {
           // $e.printStackTrace();
        }
   
$mgr->logoff($vbox->handle);
?>