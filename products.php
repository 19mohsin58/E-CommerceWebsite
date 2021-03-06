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
    <p><i class="fas fa-location"></i><?php echo "Add Products ". $_SESSION['username']?></p>
    </div>
</div>

<body>
    <div id="navbar">
        <div id="logo">
            <img src="Images/logo.png"  alt="logo" width="70px" height="70px" />
        </div>
        <div id="Navlink">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="products.php" style="color:red;">Add Products</a>
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



<div id="sellInfo">
    <div id="sellHeader">
    <h2>Add Your Product Details</h2>
    <button onclick="HideSell()" > Close </button>  
    </div>

    <div class="SignUpcontainer">
    <label><b>Your Name</b></label>
    <input id="inputAddName" type="text" placeholder="Enter Your Name"  required>

    <label><b>Product Title</b></label>
    <input id="inputAddTitle" type="text" placeholder="Product Title"  required>

    <label><b>Product Price</b></label>
    <input id="inputAddPrice" type="number" placeholder="Product Price" required>

    <label><b>Product Picture Link</b></label>
    <input id="inputAddImg" type="text" placeholder="Product Image" required>

    <label><b>Your Details</b></label>
    <input id="inputAddDetails" type="text" placeholder="Add All Your Details About Product and You Like Phone No etec" required>

    <div class="clearfix">
      <button id="signUpBtn" onclick="addProduct()">Add Product</button>
    </div>
  </div>
