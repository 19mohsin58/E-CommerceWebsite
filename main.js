let current = 0; // pahly ham isko 0 index pe rakh rahy hain

function increamentSlide(numb){ // ye increament + decreament wala function hai numb me parameter se number ayega 
    current = current+numb; 
    slideshow(current)
}

slideshow(current);

function inc(){
    current=current+1;
    slideshow(current)
}
setInterval(inc,2000)//for automatic

function slideshow(num){
    let slides = document.getElementsByClassName('slides')
     // sabse pahly ye funct itna banega k slides ko call karna hai array k andar or ye automatic array me araha hai because of same class name
    if(num === slides.length){
        current = 0;
        num=0;
    } 
// ye dono if statement last me lagengi ye to slider controll k liye hai
    if (num < 0){
        current = slides.length-1;
        num = slides.length-1;
    }

    for (let i of slides){ // ye for loop isliye k pahly sabko display none karwaya warna 1 doosre k neechy ayenge sliders
        i.style.display = 'none'
    }

    slides[num].style.display = "block"; // ab is num waly slides ko display karwaya hai 
}





// let productsObj = [
//     {
//         name:'grayTshirt',
//         tag:'grey',
//         price:15,
//         inCart:0,
//     },
//     {
//         name:'blackTshirt',
//         tag:'black',
//         price:20,
//         inCart:0,
//     },
    
//     {
//         name:'grayhoodeyshirt',
//         tag:'hoode',
//         price:15,
//         inCart:0,
//     },
    
//     {
//         name:'grayshoes',
//         tag:'hoodei',
//         price:15,
//         inCart:0,
//     },
    

// ]






// function onLoadCart(){
//     let productNumbers = localStorage.getItem('cartNumbers');
   
//     if(productNumbers){
//        document.querySelector('#Navlink span').textContent=productNumbers;
//     }
// }



// let carts = document.querySelectorAll('#card');

// for(let i =0; i<carts.length;i++){
//     carts[i].addEventListener('click',()=>{
//         cartNumbers(productsObj[i]);
//     })
// }

// function cartNumbers(procuctsObjReciving){
//     console.log('product jispe apne click kiya hai wo hai', procuctsObjReciving)
//  let productNumbers = localStorage.getItem('cartNumbers');
//  productNumbers= parseInt(productNumbers);

//  if(productNumbers){
//     localStorage.setItem('cartNumbers',productNumbers+ 1);
//     document.querySelector('#Navlink span').textContent=productNumbers+1;
//  }
 
//  else{
//     localStorage.setItem('cartNumbers', 1);
//     document.querySelector('#Navlink span').textContent=1;
//  }
 
// }


// onLoadCart();



var totalPrice = []







var index = 0;
var div = document.getElementById('cartMeadd')
function cart(title,price,image){
    index +=1;
    document.getElementById('cart').innerHTML=index;
    document.getElementById('items').innerHTML=index;
   var p = document.createElement("p")
   var newDiv = document.createElement('div')
   var h1 = document.createElement('h1')
   var img = document.createElement('img')
   img.setAttribute('src',image)
   img.setAttribute('width','100px')
   img.setAttribute('height','100px')
   var dltbtn = document.createElement('button')
   var dltText = document.createTextNode('Remove Item')
   dltbtn.appendChild(dltText)
   dltbtn.addEventListener('click',()=>{
       newDiv.remove();
       index=index-=1;
       document.getElementById('cart').innerHTML=index;
       document.getElementById('items').innerHTML=index;
   })
   newDiv.setAttribute('id','newDiv')
   var liText = document.createTextNode(title)
   var h1Text=document.createTextNode('RS : '+price)
   totalPrice.push(price)
   h1.appendChild(h1Text)
   p.appendChild(liText)
   newDiv.appendChild(img)
   newDiv.appendChild(p)
   newDiv.appendChild(h1)
   newDiv.appendChild(dltbtn)
  div.appendChild(newDiv)
   
}


function show(){
    var cartsDiv=  document.getElementById('cartsMain')
    if(cartsDiv.style.display == 'block'){
        cartsDiv.style.display='none'
    }
    else{
        cartsDiv.style.display = 'block'
    }
    var price = 0;
    for (var i = 0; i < totalPrice.length; i++) {
    price += totalPrice[i] }
    document.getElementById("totalRupees").innerHTML = price;
    subTotal = price+1000;
    document.getElementById('subTotalRupees').innerHTML= subTotal;
}

