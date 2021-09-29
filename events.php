<?php
    include 'includes/header.php';
    $page = 'home';
?>
<main>
    <section class="sec-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="banner-desc">
                        <h3 class="banner-h">Events</h3>
                        <p class="banner-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor<br>Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="upcoming-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h2>Upcoming Events</h2>
                    <div class="single-item">
  <div><div class="car-slider">
                        <div class="car-img">
                        <img src="images/car-slider-1.png" class="img-fluid" alt="img">
                        <div class="content-slider">
                            <h3>September</h3>
                            <h4>LS Fest</h4>
                            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor<br>Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                            <h5>Friday - Sunday</h5>
                        </div>
                        </div>
                        
                    </div></div>
  <div><div class="car-slider">
                        <div class="car-img">
                        <img src="images/car-slider-1.png" class="img-fluid" alt="img">
                        <div class="content-slider">
                            <h3>September</h3>
                            <h4>LS Fest</h4>
                            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor<br>Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                            <h5>Friday - Sunday</h5>
                        </div>
                        </div>
                        
                    </div></div>
  <div><div class="car-slider">
                        <div class="car-img">
                        <img src="images/car-slider-1.png" class="img-fluid" alt="img">
                         <div class="content-slider">
                            <h3>September</h3>
                            <h4>LS Fest</h4>
                            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor<br>Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                            <h5>Friday - Sunday</h5>
                        </div>
                        </div>
                       
                    </div></div>
</div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-6 col-md-6 col-sm-6 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="custom-input">
                        <label>Search</label>
                        <input type="text" name="text">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="custom-input">
                        <label>from</label>
                        <input type="text" name="text">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="custom-input">
                        <label>to</label>
                        <input type="text" name="text">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3 col-xxl-3">
                    <button>Search</button>
                </div>
            </div>
        </div>
    </section>
    <section class="calender-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div id="calendar-wrap">
            <div id="calendar">
                <ul class="weekdays">
                    <li>Sunday</li>
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                </ul>

                <!-- Days from previous month -->

                <ul class="days">
                    <li class="day other-month">
                    </li>
                    <li class="day other-month">
                                            
                    </li>
                    <li class="day other-month">
                    </li>
                    <li class="day other-month">
                        <div class="date">1</div>                      
                    </li>
                    <li class="day other-month">
                        <div class="date">2</div>                      
                    </li>

                    <!-- Days in current month -->

                    <li class="day">
                        <div class="date">3</div>                       
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                        <div class="event">
                            <div class="event-time">
                                LS Fest
                            </div>
                        </div>                      
                    </li>
                </ul>

                    <!-- Row #2 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">5</div>
                        <div class="event">
                            <div class="event-time">
                                LS Fest
                            </div>
                        </div>                           
                    </li>
                    <li class="day">
                        <div class="date">6</div>                       
                    </li>
                    <li class="day">
                        <div class="date">7</div>                       
                    </li>
                    <li class="day">
                        <div class="date">8</div>                       
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                      
                                            
                    </li>
                    <li class="day">
                        <div class="date">10</div>                       
                    </li>
                    <li class="day">
                        <div class="date">11</div>                       
                    </li>
                </ul>

                    <!-- Row #3 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">12</div>                      
                    </li>
                    <li class="day">
                        <div class="date">13</div>                      
                    </li>
                    <li class="day">
                        <div class="date">14</div> 
                        <div class="event">
                            <div class="event-time">
                                LS Fest
                            </div>
                        </div>                         
                    </li>
                    <li class="day">
                        <div class="date">15</div>  
                        <div class="event">
                            <div class="event-time">
                                LS Fest
                            </div>
                        </div>                        
                    </li>
                    <li class="day">
                        <div class="date">16</div> 
                    </li>
                    <li class="day">
                        <div class="date">17</div>                      
                    </li>
                    <li class="day">
                        <div class="date">18</div>                      
                    </li>
                </ul>

                    <!-- Row #4 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">19</div>                      
                    </li>
                    <li class="day">
                        <div class="date">20</div>                      
                    </li>
                    <li class="day">
                        <div class="date">21</div>                      
                    </li>
                    <li class="day">
                        <div class="date">22</div>                      
                    </li>
                    <li class="day">
                        <div class="date">23</div>                      
                    </li>
                    <li class="day">
                        <div class="date">24</div>                 
                    </li>
                    <li class="day">
                        <div class="date">25</div>                      
                    </li>
                </ul>

                        <!-- Row #5 -->

                <ul class="days radius-set">
                    <li class="day">
                        <div class="date">26</div>                      
                    </li>
                    <li class="day">
                        <div class="date">27</div> 
                        <div class="event">
                            <div class="event-time">
                                LS Fest
                            </div>
                        </div>                       
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                        <div class="event">
                            <div class="event-time">
                                LS Fest
                            </div>
                        </div>                          
                    </li>
                    <li class="day">
                        <div class="date">29</div>                      
                    </li>
                    <li class="day">
                        <div class="date">30</div>                      
                    </li>
                    <li class="day">
                                            
                    </li>
                    <li class="day">
                                          
                    </li>
                </ul>

                <!-- Row #6 -->

               

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->
                </div>
            </div>
        </div>
    </section>


      </main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>