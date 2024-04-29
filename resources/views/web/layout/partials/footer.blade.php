@php $contacts = \App\Models\Contact::all() @endphp
<!--Footer-->
<footer class="padding-top bg_black">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Why Bistro?</h4>
                <hr class="half_space">
                <p class="half_space">{{$settings->meta_desc}}</p>
            </div>
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Quick Links</h4>
                <hr class="half_space">
                <ul class="widget_links">
                    <li><a href="{{route('homeView.index')}}">Home</a></li>
                    <li><a href="{{route('servicesView.index')}}">Services</a></li>
                    <li><a href="{{route('about.show', $id = 1)}}">About Us</a></li>
                    <li><a href="{{route('contactsView.index')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Newsletter</h4>
                <hr class="half_space">
                <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
                <div id="result1" class="text-center"></div>

                <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&amp;id=494727d648&amp;c=?" method="get" onSubmit="return false" class="newsletter">
                    <div class="form-group">
                        <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn-submit button3" value="Subscribe" />
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Get in Touch</h4>
                <hr class="half_space">
                <p class="address"><i class="icon-location"></i>{{$contacts[4]->value}}</p>
                <p class="address"><i class="fa fa-phone"></i><a target="_blank" href="tell:{{$contacts[3]->value}}">{{$contacts[3]->value}}</a></p>
                <p class="address"><i class="icon-dollar"></i><a href="mailto:{{$contacts[2]->value}}?subject=I Want To Order">{{$contacts[2]->value}}</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright clearfix">
                    <p>Copyright &copy; {{$settings->cope_rights}} All Right Reserved</p>
                    <ul class="social_icon">
                        <li><a href="{{$contacts[0]->value}}" class="facebook"><i class="icon-facebook5"></i></a></li>
                        <li><a href="https://www.x.com/{{$contacts[1]->value}}" class="twitter"><i class="icon-twitter4"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/functions.js" type="text/javascript"></script>

</body>
</html>
