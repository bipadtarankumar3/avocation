@extends('web.layouts.main')
@section('content')



<section class="">
    <div class="container">
      <div class="row mt-4 mb-4">
        <div class="col-md-8 mb-1 p-0 img-over">
        <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
          <img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt="" class="w-100"/>
          </a>
        </div>
        <div class="col-md-4 p-0 pl-1">
          <div class="row m-0">
            <div class="col-md-12 col-xs-6 pl-1 pr-1 pb-2 img-over">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
              <img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt="" class="w-100"/>
              </a>
            </div>
            <div class="col-md-12 col-xs-6 pl-1 pr-1 pb-2 img-over" style="position:relative;">
              <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
                <img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt="" class="w-100"/>
              </a>
              <div class="view-all"><button class="btn btn-view-all" data-toggle="modal" data-target=".bd-example-modal-xl">View all <i class="fa fa-angle-right"></i></button></div>
            </div>
            <!--<div class="col-md-12 pl-1 pr-1 pb-2 img-over">
              <img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt="" class="w-100"/>
            </div>-->
            <!--<div class="col-md-6 pl-1 pr-1 pb-2 img-over">
              <img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt="" class="w-100"/>
            </div>-->
          </div>
        </div>
      </div>
  
    </div>
  </section>
  
  
  <section>
    <div class="container">
      <div class="row" style=" border-bottom: 1px solid #bfbfbf;">
        <div class="col-md-8">
          <div class="all-page-nav">
            <ul>
              <li><a href="#Overview" class="sliding-link">Overview</a></li>
              <li><a href="#Amenities" class="sliding-link">Amenities</a></li>
              <li><a href="#Rooms" class="sliding-link">Rooms</a></li>
              <li><a href="#Accessibility" class="sliding-link">Accessibility</a></li>
              <li><a href="#Policies" class="sliding-link">Policies</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pull-r-custom"><button class="btn otuline-btn"><i class="fa fa-heart-o" aria-hidden="true"></i> Save</button> <button class="btn btn-info-custom">Reserve a room</button></div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="Overview">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mt-4">
          <div class="prop-detail-a">
            <h2>Sheraton Bali Kuta Resort</h2>
            <p class="five-star"><i class="fa fa-star"></i> &nbsp; <i class="fa fa-star"></i> &nbsp; <i class="fa fa-star"></i> &nbsp; <i class="fa fa-star"></i> &nbsp; <i class="fa fa-star"></i> &nbsp;</p>
            <p>5-star luxury hotel near Beachwalk Shopping Center, connected to a shopping center</p>
            <h4><span>8.8</span>Excellent</h4>
            <p><b>Guests liked:</b> <br>
              Friendly staff
            </p>
            <div class="see-all mb-4"><a href="#">See all 1,002 reviews <i class="fa fa-angle-right"></i> </a></div>
            <h4 id="Amenities">Popular amenities</h4>
            <div class="row">
              <div class="col-6">
                <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/pool.svg')}}" alt=""/> Pool <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt="" style="width: 16px;"/></li>
                     <li><img src="{{URL::to('public/assets/web/images/coffee-cup.svg')}}" alt=""/> Breakfast available <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt="" style="width: 16px;"/></li>
                     <li><img src="{{URL::to('public/assets/web/images/spa.svg')}}" alt=""/> Spa</li>
                   </ul>
                </div>
              </div>
              <div class="col-6">
               <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/restaurant.svg')}}" alt=""/> Restaurant <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt="" style="width: 16px;"/></li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi </li>
                     <li><img src="{{URL::to('public/assets/web/images/air-conditioning.svg')}}" alt=""/> Air conditioning</li>
                   </ul>
                </div>
              </div>
              <div class="col-12">
                <div class="see-all mb-4"><a href="#">See all property amenities <i class="fa fa-angle-right"></i> </a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="">
            <h4>Explore the area</h4>
             <div class="map-body">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5244.931822706119!2d87.55303141116794!3d21.635564690052664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a03332c6b09af5d%3A0xb62ac7ec4d6ce95a!2sShankarpur%20mohona!5e0!3m2!1sen!2sin!4v1720450322610!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="mb-1 ml-2">Jalan Pantai Kuta, Kuta, Bali, 80361</p>
                <div class="see-all mb-4 ml-2"><a href="#">View in a map </a></div>
             </div>
             <div class="map-location mt-3">
               <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> Beachwalk Shopping Center <span>1 min walk</span></li>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> Kuta Beach <span>1 min walk</span></li>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> Waterbom Bali <span>18 min walk</span></li>
                     <li><img src="{{URL::to('public/assets/web/images/airplane.svg')}}" alt=""/> Denpasar (DPS-Ngurah Rai Intl.) <span>29 min drive</span></li>
                   </ul>
                </div>
                <div class="see-all mb-4"><a href="#">See more <i class="fa fa-angle-right"></i> </a></div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section id="Rooms">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h3>Choose your room</h3>
        </div>
        <div class="col-md-12 mt-3">
          <div class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-12">
              <div class="row">
              <div class="form-group col-md-4">
                <label for="exampleInputDate1"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate1" placeholder="Check in - Jul 18">
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputDate2"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate2" placeholder="Check out - Jul 20">
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputTravelers"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputTravelers" placeholder="2 travelers, 1 room">
              </div>
              </div>
              </div>
            </form>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-3 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                <div class="owl-product-list owl-carousel owl-theme">
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt=""/></div>
                </div>
                <div class="listing-box-top p-0">
                   <div class="popular-shay">Popular for short stays</div>
                </div>
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>9.8/10 Exceptional</p>
              <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> 495 sq ft</li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi</li>
                     <li><img src="{{URL::to('public/assets/web/images/parking.svg')}}" alt=""/> Free self parking</li>
                     <li><img src="{{URL::to('public/assets/web/images/user-group.svg')}}" alt=""/> Sleeps 4</li>
                     <li><img src="{{URL::to('public/assets/web/images/bed.svg')}}" alt=""/> 1 King Bed</li>
                   </ul>
                </div>
                <div class="see-all-r mb-2"><a href="#">Non-refundable <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt=""/> </a></div>
                <div class="see-all mb-2"><a href="#">More details <i class="fa fa-angle-right"></i> </a></div>
              </div>
              <div class="border-1"></div>
              <div class=" pl-3">
               <p><b>Extas</b></p>
               <table class="w-100">
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label pl-4" for="exampleRadios1">
                      No extras
                    </label>
                  </div></td>
                     <td>+ $0</td>
                 </tr>
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label pl-4" for="exampleRadios2">
                      Breakfast for 2
                    </label>
                  </div></td>
                     <td>+ $21</td>
                 </tr>
               </table>
               <h3 class="pri mt-4">$217 <br> <span>$262 total</span></h3>
               <p class="left-for">includes taxes & fees <span>We have 5 left</span></p>
               <div class="row">
                 <div class=" col-6">
                   <div class="see-all mb-2"><a href="#">Price details <i class="fa fa-angle-right"></i> </a></div>
                 </div>
                 <div class=" col-6 pr-4 mb-3">
                   <button class="btn btn-info-custom pull-r-custom ">Reserve</button>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-12 pl-1">
                   <div class="border-1 mb-2"></div>
                   <div class="owl-product-date owl-carousel owl-theme">
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                <div class="owl-product-list owl-carousel owl-theme">
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt=""/></div>
                </div>
                <!--<div class="listing-box-top p-0">
                   <div class="popular-shay">Popular for short stays</div>
                </div>-->
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>9.8/10 Exceptional</p>
              <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> 495 sq ft</li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi</li>
                     <li><img src="{{URL::to('public/assets/web/images/parking.svg')}}" alt=""/> Free self parking</li>
                     <li><img src="{{URL::to('public/assets/web/images/user-group.svg')}}" alt=""/> Sleeps 4</li>
                     <li><img src="{{URL::to('public/assets/web/images/bed.svg')}}" alt=""/> 1 King Bed</li>
                   </ul>
                </div>
                <div class="see-all-r mb-2"><a href="#">Non-refundable <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt=""/> </a></div>
                <div class="see-all mb-2"><a href="#">More details <i class="fa fa-angle-right"></i> </a></div>
              </div>
              <div class="border-1"></div>
              <div class=" pl-3">
               <p><b>Extas</b></p>
               <table class="w-100">
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label pl-4" for="exampleRadios1">
                      No extras
                    </label>
                  </div></td>
                     <td>+ $0</td>
                 </tr>
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label pl-4" for="exampleRadios2">
                      Breakfast for 2
                    </label>
                  </div></td>
                     <td>+ $21</td>
                 </tr>
               </table>
               <h3 class="pri mt-4">$217 <br> <span>$262 total</span></h3>
               <p class="left-for">includes taxes & fees <span>We have 5 left</span></p>
               <div class="row">
                 <div class=" col-6">
                   <div class="see-all mb-2"><a href="#">Price details <i class="fa fa-angle-right"></i> </a></div>
                 </div>
                 <div class=" col-6 pr-4 mb-3">
                   <button class="btn btn-info-custom pull-r-custom ">Reserve</button>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-12 pl-1">
                   <div class="border-1 mb-2"></div>
                   <div class="owl-product-date owl-carousel owl-theme">
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                <div class="owl-product-list owl-carousel owl-theme">
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt=""/></div>
                </div>
                <!--<div class="listing-box-top p-0">
                   <div class="popular-shay">Popular for short stays</div>
                </div>-->
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>9.8/10 Exceptional</p>
              <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> 495 sq ft</li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi</li>
                     <li><img src="{{URL::to('public/assets/web/images/parking.svg')}}" alt=""/> Free self parking</li>
                     <li><img src="{{URL::to('public/assets/web/images/user-group.svg')}}" alt=""/> Sleeps 4</li>
                     <li><img src="{{URL::to('public/assets/web/images/bed.svg')}}" alt=""/> 1 King Bed</li>
                   </ul>
                </div>
                <div class="see-all-r mb-2"><a href="#">Non-refundable <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt=""/> </a></div>
                <div class="see-all mb-2"><a href="#">More details <i class="fa fa-angle-right"></i> </a></div>
              </div>
              <div class="border-1"></div>
              <div class=" pl-3">
               <p><b>Extas</b></p>
               <table class="w-100">
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label pl-4" for="exampleRadios1">
                      No extras
                    </label>
                  </div></td>
                     <td>+ $0</td>
                 </tr>
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label pl-4" for="exampleRadios2">
                      Breakfast for 2
                    </label>
                  </div></td>
                     <td>+ $21</td>
                 </tr>
               </table>
               <h3 class="pri mt-4">$217 <br> <span>$262 total</span></h3>
               <p class="left-for">includes taxes & fees <span>We have 5 left</span></p>
               <div class="row">
                 <div class=" col-6">
                   <div class="see-all mb-2"><a href="#">Price details <i class="fa fa-angle-right"></i> </a></div>
                 </div>
                 <div class=" col-6 pr-4 mb-3">
                   <button class="btn btn-info-custom pull-r-custom ">Reserve</button>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-12 pl-1">
                   <div class="border-1 mb-2"></div>
                   <div class="owl-product-date owl-carousel owl-theme">
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-2 mt-2">
          <div class="border border-red p-3">
            <table class="w-100">
              <tr>
                <td><img src="{{URL::to('public/assets/web/images/lodging_priming.svg')}}" alt=""/></td>
                <td><h5>Enjoy more peace of mind by adding stay protection at checkout.</h5></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-3 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                <div class="owl-product-list owl-carousel owl-theme">
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt=""/></div>
                </div>
                <div class="listing-box-top p-0">
                   <div class="popular-shay">Popular for short stays</div>
                </div>
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>9.8/10 Exceptional</p>
              <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> 495 sq ft</li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi</li>
                     <li><img src="{{URL::to('public/assets/web/images/parking.svg')}}" alt=""/> Free self parking</li>
                     <li><img src="{{URL::to('public/assets/web/images/user-group.svg')}}" alt=""/> Sleeps 4</li>
                     <li><img src="{{URL::to('public/assets/web/images/bed.svg')}}" alt=""/> 1 King Bed</li>
                   </ul>
                </div>
                <div class="see-all-r mb-2"><a href="#">Non-refundable <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt=""/> </a></div>
                <div class="see-all mb-2"><a href="#">More details <i class="fa fa-angle-right"></i> </a></div>
              </div>
              <div class="border-1"></div>
              <div class=" pl-3">
               <p><b>Extas</b></p>
               <table class="w-100">
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label pl-4" for="exampleRadios1">
                      No extras
                    </label>
                  </div></td>
                     <td>+ $0</td>
                 </tr>
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label pl-4" for="exampleRadios2">
                      Breakfast for 2
                    </label>
                  </div></td>
                     <td>+ $21</td>
                 </tr>
               </table>
               <h3 class="pri mt-4">$217 <br> <span>$262 total</span></h3>
               <p class="left-for">includes taxes & fees <span>We have 5 left</span></p>
               <div class="row">
                 <div class=" col-6">
                   <div class="see-all mb-2"><a href="#">Price details <i class="fa fa-angle-right"></i> </a></div>
                 </div>
                 <div class=" col-6 pr-4 mb-3">
                   <button class="btn btn-info-custom pull-r-custom ">Reserve</button>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-12 pl-1">
                   <div class="border-1 mb-2"></div>
                   <div class="owl-product-date owl-carousel owl-theme">
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                <div class="owl-product-list owl-carousel owl-theme">
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt=""/></div>
                </div>
                <!--<div class="listing-box-top p-0">
                   <div class="popular-shay">Popular for short stays</div>
                </div>-->
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>9.8/10 Exceptional</p>
              <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> 495 sq ft</li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi</li>
                     <li><img src="{{URL::to('public/assets/web/images/parking.svg')}}" alt=""/> Free self parking</li>
                     <li><img src="{{URL::to('public/assets/web/images/user-group.svg')}}" alt=""/> Sleeps 4</li>
                     <li><img src="{{URL::to('public/assets/web/images/bed.svg')}}" alt=""/> 1 King Bed</li>
                   </ul>
                </div>
                <div class="see-all-r mb-2"><a href="#">Non-refundable <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt=""/> </a></div>
                <div class="see-all mb-2"><a href="#">More details <i class="fa fa-angle-right"></i> </a></div>
              </div>
              <div class="border-1"></div>
              <div class=" pl-3">
               <p><b>Extas</b></p>
               <table class="w-100">
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label pl-4" for="exampleRadios1">
                      No extras
                    </label>
                  </div></td>
                     <td>+ $0</td>
                 </tr>
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label pl-4" for="exampleRadios2">
                      Breakfast for 2
                    </label>
                  </div></td>
                     <td>+ $21</td>
                 </tr>
               </table>
               <h3 class="pri mt-4">$217 <br> <span>$262 total</span></h3>
               <p class="left-for">includes taxes & fees <span>We have 5 left</span></p>
               <div class="row">
                 <div class=" col-6">
                   <div class="see-all mb-2"><a href="#">Price details <i class="fa fa-angle-right"></i> </a></div>
                 </div>
                 <div class=" col-6 pr-4 mb-3">
                   <button class="btn btn-info-custom pull-r-custom ">Reserve</button>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-12 pl-1">
                   <div class="border-1 mb-2"></div>
                   <div class="owl-product-date owl-carousel owl-theme">
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                <div class="owl-product-list owl-carousel owl-theme">
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt=""/></div>
                  <div class="item"><img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt=""/></div>
                </div>
                <!--<div class="listing-box-top p-0">
                   <div class="popular-shay">Popular for short stays</div>
                </div>-->
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>9.8/10 Exceptional</p>
              <div class="popular-amenities">
                   <ul>
                     <li><img src="{{URL::to('public/assets/web/images/map.svg')}}" alt=""/> 495 sq ft</li>
                     <li><img src="{{URL::to('public/assets/web/images/wifi.svg')}}" alt=""/> Free WiFi</li>
                     <li><img src="{{URL::to('public/assets/web/images/parking.svg')}}" alt=""/> Free self parking</li>
                     <li><img src="{{URL::to('public/assets/web/images/user-group.svg')}}" alt=""/> Sleeps 4</li>
                     <li><img src="{{URL::to('public/assets/web/images/bed.svg')}}" alt=""/> 1 King Bed</li>
                   </ul>
                </div>
                <div class="see-all-r mb-2"><a href="#">Non-refundable <img src="{{URL::to('public/assets/web/images/info.svg')}}" alt=""/> </a></div>
                <div class="see-all mb-2"><a href="#">More details <i class="fa fa-angle-right"></i> </a></div>
              </div>
              <div class="border-1"></div>
              <div class=" pl-3">
               <p><b>Extas</b></p>
               <table class="w-100">
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label pl-4" for="exampleRadios1">
                      No extras
                    </label>
                  </div></td>
                     <td>+ $0</td>
                 </tr>
                 <tr>
                    <td><div class="form-check pl-0">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label pl-4" for="exampleRadios2">
                      Breakfast for 2
                    </label>
                  </div></td>
                     <td>+ $21</td>
                 </tr>
               </table>
               <h3 class="pri mt-4">$217 <br> <span>$262 total</span></h3>
               <p class="left-for">includes taxes & fees <span>We have 5 left</span></p>
               <div class="row">
                 <div class=" col-6">
                   <div class="see-all mb-2"><a href="#">Price details <i class="fa fa-angle-right"></i> </a></div>
                 </div>
                 <div class=" col-6 pr-4 mb-3">
                   <button class="btn btn-info-custom pull-r-custom ">Reserve</button>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-12 pl-1">
                   <div class="border-1 mb-2"></div>
                   <div class="owl-product-date owl-carousel owl-theme">
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                     <div class="item">
                       <table class="w-100">
                        <tr>
                           <td><p>SUN <br> Jul 14</p></td>
                           <td><p>MON <br> Jul 29</p></td>
                           <td><p>TUE <br> Jul 16</p></td>
                           <td><p>WED <br> Jul 24</p></td>
                           <td><p>TUE <br> Jul 09</p></td>
                           <td><p>FRI <br> Jul 19</p></td>
                           <td><p>SAT <br> Jul 27</p></td>
                         </tr>
                         <tr>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                           <td><p class="ammo"><span>₹4996</span> <br> units</p></td>
                         </tr>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-4 mt-2">
          <div class="border border-red p-3">
            <h3>Have a question?</h3>
            <p>Search in general property info and reviews.</p>
            <form class=" w-100">
                <div class="form-row align-items-center">
                  <div class="col-11">
                    <label class="sr-only" for="inlineFormInputGroup">Search</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
                    </div>
                  </div>
                  <div class="col-1">
                    <button type="submit" class="btn btn-primary mb-2" style="border-radius: 30px;
      padding: 8px 13px;"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section id="">
    <div class="container">
      <div class="row">
         <div class="col-md-4 mt-3 mb-3">
           <h3>About this property</h3>
         </div>
         <div class="col-md-8 mb-3">
           <h5>Sheraton Bali Kuta Resort</h5>
           <p>Sheraton Bali Kuta Resort offers its guests a full-service spa, 2 outdoor swimming pools, a health club, and a sauna. There are 2 restaurants on site. You can enjoy a drink at the bar/lounge. Public spaces have free WiFi.</p>
           <p>A 24-hour business center and 10 meeting rooms are available. A children's pool, spa services, and a terrace are also featured at the luxury Sheraton Bali Kuta Resort. An airport shuttle (available 24 hours) is available for a fee. Free self parking and valet parking are available.</p>
           <p>This 5-star Kuta hotel is smoke free.</p>
           <h5>Languages</h5>
           <p>Chinese (Mandarin), English, German, Indonesian, Japanese</p>
         </div>
      </div>
    </div>
  </section>
  
  <section id="Accessibility">
    <div class="container">
      <div class="row">
         <div class="col-md-12 mt-3 mb-3">
           <div class="border-1  mb-3"></div>
           <h3>Similar properties we recommend</h3>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                  <img src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt="" class="w-100"/>
                
                <div class="listing-box-top p-0">
                   <div class="popular-shay">Walk to Kuta Beach</div>
                </div>
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>Downtown Kuta</p>
              <div class="popular-amenities">
                   <ul>
                     <li><i class="fa fa-check"></i> Pool</li>
                     <li><i class="fa fa-check"></i> Hot Tub</li>
                     <li><i class="fa fa-check"></i> Spa</li>
                     <li><i class="fa fa-check"></i> Kids pool</li>
                   </ul>
                </div>
  
               <p><b>4.6/5</b> Wonderful (1007)</p>
               <div class="">
                 <h3>$140</h3>
                 <p>par night</p>
                 <h6>$170 total</h6>
                 <p>includes texes & fees</p>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-4 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                  <img src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt="" class="w-100"/>
                
                <!--<div class="listing-box-top p-0">
                   <div class="popular-shay">Walk to Kuta Beach</div>
                </div>-->
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>Downtown Kuta</p>
              <div class="popular-amenities">
                   <ul>
                     <li><i class="fa fa-check"></i> Pool</li>
                     <li><i class="fa fa-check"></i> Hot Tub</li>
                     <li><i class="fa fa-check"></i> Spa</li>
                     <li><i class="fa fa-check"></i> Kids pool</li>
                   </ul>
                </div>
  
               <p><b>4.6/5</b> Wonderful (1007)</p>
               <div class="">
                 <h3>$140</h3>
                 <p>par night</p>
                 <h6>$170 total</h6>
                 <p>includes texes & fees</p>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-4 mb-3">
           <div class="listing-box border border-red">
             <div class="listing-box-slider">
                  <img src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt="" class="w-100"/>
                
                <div class="listing-box-top p-0">
                   <div class="popular-shay">Walk to Kuta Beach</div>
                </div>
             </div>
             <div class=" pl-3">
             <h4>Room, 1 King Bed, Balcony</h4>
             <p>Downtown Kuta</p>
              <div class="popular-amenities">
                   <ul>
                     <li><i class="fa fa-check"></i> Pool</li>
                     <li><i class="fa fa-check"></i> Hot Tub</li>
                     <li><i class="fa fa-check"></i> Spa</li>
                     <li><i class="fa fa-check"></i> Kids pool</li>
                   </ul>
                </div>
  
               <p><b>4.6/5</b> Wonderful (1007)</p>
               <div class="">
                 <h3>$140</h3>
                 <p>par night</p>
                 <h6>$170 total</h6>
                 <p>includes texes & fees</p>
               </div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="Policies">
    <div class="container">
      <div class="row">
         <div class="col-md-12 mt-3 mb-3">
           <div class="border-1  mb-3"></div>
         </div>
         <div class="col-md-4 mt-3 mb-3">
           <h3>Policies</h3>
         </div>
         <div class="col-md-8 mb-3">
           <div class="row">
             <div class="col-md-6">
               <h5>Check-in</h5>
               <p>Check-in start time: 3:00 PM; Check-in end time: noon</p>
               <p>Late check-in subject to availability</p>
             </div>
             <div class="col-md-6">
               <h5>Check-out</h5>
               <p>Check-out before noon</p>
               <p>Late check-out subject to availability</p>
               <p>A late check-out fee will be charged</p>
             </div>
           </div>
           <h5>Special check-in instructions</h5>
           <p>This property offers transfers from the airport (surcharges may apply); guests must contact the property with arrival details before travel, using the contact information on the booking confirmation
  Guests must contact the property in advance for check-in instructions; front desk staff will greet guests on arrival</p>
           <p>To make arrangements for check-in please contact the property at least 24 hours before arrival using the information on the booking confirmation</p>
           <p>If you are planning to arrive after midnight please contact the property in advance using the information on the booking confirmation</p>
           <h5>Renovations and closures</h5>
           <p>The property will be renovating from March 15 2024 to July 31 2024 (completion date subject to change). The following areas are affected:
           <ul>
             <li>Lobby</li>
           </ul>
  
  In accordance with local regulations, all visitors must remain within the property during Seclusion Day (Nyepi)/Hindu New Year for a 24-hour period (starting at 6 AM). Seclusion Day typically falls in March or April (dates subject to change each year). Check-in and check-out will not be possible on that date. Ngurah Rai Airport (Bali International Airport) is also closed on Seclusion Day.
  Renovation work will only be conducted during business hours. Every effort will be made to minimize noise and disturbance.</p>
         </div>
      </div>
    </div>
  </section>
  

  
  
  <div class="modal fade bd-example-modal-xl pr-0" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
            <div class="tab-box" style="justify-content: left;">
              <button class="tablink" onclick="openPage('TabA', this)" id="defaultOpen">Property</button>
              <button class="tablink" onclick="openPage('TabB', this,)">Family Room</button>
              <button class="tablink" onclick="openPage('TabC', this,)">Deluxe Room</button>
              <button class="tablink" onclick="openPage('TabD', this,)">6 Bed Mixed Dorm</button>
              <button class="tablink" onclick="openPage('TabE', this,)">Swiss Tents</button>
            </div>
            <div id="TabA"  class="tabcontent-inner">
                  <div class="row">
                  <div class="col-md-3">    
                    <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-1.jpg')}}" data-lightbox="example-set1" data-title="Image-1"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt=""/></a>
                  </div>
                  <div class="col-md-3">
                     <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-2.jpg')}}" data-lightbox="example-set1" data-title="Image-2"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt="" /></a>
                  </div>
                  <div class="col-md-3">
                     <a class=" example-image-link" href="{{URL::to('public/assets/web/images/img-3.jpg')}}" data-lightbox="example-set1" data-title="Image-3"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt="" /></a>
                  </div>
                  <div class="col-md-3">
                     <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-4.jpg')}}" data-lightbox="example-set1" data-title="Image-4"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt="" /></a>
                  </div>
                  <div class="col-md-3">
                    <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-5.jpg')}}" data-lightbox="example-set1" data-title="Image-5"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt="" /></a>
                  </div>
               </div>
               </div>
               
               <div id="TabB" class="tabcontent-inner" style="display:none">
                  <div class="row">
                  <div class="col-md-3">    
                    <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-3.jpg')}}" data-lightbox="example-set2" data-title="Image-1"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-3.jpg')}}" alt=""/></a>
                  </div>
                  <div class="col-md-3">
                     <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-2.jpg')}}" data-lightbox="example-set2" data-title="Image-2"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-2.jpg')}}" alt="" /></a>
                  </div>
                  <div class="col-md-3">
                     <a class=" example-image-link" href="{{URL::to('public/assets/web/images/img-1.jpg')}}" data-lightbox="example-set2" data-title="Image-3"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-1.jpg')}}" alt="" /></a>
                  </div>
                  <div class="col-md-3">
                     <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-4.jpg')}}" data-lightbox="example-set2" data-title="Image-4"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-4.jpg')}}" alt="" /></a>
                  </div>
                  <div class="col-md-3">
                    <a class="example-image-link" href="{{URL::to('public/assets/web/images/img-5.jpg')}}" data-lightbox="example-set2" data-title="Image-5"><img class="example-image w-100 mb-4 b-r-10p" src="{{URL::to('public/assets/web/images/img-5.jpg')}}" alt="" /></a>
                  </div>
               </div>
               </div>
            </div>
           </div>
        </div>
        
      </div>
    </div>
  </div>
  
  
  
  

@endsection