<?php
if($_POST['submit']){
  $notice = $_POST['post'];
  
  
  if ( $notice == "") {
    echo 'Write a notice then post... go back to <a href="../../View/Admin/postNotice.html">try again</a>';
  }
  else if(str_word_count($notice)<3){
    echo 'You need to post a correct sentence formate';
    echo '<br><a href="../../View/Admin/postNotice.html">try again</a>';
  }
  
 
  else{
    
    $adminPost=[
                      'notice'=>$notice, 
                      
    ];
    $adminPostJson= json_encode( $adminPost );
    $jsonFile= fopen( "../../Model/Admin/notice.json", "w" );
    fwrite($jsonFile , $adminPostJson);
    fclose($jsonFile);
    header('location: ../../View/Admin/dashBoard.html');
  }
}

?>