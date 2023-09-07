<?php session_start()?>

<div id="navbar" class="navbar navbar-expand-sm sticky-top navbar-light bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img src="src/img/logo.png" height="50px" alt="">
            </a>
            <ul class="navbar nav d-lg-none">
                <li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" style="color: darkslategray;" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-bars fa-lg" style="color: #ffffff;"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a href="/"  class="dropdown-item"><p>Home</p></a></li>
								<li><a href="shop" class="dropdown-item"><p>Shop</p></a></li>
								<li><a href="about" class="dropdown-item"><p>About</p></a></li>
                                <li><a href="contact" class="dropdown-item"><p>Contact</p></a></li>
                                <?php
                                    if(isset($_SESSION['username'])){
                                
                                        echo"<li>
                                                <a href=\"profile\"  class=\"dropdown-item\"><p>Profile</p></a>
                                            </li>
                                            <li>
                                                <a href=\"logout\" class=\"dropdown-item\"><p>Log Out</p></a>
                                            </li>";
                                    
                                    
                                    }else{
                                        echo"<li>
                                                <a href=\"login\"  class=\"dropdown-item\"><p>Login</p></a>
                                            </li>";}

                                    ?>
							</ul>
				</li>
            </ul>
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item">
                    <a href="/" class="nav-link"><span>Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="shop" class="nav-link"><span>Shop</span></a>
                </li>
                <li class="nav-item">
                    <a href="about" class="nav-link"><span>About</span></a>
                 </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link"><span>Contact</span></a>
                </li>
                <li class="nav-item">
                    <a href="getticket" class="nav-link btn"><span>Get Ticket</span></a>
                </li>
            </ul>
            <ul id="login" class="nav-item d-none d-lg-flex">
            <?php
            if(isset($_SESSION['username'])){
                if($_SESSION['role']==="admin"){
                    echo"<li>
                        <a href=\"profile\"  class=\"nav-link\">Dashboard</a>
                    </li>
                    <li class=\"nav-link\">
                        <a href=\"logout\" class=\"nav-link\">Log Out</a>
                    </li>";
                }else{
                    echo"<li>
                            <a href=\"profile\"  class=\"nav-link\">Profile</a>
                        </li>
                        <li class=\"nav-link\">
                            <a href=\"logout\" class=\"nav-link\">Log Out</a>
                        </li>";
                }
            
            
            }else{
                echo"<li>
                        <a href=\"login\"  class=\"nav-link\">Login</a>
                    </li>
                    <li class=\"nav-link\">
                        <a href=\"signup\" class=\"nav-link\">Sign Up</a>
                    </li>";}

            ?>
            </ul>
        </div>
    </div>


    