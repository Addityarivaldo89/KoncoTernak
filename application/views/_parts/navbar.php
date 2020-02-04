<?php 
  $session = 0;

  if ($session == 0){
    $this->load->view("_parts/navbar_guest.php");
  } else {
    $this->load->view("_parts/navbar_user.php");
  }
  ?>