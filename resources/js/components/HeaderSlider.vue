<template>
    <section id="header-slider" class="page_slider">
<!--        <div id="particles-js"></div>-->
        <div class="flexslider" data-nav="false">
            <ul class="slides">
                <li class="ds">
                    <div class="slider-bg-1"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h1 class="intro_featured_word">
                                                GLOBAL DATA
                                                <br>
                                                For
                                                <br>
                                                SIM And
                                                <br>
                                                eSIM
                                            </h1>
                                            <h5 class="intro_before_featured_word intro-absolute text-uppercase fw-200">
                                                Best global SIM Provider
                                            </h5>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInUp">
                                            <p class="text-uppercase intro_after_featured_word">Add your sim</p>
                                        </div>

                                        <a
                                            href="/add-sim"
                                            type="button"
                                            class="btn btn-white"
                                        >
                                            <span>Add Sim</span>
                                        </a>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container -->
                </li>
                <li class="ds slide2">
                    <div class="slider-bg-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h1 class="slide2 intro_featured_word">
                                                PREPARE
                                                <br>
                                                For
                                                <br>
                                                HIGH-SPEED
                                                <br>
                                                INTERNET
                                            </h1>
                                            <h5 class="fw-300 text-uppercase intro_before_featured_word intro-absolute">
                                                KEEP YOURSELF <br> CONNECTED ANYWHERE
                                            </h5>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInUp">
                                            <p class="text-uppercase intro_after_featured_word">Check our Services</p>
                                        </div>

                                        <a
                                            href="/add-sim"
                                            type="button"
                                            class="btn btn-white"
                                        >
                                            <span>Add Sim</span>
                                        </a>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container -->
                    <div class="social-flex">
                        <p class="social-heading">
                            follow
                        </p>
                        <p class="social-icons">
                            <a href="#" class="fa fa-facebook color-white" title="facebook"></a>
                            <a href="#" class="fa fa-twitter color-white" title="twitter"></a>
                            <a href="#" class="fa fa-youtube-play color-white" title="google"></a>
                        </p>
                    </div>
                </li>
                <li class="ds slide3">
                    <div class="slider-bg-3"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h1 class="slide2 intro_featured_word">
                                                World
                                                <br>
                                                wide
                                                <br>
                                                Data
                                                <br>
                                                Plans
                                            </h1>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInUp">
                                            <p class="text-uppercase intro_after_featured_word">Check Testimonials</p>
                                        </div>

                                        <a
                                            href="/add-sim"
                                            type="button"
                                            class="btn btn-white"
                                        >
                                            <span>Add Sim</span>
                                        </a>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container -->
                </li>
            </ul>
        </div> <!-- eof flexslider -->
        <div class="ds social-flex">
            <p class="social-heading">
                follow
            </p>
            <p class="social-icons">
                <a href="#" class="fa fa-facebook color-white" title="facebook"></a>
                <a href="#" class="fa fa-twitter color-white" title="twitter"></a>
                <a href="#" class="fa fa-youtube-play color-white" title="google"></a>
            </p>
        </div>
    </section>
</template>

<script>
    export default {
        name: "HeaderSlider"
    }
</script>

<style lang="scss">
    #header-slider {
        .slider-bg-1 {
            height: 100vh;
            width: 100vw;
            background-color: #434ae0;
            background-image: linear-gradient(43deg, #434ae0 23%, #d46f35 59%, #d46f35 100%);
        }

        .slider-bg-2 {
            height: 100vh;
            width: 100vw;
            background-color: #434ae0;
            background-image: linear-gradient(160deg, #434ae0 8%, #d46f35 57%);
        }

        .slider-bg-3 {
            height: 100vh;
            width: 100vw;
            background-color: #434ae0;
            background-image: linear-gradient(to top, #fcc5e4 0%, #fda34b 15%, #ff7882 35%, #c8699e 52%, #7046aa 71%, #0c1db8 87%, #020f75 100%);
        }
    }
</style>
