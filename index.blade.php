<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ITR Filling</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <style>
            #body{
                background-color:white;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
  margin-right:28px;
            }
            .top{
                
                text-align:center;
            
                margin-left:110px;
                margin-right:80px;
                 margin-top:80px;
                width:1050px;
                 height:500px; 
                 background-color:white;
            }
            .middle{
                padding: 20px;
                width:1050px;
                height:270px;
                background-color:white;
                margin-left:20px;
                margin-right:20px;
            
            }
            .left{
                border-radius:5px;
                margin-left:40px;
                padding:10px;
                width:450px;
                height:210px;
                background-color:#D0FFDF;
                float:left;
                margin:10px;
                
            }
            .left1{
                width:110px;;
                height:180px;
                float:left;
                padding:20px;
                background-color:#D0FFDF;

            }
            .button1 {
                background-color: orange;
                border: none;
                color: white;
                padding: 12px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius:8px;
}

            .left2{
                text-align:left;
                float:right;
                width:300px;
                height:180px;
                background-color:#D0FFDF;
            
                
            
                

            }
            #p{
                font-size:13px;
                line-height:1.8;
            }
            .right{
                border-radius:5px;
                margin-left:40px;
                padding:10px;
                width:450px;
                height:210px;
                background-color:#EAF1FF;
                margin:10px;
                float:right;
            }
            .right1{
                width:110px;;
                height:180px;
                float:left;
                padding:20px;
                background-color:#EAF1FF;

            }
            .button2 {
                background-color: #3A5480;
                border: none;
                color: white;
                padding: 12px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius:8px;
           } 
             .right2{
                text-align:left;
                float:right;
                width:300px;
                height:180px;
                background-color:#EAF1FF;
            
                
            
                

            }
            #p{
                font-size:13px;
                line-height:1.8;
            }
            
            .header{
                height:40px;
                width:66px;
            }

 .navbar {
    overflow: visible;
  white-space: nowrap;


    background-color: white;
    font-family: Arial, Helvetica, sans-serif;
    margin:0px auto;

    

    
}
.slide{
    margin-left:500px;
    marin-top:80px;
    height:66px;
    backgroun-color:blue;
}

.navbar a {
    float: left;
    font-size: 15px;
    color: black;
    background-color:white;
    text-align: center;
   padding: 0px 16px;
    text-decoration: none;
}


.ab{
padding: 14px 16px;

}
.dropdown {
    float: left;
    display: block;
  position: relative;
  

    
}
.dropdown {
  
  position: relative;
  ul {
  list-style: none;
  padding-left: 10px;
  background-color: #8e8e8e;
  width: 100px;
  
  
  margin: 0;
    display: block;
}

  &:hover {
    ul {
      display: block;
    }
  }
}

.dropdown .dropbtn {
    font-size: 14px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: orange;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 150px;
    max-width: 650px;


    border:2.5;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    margin-top:20px;


    
    
}

.dropdown-content a {
    margin-top:0px;
    float: none;
    color: black;
    padding: 5px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    border-width:2.5px;
    border-radius: 2px;
    font-size:11px;


}

.dropdown-content a:hover {
    background-color: orange;
}

.dropdown:hover .dropdown-content {
   display:block;
}
  .btn{
    float:left;
    background-color:orange;
    text-align:center;
    border:none;
    display:inline-block;
    text-decoration:none;
    font-size: 16px;
    color: black;
    padding: 0px 16px;
    outline:none;
    borde-radius:0;

  }
.h{
    color:black;
    font-size:44Px;
    text-decoration-style: solid;
    text-decoration-thickness: 10px;
    font-weight:700;


}


.statement{
    width:1263.6px;
    height:70px;
    background-color:#0BD67E;
;
    
}

/* (A) OUTER CONTAINER */
.hwrap {
  /* (A1) DIMENSIONS */
  width: 100%;
  height: 70px; /* OPTIONAL */
font-size:20px;
color:white;
text-align:center;
  /* (A2) COSMETICS */
  background: #0BD67E;
;
  
  overflow: hidden; /* HIDE SCROLLBARS */
}

/* (B) MIDDLE CONTAINER - FLEX LAYOUT */
.hmove {
  display: flex;
  position: relative;
  top: 0; right: 0;
}

