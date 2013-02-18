<?php

//See reademe
function alphabetise($parent, $options=array()) {
  // default values
  $defaults = array('key'=> 'title');
  
  // merge defaults and options
  $options = array_merge($defaults, $options);  
  
  //Gets the stuff into a two dimensional array
  foreach ($parent as $item){
          $temp = explode(' ',$item->$options['key']() );
          $temp = $temp[0];
          $temp = strtolower($temp);
          $array[$temp][] = $item;
  }
  //Gets the stuff into a two dimensional array
  foreach ($array as $temp => $item){
          if (count($item) == 1){
                  $array[substr($temp, 0, 1)][]=$item[0];
                  unset ($array[$temp]);
          }
  }
  return $array;
}
?>