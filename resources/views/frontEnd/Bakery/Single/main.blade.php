<section class="gray-bg no-top-padding-sec" id="sec1">
    <div class="container">
        <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
            <a href="{{route('home')}}">Accueil</a>
            <a href="{{route('boulangerie')}}">Boulangeries</a> <span>{{$slug}}</span> 
        </div>
        <div class="fl-wrap">
            <div class="row">
                <div class="col-md-8">
                    <!-- list-single-main-item --> 
                    <div class="user-profile-header fl-wrap">
                        <div class="user-profile-header_media fl-wrap">
                            <div class="bg"  data-bg="{{asset('frontEnd/images/all/bakery4.jpg')}}"></div>
                            <div class="user-profile-header_media_title">
                                <h3>{{$slug}}</h3>
                                <h4>{{$slug}}</h4>
                            </div>
                            {{-- <div class="user-profile-header_stats">
                                <ul class="no-list-style">
                                    <li><span>4</span>Places</li>
                                    <li><span>20</span>Followers</li>
                                    <li><span>4</span>Following</li>
                                </ul>
                            </div> --}}
                            {{-- <div class="follow-btn color2-bg">Follow <i class="fal fa-user-plus"></i></div> --}}
                        </div>
                        <div class="user-profile-header_content fl-wrap">
                            <div class="user-profile-header-avatar">
                                <img src="{{asset('frontEnd/images/all/amoud.png')}}" alt="">
                            </div>
                            <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim.   </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                            <a href="#" class="btn  float-btn color2-bg">Visit Website<i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- list-single-main-item end -->                                    
                    <!-- list-main-wrap-header-->
                 
                    <!-- list-main-wrap-header end-->                            
                    <!-- listing-item-container -->
                    <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic">
                        @include('frontEnd.Bakery.Single.product')                                                                       
                    </div>
                    <!-- listing-item-container end -->
                </div>
                <div class="col-md-4">
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                    
                    </div>
                    <!--box-widget-item end -->                                    
                    <!--box-widget-item -->                                       
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>information</h3>
                        </div>
                        <div class="box-widget">
                            <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">Maarif Casablanca</a></li>
                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+2125123456789</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">amoud@gmail.com</a></li>
                                        <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">www.amoud.ma</a></li>
                                    </ul>
                                </div>
                                <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                    <ul class="no-list-style">
                                        <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                        {{-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li> --}}
                                        <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <div class="bottom-bcw-box_link"><a href="#" class="show-single-contactform tolt" data-microtip-position="top" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->                                     
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Envoyé le un message ! </h3>
                        </div>
                        <div class="box-widget">
                            <div class="box-widget-content">
                                <form   class="add-comment custom-form">
                                    <fieldset>
                                        <label><i class="fal fa-user"></i></label>
                                        <input type="text" placeholder="Your Name *" value=""/>
                                        <div class="clearfix"></div>
                                        <label><i class="fal fa-envelope"></i>  </label>
                                        <input type="text" placeholder="Email Address*" value=""/>
                                        <textarea cols="40" rows="3" placeholder="Additional Information:"></textarea>
                                    </fieldset>
                                    <button class="btn float-btn color2-bg">Envoyer<i class="fal fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->                                     
                </div>
            </div>
        </div>
    </div>
</section>
