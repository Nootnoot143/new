<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 15.11.2018
 * Time: 19:08
 */
include_once "view/func.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Строй Консалт</title>
        <meta name="description" content="Строительство домов. 3D печать бетоном.">
        <?php
            getHeadMain();
        ?>

    
        <script src="assets/js/lib/greensock/TweenMax.min.js"></script>
        <script src="assets/js/lib/greensock/plugins/ScrollToPlugin.min.js"></script>
        <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/modernizr.custom.min.js"></script>
        <script src="assets/js/lib/iscroll-probe.js"></script>
        <script src="scrollmagic/minified/ScrollMagic.min.js"></script>
        <script src="scrollmagic/minified/plugins/animation.gsap.min.js"></script>
        <script src="scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
        <script src="assets/js/demo.js"></script>
    
    </head>
    <body link="#204781" vlink="#204781" alink="#204781">
        <!-- <div id="page-preloader" class="preloader">
            <div class="loader">
            </div>
        </div> -->
        <!-- <script src="js/preloader.js"></script> -->
        <?php
            getHeaderMain();
        ?>
                                <div class="webpage">
            <div class="rows FirstImg">

            </div>
            <div>
                    <div class="">
                        <div>

                            <h3>Качественно. Экономично. <span style="white-space: nowrap;">В срок.</span></h3>
                            <h4>
                                Работы выполняются под руководством опытного инженера-строителя
                            </h4>
                        </div>
                        <!-- Мы даем двадцатилетнюю гарантию (максимально возможную по законодательству). -->
                        <div class="badges">
                                <figure>
                                <div class="badge-content">
                                 <span class="badge-value">100<span class="badge-unit"> домов</span></span>
                                 <span class="mat_name">Сдано в эксплуатацию более 100 объектов</span>
                                 </div>
                                 </figure>

                                 <figure>
                                <div class="badge-content">
                                 <span class="badge-value">20<span class="badge-unit"> лет</span></span>
                                 <span class="mat_name">Строй консалт — компания <br>с более чем 20-летним опытом</span>
                                 </div>
                                 </figure>

                                 <figure>
                                <div class="badge-content">
                                 <span class="badge-value">5<span class="badge-unit"> бригад</span></span>
                                 <span class="mat_name">работы выполняют <br>высокопрофессиональные, <br>опытные рабочие</span>
                                 </div>
                                 </figure>

                                 <figure>
                                <div class="badge-content">
                                 <span class="badge-value">3D</span>
                                 <span class="mat_name">Строительный принтер стал <br>нам на службу</span>
                                 </div>
                                 </figure>
                             </div>
                    </div>
                </div>
            </div>
                    <!-- <div class="animated-back">
                        
                        <div class="sticky-block">
                            <div>
                                <div class="main-animation-img">
                                        <div class="vertical-slide-arrow"></div>
                                </div>
                            </div>
                        </div>


                        
                        <div class="trigger-el2">

                        </div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el3"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el4"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el5"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el6"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el7"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el8"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el9"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el10"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el11"></div>
                        <div class="main-animation-container">
                        </div>
                        <div class="trigger-el12"></div>

                        



                        <div class="main-animation-container3">
                        </div>
                        <div class="trigger-el" style="z-index: 1"></div>


                        <div class="main-animation-container">
                            </div>
                        <div class="webpage">
                            <div class="blur-text">
                                <div id="services"></div>
                                <h6>
                                    Наша слаженная команда комплексно выполнит все общестроительные работы при постройке дома
                                </h6>
                            </div>
                            <div class="services-lookup">
                                <div class="excavator-lookup col">
                                    <figure class="image-icon-excavator image-icon-size"></figure>
                                    <p class="typography-services-names">Земляные работы, строительство фундаментов, крылец</p>
                                </div>
                                <div class="pyramid-lookup col">
                                    <figure class="image-icon-pyramid image-icon-size"></figure>
                                    <p class="typography-services-names">Возведение стен, устройство монолитных поясов, перемычек, бетонных полов, перекрытий</p>
                                </div>
                                <div class="roof-lookup col">
                                    <figure class="image-icon-roof image-icon-size"></figure>
                                    <p class="typography-services-names">Строительство крыши дома, оборудование чердачного пространства, утепление</p>
                                </div>
                                <div class="pipe-wrench-lookup col">
                                    <figure class="image-icon-pipe-wrench image-icon-size"></figure>
                                    <p class="typography-services-names">Заведем в дом инженерные коммуникации: водопровод, канализацию, электричество</p>
                                </div>
                                <div class="fence-lookup col">
                                    <figure class="image-icon-fence image-icon-size"></figure>
                                    <p class="typography-services-names">Выполним сопутствующие задачи: строительство забора, выгребной ямы, парковки для автомобиля, мощение тротуаров</p>
                                </div>
                                <div class="document-lookup col">
                                    <figure class="image-icon-document image-icon-size"></figure>
                                    <p class="typography-services-names">Окажем содействие при проектировании дома и вводе в эксплуатацию</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-animation-container2">
                        </div>

                                    <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller1 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene = new ScrollMagic.Scene({triggerElement: ".trigger-el"})
                                                .setClassToggle('.main-animation-img', 'show')
                                                .addTo(controller1)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller2 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene2 = new ScrollMagic.Scene({triggerElement: ".trigger-el2"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery2')
                                                .addTo(controller2)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller3 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene3 = new ScrollMagic.Scene({triggerElement: ".trigger-el3"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery3')
                                                .addTo(controller3)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller4 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene4 = new ScrollMagic.Scene({triggerElement: ".trigger-el4"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery4')
                                                .addTo(controller4)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller5 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene5 = new ScrollMagic.Scene({triggerElement: ".trigger-el5"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery5')
                                                .addTo(controller5)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller6 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene6 = new ScrollMagic.Scene({triggerElement: ".trigger-el6"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery63')
                                                .addTo(controller6)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller7 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene7 = new ScrollMagic.Scene({triggerElement: ".trigger-el7"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery7')
                                                .addTo(controller7)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller8 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene8 = new ScrollMagic.Scene({triggerElement: ".trigger-el8"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery8')
                                                .addTo(controller8)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller9 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene9 = new ScrollMagic.Scene({triggerElement: ".trigger-el9"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery9')
                                                .addTo(controller9)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller10 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene10 = new ScrollMagic.Scene({triggerElement: ".trigger-el10"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery10')
                                                .addTo(controller10)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller11 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene11 = new ScrollMagic.Scene({triggerElement: ".trigger-el11"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery11')
                                                .addTo(controller11)
                                        });
                                    </script>
                                <script>
                                        $(function () { // wait for document ready
                                            // init controller
                                            var controller12 = new ScrollMagic.Controller();
                        
                                            // build scene
                                            var scene12 = new ScrollMagic.Scene({triggerElement: ".trigger-el12"})
                                                .setClassToggle('.main-animation-img', 'background-photo-gallery12')
                                                .addTo(controller12)
                                        });
                                    </script>
                                    
                                    


                    </div> -->

                    
                
                      
                    <div class="ImgBox"> 
                        <div id="fotogalery"></div>
                            <div class="slider">
                            <div class="sl">
                                <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                            <img data-lazy="/img/building/1a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/1b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/1c.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/1.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/2a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/2b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <!-- <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="intrinsic title118">
                                            <div class="blackblock2"></div>
                                        </div>
                                    </div>
                            </div> -->
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/3a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/3b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/4a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class=" ">
                                        <img data-lazy="/img/building/4b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                            
                                        <img data-lazy="/img/building/5a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class=" ">
                                            
                                            <img data-lazy="/img/building/5b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                            
                                            <img data-lazy="/img/building/6a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                            
                                            <img data-lazy="/img/building/6b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class=" ">
                                            
                                            
                                        <img data-lazy="/img/building/7a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class=" ">
                                        <img data-lazy="/img/building/7b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class="">
                                        <img data-lazy="/img/building/8a.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class=" ">
                                        <img data-lazy="/img/building/8b.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="sl_slide projects">
                                    <div class="project-back">
                                        <div class=" ">
                                        <img data-lazy="/img/building/8c.jpg?ver=4.1.1" class="imgbuilding">
                                            <!-- <div class="blackblock2"></div> -->
                                        </div>
                                    </div>
                            </div>
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class="">
                                        <img data-lazy="/img/uyutniy-dvor.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/proekt-doma-9.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class="">
                                        <img data-lazy="/img/proekt-doma-10.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/sovremenniiy-proekt-doma.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
        
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/proekt-doma-8.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/proekt-doma-6.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/proekt-doma-7.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <!-- <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class="intrinsic title108">
                                                <div class="blackblock2"></div>
                                            </div>
                                        </div>
                                </div> -->
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/proekt-doma-4.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <!-- <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class="intrinsic title110">
                                                <div class="blackblock2"></div>
                                            </div>
                                        </div>
                                </div> -->
                                <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class=" ">
                                        <img data-lazy="/img/proekt-doma-1.jpg?ver=4.1.1" class="imgbuilding">
                                                <!-- <div class="blackblock2"></div> -->
                                            </div>
                                        </div>
                                </div>
                                <!-- <div class="sl_slide projects">
                                        <div class="project-back">
                                            <div class="intrinsic title112">
                                                <div class="blackblock2"></div>
                                            </div>
                                        </div>
                                </div> -->
                                
                              
                                
                            </div>
                            
                            </div>  
        </div>








            <div class="webpage">
                <div class="blur-text">
                    <div id="services"></div>
                    <h6>
                        Наша слаженная команда комплексно выполнит все общестроительные работы при постройке дома
                    </h6>
                </div>
                <div class="services-lookup">
                    <div class="excavator-lookup col">
                        <figure class="image-icon-excavator image-icon-size"></figure>
                        <p class="typography-services-names">Земляные работы, строительство фундаментов, крылец</p>
                    </div>
                    <div class="pyramid-lookup col">
                        <figure class="image-icon-pyramid image-icon-size"></figure>
                        <p class="typography-services-names">Возведение стен, устройство монолитных поясов, перемычек, бетонных полов, перекрытий</p>
                    </div>
                    <div class="roof-lookup col">
                        <figure class="image-icon-roof image-icon-size"></figure>
                        <p class="typography-services-names">Строительство крыши дома, оборудование чердачного пространства, утепление</p>
                    </div>
                    <div class="pipe-wrench-lookup col">
                        <figure class="image-icon-pipe-wrench image-icon-size"></figure>
                        <p class="typography-services-names">Заведем в дом инженерные коммуникации: водопровод, канализацию, электричество</p>
                    </div>
                    <div class="fence-lookup col">
                        <figure class="image-icon-fence image-icon-size"></figure>
                        <p class="typography-services-names">Выполним сопутствующие задачи: строительство забора, выгребной ямы, парковки для автомобиля, мощение тротуаров</p>
                    </div>
                    <div class="document-lookup col">
                        <figure class="image-icon-document image-icon-size"></figure>
                        <p class="typography-services-names">Окажем содействие при проектировании дома и вводе в эксплуатацию</p>
                    </div>
                </div>
            </div>

            <div class="ImgBox"> 
                <div id="fotogalery"></div>
                    <div class="slider">
                    <div class="sl">
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/1.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/2.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/3.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/4.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/6.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/7.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/8.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/9.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/10.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/11.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/12.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/13.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/14.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/15.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/16.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/17.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        <div class="sl_slide projects">
                                <div class="project-back">
                                    <div class="">
                                        <img data-lazy="/img/slider/18.jpg?ver=4.1.1" class="imgbuilding">
                                        <!-- <div class="blackblock2"></div> -->
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                    
                    </div>  
</div>

           





<div class="webpage">
        <div>
                <div>
                    <div id="rules"></div>
                    <h6>Форма сотрудничества:</h6>
                </div>
                <ul class="services-list">
                    <li class="services-list-block">
                        <div class="services-list-number"><p>1</p></div>
                        <div class="services-list-body">

                            <div><p>Необходимо предоставить или заказать проект дома</p></div>
                        </div>
                    </li>
                    <li class="services-list-block">
                            <div class="services-list-number"><p>2</p></div>
                            <div class="services-list-body">

                                <div><p>Получить от нас подробную калькуляцию затрат на общестроительные работы</p></div>
                            </div>
                    </li>
                    <li class="services-list-block">
                            <div class="services-list-number"><p>3</p></div>
                            <div class="services-list-body">

                                <div><p>Согласовать график производства и финансирования работ</p></div>
                            </div>
                    </li>
                    <li class="services-list-block">
                            <div class="services-list-number"><p>4</p></div>
                            <div class="services-list-body">

                                <div><p>Подписать подрядный договор</p></div>
                            </div>
                    </li>
                    <li class="services-list-block">
                            <div class="services-list-number"><p>5</p></div>
                            <div class="services-list-body">

                                <div><p>Осуществлять поэтапное финансирование согласно выполненных объемов работ, поданных авансовых отчетов, согласованного графика</p></div>
                            </div>
                    </li>
                    <li class="services-list-block">
                            <div class="services-list-number"><p>6</p></div>
                            <div class="services-list-body">

                                <div><p>Получить от нас исполнительные документы: акты скрытых работ, схемы прокладки инженерных сетей, документы и сертификаты на использованные материалы</p></div>
                            </div>
                    </li>
                    <li class="services-list-block">
                            <div class="services-list-number"><p>7</p></div>
                            <div class="services-list-body">

                                <div><p>Мы предлагаем бессрочную гарантию на железобетонные, каменные и металлические конструкции дома</p></div>
                            </div>
                    </li>
                </ul>
            </div>
    </div>



    <div class="ImgBox"> 
            <div id="fotogalery"></div>
            <div class="webpage ImgBlock">
                    <div id="3d"></div>
                <h6>3D печать бетоном</h6>
                <!-- <p>
                    Наш проект: <a href="https://concreteflow.tech/" target="_blank">Завод современной архитектуры</a>
                </p> -->
                <!-- <div class="badges3">
                        <figure>
                        <div class="badge-content3">
                         <span class="badge-value3">М250</span>
                         <span class="mat_name2">Марка</span>
                        </div>
                        </figure>
                        <figure>
                        <div class="badge-content3">
                         <span class="badge-value3">2270<span class="badge-unit3">кг/м<sup><small>3</small></sup></span></span>
                         <span class="mat_name2">Плотность</span>
                         </div>
                         </figure>
                         <figure>
                         <div class="badge-content3">
                         <span class="badge-value3">F150-200</span>
                         <span class="mat_name2">Морозостойкость</span>
                         </div>
                         </figure>
                         <figure>
                         <div class="badge-content3">
                         <span class="badge-value3">W6</span>
                         <span class="mat_name2">Водонепроницаемость</span>
                         </div>
                         </figure>
                         <figure>
                         <div class="badge-content3">
                         <span class="badge-value3">3<span class="badge-unit3">%</span></span>
                         <span class="mat_name2">Водопоглощение</span>
                         </div>
                         </figure>
                     </div> -->
            </div>
                <div class="slider">
                <div class="sl">
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/1.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/2.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/3.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/4.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/5.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/6.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/7.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/8.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/9.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/10.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class=" ">
                                        <img data-lazy="/img/print/11.jpg?ver=4.1.1" class="imgbuilding">
                                    <!-- <div class="blackblock2"></div> -->
                                </div>
                            </div>
                    </div>
                    
                    <!-- <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic print5">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div> -->
                    <!-- <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title6">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title7">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title8">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title9">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title10">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title11">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title12">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title13">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title14">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title15">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title16">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title17">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title18">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div> -->
                    <!-- <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title19">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title20">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title21">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title22">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title23">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title24">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title25">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title26">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div>
                    <div class="sl_slide projects">
                            <div class="project-back">
                                <div class="intrinsic title27">
                                    <div class="blackblock2"></div>
                                </div>
                            </div>
                    </div> -->
                </div>
                
                </div>  
                <script type="text/javascript" src="slick/slick.min.js"></script>
                <script src="js/mysliderfunction.js"></script> 
</div>


    <!-- <div class="webpage">
        <div id="documents"></div>
        <h6>Наши документы:</h6>
        <div class="ImgBox"> 
            <div id="fotogalery"></div>
            <div class="documents">
                <div class="document-block">
                    <div class="intrinsic2 document1">
                        
                    </div>
              
                </div>
                <div class="document-block">
                    <div class="intrinsic2 document2">
                        
                    </div>
                   
                </div>

            
        </div>  
        

    </div>
</div> -->







    <section class="">
            <!-- <div class="introbuilding">
 <p class="centertitle fencehead2">
 Контакты
 </p>
</div> -->
     <div class="ImgBlock lastblock">
         <div id="contacts" class="webpage">
                <h6>Контакты</h6>
                <!-- <p>
                        Нам нравится говорить о том, что мы делаем и как мы это делаем. Позвоните или напишите нам.
                </p> -->
                <p>
                        <a href="mailto:stroyconsalt.dnepr@gmail.com">stroyconsalt.dnepr@gmail.com</a>
                </p>
                <p>

                    <a href="tel:0676342572">
                        +38 067 634-25-72
                    </a>
                </p>
                <p>
                        Сичеславская набережная 29а, офис 701<br>
                        Днепр, 49000, Украина 
                </p>
         </div>
     <div>

         <!-- <div id="map">
         </div>
     </div>
     </div>
     </section>
     <script>
     function initMap() {
       var leushinandco = {lat: 48.469725, lng: 35.050410};
       var map = new google.maps.Map(
           document.getElementById('map'), {zoom: 14, disableDefaultUI: true, center: leushinandco, styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
        });
       var marker = new google.maps.Marker({position: leushinandco, map: map, title: 'Leushin & Co.', icon: 'https://stroyconsalt.com.ua/favicon-32x32.png'});
     }
     </script>
       <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_BBMQrDVU_WETZDYSFAv7qUf3UhPG1vg&callback=initMap"
       type="text/javascript"></script> -->
       <script>
           function slowScroll (id) {
               var offset = 100;
                $('html, body').animate ({
                    scrollTop: $(id).offset ().top - offset
                }, 0);
                return false;
           }
       </script>
               <!-- <?php
               getFooterMain();
           ?> -->
    </body>
</html>
