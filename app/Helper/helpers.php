<?php  

 
 function footer_Projects()
 {
 	$Project =   App\Models\Projects::take(3)->get();
  return (object)  $Project ;
 }

 function site_settings($key)
 {
 	 $siteStings =   App\Models\siteStings::where('key', $key) ->first();
 	 if(!is_null($siteStings)){
 	 $siteStings_object=(object)  $siteStings ;
 	 return   $siteStings_object->value ;}
 	 else{  return "fooda food" ;}
 }

?>