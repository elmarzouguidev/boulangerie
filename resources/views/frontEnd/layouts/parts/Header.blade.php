<header class="main-header">
    <!-- logo-->
    <a href="{{route('home')}}" class="logo-holder"><img src="{{asset('frontEnd/images/logoo.png')}}" alt="maBoulangerie"></a>
    <!-- logo end-->
    <!-- header-search_btn-->         
    <div class="header-search_btn show-search-button"><i class="fal fa-search"></i>
        <span>
        </span>
    </div>
    <!-- header-search_btn end-->
    <!-- header opt --> 
    <a href="" class="add-list color-bg">S'abonner <span><i class="fal fa-layer-plus"></i></span></a>
    <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
    <div class="show-reg-form modal-open avatar-img" data-srcav="frontEnd/images/avatar/3.jpg"><i class="fal fa-user"></i>Sign In</div>
    <!-- header opt end--> 
    <!-- lang-wrap-->
    <div class="lang-wrap">
        <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>FR</strong></span><i class="fa fa-caret-down arrlan"></i></div>
        <ul class="lang-tooltip lang-action no-list-style">
            <li><a href="#" class="current-lan" data-lantext="Fr">Français</a></li>
            {{-- <li><a href="#" data-lantext="Fr">Français</a></li> --}}
        
        </ul>
    </div>
    <!-- lang-wrap end-->                                 
    <!-- nav-button-wrap--> 
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  navigation --> 
    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">
                <li>
                <a href="{{route('home')}}" class="act-link">Accueil</a>
                    {{-- <!--second level -->   
                    <ul>
                        <li><a href="index.html">Parallax Image</a></li>
                        <li><a href="index2.html">Slider</a></li>
                        <li><a href="index3.html">Slideshow</a></li>
                        <li><a href="index4.html">Video</a></li>
                        <li><a href="index5.html">Map</a></li>
                    </ul>
                    <!--second level end--> --}}
                </li>
                <li><a href="{{route('patisserie')}}">Patisserie</a></li>
                {{-- <li><a href="{{route('shop')}}">Boutique</a></li> --}}
                <li><a href="http://fnbp.ma/" target="__blank">FNBP</a></li>
                <li><a href="{{route('espacePro')}}">Espace pro</a></li>
                <li><a href="{{route('transdigital')}}">Transformation Digitale</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
    <!-- header-search_container -->                     
    <div class="header-search_container header-search vis-search">
        <div class="container small-container">
            <div class="header-search-input-wrap fl-wrap">
                <!-- header-search-input --> 
                <div class="header-search-input">
                    <label><i class="fal fa-keyboard"></i></label>
                    <input type="text" placeholder="What are you looking for ?"   value=""/>  
                </div>
                <!-- header-search-input end -->  
                <!-- header-search-input --> 
                <div class="header-search-input location autocomplete-container">
                    <label><i class="fal fa-map-marker"></i></label>
                    <input type="text" placeholder="Location..." class="autocomplete-input" id="autocompleteid2" value=""/>
                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                </div>
                <!-- header-search-input end -->                                        
                <!-- header-search-input --> 
                <div class="header-search-input header-search_selectinpt ">
                    <select data-placeholder="Category" class="chosen-select no-radius" >
                        <option>All Categories</option>
                        <option>All Categories</option>
                        <option>Shops</option>
                        <option>Hotels</option>
                        <option>Restaurants</option>
                        <option>Fitness</option>
                        <option>Events</option>
                    </select>
                </div>
                <!-- header-search-input end --> 
                <button class="header-search-button green-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i> Search </button>
            </div>
            <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
        </div>
    </div>
    <!-- header-search_container  end --> 
    <!-- wishlist-wrap--> 
    <div class="header-modal novis_wishlist">
        <!-- header-modal-container--> 
        <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
            <!--widget-posts-->
            <div class="widget-posts  fl-wrap">
                <ul class="no-list-style">
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>  
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                            <div class="widget-posts-descr-score">4.1</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Events</a> </div>
                            <div class="widget-posts-descr-score">4.2</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Fitness</a> <a href="listing.html" >Gym</a> </div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- widget-posts end-->
        </div>
        <!-- header-modal-container end--> 
        <div class="header-modal-top fl-wrap">
            <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
            <div class="close-header-modal"><i class="far fa-times"></i></div>
        </div>
    </div>
    <!--wishlist-wrap end --> 
</header>