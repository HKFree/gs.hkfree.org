<?php
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
require_once("ts.config.php");

function connectTS()
{
  $ts3_VirtualServer = TeamSpeak3::factory("serverquery://".TS_USERNAME.":".TS_PASSWORD."@".TS_IP.":10011/?server_port=9987#no_query_clients");
  return($ts3_VirtualServer);
}

function getBigStatus($path)
{
  try
  {
    $ts3_VirtualServer = connectTS();

    /* display virtual server viewer using HTML interface */
    $mystatus .= $ts3_VirtualServer->getViewer(new TeamSpeak3_Viewer_Html($path));
  }
  catch(Exception $e)
  {
    $mystatus = "Error (ID " . $e->getCode() . ") <b>" . $e->getMessage() . "</b>";
  }
  
  return($mystatus);
}

function getCount()
{
  try
  {
    $ts3_VirtualServer = connectTS();
    $clients = $ts3_VirtualServer->clientList();
    $mystatus = count($clients);  
  }
  catch(Exception $e)
  {
    $mystatus = "Error (ID " . $e->getCode() . ") <b>" . $e->getMessage() . "</b>";
  }
  
  return($mystatus);
}

function getMonitoringStatus()
{
  try
  {
    $ts3_VirtualServer = connectTS();
    $clients = $ts3_VirtualServer->clientList();
    $count = count($clients);
    if(($count >= 0) && ($count < 1024)) {
      $mystatus = "TS-OK";
    } else {
      $mystatus = "Error (Generic)!";
    } 
  }
  catch(Exception $e)
  {
    $mystatus = "Error (ID " . $e->getCode() . ") <b>" . $e->getMessage() . "</b>";
  }
  
  return($mystatus);
}

if(isset($_GET["s"]) and ($_GET["s"]=='count'))
{
  echo(getCount());
}

if(isset($_GET["s"]) and ($_GET["s"]=='status'))
{
  echo(getMonitoringStatus());
}

if(isset($_GET["s"]) and ($_GET["s"]=='all'))
{
  echo(getBigStatus('http://gs.hkfree.org/ts3/images/viewer/').'<span style="font-size:70%;">Poslední update v '.date('G:i:s').'</span>');
}