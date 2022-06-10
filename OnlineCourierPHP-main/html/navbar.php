<?php
if(!isset($_SESSION))
    {
        session_start();
    }
echo
'
<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="../html/Home Page.php">G6</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link" href="Home Page.php">Home <span class="sr-only">(current)</span></a>
  </li>
  ';


if (isset($_SESSION["user_role"])){
  if ($_SESSION["user_role"]=='4'  && $_SESSION["logged_in"])
   {
  	 echo '<li class="nav-item">
       <a class="nav-link" href="../html/new_courier.php">New Courier</a>
     </li>

     <li class="nav-item">
       <a class="nav-link " href="../html/history_courier.php">History</a>
     </li>';
   }
   else if ($_SESSION["user_role"]=='5'  && $_SESSION["logged_in"]){
     echo '<li class="nav-item">
       <a class="nav-link" href="../html/all_courier.php">All Courier</a>
     </li>';


   }
 }

else{



        echo '<li class="nav-item">
          <a class="nav-link" href="../html/customer_registration.php">Sign Up!</a>
        </li>

';

      }

if (isset($_SESSION["logged_in"])){
      if (!$_SESSION["logged_in"] ){

      echo '<li class="nav-item">
        <a class="nav-link"  class="btn btn-outline-info" href="../html/login.php">  Login </a>
      </li>


';
}

else
{
  echo '<li class="nav-item">
    <a class="nav-link"  class="btn btn-outline-info" href="../html/logout.php">  Logout </a>
  </li> ' ;
}
}
else
{
  echo '<li class="nav-item">
    <a class="nav-link"  class="btn btn-outline-info" href="../html/login.php">  Login </a>
  </li>


';
}



echo '

</ul>
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>

<br><br>
';



 ?>
