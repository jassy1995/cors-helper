<?php
namespace CorsHelper;
class CorsHelper{

  public static function cors($data=null) {
    $arrLength = count($data['origin']);
    $verifyOrigin = "";
    for($x = 0; $x < $arrLength; $x++) {
      $verifyOrigin = $data['origin'][$x];
     
  }
    if($_SERVER['HTTP_ORIGIN'] == $verifyOrigin){
    $url=  '*';
    $method = 'POST,GET,DELETE,PUT,PATCH,OPTIONS';
    $credentials = true;
    $maxAge =72800;
    $header = '*';
  
   
          if(isset($data['origin'])){
            $url = implode(', ', $data['origin']);
          }
  
          if(isset($data['method'])){
            $method = implode(', ', $data['method']);
           }
  
          if(isset($data['credentials'])){
              $credentials = $data['credentials'];
           }
  
           if(isset($data['maxAge'])){
                $maxAge = $data['maxAge'];
           }
  
          if(isset($data['header'])){
               $header = implode(', ', $data['header']);
          }
  
  
      if(isset($_SERVER['HTTP_ORIGIN'])){
              header("Access-Control-Allow-Origin: $url");
              header("Access-Control-Allow-Credentials: $credentials");
              header("Access-Control-Max-Age: $maxAge");
              header('Content-Type: text/plain');
              
  
      }
      if($_SERVER['REQUEST_METHOD'] == 'OPTIONS'){
          if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])){
              header("Access-Control-Allow-Methods: $method");
          }
          if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])){
              header("Access-Control-Allow-Headers: $header");
          } 
          }
      header('Content-Type: application/json');
    }else{
      die("You are not allowed");
    }
  
      
  }
}

?>

