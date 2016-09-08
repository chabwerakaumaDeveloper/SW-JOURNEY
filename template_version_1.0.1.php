<?php
class template{
   public $heading_info;
   public $closing_head;
   public $body;
   public $endbody;
   public function __construct(){
     $this->heading_info = "<!DOCTYPE html> <html> <head>";
     $this->closing_head = "</head> <body>";
     $this->endbody = "</body>";
   }
   public function assets(Array $js = null,Array $css = null){
      echo $this->heading_info;
      if($js != null && $css != null){
        $this->outputJS($js);
        $this->outputCSS($css);
      }
      echo $this->closing_head;
   }
   public function add(Array $params){
    //element_name,class,id,text,src,type,EventType,EventValue
    $element_name = $params[0];
    if(isset($element_name)){
      $class = (isset($params[1])) ? $params[1] : '';
      $id = (isset($params[2])) ? $params[2] : '';;
      $text = (isset($params[3])) ? $params[3] : '';;
      $src = (isset($params[4])) ? $params[4] : '';;
      $type = (isset($params[5])) ? $params[5] : '';;
      $eventType = (isset($params[6])) ? $params[6] : '';;
      $eventValue = (isset($params[7])) ? $params[7] : '';;
      $element = "";
      switch($element_name){
        case "br":
        $element = "<$element_name/>";
        break;
        case "hr":
        $element = "<$element_name/>";
        break;
        case "a":
        $element = "<$element_name id='$id' href='$src' class='$class' $eventType='$eventValue'> $text </$element_name>";
        break;
        case "input":
        $element = "<$element_name id='$id' type='$type' href='$src' placeholder='$text' $eventType='$eventValue' class='$class'/>";
        break;
        default:
        $element = "<$element_name id='$id' class='$class' $eventType='$eventValue'> $text </$element_name>";
        break;
      }
      echo $element;
    }else{
      echo "Element Not Defined";
    }
   }
   public function end(){
     echo $this->endbody;
   }
   public function outputJS($js){
     foreach($js as $j){
       echo "<script src='$j'> </script>";
     }
   }
   public function outputCSS($css){
     foreach($css as $cs){
       echo "<link rel='stylesheet' href='$cs' type='text/css'/> ";
     }
   }
}



?>