/* (C) SLIDES - FORCE INTO ONE LONG HORIZONTAL ROW */
.hslide {
  width: 100%;
  flex-shrink: 0;
  box-sizing: border-box;
  padding: 20px;
}

/* (D) SLIDE ANIMATION */
@keyframes slideh {
  /* (D0) THE IDEA - USE KEYFRAMES TO SHIFT SLIDES *
  0% { right: 0; }
  33% { right: 100%; }
  66% { right: 200%; }
  100% { right: 0; }
 
  /* (D1) BUT THE ABOVE WILL SHIFT NON-STOP */
  /* SO WE ADD PAUSES BETWEEN EACH SLIDE */
  0% { right: 0; }
  30% { right: 0; }
  33% { right: 100%; }
  63% { right: 100%; }
  66% { right: 200%; }
  97% { right: 200%; }
  100% { right: 0; }
}
.hmove { animation: slideh linear 5s infinite; }
.hmove:hover { animation-play-state: paused; }

.steps{
    overflow:hidden;
    padding:10px;
    margin-top:50px;

    text-align:"center";
background-color:#ffff11;


}
.steps p{
    text-align:center;
    margin:3px;
    border-radius:14px;
    font-size:15px;
    width:242.5px;
    height:250px;
    display: inline-block;
padding-left:20px;
padding-top:20px;

padding-right:20px;
    float:left;
    background-color:#fffff;
    box-shadow: 10px 10px 5px #aaaaaf;
border: 1px solid #BFBFbF;


}
.step1{
    float:left;
}
.step2{
    float:left;
}
.step3{
    float:left;
}
.step4{
    float:left;
}
.step5{
    float:right;
}

.button3 {
                background-color: #3A5480;
                border: none;
                color: white;
                padding: 12px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius:8px;
                margin-top:50px;
                width:240px;
}
.crypto{
    overflow:hidden;
    padding:10px;
    margin-top:50px;
    height:500px;
    width:1263.6px;
    text-align:"center";
    background-color:#fffff2;


}
.cr{
padding-top:30px;
padding-left:30px;
padding-right:30px;
    height:400px; 
    width:1200px; 
    margin-left:25px;
    margin-top:15px;
    border-radius:7px;

}

.button4 {
                background-color: #ffffff;
                border: none;
                color: Black;
                padding: 12px 32px;
                text-align: center;

                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                font-weight:700;

                border-radius:8px;
                margin-top:50px;
                margin-left:350px;
                margin-right:90.5px;
                width:250px;
                float:right;

}
footer{
    width:1263.5px;
    height:500px;
    background-color:#eeeadd;
    padding:20px 20px 20px 40px;


}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 5px;
}
.contact{

height:80px;
width:1263.6px;
background-color:#ffffff;
padding:20px 20px 20px 20px;
overflow:hidden;


}

 </style>
    </head>
 <body> 
 <div class="navbar" style="width: 1263.6px; height: 66px;">
        <div class="header">
              <img src="/image/newlogo.png" style="margin-left:50px;">
        </div>
  <div class="slide">
  
  <div class="dropdown">
    <a>Services</a>
    <div class ="dropdown-content">
    
      <a href="fileincometaxreturn">File Your Return</a>
      <a href="uploadform16">Upload Form 16</a>
      <a href="caassistedtaxfiling">CA Assisted Tax Filing</a>
      <a href="refundstatus">Refund Status</a>
      <a href="tdssolution">TDS Solution</a>

      <a href="pantaxandfileitr">Plan Tax & File ITR</a>
      <a href="nritaxesandtaxfiling">NRI Taxes & Tax Filing</a>  
    
