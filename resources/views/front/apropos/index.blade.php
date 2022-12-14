@extends ('front.layout.layout_default')
@section('title')
Apropos
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>A <span>Propos</span></h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="./">Accueil</a></li>
                <li><span>A propos</span></li>
            </ul>
        </div>
    </section>
</div>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="row clearfix">
                    
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img src="{{ asset(config('pictures.path').'/styles/img/pics/EGE.png') }}" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">BIENVENUE A</div>
                                <h2>EDEN GROUP'S ENTREPRISE</h2>
                            </div>
                        </div>
                        <div class="text">
                            <strong>Eden Group???s Entreprise (EGE)</strong> est un groupe d???entreprise sp??cialis?? dans l???immobilier, la restauration, le cin??ma, la d??coration, E-commerce et la Technologie. <br>
                            Nos filiales sont les suivantes : <br>
                            ???	<strong>Eden Group???s Entreprise Bat (EGE-Bat)</strong> <br>
                            ???	<strong>Eden Group???s Entreprise Restauration (EGE-Restauration)</strong> <br>
                            ???	<strong>Eden Group???s Entreprise Cin??ma (EGE-Cin??ma)</strong> <br>
                            ???	<strong>Eden Group???s Entreprise D??coration (EGE-D??coration)</strong> <br>
                            ???	<strong>Eden Group???s Entreprise E-commerce (EGE-Commerce)</strong> <br><br>
                            <strong>EGE-Bat</strong> a pour mission de servir une client??le nombreuse dans la promotion immobili??re, la r??alisation de travaux de construction et de r??habilitation. <br>
                            Les activit??s de construction sont men??es ?? bien par une ??quipe tr??s qualifi??s regroup??s par corps de m??tiers pour r??aliser le travail sur les chantiers, disposant de tout ??quipement n??cessaire pour la construction. <br><br>
                            Le principal objectif d???<strong>EGE-Bat</strong> consiste ?? construire des ouvrages de qualit??s au prix le plus ??conomique possible pour offrir ?? nos clients, le meilleur rapport qualit??/prix de la sous-r??gion. <br><br>
                            Afin de mener votre projet ?? son terme, conforment ?? nos souhaits, nous associons ?? nos action des partenaires dot??s de grandes qualit?? et ?? un degr?? de professionnalisme tr??s ??lev??. <br><br>
                            Notre but est de recueillir avant tout, la satisfaction de notre client??le par la mise en ??uvre de nos meilleures comp??tence et de mettre ?? sa disposition toute notre ??nergie afin d???honorer nos engagement en qualit??, co??ts et d??lais.
                        </div> 
                    </div>
                </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content quote style-2 custom-img-background dark bkg-img1 mb-70">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered mb-0">
                <div class="custom-heading style-2">
                    <h2>Our mission</h2>
                </div><!-- .custom-heading end -->
                <div class="text triggerAnimation animated fadeInDown" data-animate="fadeInDown" style="opacity: 1;">
                    <p>As a contractor we promise to take care of your project from start to finish,
                        deliver it on time, specified budget and quality.</p>
                </div>
                <p class="author-name triggerAnimation animated fadeInDown" data-animate="fadeInDown" style="opacity: 1;">Theo Abraham, CEO</p>
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <div class="col-md-12 mb-0">
                <div class="custom-heading style-2">
                    <h2>L'??quipe Eden Group's Entreprise</h2>
                </div>
            </div>
        </div><!-- .row end -->
        <div class="row clearfix">
				
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-1.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Ronchi Wagase</a></h3>
                        <div class="designation">Constration officer</div>
                    </div>
                </div>
            </div>
            
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-2.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Monica Wagase</a></h3>
                        <div class="designation">Camical officer</div>
                    </div>
                </div>
            </div>
            
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-3.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Jordan Weyker</a></h3>
                        <div class="designation">Cheif Technical officer</div>
                    </div>
                </div>
            </div>
            
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-4.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Gregory Ohayata</a></h3>
                        <div class="designation">Marketing Manager</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container end -->
</div>
@endsection