@extends('layouts.restaurants')

@section('content')
         <section>
            <div class="block no-padding  gray">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="inner2">
                           <div class="inner-title2">
                              <h3>{{ isset($cuisine) ? $cuisine->name . ' ' : '' }}Restaurants</h3>
                              <span>Select one of your choice from number of restaurants</span>
                           </div>
                           <div class="page-breacrumbs">
                              <ul class="breadcrumbs">
                                 <li><a href="#" title="">Home</a></li>
                                 <li><a href="#" title="">Restaurants</a></li>
                              </ul>
                           </div>
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
                        <div class="filterbar">
                           <h5 style="margin-bottom: 30px;">{{ count($restaurants) }} Top Restaurants</h5>
                          <div class="sortby-sec">
                              <span>Sort by</span>
                              <select data-placeholder="Most Recent" class="chosen" style="display: none;">
                                 <option>Most Recent</option>
                                 <option>Most Recent</option>
                                 <option>Most Recent</option>
                                 <option>Most Recent</option>
                              </select>
                              
                              <div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 97px;">
                                 <div class="chosen-drop">
                                    <div class="chosen-search">
                                       <input class="chosen-search-input" autocomplete="off" readonly="" type="text">
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
                              <div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 96px;">
                                 <div class="chosen-drop">
                                    <div class="chosen-search">
                                       <input class="chosen-search-input" autocomplete="off" readonly="" type="text">
                                    </div>
                                    <ul class="chosen-results"></ul>
                                 </div>
                              </div>
                           </div>
                        </div> 
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
                        {{ $restaurants->links() }}
                         <div class="pagination">
                           <ul>
                              <li class="prev"><a href=""><i class="la la-long-arrow-left"></i> Prev</a></li>
                              <li><a href="">1</a></li>
                              <li class="active"><a href="">2</a></li>
                              <li><a href="">3</a></li>
                              <li><span class="delimeter">...</span></li>
                              <li><a href="">14</a></li>
                              <li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>
                           </ul>
                        </div>
                     <!--  Pagination -->
                     </div>
                  </div>
               </div>
            </div>
         </section>

@endsection 

