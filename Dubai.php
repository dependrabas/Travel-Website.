
<?php
$startYear = 2020;
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <title>Travelwithdependra</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        .slide{
            display: none;
        }
    
    </style>
<div class="header-div">
    <header class="header">
        <a href="index.php">Dependra Tour and Travel</a>
        <a href="index.php"><img src="img/logo.jpg" ></a><hr style="width:80%">
     </header>
      <center><nav class="menu">
          
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT US</a>
        <a href="destinations.php">DESTINATIONS</a>
        <a href="traveltips.php">PARTNERS</a>
        <a href="contact.php">CONTACT</a>
      </nav></center>
    
    </div>
    
    
    <body>
    <div class="travel1-container">
    <div class="booking">
    <h2>Best of Dubai Adventure </h2>
   
   <div class="images">
   <img src="img/Dubai1.jpg" alt="" class="slide">
   <img src="img/Dubai2.jpg" alt="" class="slide">
   <img src="img/Dubai3.jpg" alt="" class="slide">
   <img src="img/Dubai4.jpg" alt="" class="slide">
   <img src="img/Dubai5.jpg" alt="" class="slide">
    </div>
    
    <script>
        var image = 0;
       
        
        
        function change(){
            var i;
             var holder = document.getElementsByClassName("slide");
            for(i = 0; i < holder.length; i++)
            {
                holder[i].style.display = "none";
            }
        image++;
        if(image > holder.length)
            {
                image = 1;
            }
        holder[image-1].style.display = "block";
            
        setTimeout(change,3000);
        }
        
      window.onload=change;
        </script> 

        </div>
        <p><b>Day 1:</b>&nbsp;&nbsp;Breakfast at Hotel in Dubai&nbsp;&nbsp;|Burj Khalifa AT THE TOP (124th Floor) Non-Prime Time on sharing transfer (Book 96 Hours Prior)
&nbsp;&nbsp;|Dubai Aquarium and Underwater Zoo at Dubai Mall - Normal Pass [ Tickets only ]
</p><hr>
        <p><b>Day 2:</b>&nbsp;&nbsp;Breakfast at Hotel in Dubai
&nbsp;&nbsp;|Dubai Half Day Morning City Tour on shared transfer (with Dubai Museum) ( Expect Friday)
&nbsp;&nbsp;|Dhow Creek Cruise with dinner on shared transfer. [4* Category]
</p><hr>
        <p><b>Day 3:</b>&nbsp;&nbsp;Breakfast at Hotel in Dubai
&nbsp;&nbsp;|Burj Khalifa AT THE TOP (124th Floor) Non-Prime Time on sharing transfer (Book 96 Hours Prior)
&nbsp;&nbsp;|Dubai Aquarium and Underwater Zoo at Dubai Mall - Normal Pass [ Tickets only ]
</p><hr>
        <p><b>Day 4:</b>&nbsp;&nbsp;Breakfast at Hotel in Dubai
&nbsp;&nbsp;|Abu Dhabi City Tour and Ferrari World General Admission with shared transfer - (Valid for travel date from 01 Jan 20)
</p><hr>
        <p><b>Day 5:</b>&nbsp;&nbsp;Breakfast at Hotel in Dubai
&nbsp;&nbsp;|Desert Safari by 4*4 Vehicle with BBQ Dinner and shared transfer. [4* Category]
&nbsp;&nbsp;|VR Park at Dubai Mall with return transfer on SIC basis
</p><hr>
        <p><b>Day 6:</b>&nbsp;&nbsp;Breakfast at Hotel in Dubai
&nbsp;&nbsp;|Checkout from Hotel in Dubai
&nbsp;&nbsp;|Transfer to airport via shared vehicle.&nbsp;&nbsp;|Departure from Dubai via flight

</p><hr>
        
        
        <div class="form">
  
        <form  action="Payment.php" name="Italy" onsubmit="validate();" method="post">
        
        <label for="Name">Name</label><br>
        <input id=name type="text" name=name ><br>
           <label for="Email">Email</label><br>
        <input id=email type="email" name=email><br>
        <label for="Mobile No" >Mobile No</label><br>
        <input id=mobile type=tel name=mobile  pattern="[+]{1}[0-9]{2}[0-9]{10}" ><br>
            <label for="No.of Adults" >No.of Adults</label>
            <input  type="text" id=adults name="adults" min=1    oninput="totalPrice()">
              <label for="No.of Children" >No.of Children(*below 10 yrs)</label>
            <input  type="text" id=child name="child"   min=0 oninput="totalPrice()">   
            <label for="Date of Journey" >Date of Journey</label>   
            <input type="date" id="date" name="date">
            <label for="Total Price" >Total Price</label>
            <input   id=price name=price type="text" readonly>&#8377;<br><br>
      <!-- <input id="check" type="checkbox" style="height:10px width:10px" name="check" >I accept to the terms and conditions<br><br> -->
      <input type="checkbox" id="check" name="check" style="height:10px; width:10px;">  
<label for="check">I accept the terms and conditions</label><br><br>

        <button type="submit">Confirm</button> 
            
            
            
        </form>   </div><br>
        <hr>
    

        </div>
        <script>
        function totalPrice()
            {
            
            var val1 = document.getElementById('adults').value;
            var val2 = document.getElementById('child').value;
            var total = val1 * 53986 + val2 * (53986/2);
            var h = document.getElementById('price');
            h.value = total;
            }
        
        function validate()
            {
                
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var adults = document.getElementById('adults').value;
            var child = document.getElementById('child').value;
            var check = document.getElementById('check');  
            if(name == "")
                {
                    alert('Please fill in your name!');
                    return false;
                }else
            if(email == "")
                {
                    alert('Please enter a valid mail id!');
                    return false;
                }else
            if(mobile == "" || mobile.length < 10 )
                {
                    alert('Please enter a valid number!');
                    return false;
                }else
            if(adults == "" )
                {
                    
                    alert('This field cannot be empty!');
                    return false;
                }else
            if(adults > 10)
                {
                    alert('The number exceeds the maximum allowed!')
                    return false;
                }else
            if( !check.checked )
                {
                    alert('Please agree to our terms and conditons');
                    return false;
                }
                else
                {
                alert('Thank you !Please complete the payment to confirm your booking' );
                window.location.reload();
                
                }
                
            }
        
        </script>


<footer class="footer">
    Copyright &copy; <?php echo $startYear; ?> - <?php echo $currentYear; ?> Dependra Tour and Travel
</footer>


      
      
</body>
</html>