</div>


    
    <div class="products">
        <div id="divBtnSell">
        <button id="sellBtn" onclick="showHideSell()">Click Here to Sell Your Product</button>
        </div>
        <h1 style="text-align:center;">Products  For Sell By Our Members</h1>
        <div id='sellerProduct'>
            
        </div>

        <h1 style="text-align: center;margin-bottom: 20px;margin-top: 20px;">Available Products at Store</h1>
        <div id="popularHeading">
           <h1>Shoes Collection 2021</h1>
        </div>
        <div id="popularcard">

            <div id="card">
                <div id="cardimage"  onclick="product('Sports Shoes','RS:2100','Images/shoesSp1.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoesSp1.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                </div>
                <div id="info">
                    <p>Sports Shoes</p>
                    <p>Rs:2100</p>
                </div>
                <button id="cardBtn" onclick="cart('Sports Shoes',2100,'Images/shoesSp1.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Sports Shoes','RS:2100','Images/shoesSp2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoesSp2.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sports Shoes</p>
                    <p>Rs:2100</p>
                </div>
                <button onclick="cart('Sports Shoes',2100,'Images/shoesSp2.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Casual Shoes','RS:2200','Images/cs.jpg','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/cs.jpg" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                </div>
                <div id="info">
                    <p>Casual Shoes</p>
                    <p>Rs:2200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',2200,'Images/cs.jpg')">Add to Cart</button>
            </div>



            <div id="card">
                <div id="cardimage"  onclick="product('Nike Shoes','RS:2200','Images/NikeShoes.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/NikeShoes.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                </div>
                <div id="info">
                    <p>Nike Shoes</p>
                    <p>Rs:2200</p>
                </div>
                <button onclick="cart('Nike Shoes',2200,'Images/NikeShoes.png')">Add to Cart</button>
            </div>



            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2000','Images/shoesSp3.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoesSp3.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                </div>
                <div id="info">
                    <p>Sneakers Shoes 2021</p>
                    <p>Rs:2000</p>
                </div>
                <button onclick="cart('Sneakers Shoes 2021',2000,'Images/shoesSp3.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men','RS:1500','Images/shoes6.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes6.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sneakers</p>
                    <p>Rs:1500</p>
                </div>
                <button onclick="cart('Sneakers',1500,'Images/shoes6.png')">Add to Cart</button>
            </div>

            <div id="card">
                <div id="cardimage"  onclick="product('Sports Shoes','RS:2000','Images/shoes11.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes11.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sports Shoes</p>
                    <p>Rs:2000</p>
                </div>
                <button onclick="cart('Check Shirts For Men',2000,'Images/shoes11.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('Sneakers Shoes','RS:2100','Images/shoes12.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes12.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sneakers Shoes</p>
                    <p>Rs:2100</p>
                </div>
                <button onclick="cart('Sneakers Shoes',2100,'Images/shoes12.png')">Add to Cart</button>
            </div>

            <div id="card">
                <div id="cardimage"  onclick="product('Sneakers Shoes','RS:2100','Images/shoes8.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes8.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sneakers Shoes</p>
                    <p>Rs:2100</p>
                </div>
                <button onclick="cart('Sneakers',2100,'Images/shoes8.png')">Add to Cart</button>
            </div>

            <div id="card">
                <div id="cardimage"  onclick="product('Sneakers','RS:2100','Images/shoes7.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes7.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sneakers</p>
                    <p>Rs:2100</p>
                </div>
                <button onclick="cart('Sneakers',2100,'Images/shoes7.png')">Add to Cart</button>
            </div>

            <div id="card">
                <div id="cardimage"  onclick="product('Sneakers','RS:2100','Images/shoes13.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes13.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sneakers</p>
                    <p>Rs:2100</p>
                </div>
                <button onclick="cart('Sneakers',2100,'Images/cs2.png')">Add to Cart</button>
            </div>

            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men','RS:2000','Images/shoes9.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/shoes9.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>Sports Shoes</p>
                    <p>Rs:2000</p>
                </div>
                <button onclick="cart('Sports Shoes',2000,'Images/shoes9.png')">Add to Cart</button>
            </div>


        </div>
    </div>


    <!-- SHOES PRODUCTS END HERE -->


    <div class="products">

        <div id="popularHeading">
           <h1>Shirts Collection 2021</h1>
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

            <div id="card">
                <div id="cardimage"  onclick="product('Check Shirts For Men','RS:1200','Images/t-.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="Images/t-.png" alt="card" width="280px" height="300px" />
                </div>
                <div id="info">
                    <p>Check Shirts For Men 2021</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/t-.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('New Shirts Collection','RS:1200','Images/t-shirt1.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/t-shirt1.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>New Shirts Collection</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('New Shirts Collection',1200,'Images/t-shirt1.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('New Shirts Collection','RS:1200','Images/t-shirt2.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/t-shirt2.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                </div>
                <div id="info">
                    <p>New Shirts Collection</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('New Shirts Collection',1200,'Images/t-shirt2.png')">Add to Cart</button>
            </div>



            <div id="card">
                <div id="cardimage"  onclick="product('New Shirts Collection','RS:1000','Images/t-shirt3.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/t-shirt3.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>New Shirts Collection</p>
                    <p>Rs:1000</p>
                </div>
                <button onclick="cart('New Shirts Collection',1000,'Images/t-shirt3.png')">Add to Cart</button>
            </div>



            <div id="card">
                <div id="cardimage"  onclick="product('New Shirts Collection','RS:1100','Images/t-shirt4.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/t-shirt4.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)"/>
                </div>
                <div id="info">
                    <p>New Shirts Collection</p>
                    <p>Rs:1100</p>
                </div>
                <button onclick="cart('New Shirts Collection',1100,'Images/t-shirt4.png')">Add to Cart</button>
            </div>


            <div id="card">
                <div id="cardimage"  onclick="product('New Shirts Collection','RS:1200','Images/t-shirt5.png','Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated. It may be used to display a sample of fonts, generate text for testing, or to spoof an e-mail spam filter.')">
                    <img src="Images/t-shirt5.png" alt="card" width="280px" height="300px" onmouseover="bigimg(this)" onmouseout="normalimg(this)" />
                </div>
                <div id="info">
                    <p>New Shirts Collection</p>
                    <p>Rs:1200</p>
                </div>
                <button onclick="cart('Check Shirts For Men',1200,'Images/t-shirt5.png')">Add to Cart</button>
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
</body>
<script src='main.js'></script>
</html>