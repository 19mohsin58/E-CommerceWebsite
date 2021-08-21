<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mohsin Ali</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link href="fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">

</head>
<body>

    <div id="congrats">
        <p><?php echo "Welcome ". $_SESSION['username']?> </p>
        <button onclick="closeCon()"> x </button>
    </div>

    <div class="topLine">
        <div class="leftText">
            <p><i class="fas fa-phone-alt"></i> 0303-3529839</p>
            <p><i class="fas fa-envelope-open"></i>mohsinjokhio320@gmail.com</p>
        </div>
        <div class="input">
            <input id="inputSearch" type="text" placeholder="Search Here" />
            <button id="searchButton">Search</button>
        </div>
        <div class="rightText">
            <p><i class="fas fa-location"></i><?php echo "Welcome ". $_SESSION['username']?></p>
        </div>
    </div>


    <div id="navbar">
        <div id="logo">
            <img src="Images/logo.png"  alt="logo" width="70px" height="70px" />
        </div>
        <div id="Navlink">
            <a href="welcome.php"  style="color:crimson">Home</a>
            <a href="about.html">About</a>
            <a href="products.php"> Add Products</a>
            <a href="logout.php">Logout</a>
            <a href="#" onclick="show()"><i class="fas fa-shopping-cart"></i><span style="color: rgb(160, 0, 0);" id="cart">0</span></a>
        </div>
    </div>



    <div class="sliderDiv">


        <div class="slides">
        <div class="slider">
            <div id="caption">
                <p id="topline"> 1st slider </p>
                <h1 id="heading">Fashion Collection 2021</h1>
                <p id="subtittle"> Buy a Best Quality and Fashionable shoes with best price and Get Discount we have both men and women collections indeed you will love our products</p>
                <button id="slideButton"> Add to Wishlist </button>
            </div>


            <div id="image">
                <img src="Images/img1.png" alt="Slider1" height="500px" width="420px"/>
            </div>
        </div>
    </div>

    <div class="slides">
        <div class="slider">
            <div id="caption">
                <p id="topline"> 2nd slider </p>
                <h1 id="heading">Casual Collections 2021</h1>
                <p id="subtittle"> Buy a Best Quality and Fashionable shoes with best price and Get Discount we have both men and women collections indeed you will love our products</p>
                <button id="slideButton"> Add to Wishlist </button>
            </div>


            <div id="image">
                <img src="Images/img2.png" alt="Slider1" height="500px" width="420px"/>
            </div>
        </div>
    </div>


    <div class="slides">
        <div class="slider">
            <div id="caption">
                <p id="topline"> 3rd slider </p>
                <h1 id="heading">Shoes Collections 2021</h1>
                <p id="subtittle"> Buy a Best Quality and Fashionable shoes with best price and Get Discount we have both men and women collections indeed you will love our products</p>
                <button id="slideButton"> Add to Wishlist </button>
         </div>


            <div id="image">
                <img src="Images/img3.png" alt="Slider1" height="500px" width="420px"/>
            </div>
        </div>
    </div>


        <span class="arro prev" onclick="increamentSlide(-1)">&#10094;</span>
        <span class="arro next" onclick="increamentSlide(1)">&#10095;</span>
</div>



<div class="boxes">
    <div id="box1">
        <div id="text">
            <h2>SHIRTS</h2>
            <p>Casual Shirts For Mens</p>
            <button> View Products </button>
        </div>

        <div id="imgS">
            <img src="https://www.freepnglogos.com/uploads/t-shirt-png/gildan-premium-cotton-adult-shirt-23.png" alt="shirts" width="200px" height="200px" />
        </div>
    </div>



    <div id="box2">
        <div id="text">
            <h2>SHOES</h2>
            <p>All Virety Shoes Available</p>
            <button> View Products </button>
        </div>

        <div id="imgS">
            <img src="https://freepngimg.com/thumb/shoes/3-2-shoes-transparent-thumb.png" alt="Shoes" width="200px" height="200px" />
        </div>
    </div>



    <div id="box3">
        <div id="freeshiping">
            <h2>FREE SHIPING</h2>
            <p>Free Shiping all over the country</p>
            <button  onclick="sending('data ja raha hai')"> Order Now</button>
        </div>
    </div>
