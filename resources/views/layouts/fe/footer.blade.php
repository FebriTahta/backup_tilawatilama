</main>
<!-- /main -->

<footer style="text-decoration-color: white">
    <div class="wave footer"></div>
    <div class="container margin_60_40 fix_mobile">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_1">Quick Links</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_1">
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="submit-restaurant.html">Add your restaurant</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><a href="register.html">My account</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_2">Categories</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_2">
                    <ul>
                        <li><a href="grid-listing-filterscol.html">Top Categories</a></li>
                        <li><a href="grid-listing-filterscol-full-masonry.html">Best Rated</a></li>
                        <li><a href="grid-listing-filterscol-full-width.html">Best Price</a></li>
                        <li><a href="grid-listing-filterscol-full-masonry.html">Latest Submissions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">Contacts</h3>
                <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                    <ul>
                        <li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                        <li><i class="icon_mobile"></i>+94 423-23-221</li>
                        <li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="collapse dont-collapse-sm" id="collapse_4">
                    <div class="follow_us">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        {{-- <div class="row add_bottom_25">
            <div class="col-lg-6">
                <ul class="footer-selector clearfix">
                    <li>
                        <div class="styled-select lang-selector">
                            <select>
                                <option value="English" selected>English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select currency-selector">
                            <select>
                                <option value="US Dollars" selected>US Dollars</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                    <li><span>© FooYes</span></li>
                </ul>
            </div>
        </div> --}}
    </div>
</footer>
<!--/footer-->

<div id="toTop"></div><!-- Back to top button -->

<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
<div class="modal_header">
    <h3>Sign In</h3>
</div>
<form>
    <div class="sign-in-wrapper">
        <a href="#0" class="social_bt facebook">Login with Facebook</a>
        <a href="#0" class="social_bt google">Login with Google</a>
        <div class="divider"><span>Or</span></div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
            <i class="icon_mail_alt"></i>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password" value="">
            <i class="icon_lock_alt"></i>
        </div>
        <div class="clearfix add_bottom_15">
            <div class="checkboxes float-left">
                <label class="container_check">Remember me
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
        </div>
        <div class="text-center">
            <input type="submit" value="Log In" class="btn_1 full-width mb_5">
            Don’t have an account? <a href="register.html">Sign up</a>
        </div>
        <div id="forgot_pw">
            <div class="form-group">
                <label>Please confirm login email below</label>
                <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                <i class="icon_mail_alt"></i>
            </div>
            <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
            <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
        </div>
    </div>
</form>
<!--form -->
</div>
<!-- /Sign In Modal -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/common_func.js"></script>
<script src="assets/validate.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script>
var tpj = jQuery;

var revapi44;
tpj(document).ready(function() {
    if (tpj("#rev_slider_44").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_44");
    } else {
        revapi44 = tpj("#rev_slider_44").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution-slider/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 4500,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    touchOnDesktop: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'erinyen',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 767,
                    hide_over: 9999,
                    hide_delay: 0,
                    hide_delay_mobile: 0,

                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 60,
                        v_offset: 0
                    },

                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 60,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    style: 'zeus',
                    direction: 'horizontal',
                    rtl: false,

                    container: 'slider',
                    h_align: 'center',
                    v_align: 'bottom',
                    h_offset: 0,
                    v_offset: 30,
                    space: 7,

                    hide_onleave: false,
                    hide_onmobile: false,
                    hide_under: 0,
                    hide_over: 767,
                    hide_delay: 200,
                    hide_delay_mobile: 1200
                },
            },
            responsiveLevels: [1240, 1025, 778, 480],
            visibilityLevels: [1920, 1500, 1025, 768],
            gridwidth: [1200, 991, 778, 480],
            gridheight: [1025, 1366, 1025, 868],
            lazyType: "none",
            shadow: 0,
            spinner: "spinner4",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "on",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "on",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLimit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
});
</script>

</body>
</html>