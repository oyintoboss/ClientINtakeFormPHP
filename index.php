<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Layout</title>

     <!-------- CSS STYLE LINK -------->
     <link rel="stylesheet" href="style.css">
     <!--x----- CSS STYLE LINK -----x-->
 
     <!-------- FONT-AWESOME LINK -------->
     <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.min.css">
     <!--x----- FONT-AWESOME LINK -----x-->

   
    
</head>
<body>
  <!-- <button onclick="readAllClient()">Read All Client</button> -->
  <p id="notifications"></p>
  <!-------- CONTAINER SECTION -------->
    <div class="container">
 <!-------- WRAPPER SECTION -------->
        <div class="wrapper">
          <!-------- CONTACT COLUMN -------->
          <div class="contacts">
            <img src="./assets/images/EZLogo.png" alt="EZEKTEC LOGO" title="EZEKTEC LOGO">
            <h3><?php perch_content('clienttitle'); ?> </h3>             
            <ul>
              <li>
              <!-- <b>*Note:</b>   -->
              <?php perch_content('Intro'); ?> 
              <!-- We'll not re-sell or use your contact information for anything else other than working on your project.</li>             
            -->
            </ul>
          </div>
          <!-------- CONTACT COLUMN -------->
      <!-------- FORM COLUMN  -------->
          
          <div class="form">            
            <div class="form__item">               
              <p class="input-width">
                <label for="full__name"> 
                FULL NAME 
                    <span class="asterik">*</span>
                    <span>
                        <i class="fas fa-question-circle" title="please enter the country for the full names of the party responsible for representing the company on this project."></i>
                    </span>
                    </label>
                    <input type="text" id="fullName" required placeholder="Full Name" title="please enter the country for the full names of the party responsible for representing the company on this project.">
                    <br>
                    <span id="error" ></span>
                  </p>
                 
              <p class="input-width">
                <label for="companyname"> COMPANY NAME <span>
                    <i class="fas fa-question-circle" title="please enter the name of your company or entity that will be responsible for paying for your project work."></i>
                    </span>
                    </label>
                    <input type="text" id="companyName" placeholder="Company Name" title="please enter the name of your company or entity that will be responsible for paying for your project work.">
                    
            </p>
            <p class="input-width">
                <label for="website"> WEBSITE 
                    <span>
                        <i class="fas fa-question-circle" title="please enter your website url here. If you don't have a website, please leave this field empty."></i>
                    </span>
                    </label>
                    <input type="text" id="website" placeholder="Website" title="please enter your website url here. If you don't have a website, please leave this field empty.">
                    <span id="website_error" ></span>
              </p>  
              <p class="input-width">
                <label for="address"> ADDRESS 
                    <span>
                        <i class="fas fa-question-circle" title="please enter your contact address or that of the responsible party responsible for your project."></i>
                    </span>
                    </label>
                    <input type="text" id="address" placeholder="Address" title="please enter your contact address or that of the responsible party responsible for your project.">
                   
              </p>
              <p class="input-width">
                <label for="country"> COUNTRY 
                <span>
                    <i class="fas fa-question-circle" title="please enter the country for the state and postal code supplied above."></i>
                </span>
                </label>
                <input type="text" id="country" placeholder="Country" title="please enter the country for the state and postal code supplied above.">
                </p>
             
              <p class="input-width">
                <label for="state"> STATE 
                    <span>
                        <i class="fas fa-question-circle" title="please enter the state where the company or responsible party for this project resides in."></i>
                    </span>
                    </label>
                    <input type="text" id="state" placeholder="State" title="please enter the state where the company or responsible party for this project resides in.">
                   
             </p>
             <p class="input-width">
                <label for="city"> CITY 
                    <span>
                        <i class="fas fa-question-circle" title="please enter the name of the city where the company or the responsible party for this project resides."></i>
                    </span>
                    </label>
                    <input type="text" id="city" placeholder="City" title="please enter the name of the city where the company or the responsible party for this project resides.">
                   
              </p>                           
             <p class="input-width">
                <label for="postalcode"> POSTAL CODE 
                    <span>
                        <i class="fas fa-question-circle" title="please enter the postal code for the address supplied."></i>
                    </span>
                    </label>
                    <input type="number" id="postalCode" placeholder="Postal Code" title="please enter the postal code for the address supplied.">                   
              <span id="postalCode_error"></span>
             </p>                              
             <p class="full-width">
                <button id="btnsubmit" onclick="addClient()">SUBMIT</button>
              </p>
            </div>
          </div>
      <!--x----- FORM COLUMN -----x-->
        </div>
        <span id="response"></span>
      <!--x----- WRAPPER SECTION -----x-->
      </div>
  <!--x----- CONTAINER SECTION -----x-->
   <!-------- SQLITE CONNECTION USING INDEXED DB -------->
 <script>

//-------- CHECK THE FULL NAME WHEN SUBMIT BUTTON IS CLICKED --------
  function fullnameError(){
    var error = document.getElementById('error');
    
    var fullnameError = document.getElementById('fullName').value;
    if(fullnameError === ""){
      alert('First Name and Last Name are required');
     
      error.textContent = "Full Name must not be empty";
      error.style.color = "red";
      return;
    }
    else{
      error.textContent = "";
    }
  }
