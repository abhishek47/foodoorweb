@extends('layouts.restaurants')

@section('content')
         <section class="main-banner-section-bg">
            <div class="block">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h3 class="main-banner-title-text">The Easiest Way to Get Your Food Online.</h3>
                           <span class="main-banner-tagline-text">Find Restaurants, Order food online &amp; Get delivered</span>
                        </div>
                        <!-- Heading -->
                        <div class="top-company-sec">
                           <div class="row" id="companies-carousel-1">
                              <div class="col-lg-3">
                                 <div class="top-compnay padding-0">
                                    <img src="images/resource/adv-img-1.jpg" alt="" />
                                 </div>
                                 <!-- Top Company -->
                              </div>
                              <div class="col-lg-3">
                                 <div class="top-compnay padding-0">
                                    <img src="images/resource/adv-img-2.jpg" alt="" />
                                    
                                 </div>
                                 <!-- Top Company -->
                              </div>
                              <div class="col-lg-3">
                                 <div class="top-compnay padding-0">
                                    <img src="images/resource/adv-img-3.jpg" alt="" />
                                    
                                 </div>
                                 <!-- Top Company -->
                              </div>
                              <div class="col-lg-3">
                                 <div class="top-compnay padding-0">
                                    <img src="images/resource/adv-img-1.jpg" alt="" />
                                    
                                 </div>
                                 <!-- Top Company -->
                              </div>
                              <div class="col-lg-3">
                                 <div class="top-compnay padding-0">
                                    <img src="images/resource/adv-img-2.jpg" alt="" />
                                    
                                 </div>
                                 <!-- Top Company -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- <section>
            <div class="block no-padding">
               <div class="container fluid">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="main-featured-sec style2">
                           <ul class="main-slider-sec style2 text-arrows">
                              <li class="slideHome"><img src="images/resource/banner-img.jpg" alt="" /></li>
                              <li class="slideHome"><img src="images/resource/parallax2.jpg" alt="" /></li>
                              <li class="slideHome"><img src="images/resource/header3.jpg" alt="" /></li>
                           </ul>
                           <div class="job-search-sec">
                              <div class="job-search style2">
                                 <h3>The Easiest Way to Get Your Food Online.</h3>
                                 <span>Find Restaurants, Order food online &amp; Get delivered</span>
                                 <div class="search-job2">
                                    <form>
                                       <div class="row no-gape">
                                          <div class="col-lg-7 col-md-6 col-sm-10">
                                             <div class="job-field">
                                                <input placeholder="Enter your location" type="text">
                                             </div>
                                          </div>
                                          <div class="col-lg-2  col-md-2 col-sm-2">
                                             <button type="submit" class="my-location-btn"><i class="la la-crosshairs"></i></button>
                                          </div>
                                          <div class="col-lg-3  col-md-4 col-sm-12">
                                             <button type="submit">Search Restaurant <i class="la la-search"></i></button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 
                                 <div class="quick-select-sec">
                                    <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-4">
                                          <div class="quick-select">
                                             <a href="#" title="">
                                             <i class="la la-home"></i>
                                             <span>Quality Assured Restaurants.</span>
                                             </a>
                                          </div>
                                          
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-4">
                                          <div class="quick-select">
                                             <a href="#" title="">
                                             <i class="la la-truck "></i>
                                             <span>Fastes Food Delivery</span>
                                             </a>
                                          </div>
                                          
                                       </div>
                                       <div class="col-lg-3 col-md-3 col-sm-3">
                                          <div class="quick-select">
                                             <a href="#" title="">
                                             <i class="la la-history"></i>
                                             <span>24 Hrs in Your Service</span>
                                             </a>
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
         </section> -->
         <section>
            <div class="block gray">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h2>Popular Restaurants</h2>
                           <span>Looking for something greate? Get served by our Popular Restaurents.</span>
                        </div>
                        <!-- Heading -->
                        <div class="job-grid-sec">
                           <div class="row">

                              @foreach($restaurants as $restaurant)
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                       <div class="job-title-sec">
                                          <div class="c-logo"> <img src="{{ url($restaurant->logo) }}" alt=""> </div>
                                          <h3><a href="#" title="">{{ $restaurant->name }}</a></h3>
                                          <span><i class="fa fa-cutlery"></i> Multi Cuisines.</span>
                                          <span class="fav-job"><i class="la la-heart-o"></i></span>
                                       </div>
                                       <span class="job-lctn">{{ $restaurant->area }}, {{ $restaurant->city->name }}</span>
                                       <a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}" title="">View Menu</a>
                                    </div>
                                    <!-- JOB Grid -->
                                 </div>
                              @endforeach
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="browse-all-cat">
                           <a href="{{ route('restaurants.list') }}" title="" class="style2">Load more listings</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <section>
            <div class="block">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading">
                           <h2>Our Top Cuisines</h2>
                           <span>Let's try some delicious food from one of these cuisines.</span>
                        </div>
                        <!-- Heading -->
                        <div class="top-company-sec">
                           <div class="row" id="companies-carousel">

                           @foreach($cuisines as $cuisine)
                              <div class="col-lg-3">
                                 <div class="top-compnay">
                                    <h3><a href="#" title="">{{ $cuisine->name }}</a></h3>
                                    <a href="{{ route('restaurants.list.cuisine', ['cuisine' => $cuisine->id]) }}" title="">View Restaurants</a>
                                 </div>
                                 <!-- Top Company -->
                              </div>
                           @endforeach   
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="block gray">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="subscription-sec">
                           <div class="row">
                              <div class="col-lg-6">
                                 <h3>Track you order</h3>
                                 <span>Let us now about your tracking id and we will reach you out the information.</span>
                              </div>
                              <div class="col-lg-6">
                                 <form>
                                    <input placeholder="Enter Valid Tracking Number" type="text">
                                    <button type="submit"><i class="la la-search"></i></button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

@endsection