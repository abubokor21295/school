<?php
 //https://stackoverflow.com/questions/28290332/how-to-create-custom-helper-functions-in-laravel/28290359#28290359
 /*
1. Within your app/Http directory, create a helpers.php file and add your functions.
2. Within composer.json, in the autoload block, add "files": ["app/Http/helpers.php"].
3. Run composer dump-autoload.
 */
 
 function select_field($config){
  
   $config["value"]=isset($config["value"])?$config["value"]:""; 
   $id=isset($config["value_column"])?$config["value_column"]:"id";  
   $name=isset($config["display_column"])?$config["display_column"]:"name";  

   $ucname=ucfirst($config["name"]);
   
   
   $html="<div class='form-group row'>";
   $html.="<label class='col-sm-2 col-form-label'>{$config["label"]}</label>";
   $html.="<div class='col-sm-10'>"; 
   $html.="<select name='{$config["name"]}' class='form-control'>";
    
   foreach($config["table"] as $row){
      if($config["value"]==$row->id){
         $html.="<option value='$row->id' selected>$row->name</option>";
      }else{
         $html.="<option value='$row->id'>$row->name</option>";
      }      
   }
   $html.="</select>";
   $html.="</div>";
   $html.="</div>";
 
   return $html;
 
 }

 function input_field($config){

    $config["required"]=isset($config["required"])?$config["required"]:"";
    $config["placeholder"]=isset($config["placeholder"])?$config["placeholder"]:"";
    $config["value"]=isset($config["value"])?$config["value"]:"";     
    $config["type"]=isset($config["type"])?$config["type"]:"text"; 
    $config["checked"]=isset($config["checked"])?$config["checked"]:""; 

    $html="<div class='form-group row'>";

     if($config["type"]!="hidden"){
      $html.="<label for='{$config["name"]}' class='col-sm-2 col-form-label'>{$config["label"]}</label>";
     }

    $html.="<div class='col-sm-10'>";
    $html.="<input type='{$config["type"]}' class='form-control' name='{$config["name"]}' id='{$config["name"]}' value='{$config["value"]}' placeholder='{$config["placeholder"]}' {$config["required"]} {$config["checked"]}>";
    $html.="</div>";
    $html.="</div>";  

    return $html;

 }

 function input_button($config){
    $html="<input type='{$config["type"]}' value='{$config["value"]}' name='{$config["name"]}' class='btn btn-info' />";
    return $html;
 }

 function slugify($text, string $divider = '-'){
   // replace non letter or digits by divider
   $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
 
   // transliterate
   $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
 
   // remove unwanted characters
   $text = preg_replace('~[^-\w]+~', '', $text);
 
   // trim
   $text = trim($text, $divider);
 
   // remove duplicate divider
   $text = preg_replace('~-+~', $divider, $text);
 
   // lowercase
   $text = strtolower($text);
 
   if (empty($text)) {
     return 'n-a';
   }
 
   return $text;
 }

 function sidebar_dropdown1($config){
    $html="<li class=\"nav-item\">";
    $html.="<a class=\"nav-link\" data-toggle=\"collapse\" href=\"#payment\" aria-expanded=\"false\" aria-controls=\"payment\">";
    $html.="<i class=\"icon-file-add menu-icon\"></i>";
    $html.="<span class=\"menu-title\">Payment</span>";
    $html.="<i class=\"menu-arrow\"></i>";
    $html.="</a>";
    $html.="<div class=\"collapse\" id=\"payment\">";
    $html.="<ul class=\"nav flex-column sub-menu\">";
    $html.="<li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{url('/')}}\">Create An Account</a></li>";
    $html.="</ul>";
    $html.=" </div>";
    $html.="</li>";
 }

 function sidebar_dropdown($config){
     
     
   $html=" <li class=\"nav-item\">";     

        
         $html.=" <a class=\"nav-link\" data-toggle=\"collapse\" href=\"{$config["url"]}\" aria-expanded=\"false\" aria-controls=\"{$config["name"]}\">"; 
            $html.="<i class=\"{$config["icon"]}  menu-icon\"></i>";
            
            $html.="<span class=\"menu-title\">";
            $html.=$config["name"];

            $html.=count($config["child"])>0?"<i class=\"right fas fa-angle-left\"></i>":"";

            $html.="</span>";
            $html.=" <i class=\"menu-arrow\"></i>";
         $html.="</a>";
         
         if(count($config["child"])>0){
            $html.="<ul class=\"nav nav-treeview\">";
            foreach($config["child"] as $child){
               $html.="<li class=\"nav-item\">";
                  $html.="<a href=\"{$child["url"]}\" class=\"nav-link\">";
                  $html.="<i class=\"far fa-circle nav-icon\"></i>";
                  $html.="<p>{$child["name"]}</p>";
                  $html.="</a>";
               $html.="</li>";
         
            }
            $html.="</ul>";
      }


   $html.="</li>";

return $html;
}




           
              
             
             
           
            // <div class="collapse" id="Exam">
            //   <ul class="nav flex-column sub-menu">
            //     <li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Admitcard</a></li>
            //     <li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Exam Routins</a></li>
            //     <li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Add Exam Routin</a></li>
            //   </ul>
            // </div>
       