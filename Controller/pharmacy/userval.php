<?php
 
function isLoggedIn()
{
  if (isset($_SESSION['loggedinuser'])) {
    return true;
  }else{
    return false;
  }
}

  ?>