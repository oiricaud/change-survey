<!-- Navigation bar -->
<?php 
    // Sets the blue bar on the current page for the navigation bar // 
    $link1 = "nav-link";
    $link2 = "nav-link";
    $link3 = "nav-link";
    $link4 = "nav-link";
    $link5 = "nav-link";
    $link6 = "nav-link";
        $link7 = "nav-link";
    $temp = substr($this->session->userdata('session_id'), 27);

    if( $title == "Home"){
        $link1 = "nav-link active";
    }
    
    if( $title == "Pre Survey"){
        $link2 = "nav-link active";
    }
    
    if( $title == "CO2 Process" or ($title == "co2Questions")){
        $link3 = "nav-link active";
    }
    
    if( $title == "Climate Data"){
        $link4 = "nav-link active";
    }
    
    if( $title == "Biotic Impacts"){
        $link5 = "nav-link active";
    }
    
    if( $title == "Post Survey"){
        $link6 = "nav-link active";
    }
?>

<div class="fixed-nav-bar">
    <div class="logo"
        <span><b> Local Impacts of Global</b> </span>
        Climate Change
    </div>
    <input type="checkbox" id="menuButton" />
    <label for="menuButton" class="menu-button-label">
        <div class="white-bar"></div>
        <div class="white-bar"></div>
        <div class="white-bar"></div>
        <div class="white-bar"></div>
    </label>
</div>

<div class="the-bass">
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
            <a class="<?php echo $link1 ?>" href="<?php echo site_url('home')?>"> 
                About 
            </a>
            </h2>
        </div>
    </div>
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
            <!-- Take Survey-Survey -->
             <a class="<?php echo $link2 ?>" href="<?php echo site_url('home/preSurvey')?>"> 
                Take Survey
            </a>
            </h2>
        </div>
    </div>
    <!--
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
                                
                <a class="<?php echo $link3 ?>" href="<?php echo site_url('home/co2Questions')?>"> 
                    CO2 Process 
                </a>
            </h2>
        </div>
    </div>
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
                                           
                <a class="<?php echo $link4 ?>" href="<?php echo site_url('home/climateData')?>"> 
                    Climate Data 
                </a>
            </h2>
        </div>
    </div>
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
                         
                <a class="<?php echo $link5 ?>" href="<?php echo site_url('home/bioticImpacts')?>">  
                    Biotic Impacts 
                </a>
            </h2>
        </div>
    </div>
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
                         
                <a class="<?php echo $link6 ?>" href="<?php echo site_url('home/postSurvey')?>"> 
                    Post Survey
                </a>
            </h2>
        </div>
    </div>
    -->
    <div class="rela-block drop-down-container">
        <div class="drop-down-item">
            <h2>
                 <!-- Logout -->
                <a  href="<?php echo site_url('login/logout')?>"> 
                    Logout
                </a>
            </h2>
        </div>
    </div>
</div>