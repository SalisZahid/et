
<script>
    function Check(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("show").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "check_search.php?e=" + str, true);
        xmlhttp.send();
        //document.getElementById('hint').innerHTML = 'loading...';
    }
</script>

<header>
    <div class="cn-nav">




        <nav class="navbar navbar-expand-lg navbar-light bg-#976afa">
            <div class="container">



               <img src="https://www.freeiconspng.com/uploads/shopping-cart-icon-3.png "width="55px" height="55px" style="margin-top: 0px">
                    <h2 style="font-weight: bold;font-family: Helvetica" > OUR SHOP  </h2>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="top_bar collapse navbar-collapse" id="navbarNavDropdown2">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav">
                        <form  style="margin-right: 100px;maxlenth="64">
                             <input type="text" name="search" maxlength="64" placeholder="Search.." onkeyup="Check(this.value)" >

                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #122aff ; position: sticky">Search</button>
                        </form>



                        <li class="nav-item active "style="font-size:20px ">
                            <a class="nav-link" href="home.php"><h5><b>Home</b></h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginpage.php" style="font-size:20px "><h5><b>Login</b></h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" style="font-size:20px "><h5><b>Contact</b></h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="font-size:20px "><h5><b>About us</b></h5></a>
                        </li>




                        <li class="nav-item active "style="color: #0f0f0f" >
                            <a class="nav-link" href="index.php"><i class="fas fa-shopping-cart sc-color fa-2x" style="color:#000;"></i></a>
                        </li>

                    </ul>
                </div>

            </div>

        </nav>
    </div>

</header>