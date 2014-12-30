<?php  
		require_once("Mobile_Detect.php");
 
        $detectar = new Mobile_Detect();       
 
        if ( !$detectar->isMobile() ){
                echo "<script>location.href = './';</script>";         
        }
        if ( $detectar->isTablet() ){
                echo "<script>location.href = './';</script>";         
        }
?>