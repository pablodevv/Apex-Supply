<!DOCTYPE html>

<html lang="en">

<?php include('includes/header.php') ?>

<body>

	<div class="page-wraper" style='overflow-x:hidden;overflow-y:hidden'>

    <!-- HEADER START -->
    <?php include('includes/nav.php') ?>
    <!-- HEADER END -->

    <div class="wt-bnr-inr overlay-wraper bg-center smallbanner" style="background-image:url(images/banner/3.jpg);">
                
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="site-text-primary padding-texto" style="color: white;">Catálogo</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);" style="color: white;">Home</a></li>
                                    <li style="color: white;">Catálogo</li>
                                </ul>
                            </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>


        <!--Catalogo Section star-->
            <div class="custom-section" style="height: 870px;">
                <!-- Catalog Content -->
            <div class="row" style="width: 100%">


                <!-- Download Button Section -->
                <div class="col-lg-6 col-md-6 m-b30 downloadsection" style="display: flex; justify-content: center; align-items: center; height: 90vh; ">
                    <div class="wt-box service-box-1-new card1" style="background: linear-gradient(6deg, rgba(255,255,255,1) 0%, rgba(250,251,255,1) 100%); padding: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 4px; max-width: 500px;">
                        <div class="service-box-title-new title-style-2 site-text-secondry">
                            <h3 class="s-title-one" style="color: #333; font-size:32px; color: #2e4faa">Conte com a Apex<br> Supply para atender as nescessidade da sua industria!</h3>
                        </div>
                        <div class="service-box-content-new">
                            <p>Conheça nosso portifólio e descubra como podemos fazer a diferença no seu negócio! </p>
                            <p>Desde peças essenciais até equipamentos de alta tecnologia, trabalhamos com marcas líderes para oferecer soluções que garantem desempenho superior e durabilidade. </p>
                            <p><b>Baixe agora o catálogo e encontre os produtos ideais para otimizar suas operações e alcançar resultados excepcionais.</b></p>
                        </div>
                        <div class="service-box-footer">
                            <a href="catalogo.pdf" class="site-button site-btn-effect" style="font-weight: 600; border-radius: 2px;" download>Baixar Catálogo</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Catalog Content End -->


                <!--<div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="content-right" style="text-align: left; width: 50%; margin-left: 600px;">
                                <h2>Confira Nosso Catálogo</h2>
                                <p>Descubra tudo o que a Apex Supply pode fazer pelo seu negócio! Com mais de 2 mil itens de alta qualidade projetados para atender às demandas específicas das indústrias onshore e offshore. Desde peças fundamentais até equipamentos de alta tecnologia, cada produto é cuidadosamente selecionado para garantir eficiência, durabilidade e performance. Representamos marcas líderes do mercado, unindo inovação e confiabilidade para oferecer o que há de melhor. Explore agora e encontre as soluções ideais para impulsionar suas operações e alcançar resultados excepcionais!</p>
            <br>
            <div class="tp-caption tp-resizeme"
            id="slide-901-layer-5"
            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
            data-y="['middle','middle','middle','middle']" data-voffset="['260','200','150','100']"
            data-lineheight="['none','none','none','none']"
            data-width="['300','300','300','300']"
            data-height="['none','none','none','none']"
            data-whitespace="['normal','normal','normal','normal']"

            data-type="text"
            data-responsive_offset="on"
            data-frames='[
            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
            ]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index:13; text-transform:uppercase;">
            <a href="catalogo.html" class="site-button site-btn-effect" style="font-weight: 600; border-radius: 2px;">Catálogo</a>
            </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

            <style>
                
            .custom-section {
                height: 750px;
                background-image: url('images/background/nosso_catalogo3.jpg');
                background-size: cover;
                background-position: center center;
                display: flex;
                justify-content: flex-start;  /* Alinha o conteúdo mais à esquerda */
                align-items: flex-start;      /* Posiciona o conteúdo mais para cima */
                padding: 0 30px;
                text-align: left;
            }
			
			@media only screen and (max-width:1024px){
				.custom-section{
					background-position: 70% 0px !important;
				}
			}


            .content-right {
                margin-top: 160px;  /* Ajusta a posição do conteúdo, mais para cima */
                margin-right: 120px;
            }

            /* Título */
            .title {
                font-size: 32px;
                font-weight: bold;
                color: white;
                margin-bottom: 20px;
            }

            /* Subtítulo */
            .subtitle {
                font-size: 18px;
                color: white;
                margin-bottom: 30px;
                line-height: 1.6;
            }

            /* Estilo do botão */
            .btn-custom {
                background-color: #223f9f; /* Azul como especificado */
                color: #fff;
                padding: 25px 50px;  /* Aumenta o tamanho do botão */
                font-size: 24px;      /* Tamanho maior para o texto */
                text-decoration: none;
                border-radius: 10px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }

            /* Efeito de hover no botão */
            .btn-custom:hover {
                background-color: #1a2e6b;
                transform: scale(1.1);
            }

            /* Responsividade para telas menores */
            @media (max-width: 767px) {
                .custom-section {
                    height: 500px; /* Ajusta a altura do fundo para telas menores */
                    /* width: 855px; */
                   /*  margin-left: -520px; /* A imagem de fundo será mais puxada para a esquerda */ */
                    padding: 40px 20px;
					margin-left: -6%;
					width: 120%;
                }

                .content-right {
                    margin-right: 75px;
                    margin-top: 100px;  /* Ajusta a posição do conteúdo para telas menores */
                }

                .title {
                    font-size: 24px; /* Ajusta o tamanho do título em telas menores */
                }

                .subtitle {
                    font-size: 16px; /* Ajuste do tamanho da fonte para o subtítulo em dispositivos móveis */
                }

                .btn-custom {
                    font-size: 20px;     /* Ajuste do tamanho da fonte para o botão em dispositivos móveis */
                    padding: 15px 30px;  /* Reduz o tamanho do botão em telas menores */
                }
            }
            </style>

            <!--Catalogo Section end--> 

        <!-- CONTENT START -->
        <div class="page-content">



            <style>
                /* General Styles for Catalog Page */
                .service-box {
                    position: relative;
                    background-color: #f7f5f5;
                    padding: 30px;
                    padding-bottom: 90px;
                    border-radius: 8px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    height: 100%;
                    overflow: hidden;
                    transition: transform 0.3s ease;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
            
                .service-box:hover {
                    transform: translateY(-10px);
                }
            
                .animated-bg {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 120%;
                    height: 120%;
                    background: linear-gradient(135deg, rgba(34, 63, 159, 0.5), rgba(34, 63, 159, 0.2));
                    border-radius: 50%;
                    transform: scale(0);
                    transition: transform 0.7s ease-out;
                    z-index: 0;
                }
            
                .service-box-footer {
                    margin-top: 20px;
                    display: flex;
                    justify-content: center;
                }
            
                .service-box .site-button {
                    background-color: #dea62e;
                    border-radius: 5px;
                    padding: 12px 30px;
                    color: white;
                    text-decoration: none;
                    transition: background-color 0.3s ease;
                }
            
                .service-box .site-button:hover {
                    background-color: #ff9c3d;
                }
            </style>



<!-- Catalog Page -->
<!--<div class="section-full p-t80 p-b40 bg-no-repeat bg-bottom-right bg-cover" style="background-color: #f7f5f5; padding-top: 30px; padding-bottom: 100px;">
    <div class="container">
        <div class="section-content">

             TITLE START 
            <div class="section-head center wt-small-separator-outer text-center">
                <h2 style="font-weight: 800; color: #223f9f; margin-top: 50px;">Tenha Acesso as Melhores Marcas do Mercado</h2>

            </div>
            <!-- TITLE END -->


            

        </div>
    </div>
</div>


<div class="welcome-section-top p-t100 p-b30" style="background-color: #f0f2f5;">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-12">
                                <div class="img-colarge-new">
                                    <div class="colarge-1-new"><img src="images/colarge/whatsapp.png" alt="" class="slide-righ"></div>
                                </div>
                            </div>  

                            <div class="col-lg-6 col-md-12">
                                <div class="welcom-to-section" style="padding-top: 50px;">
                                    <!-- TITLE START-->

                                    <h2 style="font-weight: 800;">Estamos Aqui<br> Para Você!</h2>
                                    <!-- TITLE END-->


                                    <p>Entre em contato e descubra como podemos atender às necessidades do seu negócio com agilidade e excelência. Nossa equipe está pronta para tirar dúvidas, oferecer informações detalhadas sobre nossos produtos. Seja qual for sua demanda, estamos disponíveis para ajudar e garantir o suporte que você precisa. Fale conosco e conheça o compromisso e a qualidade que fazem da Apex Supply a parceira ideal para o sucesso do seu negócio!</p>

                                
                                    <div class="tp-caption tp-resizeme" id="slide-901-layer-5" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['260','200','150','100']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[
                                {&quot;from&quot;:&quot;y:100px(R);opacity:0;&quot;,&quot;speed&quot;:2000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:2000,&quot;ease&quot;:&quot;Power4.easeOut&quot;},
                                {&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}
                                ]" data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                                <a href="https://api.whatsapp.com/send?phone=5524974013454" class="site-button site-btn-effect" style="font-weight: 600; border-radius: 2px;">Contato</a>
                                </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>












        </div>
        <!-- CONTENT END -->

       <!-- FOOTER START -->
       <?php include('includes/footer.php') ?>
    <!-- FOOTER END -->

        <!-- Get In Touch -->
        <div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image:url(images/background/bg-7.jpg)">
            <div class="contact-nav">
                 <a href="javascript:void(0)" class="contact_close">&times;</a>
                 <div class="contact-nav-form">
                    <div class="contact-nav-info bg-white p-a30 bg-center bg-no-repeat" style="background-image:url(images/background/bg-map2.png);">
                    	<div class="row">
                        	<div class="col-lg-4 col-md-4">
                            	<div class="contact-nav-media-section">
                                	<div class="contact-nav-media">
                                    	<img src="images/self-pic.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <form class="cons-contact-form" method="post" action="form-handler2.php">
                                    <div class="m-b30">
                                        <!-- TITLE START -->
                                         <h2 class="m-b30">Get In Touch</h2>
                                        <!-- TITLE END -->
                                            <div class="row">
                                               <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                       <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                     </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                         <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                     </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                     </div>
                                                </div>

                                               <div class="col-md-12">
                                                    <button type="submit" class="site-button site-btn-effect">Submit Now</button>
                                                </div>

                                            </div>
                                    </div>
                                </form>
                                <div class="contact-nav-inner text-black">
                                    <!-- TITLE START -->
                                    <h2 class="m-b30">Contact Info</h2>
                                    <!-- TITLE END -->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Phone number</h4>
                                                        <p>(456) 789 10 12</p>
                                                        <p>(456) 789 10 15</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Email address</h4>
                                                        <p>demo@gmail.com</p>
                                                        <p>indusinfo@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Address info</h4>
                                                        <p>1363-1385 Sunset Blvd Los Angeles</p>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>
            </div>
        </div>


        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">

        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="js/switcher.js"></script><!-- SHORTCODE FUCTIONS  -->



<!-- STYLE SWITCHER  ======= -->
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>

    <div class="styleswitcher-inner">

        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="?theme=css/skin/skin-10"></a></li>
            <li><a class="theme-skin skin-11" href="?theme=css/skin/skin-11"></a></li>
            <li><a class="theme-skin skin-12" href="?theme=css/skin/skin-12"></a></li>
        </ul>

    </div>
</div>
<!-- STYLE SWITCHER END ==== -->
</body>

</html>