</div>
  </div>
  <div class="dropdown">
    <a>Tools</a>
    <div class ="dropdown-content">
    <table>
  <tr>
  <td><a href="taxplanningoptimizer">TAX Planning Optimizer</a></td>
    <td><a href="incometaxcalculator">Income Tax Caculator</a></td>
    <td><a href="form12bb">Form 12BB</a></td>
    

  </tr>
  <tr>
    <td><a href="hracalculator">HRA Calculator</a></td>
    <td><a href="gratuitcalculatory">Gratuity Calculator</a></td>
    <td><a href="rentreceiptgenerator">Rent Receipt Generator</a></td>
  </tr>
  <tr>
    <td><a href="tdscalculator">TDS Calculator</a></td>
    <td><a href="itreligibilitychecker">ITR Eligibility Checker</a></td>
    <td><a href="transportallowancecalculator">Transport Allowance Calculator</a></td>
  </tr>
  <tr>
    <td><a href="calculatoronsection234f">Calculator on Section 234F</a></td>
    <td><a href="leavencashmentcalculatore">Leave Encashment Calculator</a></td>
    <td><a href="80ccalculator">80C Calculator</a></td>
  </tr>
  <tr>
    <td><a href="housepropertycalculator">House Property Calculator</a></td>
    <td><a href="cryptocurrencytaxcalculator">Crtptocurrency Tax Calculator</a></td>
    <td><a href="80dcalculator">80D Calculator</a></td>
  </tr>
  <tr>
    <td><a href="simpleinterestcalculator">Simple Interest Calculator</a></td>
    <td><a href="80ttacalculator">80TTA Calculator</a></td>
    <td><a href="80ddcalculator">80DD Calculator</a></td>
  </tr>
  <tr>
    <td><a href="80ucalculator">80U Calculator</a></td>
    <td><a href="compoundinterestcalculator">Compound Interest Calculator</a></td>
    <td><a href="oldvsnew">Old vs New Tax Slab Regime Calculator</a></td>
  </tr>
  <tr>
    <td><a href="sukanya">Sukanya Samriddhi Yojana Calculator</a></td>
    <td><a href=""></a></td>
    <td><a href=""></a></td>
  </tr>
  
  

</table> 
</div>
  </div>
  <div class="dropdown">
    <a>Knowledge Center</a>
    <div class ="dropdown-content">
    
      <a href="blog">Blog </a>
      <a href="faq">FAQ</a>
      <a href="taxglossary">TAX Glossary </a>
      
    
</div>
  </div>
  <div class="dropdown">
    <a>Guides</a>
    <div class ="dropdown-content">
    <table>
  <tr>
  <td><b><a href="incometaxguides">Income Tax Guides</a></b></td>
    <td><b><a href="gstguides">GST Guides</a></b></td>
  </tr>
  <tr>
    <td><a href="aadhar">Aadhar</a></td>
    <td><a href="gst">GST</a></td>
  </tr>
  <tr>
    <td><a href="capitalgainsincome">Capital Gains Income</a></td>
    <td><a href="gstsystem">GST System</a></td>
  </tr>
  <tr>
    <td><a href="efilingofitr">E-filing of ITR</a></td>
    <td><a href="gstregistration">GST Registration</a></td>
  </tr>
  <tr>
    <td><a href="houseproperty">House Property</a></td>
    <td><a href="inputtaxcredit">Input tax Credit</a></td>
  </tr>
  <tr>
    <td><a href="incometaxcalender">Income Tax Calender</a></td>
    <td><a href="gstprocedure">GST Procedure</a></td>
  </tr>
  <tr>
    <td><a href="incometaxnotices">Income Tax Notices</a></td>
    <td><a href="gstreturns">GST Returns</a></td>
  </tr>
  <tr>
    <td><a href="incometaxrefund">Income Tax Refund</a></td>
    <td><a href="gstewaybill">GST eWay Bill</a></td>
  </tr>
  <tr>
    <td><a href="incometaxslabs">Income Tax Slabs</a></td>
    <td><a href="gstrates">GST Rates</a></td>
  </tr>
  <tr>
    <td><a href="incometaxverification">Income Tax Verification</a></td>
    <td><a href=""></a></td>
  </tr>
  <tr>
    <td><a href="pancard">PAN Card</a></td>
    <td><a href=""></a></td>
  </tr>
  <tr>
    <td><a href="salaryincome">Salary Income</a></td>
    <td><a href=""></a></td>
  </tr>
  <tr>
    <td><a href="section80deductions">Section 80 Deductions</a></td>
    <td><a href=""></a></td>
  </tr>
  <tr>
    <td><a href="tds">TDS</a></td>
    <td><a href=""></a></td>
  </tr>

</table>
</div>
</div>
  <a href="pricing">Pricing</a>

  <a href="contact">Contact</a>

  <a href="login">Log In</a>
 <a href="register"> <button type="submit" class="btn">Sign Up</button></a></br>


  </div> 

