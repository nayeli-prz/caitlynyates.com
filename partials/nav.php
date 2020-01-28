<!-- Blocks on all sizes except md size and larger  D-none d-sm-block-->
<!-- <nav class="row header-nav d-block d-md-none pl-5 pt-3 pr-5"> -->
<nav class="<?= (($page_name == "index") ? "header-nav--index" : "")." header-nav d-block px-3 pt-3"?>
  ">
      <div class="<?= (($page_name == "index") ? "header-nav_container--index" : "")." container header-nav_container"?>">
        <div class="logo-styled"><a href="index.php">Caitlyn<br>Yates</a>
        </div>
        <div class="horizontal-menu d-none d-sm-sm-block">
          <ul class="nav-menu">
            <li class="menu-item">
              <a
                href="about.php"
                class=<?= ($page_name == "about") ? "active" : "" ?>
               >About</a>
            </li>

            <li class="menu-item">
              <a
                href="cv.php"
                class=<?= ($page_name == "cv") ? "active" : "" ?>
               >CV</a>
            </li>

            <li class="menu-item">
              <a
                href="publications.php"
                class=<?= ($page_name == "publications") ? "active" : "" ?>
               >Publications</a>
            </li>

            <li class="menu-item">
              <a
                href="contact.php"
                class=<?= ($page_name == "contact") ? "active" : "" ?>
              >Contact</a>
            </li>

          </ul>
        </div>
        <!-- Blocks on all sizes except for the 'sm-sm' size (516px) -->
        <div class="cait-icon d-block d-sm-sm-none">
          <span data-toggle="modal" data-target="#exampleModal"><img src="assets/images/menu.svg"></span>
          <!-- Modal -->
          <div class="modal fade-faster" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog--menu" role="document">
              <div class="modal-content modal-content--menu">
                <nav class="row header-nav d-block pl-5 pt-3 pr-5">
                <div class="modal-header modal-header--menu header-nav_container">
                  <div class="logo-styled"><a href="index.php">Caitlyn<br>Yates</a>
                  </div>
                  <div class="cait-icon d-block">
                    <span data-dismiss="modal" aria-label="Close">
                      <img src="assets/images/x-out.svg">
                    </span>
                  </div>
                </div>
              </nav>
                <div class="modal-body row">
                  <nav class="col-12 p-5">
                      <ul class="nav-menu nav-menu--mobile mt-1">
                        <li class="menu-item">
                          <a href="about.php">About</a>
                        </li>
                        <li class="menu-item">
                          <a href="cv.php">CV</a>
                        </li>
                        <li class="menu-item">
                          <a href="publications.php">Publications</a>
                        </li>
                        <li class="menu-item">
                          <a href="contact.php">Contact</a>
                        </li>
                      </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->
        </div>
      </div>
    </nav>