//--x----- CHECK THE FULL NAME WHEN SUBMIT BUTTON IS CLICKED -----x--

//-------- WHEN THE SUBMIT BUTTON IS CLICKED -------- 
  function addClient(){

    //-------- CALLING THE FUNCTION FULLNAME ERROR FUNCTION -------- 
    fullnameError();
    //--x----- CALLING THE FUNCTION FULLNAME ERROR FUNCTION -----x-- 

    //-------- GETTING THE FULL NAME VALUE --------
    var fullname = document.getElementById('fullName').value;
    //--x----- GETTING THE FULL NAME VALUE -----x--

    //-------- GETTING THE COMPANY NAME VALUE --------
    var companyname = document.getElementById('companyName').value;
    //--x----- GETTING THE COMPANY NAME VALUE -----x--

    //-------- GETTING THE WEBSITE VALUE --------
    var website = document.getElementById('website').value;
    //--x----- GETTING THE WEBSITE VALUE -----x--

    //-------- GETTING THE ADDRESS VALUE --------
    var address = document.getElementById('address').value;
    //--x----- GETTING THE ADDRESS VALUE -----x--

    //-------- GETTING THE FULLNAME VALUE --------
    var country = document.getElementById('country').value;
    //--x----- GETTING THE FULLNAME VALUE -----x--

    //-------- GETTING THE STATE VALUE --------
    var state = document.getElementById('state').value;
    //--x----- GETTING THE STATE VALUE -----x--

    //-------- GETTING THE CITY VALUE --------
    var city = document.getElementById('city').value;
    //--x----- GETTING THE CITY VALUE -----x--

    //-------- GETTING THE POSTAL CODE VALUE --------
    var postalcode = document.getElementById('postalCode').value;
    //--x----- GETTING THE POSTAL CODE VALUE -----x--

//-------- CHECK THE FULL NAME WHEN SUBMIT BUTTON IS CLICKED --------
  if(fullname.length <= 1){
    alert("Full name must have more than one input");
    return;
  }
//--x----- CHECK THE FULL NAME WHEN SUBMIT BUTTON IS CLICKED -----x--


//-------- CHECK THE WEBSITE URL WHEN SUBMIT BUTTON IS CLICKED --------

if(website.toString().includes('http://',0) || website.toString().includes('https://',0) || website.toString().includes('http://www.',0) || website.toString().includes('https://www.',0) || website.toString().includes('www.',0) === false){
  var websiteError = document.getElementById('website_error');
  websiteError.textContent = "Enter a valid website url";
  websiteError.style.color = "red"; 
  //alert("Enter a valid website url");
  return;
}
//--x----- CHECK THE WEBSITE URL WHEN SUBMIT BUTTON IS CLICKED -----x--

//-------- CHECK THE POSTAL CODE WHEN SUBMIT BUTTON IS CLICKED --------

if(postalcode.length > 6){
  var postalCodeError = document.getElementById('postalCode_error');
  postalCodeError.textContent = "Postal Code requires 6 digits only";
  postalCodeError.style.color = "red";
    //alert("Postal Code requires 6 digits only");
    return;
  }
  //--x----- CHECK THE POSTAL CODE WHEN SUBMIT BUTTON IS CLICKED -----x--

//-------- CHANGE THE SUBMIT BUTTON TEXT WHEN CLICKED --------
  document.getElementById('btnsubmit').innerHTML = "Processing...";
//--x----- CHANGE THE SUBMIT BUTTON TEXT WHEN CLICKED -----x--

//-------- DISABLE THE SUBMIT BUTTON TEXT WHEN CLICKED --------
const button = document.querySelector('button');
button.disabled = true
//--x----- DISABLE THE SUBMIT BUTTON TEXT WHEN CLICKED -----x--

//-------- AJAX SECTION --------
   var httpr = new XMLHttpRequest();
//-------- DECLARING POST METHOD TO A PHP FILE --------
   httpr.open("POST","get_data.php", true);
//--x----- DECLARING POST METHOD TO A PHP FILE -----x--

  httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//-------- CHECKING RESPONSE -------- 
  httpr.onreadystatechange = function(){

    if(httpr.readyState == 4 && httpr.status == 200){
      document.getElementById("response").innerHTML = httpr.responseText;
    }
//-------- CHECKING RESPONSE -------- 
  }
//--x----- AJAX SECTION -----x--

//-------- SENDING DATA ENTERED USING AJAX --------
  httpr.send("fullname="+fullname+ "&companyname="+companyname+ "&website="+ website+"&address="+ address + "&city=" +city+ "&country=" +country+ "&state=" +state+ "&postalcode=" + postalcode);
   
}
//--x----- SENDING DATA ENTERED USING AJAX -----x--

//-------- WHEN THE SUBMIT BUTTON IS CLICKED -------- 

    </script>
  <!--x----- SQLITE CONNECTION USING INDEXED DB -----x-->
</body>
</html>