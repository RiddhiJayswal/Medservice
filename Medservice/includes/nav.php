<nav class="Horizontal-nav fixed-top">
    <span class="smalllogo">
         <!-- <img src="images/map.jpeg" alt="">  -->
    </span>
    <span class="smalllogo">
        <img src="" alt="">
    </span>
    <a href="#" id="address">123 Main St, Cityville</a> 
    <a href="#" id="phone"> Phone: (555) 123-4567</a>
</nav>

<nav class="d-flex justify-content-between fixed-top my-5">  
        <label class="logo">
            <img src="images/logo.png" width="60%" alt="company logo">
        </label>
    <div class="navbar">
      <ul class="nav justify-content-end">
        <li class="nav-item <?php if($page=='home'){echo 'active';}?>">
          <a class="nav-link nav-content" aria-current="page" href="#">Home</a>
        </li> 
        <li class="nav-item <?php if($page=='departments'){echo 'active';}?>">
          <a class="nav-link nav-content" href="includes/departments.php">Departments</a>
        </li>
        <li class="nav-item <?php if($page=='profile'){echo 'active';}?>">
          <a class="nav-link nav-content" href="includes/profile.php">Profile</a>
        </li>
        <li class="nav-item <?php if($page=='schedule'){echo 'active';}?>">
          <a class="nav-link nav-content" href="#">Schedule</a></a>
        </li>
        <li class="nav-item <?php if($page=='login'){echo 'active';}?>">
          <a class="nav-link nav-content" href="#">Login</a>
        </li>
        <li>
           <button class="btn-1"><a href="#">Make an Appointment</a></button>
        </li>
      </ul>
      <!-- <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div> -->
    </div>
</nav> 