function closeCon(){
    document.getElementById('congrats').style.display='none'
}

function showHideSell(){
    var sellInfo = document.getElementById('sellInfo')
    if(sellInfo.style.display='none'){
        sellInfo.style.display='block';
    }
    else{
        sellInfo.style.display='none'
    }
}

function HideSell(){
    var sellInfo = document.getElementById('sellInfo')
    if(sellInfo.style.display='block'){
        sellInfo.style.display='none';
    }
    else{
        sellInfo.style.display='block'
    }
}



//Ye Function Product bana Raha Hai Dynamically
function addProduct(){
    var inputAddTitle = document.getElementById('inputAddTitle').value;
    var inputAddPrice = document.getElementById('inputAddPrice').value;
    inputAddPrice=parseInt(inputAddPrice)
    var inputAddImg = document.getElementById('inputAddImg').value;
    var inputAddDetails = document.getElementById('inputAddDetails').value
    var inputAddName = document.getElementById('inputAddName').value
    var sellerProduct = document.getElementById('sellerProduct');
    var div = document.createElement('div');
    div.setAttribute('id','card')
    var div1 = document.createElement('div');
    div1.setAttribute('id','cardimage')
    div1.onclick = function(){
        product(inputAddTitle,inputAddPrice,inputAddImg,inputAddDetails);
    }
    var img = document.createElement('img')
    img.setAttribute('src',inputAddImg);
    img.setAttribute('height','300px');
    img.setAttribute('width','280px');
    var div2 = document.createElement('div')
    div2.setAttribute('id','info')
    var title = document.createElement('p')
    var titleText = document.createTextNode(inputAddTitle)
    title.appendChild(titleText)
    var price = document.createElement('p')
    var priceText = document.createTextNode(inputAddPrice)
    var name = document.createElement('p')
    var nameText = document.createTextNode('Seller: '+inputAddName)
    name.appendChild(nameText)
    div2.appendChild(name)
    div2.appendChild(title);
    div2.appendChild(price)
    price.appendChild(priceText)
    div1.appendChild(img)
    div.appendChild(div1)
    div.appendChild(div2)
    var btn = document.createElement('button')
    var btnText = document.createTextNode('Add To Cart')
    btn.setAttribute('id','btnSeller')
    btn.onclick = function(){
        cart(inputAddTitle,inputAddPrice,inputAddImg);
    }
    btn.appendChild(btnText)
    div.appendChild(btn)
    sellerProduct.appendChild(div)
    HideSell()
}
// function for products

function product(title,price,img,details){
    var div = document.getElementById('pro');
    div.style.display='block';
    var proCart = document.getElementById('proCart')
     document.getElementById('img').src= img;
     document.getElementById('title').innerHTML=title;
     document.getElementById('price').innerHTML=price;
     document.getElementById('details').innerHTML=details;
//    var btn = document.getElementById('proCartButton')
//    btn.addEventListener('click',cart(title,price,img))
}

function sending(message){
    document.getElementById('cartpage').innerHTML=message
}

function closePro(){
    var div = document.getElementById('pro');
    div.style.display='none';
}


function bigimg(x){
    x.style.transform='scale(1.5)'
}

function normalimg(x){
    x.style.transform='none'
}



let order=0;
function plus(){
document.getElementById('order').innerHTML=++order; 
}

function minus(){
    document.getElementById('order').innerHTML=--order; 
}

function formValidation(){
    var input = document.getElementById('inputs');
    var pSucces= document.getElementById("pSucces")
        pSucces.innerHTML='Thankyou your order will be at you in 2days';
 
}


window.onscroll = function() {mohsin()};

// Navbar hasil kar rahy hain
var navbar = document.getElementById("navbar");

// position navbar ki
var sticky = navbar.offsetTop;

// sticky class ad kar rahy hain jab ap us position pe puhnch jayen to hojaye then remove
function mohsin() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    navbar.style.boxShadow='0px 0px 3px rgb(26, 25, 25,2)'

  } else {
    navbar.classList.remove("sticky");
    navbar.style.boxShadow='none'
  }
}