</div>
    <div class="top">
         <h5>Welcome to Web eTax</h5>
         <h4>____</h4>
         <b><h1 class="h">Easiest Way of e-filing your</br> Income Tax Return in India</h1></b></br>
       <div class="middle">
        <div class="left">
            <div class="left1">
            <img src="/image/file.jpg">

            </div>
            <div class="left2">
           <b><h4>File it yourself</h4></b>
           <div id="p">Trust us, you can file your tax return on your own.     
           It's Easy, quick and free when you file with WebeTex on your own.</div></br>
           <a href="fileincometaxreturn"> <button  class="button1" type="submit">File ITR Now&#8594</button></a></br>
           </div>
          </div>
        <div class="right">
           <div class="right1">
            <img src="/image/ca.jpg">

            </div>
            <div class="right2">
           <b><h4>Get a personal eCA</h4></b>
           <div id="p">Get your personal eCA to do tax filling for you.     
           And it is personal, convenient and fast with maximum refund calculated for you.</div></br>
           <a href="caassistedtaxfiling"> <button  class="button2" type="submit">Book eCA Now&#8594</button></a></br>
           </div>
           </div>
        </div>


   </div>   

        <div class="statement">

        <div class="hwrap"><div class="hmove">
        <div class="hslide">
   <a style="text-decoration:none; color=[white]" href="link.html"> <p>Check Your Income Tax Return - Refund Status</p></a>
  </div>
  <div class="hslide">
    <p>We are Registered E-Return Intermediary by Income Tax Department</p>
  </div>
  <div class="hslide">
    <p>A Platform Trusted by 10M+ Customers </p>
  </div>
  
</div></div>

        </div>
      
      
    <div class="steps" style="width:1263.6px; height:550px; background-color:#ffffff; text-align:center;">
    <b><h3>5 Easy Steps to e-file your Income Tax Return</h3></b>
    <h4>______</h4></br></br></br></br>


<p>
<b>1</b>
<br><br><img src="/image/step1.jpg"></br></br>
<b>Easy Sign in/up</b>
<br>Login or create a new account</br>

</p>
<p>
    <b>2</b>
<br><br><img src="/image/step2.jpg"></br></br>
<b>Quick pick
</b>
<br>Select your sources of income</br>

</p>
<p>
<b>3</b>
<br><br><img src="/image/step3.jpg"></br></br>
<b>Pre-filled data
</b>
<br>Details auto extracted from IT dept for ITR filing</br>
</p>
<p>
<b>4</b>
<br><br><img src="/image/step4.jpg"></br></br>
<b>Compare Computations
</b>
<br>Choose between old & new regimes

</br>

</p>
<p>
    <b>5</b>
<br><br><img src="/image/step5.jpg"></br></br>
<b>File ITR</b>
<br>E-File Income tax & get confirmation from IT dept

</br>
</p>


<a href="fileincometaxreturn"> <button type="submit" class="button3">Free File Now&#8594</button></a></br>

      </div>

<div class="crypto">
      <div class="cr" style="background-image: url('/image/cry.png'); color:white;">
      
      <img src="/image/bitcoin.png" style="height:50px; width:50px; float:left;margin: 10px 12px 3px 4px; "><h1><p>Cryptocurrency Calculator</h1></p>
      <p style="float:right; font-size:16px;">Calculate your taxes on all Cryptocurrencies & Digital Virtual Assets</p>
      <a href="cryptocurrencycalculator"> <button type="submit" class="button4">Calculate Crypto Tax</button></a></br></br></br>
      <p style="float:right; color:#bfffaa; margin-top:60px;margin-left:300px;">Cryptocurrency Taxation Guide</br>
      Know everything about cryptocurrency and </br>its taxation in India after the latest Budget 2022 update.</br>
        <a href="readmore" style="color:red;">Read more</a></br>
    </p>



    </div>

    
</div>

<div class="contact">
    <img src="/image/contact.jpg" style="height:50px;float:left; width:120px; overflow:hidden;"><h3 style="float:left;margin-top:10px;">+91 9610-44-44-14 </h3>      
    <img src="/image/images.png" style="height:50px;float:left; width:190px; overflow:hidden; margin-left:200px;margin-bottom:10px;">   
    <h5 style="float:right; margin-top:30px;"><a href="termsandconditions">Terms & Conditions</a> | <a href="privecypolicy">Privacy Policy</a></h5>

</div>

 </body>

</html>


