<?php
$this_page = 'about';
require_once 'header.php';
?>
<div class=" about_me_section">
    
    <div class="about-me-left">
        <div class="about-me-img">
            <img src="assets/img/about-me1.jpg" class="rounded-circle" height="190" width="250">
        </div>
    </div>
    <div class="border-left about-me-right">
        <p>
            Simcha Erlich C.E. is a fully U.K. qualified and licensed electrolysist with a wealth of knowledge and experience in the services offered.
        </p>    
        <p>
            Simcha is based at a registered clinic in Ramat Beit Shemesh, offering all electrolysis treatments. 
        </p>
        <p>
            All treatments are private, personal and effective, in a clinical environment. Successfully and safely treating clients with electrolysis is a skill which requires nurturing, diligence and dedication. 
        </p>
        <p>
            It is my belief that my customers' needs are of the utmost importance and I am committed to meeting those needs. As a result, a high percentage of my client base is from repeat clients and referrals.
        </p>
        <p>
            I would welcome the opportunity to earn your trust and deliver you the best service in the industry.
        </p>
        <p>
            Please contact me if you have any questions on the services that I offer. I look forward to hearing from you.
        </p>
        <div class="contact-info" style="display:flex; flex-direction:column">
            <span>
                <i class="fas fa-mobile-alt mr-2 contact-icons"></i>
                <?=$phone_number?>
            </span>
            <span>    
                <i class="fas fa-envelope-open mr-2 contact-icons"></i>
                <?=$email?>
            </span>
        </div>
       <span class="script">Simcha</span>  
    </div>
     
</div>
<? require_once 'footer.php'?>