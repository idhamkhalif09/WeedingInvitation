<!DOCTYPE html>
<html>

<head>
    <title>Idham & Chintiya Wedding</title>
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/qgRPCjQ/Idham-CHINTIYA-4.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
    body,
    html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
        background-position: center;
        background-size: cover;
        background-image: url("/w3images/coffeehouse.jpg");
        min-height: 75%;
    }

    .menu {
        display: none;
    }

    .box {
        width: 320px;
        margin: auto;
        width: 95%;
        border: 3px solid gray;
        padding: 10px;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
    }

    .button1 {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .countDown {
        text-align: center;
        font-size: 38px;
        margin-top: 0px;
        font-family: "Lucida Console", "Courier New", monospace;
    }

    .fa-remove:before,
    .fa-close:before,
    .fa-times:before {
        content: "\f00d";
    }

    .w3-btn,
    .w3-button {
        border: none;
        display: inline-block;
        padding: 8px 16px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        background-color: inherit;
        text-align: center;
        cursor: pointer;
        white-space: nowrap
    }

    .box1 {
        position: absolute;
        top: 83%;
        right: 28%;
        background-color: lightgrey;
        border: 2px solid grey;
        padding: 5px;
        margin: 3px;
        width: 40%;
        height: 6%;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .textNama {
        position: absolute;
        top:72%;
        color: black;
        left: 32%;
    }

    .header {
        padding: 60px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 30px;
    }

    .fa-instagram {
        background: white;
        color: black;
    }

    .fa {
        position: absolute;
        font-size: 30px;
        width: 40px;
        height: 40px;
        text-align: center;
        align-items: center;
        text-decoration: none;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .img {
        border-radius: 20%;
    }

    .grid {
        display: grid;
        grid-template-rows:
            repeat(4, 180px);
        grid-template-columns:
            repeat(3, 1fr);
        grid-gap: 5px;
    }

    .item:nth-child(1) {
        grid-row: 1 / 4;
    }

    .item:nth-child(2) {
        grid-column: 2 / 4;
        grid-row: 1 / 3;
    }

    .item:nth-child(3) {
        grid-column: 3 / 4;
        grid-row: 3 / 5;
    }

    .item:nth-child(4) {
        grid-column: 2 / 3;
        grid-row: 3 / 4;
    }

    .item:nth-child(5) {
        grid-column: 1 / 3;
        grid-row: 4 / 5;
    }

    /* styling code */

    .grid {
        margin: 20px auto;
        max-width: 1000px;
    }

    .grid>.item {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>

    <!-- Links (sit on top) -->
    <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
            <div class="w3-col s3">
                <a href="#" class="w3-button w3-block w3-black">HOME</a>
            </div>
            <div class="w3-col s3">
                <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
            </div>
            <div class="w3-col s3">
                <a href="#menu" class="w3-button w3-block w3-black">KITA</a>
            </div>
            <div class="w3-col s3">
                <a href="#where" class="w3-button w3-block w3-black">ABSEN</a>
            </div>
        </div>
    </div>

    <!-- Header with image -->
    <header class="w3-display-container w3-grayscale-min" id="home">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="https://i.ibb.co/jJCjcJw/Idham-Chintiya-3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://i.ibb.co/x1S0kdf/Agustus-2023.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="https://petapixel.com/assets/uploads/2022/07/DALLEcopy.jpg" style="width:100%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://i.ibb.co/x1S0kdf/Agustus-2023.png" style="width:100%">
            </div>

        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </header>

    <!-- Add a background color and large text to the whole page -->
    <!--<div class="w3-sand w3-grayscale w3-large">-->

    <!-- About Container -->

    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center"><span
                    class="w3-tag w3-wide w3-padding-40 animate__animated animate__bounce animate__repeat-2">TENTANG
                    PERNIKAHAN</span></h5>
            <div class="box" data-aos="fade-right zoom-in-right">
                <p align="center">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan
                    untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan
                    diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                    (kebesaran Allah) bagi kaum yang berpikir.<b><br />(QS. Ar-Rum: 21)</b></p>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="w3-panel w3-leftbar w3-light-grey">
                <p><i>"Saat ini sudah tidak ada lagi tersisa kata tentang <b>Aku</b> dan <b>Kamu</b> yang ada hanya ada
                        kata <b>Kita</b> untuk rumah ini"</i></p>
                <p>
                <h3 align="center">👫<br />♥ Idham dan Chintiya ♥</h3>
                </p>
            </div>
            <div data-aos="zoom-in-right">
                <p align="center">Menghitung Hari</p>
                <div class="countDown" id="demo"></div>
            </div>
            <h5 class="w3-center"><span
                    class="w3-tag w3-wide w3-padding-40 animate__animated animate__bounce animate__repeat-2">AKAN
                    DILAKSANA KAN PADA</span></h5>
            <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
                <p align="center"><strong>Akad Nikah<br /></strong> Selasa<br /> 8 Agustus 2023</p>
                <p align="center"><strong>Resepsi Pernikahan<br /></strong> Rabu<br /> 9 Agustus 2023<br /> (Di rumah
                    Chintiya dong)</p>
                <p align="center">Kamis<br />10 Agustus 2023 <br />(Kali ini di rumah Idham)</p>
            </div>
        </div>
    </div>


    <!-- Menu Container -->
    <div class="w3-container " id="menu">
        <div class="w3-content" style="max-width:700px">

            <h5 class="w3-center w3-padding-40"><span class="w3-tag w3-wide animate__animated animate__bounce">KAMI YANG
                    BERBAHAGIA</span></h5>

            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                    <div class="w3-col s6 tablink">Idham</div>
                </a>
                <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                    <div class="w3-col s6 tablink">Chintiya</div>
                </a>
            </div>

            <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                <img class="img" src="https://i.ibb.co/kD0pkXW/20221217-171358.jpg" alt="welcome"
                    style="width:100%;"><br>
                <h5>Mhd. Idham Khalif, S.Kom, M.T.</h5>
                <p class="w3-text-grey">Putra pertama dari pasangan Bapak alm. Sarjawan dan Ibu Maida Isneli</p><br>
                <a href="#" class="fa fa-instagram"></a>
            </div>

            <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                <img class="img" src="https://i.ibb.co/TLQ5q22/20221217-171305.jpg" alt="welcome"
                    style="width:100%;"><br>
                <h5>Chintiya Dewi Anggriani, S.Sos</h5>
                <p class="w3-text-grey">Putri pertama dari pasangan Bapak Nurdi dan Ibu Yuli </p><br>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>
    </div>


    <div class="grid">
        <div class="item" style="background-image: url(https://i.ibb.co/zfM8wx2/1.png)">
        </div>

        <div class="item" style="background-image: url(https://i.ibb.co/8brxZf2/20221217-175912.jpg)">
        </div>

        <div class="item" style="background-image: url(https://i.ibb.co/Mc2L1dY/20221217-180447.jpg)">
        </div>

        <div class="item" style="background-image: url(https://i.ibb.co/XXyqq16/20221217-173707.jpg)">
        </div>

        <div class="item" style="background-image: url(https://i.ibb.co/jZ50r8T/20221217-173707.jpg)">
        </div>
    </div>

    <!-- Contact/Area Container -->
    <div class="w3-container w3-padding-48" id="where" style="padding-bottom:32px;">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-30"><span class="w3-tag w3-wide">ALAMAT KITA</span></h5>
            <div align="center">

                <div class="w3-container">
                    <a href="https://www.google.co.id/maps/@-0.6277994,100.1365245,20z"
                        class="w3-button w3-black">Idham</a>
                    <a href="#" class="w3-button w3-black">Chintiya</a>
                </div>

                <!-- Contact/Area Container -->
                <div class="w3-container w3-padding-16" id="where" style="padding-bottom:32px;">
                    <div class="w3-content" style="max-width:700px">
                        <h5 class="w3-center w3-padding-30"><span class="w3-wide">SHARE MOMENT KAMU DENGAN FILTER IG
                                KITA</h5>
                        <div align="center">

                            <div class="w3-container">
                                <a href="https://www.instagram.com/ar/1838363273229762/?ch=MzQ2ZTQwNjFiNmY1ZGRiMTNhNGJiNDBkZmJkOTJjOTQ%3D"
                                    class="w3-button w3-black">Buka Filter IG</a>


                                <div class="w3-padding-30" data-aos="fade-up" data-aos-anchor-placement="top-center">
                                    <form action="#" target="_blank">
                                        <p id="nama" class="w3-input w3-padding-16 w3-border"></p>
                                        <p><select class="w3-input w3-padding-16 w3-border" name="subject" id="subject">
                                                <option value="Hadir" selected="selected">Hadir</option>
                                                <option value="Tidak Hadir" selected="selected">Tidak Hadir</option>
                                            </select></p>
                                        <p><button class="w3-button w3-black" type="submit">ABSEN DULU DONG</button></p>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                    <audio controls="" id="myAudio" loop="" hidden="">
                        <source
                            src="https://www.mboxdrive.com/Instrumen%20dan%20teks%20Bangun%20Pemudi%20Pemuda%20(320%20kbps).mp3"
                            type="audio/mpeg">
                    </audio>

                    <!-- Subscribe Modal -->
                    <div align="center" id="subscribe" class="w3-modal w3-animate-opacity"
                        style="display: block;">
                        <div class="w3-modal-content container" style="background-color: transparent; ">
                            <img src="https://i.ibb.co/YQzdv23/Idham-Chintiya-5.png" alt="welcome"
                                style="width:100%;"><br>
                       
                                <?php
                                    echo '<p class="textNama">' . htmlspecialchars($_GET["name"]) . ' & Partner</p>';
                                  ?>
                                 <p id="nama1" class=""></p>
                            <span style="color: black; " class="box1" onclick="play()"><b>Buka Undangan</b></span>
                        </div>

                    </div>

                    <!-- End page content -->
                </div>

                <!-- Footer -->
                <footer class="w3-center w3-light-grey w3-padding-16 w3-large">
                    <p>Powered by <br />Idham & Chintiya<br />2023</p>

                </footer>

                <script>
                // Tabbed Menu
                function openMenu(evt, menuName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("menu");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
                    }
                    document.getElementById(menuName).style.display = "block";
                    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
                }
                document.getElementById("myLink").click();
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 4000); // Change image every 2 seconds
                }


                // Set the date we're counting down to
                var countDownDate = new Date("Aug 9, 2023 08:37:25").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var month = Math.floor(distance / (1000 * 60 * 60 * 24)) / 30;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24) % 30);
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Output the result in an element with id="demo"
                    document.getElementById("demo").innerHTML = month.toFixed(0) + "Bulan " + days + "Hari " +
                        hours + "Jam " + minutes + "Menit ";

                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);

                function play() {
                    document.getElementById('subscribe').style.display = 'none';
                    var x = document.getElementById("myAudio");
                    x.play();
                    x.played.start(3);
                }
                var nameShow = " ";
                document.getElementById("nama").innerHTML = nameShow;
                document.getElementById("nama1").innerHTML = nameShow;

                AOS.init();
                </script>


</body>

</html>