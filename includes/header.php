<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Apex Supply</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">

    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css" />

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">


     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



    <style>
	
	h1{
	
	font-weight: 800px;


}


h2{
	
	font-weight: 800px;


}


h3{
	
	font-weight: 800px;


}

.font-contato {
    font-size: 13px !important;
    border-radius: 5px;
    font-weight: 600px;
}

    .owl-carousel .item img {
    width: auto;          /* Mantém a proporção da imagem */
    height: 100px;        /* Define uma altura fixa */
    object-fit: contain;  /* Ajusta a imagem sem distorção */
    display: block;
    margin: auto;         /* Centraliza as imagens */
}

.owl-carousel .item {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background-color: #fff; /* Adiciona um fundo branco para maior contraste */
}
img {
    image-rendering: -webkit-optimize-contrast; /* Otimiza a renderização */
    -ms-interpolation-mode: bicubic;          /* Suporte para navegadores antigos */
}




    </style>

    <!-- Biblioteca Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
$(document).ready(function () {
    // Initialize the carousel
    $(".home-client-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: { items: 2 },
            600: { items: 3 },
            1000: { items: 5 }
        }
    });

    // Function to adjust the background position
    function adjustBannerBackground() {
        $(".tp-bgimg").each(function () {
            if (window.innerWidth < 720) {
                $(this).css("background-position", "30% center"); // Move to the right by 30% 
            } else {
                $(this).css("background-position", "center center"); // Reset to default
            }
        });
    }

    // Initial adjustment
    adjustBannerBackground();

    // Adjust on window resize
    $(window).on("resize", function () {
        adjustBannerBackground();
    });
});
</script>




</head>
