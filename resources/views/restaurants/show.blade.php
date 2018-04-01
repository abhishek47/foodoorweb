@extends('layouts.restaurants')



@section('content')

 <section>
            <div class="block no-padding dark-bg">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="inner2">
                           <div class="inner-title2">
                              <div class="row clearfix">
                                 <div class="col-sm-5">
                                    <div class="hotel-img-outer">
                                       <img src="/images/resource/hotel-icon.jpeg" class="img-responsive">   
                                    </div>
                                 </div>
                                 <div class="col-sm-7">
                                    <h3 class="restaurant-title text-white">{{ $restaurant->name }}</h3>
                                    <p class="restaurant-address">{{ $restaurant->area }}, {{ $restaurant->city->name }}</p>
                                    <p class="restaurant-address text-green font-bold">Open now</p>
                                    <p class="food-category"><i class="fa fa-cutlery"></i> @foreach($restaurant->cuisines as $cuisine)
                                          {{ $cuisine->name }},
                                       @endforeach    </p>
                                    <div class="features-outer clearfix">
                                       <div class="col-sm-6 feature">
                                          <p class="feature-title"><i class="fa fa-clock-o"></i>  41 Minutes</p>
                                          <small class="feature-desc">Delivery Time</small>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="feature-title">&#8377; 750</p>
                                          <small class="feature-desc">Cost for two</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="page-breacrumbs">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>



         <section>
            <div class="block no-padding">
               <div class="container">
                  <div class="row no-gape">
                     <aside class="col-lg-2 column border-right">
                        <div class="widget text-right">
                           <div class="posted_widget" style="">
                           		<a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}">All Items</a>
                                 <a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}">Most Populars</a>
                                 <a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}">Veg Items</a>
                                 <a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}">Non Veg Items</a>
	                           	@foreach($restaurant->cuisines as $cuisine)
	                        		<a href="{{ route('restaurants.show.cuisine', ['restaurant' => $restaurant->id, 'cuisine' => $cuisine->id]) }}">{{ $cuisine->name }}</a>
	                        	@endforeach	
                          
                           </div>
                        </div>
                     </aside>
                     <div class="col-lg-7 column">
                        <div class="modrn-joblist">
                          
                           <!-- Tags Bar -->
                           <div class="filterbar">
                              <!-- <div class="sortby-sec">
                                 <span>Sort by</span>
                                 <select data-placeholder="Most Recent" class="chosen" style="display: none;">
                                    <option>Most Recent</option>
                                    <option>Most Recent</option>
                                    <option>Most Recent</option>
                                    <option>Most Recent</option>
                                 </select>
                                  <div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 99px;">
                                    <a class="chosen-single chosen-default">
                                       <span>Most Recent</span>
                                       <div><b></b></div>
                                    </a>
                                    <div class="chosen-drop">
                                       <div class="chosen-search">
                                          <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                                       </div>
                                       <ul class="chosen-results"></ul>
                                    </div>
                                    </div>
                                 <select data-placeholder="20 Per Page" class="chosen" style="display: none;">
                                    <option>30 Per Page</option>
                                    <option>40 Per Page</option>
                                    <option>50 Per Page</option>
                                    <option>60 Per Page</option>
                                 </select>
                                  <div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 99px;">
                                    <a class="chosen-single">
                                       <span>30 Per Page</span>
                                       <div><b></b></div>
                                    </a>
                                    <div class="chosen-drop">
                                       <div class="chosen-search">
                                          <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                                       </div>
                                       <ul class="chosen-results"></ul>
                                    </div>
                                    </div>
                              </div> -->
                              <h5>{{ count($items) }} Delicious &amp; Tasty dishes</h5>
                           </div>
                        </div>
                        <!-- MOdern Job LIst -->
                        <div class="job-list-modern">
                           <div class="job-grid-sec p-l-30 m-t-0">
                              <div class="row">
                              @foreach($items as $item)
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid">
                                       <div class="job-title-sec">
                                          <div class="c-logo"> <img src="{{ url($item->photo) }}"  alt=""> </div>
                                          <h3><a href="#" title="">{{ $item->name }}</a></h3>
                                          <span >{{ $item->description }}</span>
                                          <span style="display: block !important;float: none;">&#8377 {{ $item->price }}</span>
                                         
                                       </div>
                                       <a href="#" title="">Add to Cart</a>
                                    </div>
                                    <!-- JOB Grid -->
                                 </div>

                                @endforeach 
                                 
                              </div>
                           </div>
                           <div class="viewmore"><span><i></i><i></i><i></i>View More</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 column">
                        <div class="cart-wrapper">
                           <h2 class="cart-heading">Cart</h2>
                           <span>0 Items</span>
                           <div class="table-wrapper">
                              <table class="table borderless" style="height: 245px;">
                                 <tbody>
                                    <tr>
                                       <td>Quesadilla Explosion Salad</td>
                                       <td><input type="number" name="quantity" value="1" min="1"></td>
                                       <td>₹ 200</td>
                                    </tr>
                                    <tr>
                                       <td>Quesadilla Explosion Salad</td>
                                       <td><input type="number" name="quantity" value="1" min="1"></td>
                                       <td>₹ 200</td>
                                    </tr>
                                    <tr>
                                       <td>Quesadilla Explosion Salad</td>
                                       <td><input type="number" name="quantity" value="1" min="1"></td>
                                       <td>₹ 200</td>
                                    </tr>
                                    <tr>
                                       <td>Quesadilla Explosion Salad</td>
                                       <td><input type="number" name="quantity" value="1"></td>
                                       <td>₹ 200</td>
                                    </tr>
                                    <tr>
                                       <td>Quesadilla Explosion Salad</td>
                                       <td><input type="number" name="quantity" value="1"></td>
                                       <td>₹ 200</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>   
                           <div class="subtotal-wrapper">
                              <div class="subtotal-heading">
                                 <p>Subtotal</p>
                                 <span>Extra charges may applied.</span>
                              </div>
                              <div class="subtotal-price">
                                 <p>&#8377; 1000</p>
                              </div>
                           </div>   
                           <a href="#" title="">Checkout</a>
                           <p>Free Delivery for orders above &#8377; 250</p>
                        </div>      
                     </div>   
                  </div>
               </div>
            </div>
         </section>


@endsection