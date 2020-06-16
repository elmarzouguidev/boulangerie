<div class="col-list-wrap novis_to-top">
                        <!-- list-main-wrap-header-->
                        <div class="list-main-wrap-header fl-wrap fixed-listing-header">
                            <div class="container">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">
                                    <h2>Les villes </span></h2>
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
                                </div>
                                <!-- list-main-wrap-opt end-->                    
                            </div>
                            <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- list-main-wrap-header end-->  
                        <div class="clearfix"></div>
                        <div class="container">
                            <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                            <div class="mob-nav-content-btn mncb_half color2-bg schm  fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- listsearch-input-wrap-->
                        <div class="listsearch-input-wrap lws_mobile fl-wrap tabs-act" id="lisfw">

                           {{-- @include('frontEnd.City.filterA') --}}

                            <div class="clearfix"></div>

                            <div class="container">
                                <!--tabs -->                       
                                <div class="tabs-container fl-wrap">
                                    <!--haymacproduction filter -->
                                      {{-- @include('frontEnd.City.filterB') --}}
                                    <!--haymacproduction end-->
                                    <!--tab --> 
                                    {{-- @include('frontEnd.City.categoriesTB') --}}
                                    <!--tab end-->
                                </div>
                                <!--tabs end-->
                            </div>
                        </div>
                        <!-- listsearch-input-wrap end-->
                        <!-- listing-item-container -->
                        <div class="listing-item-container init-grid-items fl-wrap">
                            <div class="container">
                                <!-- listing-item  -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="listing-item-grid">
                                            <div class="bg"  data-bg="{{asset('frontEnd/images/all/casablanca.jpg')}}"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>150 </span> boulangeries</div>
                                            <div class="listing-item-grid_title">
                                            <h3><a href="{{route('city.single','casablanca')}}">Casablanca</a></h3>
                                                <p> casablanca ville</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  listing-item-grid end  -->
                                    <!--  listing-item-grid  -->
                                    <div class="col-sm-4">
                                        <div class="listing-item-grid">
                                            <div class="bg"  data-bg="{{asset('frontEnd/images/all/rabat.jpg')}}"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>22 </span> boulangeries</div>
                                            <div class="listing-item-grid_title">
                                                <h3><a href="{{route('city.single','rabat')}}">Rabat</a></h3>
                                                <p>Rabat ville</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  listing-item-grid end  -->                                
                                    <!--  listing-item-grid  -->
                                    <div class="col-sm-4">
                                        <div class="listing-item-grid">
                                            <div class="bg"  data-bg="{{asset('frontEnd/images/all/agadir.jpg')}}"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>9 </span> boulangeries</div>
                                            <div class="listing-item-grid_title">
                                                <h3><a href="{{route('city.single','agadir')}}">Agadir</a></h3>
                                                <p>Agadir ville</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  listing-item-grid end  -->
                                    <!--  listing-item-grid  -->
                                    <div class="col-sm-4">
                                        <div class="listing-item-grid">
                                            <div class="bg"  data-bg="{{asset('frontEnd/images/all/tanger.jpg')}}"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>12 </span> boulangeries</div>
                                            <div class="listing-item-grid_title">
                                                <h3><a href="{{route('city.single','tanger')}}">Tanger</a></h3>
                                                <p>Tanger villes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  listing-item-grid end  -->
                                    <!--  listing-item-grid  -->
                                    <div class="col-sm-8">
                                        <div class="listing-item-grid">
                                            <div class="bg"  data-bg="{{asset('frontEnd/images/all/kech.jpg')}}"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>33 </span> boulangeries</div>
                                            <div class="listing-item-grid_title">
                                                <h3><a href="{{route('city.single','marrakech')}}">Marrakech</a></h3>
                                                <p>Marrakech villes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- listing-item end -->                                       
                                                                                          
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
                    </div>
                    <div class="limit-box fl-wrap"></div>