  <?php
    if(isset($_POST['submit']))
      {
    $pname = $_POST['pname'];
      
   $to = "vinayk.vk868@gmail.com";
      
    $subject = "INVITATION";
    $txt .= "PARENT NAME:$pname";
   
    mail($to,$subject,$txt);
    }
    ?> 