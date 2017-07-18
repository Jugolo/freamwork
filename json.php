<?php
//json is handled in a way there is not given any sence. this class will help on it
class Json{
  public static function encode($data){
    $result = json_encode($data);
    if($result === false){
      self::throwError();
    }
    return $result;
  }
  
  private static function throwError(){
    $error = json_last_error_msg();
    if($error === false || $error === "No Error"){
      throw new Exception("Failed to handle json. unknown error");
    }
    throw new Exception($error);
  }
}
