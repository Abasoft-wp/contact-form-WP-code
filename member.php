 <?php
 /**
     * Template Name: member
     *
     *
     */

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
        <style>
        .mySlides {display:none;}
        </style>
    </head>
    <body>
    <!--<nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar">
        <div class="w3-container w3-theme-d2">
          <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
          <br>
          <div class="w3-padding w3-center">
            <img class="w3-circle" src="https://nnngo.org/wp-content/uploads/2019/11/Draftlogo2.png" alt="avatar" style="width:75%">
          </div>
        </div>
        <div class="w3-dropdown-hover">
            <a class="w3-bar-item w3-button" href="#">Introduction</a>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                  <a href="#" class="w3-bar-item w3-button">Why this Mnaual</a>
                  <a href="#" class="w3-bar-item w3-button">Who is the Manual for</a>
                  <a href="#" class="w3-bar-item w3-button">How to use this Manual</a>
                  <a href="#" class="w3-bar-item w3-button">What is a Nonprofit</a>
                </div>
       </div>
        <a class="w3-bar-item w3-button" href="#">Your Nonprofit</a>
        <a class="w3-bar-item w3-button" href="#">Planning</a>
        <a class="w3-bar-item w3-button" href="#">Management, Policy & Systems</a>
        <a class="w3-bar-item w3-button" href="#">Project Management</a>
        <a class="w3-bar-item w3-button" href="#">Fundraising</a>
        <a class="w3-bar-item w3-button" href="#">Reporting Your Work</a>
    </nav> -->
    <header class="w3-bar w3-card w3-white" style="border-bottom-color:#352C6D;">
          <!--<button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>-->
          <h3 class="w3-bar-item" style="padding-left:70px; color:#352C6D;"><a href="https://nnngo.org/"><img style="width:150px; height:53px; " 
          src="http://nnngo.org/wp-content/uploads/2021/05/Draftlogo2.png"></a><br/>
          The NNNGO Membership Page</h3>
          
            	<h3 style="float:right; padding-top:35px; padding-right:40px;">	<button style="background-color:white; color:#d02d35; border-radius:15px; border-color:#d02d35; border: none;">
			<a style="color:#d02d35; text-weight:bolder; text-decoration:none;" href="https://nnngo.org/wp-login.php?action=logout&amp;_wpnonce=67a466cf90"><i class="fa fa-arrow-circle-right"></i> Logout</a>  
		    </button></h3>
		
           <div class="w3-bar w3-black" style="background:342C6E; padding-left:60px;">
          <a href="https://nnngo.org/membership-only/" class="w3-bar-item w3-button w3-mobile">Home</a>
          <a href="#" class="w3-bar-item w3-button w3-mobile">Projects Report</a>
           <div class="w3-dropdown-hover">
              <a href="#" class="w3-bar-item w3-button w3-mobile">Call For Articles</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                 <!-- <a href="#" class="w3-bar-item w3-button w3-mobile"><b>Introduction</b></a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-why-this-manual/" class="w3-bar-item w3-button w3-mobile">Why this Manual ?</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-who-is-this-manual-for/" class="w3-bar-item w3-button w3-mobile">Who is this Manual for ?</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-how-to-use-this-manual/" class="w3-bar-item w3-button w3-mobile">How to use this Manual</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-what-is-a-nonprofit/" class="w3-bar-item w3-button w3-mobile">What is a Nonprofit</a> -->
              </div>
              </div>
              <div class="w3-dropdown-hover">
              <a href="#" class="w3-bar-item w3-button w3-mobile">NNNGO Events</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                 <!-- <a href="#" class="w3-bar-item w3-button"><b>Your Nonprofit</b></a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-nonprofit-overview/" class="w3-bar-item w3-button">Overview</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-getting-started/" class="w3-bar-item w3-button">Getting Started</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-regulatory-requirements-for-forming-and-operating-a-nonprofit/" class="w3-bar-item w3-button">Regulatory Requirement for Forming and Operating a Nonprofit</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-regulatory-requirements-for-nonprofit-tax/" class="w3-bar-item w3-button">Regulatory Requirement for Nonprofit Tax</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-regulatory-requirement-for-aml-and-countering-the-finance-of-terrorism/" class="w3-bar-item w3-button">Regulatory Requirement for Anti-Money Laundering and Countering the Financing of Terrorism</a>-->
              </div>
              </div>
              <div class="w3-dropdown-hover">
              <a href="#" class="w3-bar-item w3-button w3-mobile">Policy Briefs</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                  <!--<a href="#" class="w3-bar-item w3-button"><b>Planning</b></a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-planning-overview/" class="w3-bar-item w3-button">Overview</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-strategic-planning/" class="w3-bar-item w3-button">Strategic Planning</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-work-planning/" class="w3-bar-item w3-button">Work Planning</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-budgeting/" class="w3-bar-item w3-button">Budgeting</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-monitoring-and-evaluation-me/" class="w3-bar-item w3-button">Monitoring and Evaluation (M & E)</a> -->
              </div>
              </div>
                 <div class="w3-dropdown-hover"> 
              <a href="#" class="w3-bar-item w3-button w3-mobile">Members News</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                  <!--<a href="#" class="w3-bar-item w3-button"><b>Management, Policy & Systems</b></a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-psm-overview/" class="w3-bar-item w3-button">Overview</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-financial-management/" class="w3-bar-item w3-button">Finanacial Management</a>
                  <a href="https://nnngo.org/nonprofit-operational-manual-managing-staff-and-volunteers/" class="w3-bar-item w3-button">Management Staff and Volunteers</a> -->
              </div>
              </div>
              <div class="w3-dropdown-hover">
              <a href="#" class="w3-bar-item w3-button w3-mobile">Toolkits & Guides</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                 <!--<a href="#" class="w3-bar-item w3-button"><b>Project Management</b></a>
                  <a href="#" class="w3-bar-item w3-button">Overview</a>
                  <a href="#" class="w3-bar-item w3-button">Strategic Plan and Organisational Projects</a>
                  <a href="#" class="w3-bar-item w3-button">Needs Assessment</a>
                  <a href="#" class="w3-bar-item w3-button">Concept Paper</a>
                  <a href="#" class="w3-bar-item w3-button">Full Project Proposal</a>
                  <a href="#" class="w3-bar-item w3-button">Project management</a>-->
              </div>
              </div>
             <!-- <div class="w3-dropdown-hover">
              <a href="#" class="w3-bar-item w3-button w3-mobile">Chapter 6</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                  <a href="#" class="w3-bar-item w3-button"><b>Fundraising</b></a>
                  <a href="#" class="w3-bar-item w3-button">Overview</a>
                  <a href="#" class="w3-bar-item w3-button">Developing a Fundraising Plan</a>
              </div>
              </div>
              <div class="w3-dropdown-hover">
              <a href="#" class="w3-bar-item w3-button w3-mobile">Chapter 7</a>
              <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top:40px;">
                  <a href="#" class="w3-bar-item w3-button"><b>Report Your Work</b></a>
                  <a href="#" class="w3-bar-item w3-button">Overview</a>
                  <a href="#" class="w3-bar-item w3-button">Annual Reporting</a>
                  <a href="#" class="w3-bar-item w3-button">Finanacial Reporting</a>
              </div>
              </div> -->
              
    </div>
    
    
    
    </header>
    
    <div class="w3-content w3-section" style="max-width:1400px; margin-top:-90px; dpadding-left:60px; dpadding-bottom:235px; dpadding-right:60px;">
      <img class="mySlides" src="http://nnngo.org/wp-content/uploads/2020/07/workers-day-22-scaled.jpg" style="width:1400px; height:500px; margin-top:-16px; margin-bottom:-16px;">
     <img class="mySlides" src=" http://nnngo.org/wp-content/uploads/2020/06/DSC0586-scaled.jpg" style="width:1400px; height:500px; margin-top:-16px; margin-bottom:-16px;">
     
     
      <img class="mySlides" src="http://nnngo.org/wp-content/uploads/2020/05/KAZY3193-scaled.jpg" style="width:1400px; height:500px; margin-top:-16px; margin-bottom:-16px;">
    </div>
        
        <!--<h2 style="color:#352C6D;">Welcome to The NNNGO Membership Login Page</h2>
        <p style=" text-align:justify; ">This online discussion forum is only for current individual and organisational members of Nigeria Network of NGOs,<br> as
        well as NNNGOs staff. If you would like to check whether you are a current member of the NNNGOs, please visit<br> our website: <a style="color:red;" 
        href="https://nnngo.org/"> https://nnngo.org/</a></p>
        <p style=" text-align:justify; ">A user account affiliated to a current member is required to be able to login, read and post to the NNNGOs Community.<br>
        To create an account or login please continue by clicking one of the blue buttons below. If you have forgotten your <br> password or username, please
        click on login followed by forgot my password.  If you require any help login, or, have any <br> problems with the login process please get in touch with
        the NNNGOs team via nnngo@nnngo.org</p>
        
        <a style="color: white; background:#352C6D; padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:10px; width:100px; border-radius:5px; 
        text-decoration:none;"  href="https://nnngo.org/login/" target="_blank"><i class="fa fa-person"></i>Log In</a>
        
        <a style="color: white; background:#352C6D; padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:10px; width:100px; border-radius:5px; 
        text-decoration:none;"  href="https://nnngo.org/wp-login.php?action=lostpassword" target="_blank"><i class="fa fa-person"></i>Forget Password</a> -->
        
        </div>
      
    <footer style="background:#352C6D; color:white; padding:5px;"><center>NNNGO Membership Login Page</center></footer>
<script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 10000); // Change image every 2 seconds
        }
 </script>
   
        
        
        
        
    <script>
        closeSidebar();
        function openSidebar() {
          document.getElementById("mySidebar").style.display = "block";
        }
        
        function closeSidebar() {
          document.getElementById("mySidebar").style.display = "none";
        }
    </script>    
    </body>
</html>   