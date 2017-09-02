<?php



require_once('./vboxServiceWrappers.php');

//connect to service
$connection = new SoapClient("vboxwebService.wsdl", array('location' => "http://localhost:18083/"));

//Logon to webservice
$mgr = new IWebsessionManager($connection,$handle=null);
// Dummy username and password (change to appropriate values or set authentication method to null)
$vbox = $mgr->logon("username","password");

 echo 1;$vbox
         $oSession = new ISession($connection, $handle = null);
         $oMachine = new IMachine($connection, $handle = null);
$strVM="LINUX";
         $iprogress=new IProgress($connection, $handle = null);
$iappliance=$vbox->createAppliance();        try
        {   echo 2;
            $oSession = $mgr->getSessionObject($vbox);

            // first assume we were given a UUID
            try
            {echo 3;
               $oMachine1 = $vbox->machines;
            }
            catch (Exception $e)
            {echo 4;
                try
                {echo 5;
                    $oMachine = $vbox->findMachine($strVM);
                }
                catch (Exception $e1)
                {
                }
            }

            if ($oMachine == null)
            {echo "cant find vm";
                //System.out.println("Error: can't find VM \"" + strVM + "\"");
            }
            else
            {echo "find vm";
            
               // $uuid = $oMachine->getId();
                $sessionType = "gui";
                 $env = "DISPLAY=:0.0";
                $iprogress  =$oMachine->launchVMProcess($oSession,
                                             $sessionType,
                                             $env);
                //System.out.println("Session for VM " + uuid + " is opening...");
                $iprogress->waitForCompletion(10000);

                 $rc = $IProgress->getResultCode();
                if ($rc != 0)
   echo "session failed" ;               // System.out.println("Session failed!");
            }
        }
        catch (Exception $e)
        {
           // $e->printStackTrace();
        }
        finally
        {
            if ($oSession != null)
            {
               // $oSession->close();
            }
        }
    