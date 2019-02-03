<div id="topbar">
  <div class="app-title">SeriousGame</div>
  <div class="app-menu">
    <a href="home.php">home</a>
    <a href="profile.php">profiel</a>
  </div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar">
          <ul id="side-menu">
            <li>
              <div class='icon-wrapper'><span class="typcn typcn-user"></span></div>
              <div class='item-text'>Hallo, <?php echo $Naam; ?>!</div>
            </li>
            <?php
                if($Type == 2){
                  ?>
                  <li>
                    <a href='add.php'>
                      <div class='icon-wrapper'><span class="typcn typcn-edit"></span></div>
                      <div class='item-text'>Bewerken</div>
                    </a>
                  </li><?php
                }
            ?>
            <li>
              <a href="#spelletjes">
                <div class="icon-wrapper"><i class="fa fa-gamepad" aria-hidden="true"></i></div>
                <div class='item-text'>Spelletjes</div>
              </a>
            </li>
            <li>
              <a href="logout.php?logout=true">
                <div class="icon-wrapper"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                <div class='item-text'>Uitloggen</div>
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
