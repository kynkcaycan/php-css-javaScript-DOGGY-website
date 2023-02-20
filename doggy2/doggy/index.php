<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doggy</title>
    <link rel="stylesheet"href="doggy.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <!-- header başlangıç -->
    <header id="header">
        <div class="header">
            <div class="container">
                
                    <div class="header-logo">
<h2>DOGGY</h2>
<i class="fa-solid fa-bars" id="menu-icon" onclick="menuToggle();"></i>

                    </div>
                   
                    <div class="header-menu" >
                        
                        <ul id="menuItems">
                            <li  class="btn-uclu"><a href="http://localhost/doggy2/doggy/doggyAbout.php">ABOUT US</a></li>
                            <li  class="btn-uclu"><a href="http://localhost/doggy2/doggy/doggyMix.php">MAKE A MİX DOG</a></li>
                            <li  class="btn-uclu"><a href="http://localhost/doggy2/doggy/doggyBreeds.php">DOG BREEDS</a></li>
                        </ul>
                        
                       
                    </div>

               


            </div>

        </div>
    </header>
    <!-- header finito -->



<script>
var menuItems=document.getElementById('menuItems');
menuItems.style.maxHeight="0px";
function menuToggle(){
    if(menuItems.style.maxHeight=="0px"){
        menuItems.style.maxHeight="200px";
    }
    else{
        menuItems.style.maxHeight="0px";
    }
}
</script>
<footer id="footer"> 
    <!-- a -->
    <div class="footer">
        <!-- b -->
        <div class="footer-content">
            <!-- c -->
            <div class="page-title">
                <!-- d -->
                <h2>ABOUT US</h2>

            </div>
        <!-- d1 -->
        <div class="footer-copyright">
            <!-- eeee -->
            <p>
                You can contact with us 
            </p>
        </div>
        <!-- eeee1 -->
        <div id="footer-icon">
            <!-- fff -->
        <nav class="footer-social">
            <ul>
                <li>
                    <a href="https://www.google.com/search?q=instagram&oq=in&aqs=chrome.0.69i59j69i57j0i67j69i61j69i60l4.1244j0j7&sourceid=chrome&ie=UTF-8"> <i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoidHIifQ%3D%3D%22%7D"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&ifkv=AWnogHd5tqgqL2r0CsK_w8PSLFm1dmS-7Ss10qrd6hTv4SXPw3MHLL4Qo2O4Sxdeo85BDvMM0ze33A&flowName=GlifWebSignIn&flowEntry=ServiceLogin"> <i class="fa-regular fa-at"></i></a>
                    
                </li>
            </ul>
            
            
        </nav>
</div>
<!-- fff1 -->


</div>
<!-- c1 -->
    </div>
<!-- b1 -->
</footer>
<!-- a1 -->


</body>
</html>
