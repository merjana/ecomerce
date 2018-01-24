<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav">
        <li><a href="categories.php">Categories</a></li>
        <li><a href="items.php">Items</a></li>
        <li><a href="members.php">Members</a></li>
        <li><a href="coperative.php">Coperatives</a></li>
          <li><a href="#">Statistics</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right"> 
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Frindou<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="# ">Edit Profile</a></li>
            <li><a href="#">Setting</a></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="dashboard.php"> <img src="<?php echo $img.'logo.png' ?>" alt=""> </a>
    <a href="messages.php">Messages</a>
    <a href="statistics.php">Statistcs</a>
    <a href="#">Contact</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<script>
    // close the side nav and open it again
    function openNav() {
        document.getElementById("mySidenav").style.width = "150px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>