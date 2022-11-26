<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.html");//อันนี้จะบอกว่า ไปที่ไหนของจริง 
   }
?>