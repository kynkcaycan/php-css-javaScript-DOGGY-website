<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix</title>
    <link rel="stylesheet"href="doggy2.css">
    <link rel="stylesheet"href="doggy.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
   <div class="mix2">
    
        <div class="mb2">
    <h6>Mix Dog</h6>
   
    </div>

    <?php
    if ($_POST["liste"]=="American Buldog" and $_POST["liste2"]=="American Buldog") {
    $idm = 4;
} elseif ($_POST["liste"]=="golden" and $_POST["liste2"]=="golden") {
    $idm = 1;
} elseif ($_POST["liste"]=="akita" and $_POST["liste2"]=="akita") {
    $idm = 3;
} elseif ($_POST["liste"]=="German Shepherd" and $_POST["liste2"]=="German Shepherd") {
    $idm = 2;
} elseif ($_POST["liste"]=="golden" and $_POST["liste2"]=="German Shepherd") {
    $idm = 5;
} elseif ($_POST["liste"]=="German Shepherd" and $_POST["liste2"]=="golden") {
    $idm = 5;
} elseif ($_POST["liste"]=="golden" and $_POST["liste2"]=="American Buldog") {
    $idm = 6;
} elseif ($_POST["liste"]=="American Buldog" and $_POST["liste2"]=="golden") {
    $idm = 6;
}  elseif ($_POST["liste"]=="golden" and $_POST["liste2"]=="akita") {
    $idm = 7;
} elseif ($_POST["liste"]=="akita" and $_POST["liste2"]=="golden") {
    $idm = 7;
} elseif ($_POST["liste"]=="akita" and $_POST["liste2"]=="German Shepherd") {
    $idm = 8;
}elseif ($_POST["liste"]=="German Shepherd" and $_POST["liste2"]=="akita") {
    $idm = 8;
}elseif ($_POST["liste"]=="akita" and $_POST["liste2"]=="American Buldog") {
    $idm = 9;
}elseif ($_POST["liste"]=="American Buldog" and $_POST["liste2"]=="akita") {
    $idm = 9;
}elseif ($_POST["liste"]=="German Shepherd" and $_POST["liste2"]=="American Buldog") {
    $idm = 10;
}elseif ($_POST["liste"]=="American Buldog" and $_POST["liste2"]=="German Shepherd") {
    $idm = 10;
}




$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="doggy";





$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
if(!$baglan){
die("veri tabanı bağlantı işlemi başarısız".mysqli_connect_error());
}
$bul = "SELECT kr FROM kopekresimleri WHERE id = $idm" ;
$kayit = $baglan->query($bul);


if ($kayit->num_rows > 0) {
    while ($satir = $kayit->fetch_assoc()) {


        echo '<td><img
        src="' . $satir["kr"] . '" width="400px"
        height="400px"/></td>' . "<br>";
       






    }
}





?>
</div>


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


 
   
        

   

   
