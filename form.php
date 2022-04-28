
<?php
/**
    * Plugin Name: form contact
    * Plugin URI: http://wordpress.org/plugins/hello-dolly/
    * Description: Un super plugin pour dire bonjour.
    * Author: Mohamed Tligui
    * Version: 1.0.0
    * Author URI: http://ma.tt/
*/

function med_admin_menu(){
    add_menu_page('forms','form itmes','manage_options','med_admin_menu','form_admin_menu_main');
}
    add_action('admin_menu','med_admin_menu');
$option1="checkone";
$option2="checktwo";
$option3="checkthree";
$option4="checkfour";

if (isset($_POST["submit"])) {
    if(isset($_POST['check1'])){
        update_option( $option1, 1);
    }
    else {
        update_option( $option1, 0);
    }


if(isset($_POST['check2'])){
    update_option( $option2, 1);
}
else {
    update_option( $option2, 0);
}


if(isset($_POST['check3'])){
    update_option( $option3, 1);
}
else {
    update_option( $option3, 0);
}


if(isset($_POST['check4'])){
    update_option( $option4, 1);
}
else {
    update_option( $option4, 0);
}

}




    function form_admin_menu_main(){    
        $checkedFname = "";
        $checkedLname = "";
        $checkedMessage = "";
        $checkedEmail = "";

        $vName = get_option( 'checkone');
        $vLname = get_option( 'checktwo');
        $vMessage = get_option( 'checkthree');
        $vEmail = get_option( 'checkfour');

        if($vName == 1){
            $checkedFname = "checked";
        }
        if($vLname){
            $checkedLname = "checked";
        }
        if($vMessage){
            $checkedMessage = "checked";
        }
        if($vEmail){
            $checkedEmail = "checked";
        }

    
      echo '<form action="" method="POST">
       <div>  
      <label  for="nom"> Firsname</label>
      <input type="checkbox"  name="check1"  ' .  $checkedFname  . ' >  <br>
      </div>
      <div>  
      <label  for="prenom"> Lastname</label>
      <input type="checkbox"  name="check2" ' . $checkedLname . ' >  <br>
      </div>  
      <div>  
      <label  for="message"> Message</label>
      <input type="checkbox"  name="check3" ' . $checkedMessage . ' ><br>
      </div>
      <div>     
      <label  for="email"> Email</label>
      <input type="checkbox"  name="check4" ' .$checkedEmail  . '> <br> 
      </div>  
      <div>  
      <input type="submit" name="submit" value"save">
      </div>  
      </form>';
     
            
}
function short(){

      
    
    
    function input_check($test,$type,$placeholder){
       if (get_option( $test ) == 1) {

           echo " 
           <label for='$placeholder'>$placeholder</label> 
               <input type='$type' placeholder='$placeholder'>";
       }

               }
               input_check("checkone","text","Firstname");
               input_check("checktwo","text","Lastname");
               input_check("checkthree","text","Message");
               input_check("checkfour","text","Email");
           }
add_shortcode("hello","short");