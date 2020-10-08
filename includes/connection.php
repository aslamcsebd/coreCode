<?php
   session_start();
	function code() {
      $code =mysqli_connect('localhost','root','','code');
      return $code;		
	}
?>

