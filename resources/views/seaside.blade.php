@extends("main.layout")
@session("main")
<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email"required>
        <input type="password" class="box" placeholder="enter your password"required>
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
  
    </form>

</div>

<section class="packages" id="packages">

        <h1 class="heading">popular  Beaches:</h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="image">
                    <img src="../main/images/seaside.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Clifton Beach</h3>
                    <div>  <h1 style="font-size:44x;">4.2</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/BYM6xXSBVzdg7qeQA" target="_blank" class="btn">Find location</a>
                <div class="wrapper">
                    <a href="#demo-modal1">Details</a>
                </div>
            </div>

                <div id="demo-modal1" class="modal">
                    <div class="modal__content">
                        <h1>Clifton Beach</h1>
                        <p style="color: #ec4e4f;">Clifton Beach, also known as Sea View, is a beach in Karachi, Sindh, Pakistan and is located on the Arabian Sea. It stretches from Karachi to Ormara (Balochistan).</p>
                        <p>
                            <h3 style="text-align: left;">timing:12pm-12am</h3>
                            <h3 style="text-align: left;">location:Q34W+P9R، road، D.H.A. Phase 8 Zone C Phase 8 Karachi, Karachi City, Sindh 75500</h3>
                       
                    </p>
                        
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="../main/images/1787552-HawkesBayBea.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hawke's Bay</h3>
                    <div>  <h1 style="font-size:44x;">4</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/i9SSVQz5PXuNNHpr5" target="_blank" class="btn">Find location</a>
                <div class="wrapper">
                    <a href="#demo-modal2">Details</a>
                </div>
            </div>

                <div id="demo-modal2" class="modal">
                    <div class="modal__content">
                        <h1>Hawke's Bay</h1>
                        <p style="color: #ec4e4f;">Hawke's Bay or Hawkesbay is a beach in Karachi, Sindh, Pakistan, located 20 km southwest of Karachi city The beach is named after Bladen Wilmer Hawke,</p>
                        <p>
                            <h3 style="text-align: left;">timing:12pm-12am</h3>
                            <h3 style="text-align: left;">location:Q34W+P9R، road، D.H.A. Phase 8 Zone C Phase 8 Karachi, Karachi City, Sindh 75500</h3>
                       
                    </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="../main/images/French-Beach-Karachi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>French Beach, Karachi</h3>
                    <div>  <h1 style="font-size:44x;">4.7</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/2tFKxx1NCG27ABjQ8" target="_blank" class="btn">Find location</a>
                <div class="wrapper">
                    <a href="#demo-modal3">Details</a>
                </div>
            </div>

                <div id="demo-modal3" class="modal">
                    <div class="modal__content">
                        <h1>French Beach, Karachi</h1>
                        <p style="color: #ec4e4f;">French Beach of Karachi is located half way between Hawkes Bay and Paradise Point, is a small fishing village frequented by Karachi's elite class and known </p>
                        <p>
                            <h3 style="text-align: left;">timing:12pm-12am</h3>
                            <h3 style="text-align: left;">location:Q34W+P9R، road، D.H.A. Phase 8 Zone C Phase 8 Karachi, Karachi City, Sindh 75500</h3>
                       
                    </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="../main/images/Manora-Beach16356059.png" alt="">
                </div>
                <div class="content">
                    <h3>Manora, Karachi</h3>
                    <div>  <h1 style="font-size:44x;">4.5</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/jABTK787rrHingQ57" target="_blank" class="btn">Find location</a>
                <div class="wrapper">
                    <a href="#demo-modal4">Details</a>
                </div>
            </div>

                <div id="demo-modal4" class="modal">
                    <div class="modal__content">
                        <h1>Manora, Karachi</h1>
                        <p style="color: #ec4e4f;">Manora was formerly an island, but due to silting is now connected to the mainland by a 12 kilometer long natural sandbridge known as Sandspit.</p>
                        <p>
                            <h3 style="text-align: left;">timing:12pm-12am</h3>
                            <h3 style="text-align: left;">location:Q34W+P9R، road، D.H.A. Phase 8 Zone C Phase 8 Karachi, Karachi City, Sindh 75500</h3>
                       
                    </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="../main/images/turtal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Turtle Beach Karachi</h3>
                    <div>  <h1 style="font-size:44x;">4.5</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://g.page/KBH114?share" target="_blank" class="btn">Find location</a>
                <div class="wrapper">
                    <a href="#demo-modal5">Details</a>
                </div>
            </div>

                <div id="demo-modal5" class="modal">
                    <div class="modal__content">
                        <h1>Turtle Beach</h1>
                        <p style="color: #ec4e4f;">Turtle Beach Karachi is a very famous tourist spot and Picnic place in Karachi. Its a Naturally Sandy Beach where no rocks and reefs. The located between Hawksbay and Sandspit</p>
                        <p>
                            <h3 style="text-align: left;">timing:12pm-12am</h3>
                            <h3 style="text-align: left;">location:Q34W+P9R، road، D.H.A. Phase 8 Zone C Phase 8 Karachi, Karachi City, Sindh 75500</h3>
                       
                    </p>
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="../main/images/CharnaIslandKarachiP.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Churna Island</h3>
                    <div>  <h1 style="font-size:44x;">4.6</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/HWUcASZVQceK4eGG9" target="_blank" class="btn">Find location</a>
                <div class="wrapper">
                    <a href="#demo-modal6">Details</a>
                </div>
            </div>

                <div id="demo-modal6" class="modal">
                    <div class="modal__content">
                        <h1>Churna Island</h1>
                       <p style="color: #ec4e4f;">Charna Island is located near Mubarak Goth, Kiamari Town in Karachi, Sindh, Pakistan. Churna Island is a small, uninhabited island located in the Arabian Sea,</p>
                         <p>
                            <h3 style="text-align: left;">timing:12pm-12am</h3>
                            <h3 style="text-align: left;">location:Q34W+P9R، road، D.H.A. Phase 8 Zone C Phase 8 Karachi, Karachi City, Sindh 75500</h3>
                       
                    </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../main/images/sunehra beach.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sunehra Beach</h3>
                    <div>  <h1 style="font-size:44x;">4.3</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                  <!--   <div class="price">$250 - $450</div> -->
                    <a href="https://goo.gl/maps/wTXoDdA7dCeLhurz9" target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-name">Details </a>
                </div>
            </div>
                <div id="demo-name" class="modal">
                    <div class="modal__content">
                        <h1>Sunehra Beach</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Sunehra Beach Karachi (Golden Beach) is a wonderful beach for Families, located near Gaddani, Mubarak village (Goth) Road, Sindh, Pakistan. It is 43.2 Km far from Karachi city and cover the distance about 1 hour 27 min</p>
                            
                                    <h3 style="text-align: left;">timing:05:00 AM - 07:00 PM</h3>
                                 
                                    <h3 style="text-align: left;">location: Gaddani, Karachi</h3>
                                   
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../main/images/Mubarak-Village.jpg" alt="">
                </div>
                <div class="content">
                    <h3> Mubarak Village Beach</h3>
                    <div>  <h1 style="font-size:44x;">4.5</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                  <!--   <div class="price">$250 - $450</div> -->
                    <a href="https://g.page/mubarak-village-beach?share"target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-Mubarak Village Beach">Details </a>
                </div>
            </div>
                <div id="demo-Mubarak Village Beach" class="modal">
                    <div class="modal__content">
                        <h1>Mubarak Village Beach</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Mubarak Village Beach Resort, Karachi, Pakistan. 7372 likes · 65 talking about this · 52621 were here. ‎Mubarak Goth or Mubarak</p>
                            
                                    <h1 style="text-align: left;">timing:3:26am–5pm</h1>
                                   
                                    <h3 style="text-align: left;">location: Suparco road, Mubarak Goth Rd, Mubarak Keamari, Karachi, Sindh</h3>
                                 
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../main/images/French-Beach-Karachi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>French Beach</h3>
                    <div>  <h1 style="font-size:44x;">4.7</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                  <!--   <div class="price">$250 - $450</div> -->
                    <a href="https://goo.gl/maps/mELYXoRzKtwHiUDs6" target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-French">Details </a>
                </div>
            </div>
                 <div id="demo-French" class="modal">
                    <div class="modal__content">
                        <h1>French Beach</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">French Beach of Karachi is located half way between Hawkes Bay and Paradise Point, is a small fishing village frequented by Karachi's elite class and known to the locals as Haji Ismill Goth.</p>
                            
                                    <h3 style="text-align: left;">timing:24-hours</h3>
                                   
                                    <h3 style="text-align: left;">location: 	
                                        Bahria Town KarachiBaldia TownBin Qasim TownCantonmentsCliftonDefence Housing AuthorityGadap TownGulberg Town, KarachiGulshan TownJamshed TownKeamari DistrictKorangi TownLandhi TownLiaquatabad TownLyari TownMalir TownNew Karachi TownNorth Nazimabad TownOrangi TownSaddar TownShah Faisal TownKemari DistrictSITE Town</h3>
                                   
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
          -->
              <!--   <div id="demo-name" class="modal">
                    <div class="modal__content">
                        <h1></h1>
                
                        <p>
                            <p style="color: #ec4e4f;"></p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:</h3>
                                    <h3 style="text-align: left;">location: </h3>
                                    <h3 style="text-align: left;">services:</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">Explore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <h3></h3>
                    
                 
                    <a href="" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-name">Details </a>
                </div>
            </div>
                <div id="demo-name" class="modal">
                    <div class="modal__content">
                        <h1></h1>
                
                        <p>
                            <p style="color: #ec4e4f;"></p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:</h3>
                                    <h3 style="text-align: left;">location: </h3>
                                    <h3 style="text-align: left;">services:</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">Explore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div><div class="box">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <h3></h3>
                    
                    <a href="" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-name">Details </a>
                </div>
            </div>
                <div id="demo-name" class="modal">
                    <div class="modal__content">
                        <h1></h1>
                
                        <p>
                            <p style="color: #ec4e4f;"></p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:</h3>
                                    <h3 style="text-align: left;">location: </h3>
                                    <h3 style="text-align: left;">services:</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">Explore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div> -->
    
        </div>
    
    </section>
    <div class="scroll-button">
        <button onclick="scrollBtn()" id="scroll-btn"><i class="fa fa-arrow-up"  ></i></button>
    </div>
    <!-- footer section  -->
    


@sessionend