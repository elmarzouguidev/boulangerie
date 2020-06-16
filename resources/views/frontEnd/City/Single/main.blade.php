<div class="col-list-wrap anim_clw">
                        <!-- list-main-wrap-header-->
                        <div class="list-main-wrap-header fl-wrap anim_clw  ">
                            <div class="container">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">
                                    <h2>boulangeries de  : <span>{{$slug}} </span></h2>
                                </div>
                                <!-- list-main-wrap-title end-->
                                <!-- list-main-wrap-opt-->
                                <div class="list-main-wrap-opt">
                                    <!-- price-opt-->
                                    {{-- <div class="price-opt">
                                        <span class="price-opt-title">Sort   by:</span>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                <option>Popularity</option>
                                                <option>Average rating</option>
                                                <option>Price: low to high</option>
                                                <option>Price: high to low</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <!-- price-opt end-->
                                    <!-- price-opt-->
                                    {{-- <div class="grid-opt">
                                        <ul class="no-list-style">
                                            <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                            <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                                        </ul>
                                    </div> --}}
                                    <!-- price-opt end-->
                                    <div class="show-hidden-sb shsb_btn shsb_btn_act"><i class="fal fa-sliders-h"></i> <span>Show Filters</span></div>
                                </div>
                                <!-- list-main-wrap-opt end-->                    
                            </div>
                            <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fas fa-caret-up"></i></a>
                        </div>
                        <!-- list-main-wrap-header end-->
                        <div class="clearfix"></div>
                        <div class="container">
                            <div class="mob-nav-content-btn mncb_half color2-bg shsb_btn shsb_btn_act fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                            <div class="mob-nav-content-btn mncb_half color2-bg schm  fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- listing-item-container -->
                        <div class="listing-item-container init-grid-items fl-wrap" id="lisfw">
                            <div class="container">

                                <!-- listing-Boulangerie  -->
                                @include('frontEnd.City.Single.item')
                                <!-- listing-Boulangerie end -->                                       
                                                                 
                                <div class="pagination">
                                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                    <a href="#">1</a>
                                    <a href="#" class="current-page">2</a>
                                    <a href="#">3</a>
                                
                                    <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- listing-item-container end -->
                        <!--sub-footer-->
                        <div class="sub-footer  fl-wrap">
                            <div class="container">
                                <div class="copyright"> &#169; maBoulangerie 2020 .  All rights reserved.</div>
                                <div class="lang-wrap">
                                    <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>FR</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                                    <ul class="lang-tooltip lang-action no-list-style">
                                        <li><a href="#" class="current-lan" data-lantext="En">Français</a></li>
                                        <li><a href="#" data-lantext="Fr">Français</a></li>
                                       
                                    </ul>
                                </div>
                                <div class="subfooter-nav">
                                    <ul class="no-list-style">
                                        <li><a href="#">Terms of use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--sub-footer end -->
                    </div>
                    <div class="limit-box fl-wrap"></div>