<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
}

echo '<nav class="navbar navbar-dark navbar-expand-lg bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="iSecure.php">iSecure</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                </li>';

if (!$loggedin) {
    echo ' <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signup.php">SigUp</a>
                </li>';
}
if ($loggedin) {
    echo '<li class="nav-item">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>';
}




echo '</ul>
        </div>
        <div class="row text-end text-light mx-5 ">';
if ($loggedin) {
    echo '       <span class="text-warning text-uper" style="text-transform: uppercase;">
                <span class="text-light text-uper" style="text-transform: capitalize;">
                    User : 
                </span>
                ' . $_SESSION['username'] . '
            </span>';
}
echo '  </div>
    </div>
</nav>';


?>