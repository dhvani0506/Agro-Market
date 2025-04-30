<?php
$ademail = $_SESSION["Admin_email"];
?>

<div class="container-fluid" style="background-color: white;">
<div class="heading1">
        <h1 class="heading" style="font-family:sans-serif;   text-align: center;
    padding: 2rem 0;
    padding-bottom: 3rem;
    font-size: 3.5rem;
    color: black;">Agro-market<span style="background: var(--green);
    color: #fff;
    display: inline-block;
    padding: .5rem 3rem ;
    /* clip-path: polygon(100% 0%,93% 50%,100% 99%,0% 100%,7% 50%,0% 0%); */
    clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);">Bidding</span></h1>
    </div>
    
    <br>

    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #93C572;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            &nbsp;&nbsp;
            <li class="nav-item active">
                    <a class="nav-link" style="color: black;" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>&nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: black;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" style="color: black;" href="structUpCred.php">Update Credentials</a>
                        <hr>
                        <a class="dropdown-item" style="color: black;" href="logout.php"><b>Logout</b></a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <p style="color: black; margin-top:15px;"><?php
                                                                echo "Welcome | $ademail";
                                                                ?></p>
                </li>
            </ul>

        </div>
    </nav>


</div>