</div>





  <!-- POPULAR PRODUCTS START FROM HERE -->

<div class="PP">
    <div class="products">

        <div id="popularHeading">
           <h1>Popular Products</h1>
            <button id="seeAll">See All</button>
        </div>



        <div id="popularcard">

            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men',1200,'Images/shirt2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shirt2.png"  onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/shirt2.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Check Shirts For Men 2021</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/shirt2.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men',1200,'Images/shirt3.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shirt3.png"  onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/shirt2.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Check Shirts For Men 2021</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/shirt3.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Casual Shirts For Men',1000,'Images/shirt1.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shirt1.png"  onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/shirt2.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Casual Shirts For Men 2021</p>
                    <p>Rs:1000</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/shirt3.png')">Add to Cart</button>
            </div>



            <div id="card">
                <div id="cardimage"  onclick="product('Shoes For Men 2021',2200,'Images/img3.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/img3.png" onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/shirt2.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Shoes For Men 2021</p>
                    <p>Rs:2200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/shirt3.png')">Add to Cart</button>
            </div>



            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men',2000,'Images/shoes1.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes1.png"  onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/shirt2.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Sneakers Shoes 2021</p>
                    <p>Rs:2000</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/shirt3.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Black Shirt',1200,'Images/shirt2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="https://pngimg.com/uploads/dress_shirt/dress_shirt_PNG8117.png"  onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/shirt2.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Black Shirt</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/shirt3.png')">Add to Cart</button>
            </div>


        </div>


    </div>

        <!-- POPULAR PRODUCTS END HERE -->


        <div class="products">

            <div id="popularHeading">
               <h1>ShoesCollection 2021</h1>
                <button id="seeAll">See All</button>
            </div>
    
    
    
            <div id="popularcard">
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2100','Images/shoesSp1.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/shoesSp1.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                    </div>
                    <div id="info">
                        <p>Sports Shoes</p>
                        <p>Rs:2100</p>
                    </div>
                    <button onclick="cart('Sports Shoes',2100,'Images/shoesSp1.png')">Add to Cart</button>
                </div>
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2100','Images/shoesSp2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/shoesSp2.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                    </div>
                    <div id="info">
                        <p>Sports Shoes</p>
                        <p>Rs:2100</p>
                    </div>
                    <button onclick="cart('Sports Shoes',2100,'Images/shoesSp2.png')">Add to Cart</button>
                </div>
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2200','Images/cs.jpg','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/cs.jpg" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                    </div>
                    <div id="info">
                        <p>Casual Shoes</p>
                        <p>Rs:2200</p>
                    </div>
                    <button onclick="cart('Check Shirts For Men',2200,'Images/cs.jpg')">Add to Cart</button>
                </div>
    
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2100','Images/NikeShoes.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/NikeShoes.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                    </div>
                    <div id="info">
                        <p>Nike Shoes</p>
                        <p>Rs:2200</p>
                    </div>
                    <button onclick="cart('Check Shirts For Men',1200,'Images/NikeShoes.png')">Add to Cart</button>
                </div>
    
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2100','Images/shoesSp3.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/shoesSp3.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                    </div>
                    <div id="info">
                        <p>Sneakers Shoes 2021</p>
                        <p>Rs:2000</p>
                    </div>
                    <button onclick="cart('Check Shirts For Men',1200,'Images/shoesSp3.png')">Add to Cart</button>
                </div>
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2100','Images/cs2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/cs2.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                    </div>
                    <div id="info">
                        <p>Sneakers</p>
                        <p>Rs:1200</p>
                    </div>
                    <button onclick="cart('Check Shirts For Men',1200,'Images/cs2.png')">Add to Cart</button>
                </div>
    
    
            </div>
        </div>


        <!-- SHOES PRODUCTS END HERE -->


        <div class="products">

            <div id="popularHeading">
               <h1>Shirts Collection 2021</h1>
                <button id="seeAll">See All</button>
            </div>
    
    
    
            <div id="popularcard">
    
                <div id="card">
                    <div id="cardimage"  onclick="product('Check Shirts For Men','RS:1200','Images/ss1.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/ss1.png" alt="card" width="280px" height="300px" />
                    </div>
                    <div id="info">
                        <p>Check Shirts For Men 2021</p>
                        <p>Rs:1200</p>
                    </div>
                    <button onclick="cart('Check Shirts For Men',1200,'Images/ss1.png')">Add to Cart</button>
                </div>
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('New Shirts Collection','RS:1200','Images/ss2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/ss2.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                    </div>
                    <div id="info">
                        <p>New Shirts Collection</p>
                        <p>Rs:1200</p>
                    </div>
                    <button onclick="cart('New Shirts Collection',1200,'Images/ss2.png')">Add to Cart</button>
                </div>
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('New Shirts Collection','RS:1200','Images/ss3.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/ss3.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                    </div>
                    <div id="info">
                        <p>New Shirts Collection</p>
                        <p>Rs:1200</p>
                    </div>
                    <button onclick="cart('New Shirts Collection',1200,'Images/ss3.png')">Add to Cart</button>
                </div>
    
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('New Shirts Collection','RS:1000','Images/ss4.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/ss4.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                    </div>
                    <div id="info">
                        <p>New Shirts Collection</p>
                        <p>Rs:1000</p>
                    </div>
                    <button onclick="cart('New Shirts Collection',1000,'Images/ss4.png')">Add to Cart</button>
                </div>
    
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('New Shirts Collection','RS:1100','Images/ss5.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/ss5.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                    </div>
                    <div id="info">
                        <p>New Shirts Collection</p>
                        <p>Rs:1100</p>
                    </div>
                    <button onclick="cart('New Shirts Collection',1100,'Images/ss5.png')">Add to Cart</button>
                </div>
    
    
                <div id="card">
                    <div id="cardimage"  onclick="product('New Shirts Collection','RS:1200','Images/ss6.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                        <img src="Images/ss6.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                    </div>
                    <div id="info">
                        <p>New Shirts Collection</p>
                        <p>Rs:1200</p>
                    </div>
                    <button onclick="cart('Check Shirts For Men',1200,'Images/ss6.png')">Add to Cart</button>
                </div>
            </div>
        </div>
</div>


            <!-- SHIRTS COLLECTION ENDS HERE -->

            <!-- PRODUCTS DETAILS PAGE STAR FROM HERE -->

<div id="pro">
    <p id="closePro" onclick="closePro()">X</p>
<div id="prodisplay">
    <div id="imgPro">
        <img id="img" src="" alt='primg' height="350px" width="350px" />
    </div>

    <div id="proText">
    <p id="title"></p>
    <p id="price"></p>
    <p id="details"></p>
    <select id="selecSize">
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
        <option value="X Large">X Large</option>
      </select>

      <div id="proCart">
        <button id="minus" onclick="minus()"> - </button>
        <button id="order">1</button>
        <button id="plus" onclick="plus()"> + </button>
        <button id="proCartButton"  >Add to Card</button>
    </div>
    </div>
</div>
</div>

            <!-- PRODUCTS DETAILS PAGE ENDS HERE -->




        <!-- SUBSCRIPTION EMAIL START HERE -->
<div id="subscribe">
    <h1> SUBSCRIBE US !! </h1>
    <h2>Stay connected with us for New Upcomming Collections</h2>
    <input type="text" placeholder="Enter your Email Here" />
    <button>Subscribe</button>
    <h4>Your Email will Safe with us, we dont Spam</h4>
</div>
        <!-- SUBSCRIPTION EMAIL END HERE -->




        
        <!-- FOOTER OF WEBSITE START FROM HERE -->

<div class="footercontainer">
    <div class="footerwrapper">
        <div class="footerlinkscontainer">
            <div class="footerlinkswrapper">
                <div class="footerlinkitems">
                    <h1 id="footerlinktitle"> About us</h1>
                    <a href="#" id="footerlink">Who we are</a>
                    <a href="#" id="footerlink">How we work</a>
                    <a href="#" id="footerlink">Terms of service</a>
                    <a href="#" id="footerlink">Privacy & policy</a>
                </div>

                <div class="footerlinkitems">
                    <h1 id="footerlinktitle"> Contact us</h1>
                    <a href="#" id="footerlink">Contact</a>
                    <a href="#" id="footerlink">Location</a>
                    <a href="#" id="footerlink">Visit Store</a>
                    <a href="#" id="footerlink">Support</a>
                </div>

                <div class="footerlinkitems">
                    <h1 id="footerlinktitle">Products</h1>
                    <a href="#" id="footerlink">Popular Products</a>
                    <a href="#" id="footerlink">Casual Shirts</a>
                    <a href="#" id="footerlink">Shoes</a>
                    <a href="#" id="footerlink">T-Shirts</a>
                </div>

                <div class="footerlinkitems">
                    <h1 id="footerlinktitle">Social Media</h1>
                    <a href="#" id="footerlink">Facebook</a>
                    <a href="#" id="footerlink">Instagram</a>
                    <a href="#" id="footerlink">WhatsApp</a>
                    <a href="#" id="footerlink">Twitter</a>
                </div>
            </div>
        </div>

        <div class="socialmedia">
            <div class="socialmediawrapper">
                <div class="socialLogo">
                    <img src="Images/logo.png" alt="logo" height="80px" width="80px" />
                </div>
                <p id="websiterights">Mohsin Ali Copyrights 2021 <script>new Date().getFullYear()</script> All Rights Reserved</p>
                <div class="socialicons">
                    <a href="#" id="socialiconlinks"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" id="socialiconlinks"><i class="fab fa-instagram"></i></a>
                    <a href="#" id="socialiconlinks"><i class="fab fa-twitter"></i></a>
                    <a href="#" id="socialiconlinks"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- FOOTER OF WEBSITE END HERE -->

        <div  class="cart" id="cartsMain">

        <div id="navbarCart"><p>Shoping Cart Checkout</p> <h4 onclick="show()"> CLOSE </h4></div>

        <div id="cartsMain2">
            
            <div id="cartMeadd">
                
            </div>
  
            <div id="cardofcart">
                <div id="totalItems">
                    <p>Items</p>
                    <p id="items"></p>
                </div>
                <div id="shiping">
                    <p>Shiping</p>
                    <p id="tax">1000</p>
                </div>
                <div id="total">
                    <p>Total</p>
                    <p id="totalRupees"> 0 </p>
                </div>
                <div id="subTotal">
                    <p id="subTotalText">Sub Total</p>
                    <p id="subTotalRupees"> 0 </p>
                </div>


                <div id="cartForm">
                        <h1>Order Now</h1>
                        <p id="pSucces" style="color: seagreen; text-align: center;"> </p>
                        <div id="formKaDiv">
                        <label> Name </label>
                        <div id="inputsCart"><input id="inputs" type="text" placeholder="Enter your Name" /></div>
                        
                        
                        <label> Email </label>
                        <div id="inputsCart" ><input id="inputs" type="text" placeholder="Enter your Name" /></div>
                        
                        
                        <label> Phone Num </label>
                        <div id="inputsCart" ><input id="inputs" type="text" placeholder="Enter your Name" /></div>
                        
                    
                        <label> Address </label>
                        <div id="inputsCart" ><input id="inputs" type="text" placeholder="Enter your Name" /></div>
                    
                       
                        <label for="">Select City</label>
                        <select id="inputsCart">
                            <option value="Jamshoro">Jamshoro</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Sehwan">Sehwan</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Dadu">Dadu</option>
                        </select>
                        <button id="orderbtn" onclick="formValidation()">Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src='main.js'></script>
</body>
</html>