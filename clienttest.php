<?php



require_once('./vboxServiceWrappers.php');

//connect to service
$connection = new SoapClient("vboxwebService.wsdl", array('location' => "http://localhost:18083/"));

//Logon to webservice
$mgr = new IWebsessionManager($connection);
// Dummy username and password (change to appropriate values or set authentication method to null)
$vbox = $mgr->logon("username","password");

//Get a list of registered machines
$machines = $vbox->machines;
  $oSession=new ISession($mgr);
 $oMachine=new IMachine($vbox);
 $strVM="linux";
  try
        {
            $oMachine = $mgr->getSessionObject($vbox);

            // first assume we were given a UUID
            try
            {
                $oMachine = $vbox->getMachines($strVM);
            }
            catch (Exception $e)
            {
                try
                {
                    $oMachine = $vbox->findMachine($strVM);
                }
                catch (Exception $e1)
                {
                }
            }

            if ($oMachine == null)
            {
               // System.out.println("Error: can't find VM \"" + $strVM + "\"");
            }
            else
            {
            //     $uuid = $oMachine->getId();
                $sessionType = "gui";
                 $env = "DISPLAY=:0.0";
                 $oProgress =new IProgress;
                    $oMachine->launchVMProcess($oSession,
                                             $sessionType,
                                             $env);
                //System.out.println("Session for VM " + $uuid + " is opening...");
                $oProgress->waitForCompletion(10000);
                 $rc = $oProgress->getResultCode();
              //  if ($rc != 0){}
           //         System.out.println("Session failed!");
            
        }}
        catch (Exception $e)
        {
            $e->printStackTrace();
        }
        finally
        {
            if ($oSession != null)
            {
            $oSession->close();
            }
        }
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
//$a=$as->getIpaddress();
//echo $a;
//Take a screenshot of the first vm we find that is running
foreach ($machines as $machine)
{
    if ( 'Running' == $machine->state )
    {echo $machine->name;
        //$session = $websessionManager->getSessionObject($virtualbox->handle);
        //$uuid = $machine->id;
        //$machine->lockMachine($session->handle, "Shared");
       
        //$session->unlockMachine();
        
        //$machine->releaseRemote();
        //$session->releaseRemote();
        
        break;
    }
}

$mgr->logoff($vbox->handle);

?>

