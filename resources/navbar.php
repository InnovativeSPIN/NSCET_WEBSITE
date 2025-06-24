<style>.college_affiliation {
    font-size: 16px;
    font-weight: normal;
    margin-top: 5px;
    color: #333;
}
.logo-img {
    width: 100px; /* You can adjust to 120px or 150px as needed */
    height: 100px;
    object-fit: contain;
}
.naac_logo{
    display:flex;
    align-items:center;
    justify-content:center;
}
.college-logo-header-container{
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
}

</style>

<div class="main_top_header">
    <div class="college_main_logo">
        <div class="college_logo">
            <div class = "college-logo-header-container">
                <a href="https://www.nscet.org/">
                    <img src="https://nscet.org/main_images/College_logo.webp" alt="College Logo" class = "collge-logo-pic">
                </a>
            </div>
            
        </div>
        
        <div class="navbar_head_text">
            <h2>Theni Melapettai Hindu Nadargal Uravinmurai</h2>
            <h2 class="college_name_head">NADAR SARASWATHI COLLEGE OF ENGINEERING & TECHNOLOGY</h2>
    
            <p class="college_affiliation">
                Approved by <strong>AICTE</strong>, New Delhi & Affiliated to <strong>Anna University</strong>, Chennai<br>
                Accredited by <strong>NAAC with 'A' Grade</strong> | An <strong>ISO 9001:2015</strong> Certified Institution<br>
                Vadapudupatti, Annanji (PO), Theni - 625531.
            </p>
        </div>
        <div class="naac_logo">
            <img class="logo-img" src="https://nscet.org/main_images/naac.png" alt="">
        </div>
    </div>
    
    <!-- <div class="college_logos">
        <div class="karmarajar_logo">
            <img src="https://nscet.org/main_images/kamarajar_logo.webp" alt="">
        </div>
        <div class="naac_logo">
            <img src="https://nscet.org/main_images/naac.png" alt="">
        </div>

        <div class="rank_logo">
            <img src="https://nscet.org/main_images/rank.png" alt="">
        </div>
    </div> -->

    <div class="social_media">
        <div class="top-social">
            <div>
                <a href="./contact/" class="fixed-twitter" target="_blank"><i class="fa-solid fa-address-book"></i></a>
            </div>
            <div>
                <a href="https://www.linkedin.com/company/nscet/" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
            <div>
                <a href="https://www.youtube.com/@NSCETeConnect" class="fixed-instagrem" target="_blank"><i class="fa fa-youtube"></i></a>
            </div>
            <div>
                <a href="https://www.instagram.com/nscettmhnu/" class="fixed-twitter" target="_blank"><i class="fa fa-instagram"></i> </a>
            </div>
        </div>
    </div>
    
    <div id="search-main_box">
    <input id="searchBox" type="text" placeholder="Search NSCET..." />
    <ul id="results"></ul>
    </div>

    <div class="alerts_section">
        <button class="btn custom_dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Information Corner
        </button>
        <div class="dropdown-menu custome-dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="./Information_corner/#Circular">Circular and Notices</a>
            <a class="dropdown-item" href="./Information_corner/#Announcements">Announcements</a>
            <a class="dropdown-item" href="./Information_corner/#Newsletters">Newsletters</a>
            <a class="dropdown-item" href="./Information_corner/#News & Recent events">News & Recent events</a>
            <a class="dropdown-item" href="./Information_corner/#Job Openings">Reservation Roster</a>
            <a class="dropdown-item" href="./Information_corner/#Reservation Roster">Job Openings</a>
        </div>
    </div>

</div>
<div class="navbar" id="navbar">
    <ul>

        <?php include("navlinks.php") ?>

    </ul>



</div>

<!-- mobile navigaton bar -->
<div id="mobile_navigation_bar">
    <div class="mobile_navigation">

        <div class="college_logo">
            <a href="https://www.nscet.org/"> <img src="https://nscet.org/main_images/College_logo_white.webp" alt=""></a>
        </div>

        <div class="nav_switch">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="navigations_lists">
            <div class="college_logos">
                <div class="karmarajar_logo">
                    <img src="https://nscet.org/main_images/kamarajar_logo.webp" alt="">
                </div>
                <div class="naac_logo">
                    <img src="https://nscet.org/main_images/naac.png" alt="">
                </div>
            </div>
            <ul>
                <?php include("navlinks.php") ?>
                <!-- information corner -->
                <div class="mobile_alerts_section">
                    <button class="btn custom_dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Information Corner
                    </button>
                    <div class="dropdown-menu custome-dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="./Information_corner/#Circular">Circular and Notices</a>
                        <a class="dropdown-item" href="./Information_corner/#Announcements">Announcements</a>
                        <a class="dropdown-item" href="./Information_corner/#Newsletters">Newsletters</a>
                        <a class="dropdown-item" href="./Information_corner/#News & Recent events">News & Recent events</a>
                        <a class="dropdown-item" href="./Information_corner/#Job Openings">Reservation Roster</a>
                        <a class="dropdown-item" href="./Information_corner/#Reservation Roster">Job Openings</a>
                    </div>
                </div>
                <div class="Code_college">
                    <button class="btn custom_dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <strong>Counselling code</strong> : 5865

                    </button>
                </div>

                <!-- social -->
                <div class="mobile_social_media ">
                    <div class="mobile_top_social">
                        <div>
                            <a href="./contact/" class="fixed-twitter" target="_blank"><i class="fa-solid fa-address-book"></i></a>
                        </div>
                        <div>
                            <a href="https://www.linkedin.com/company/nscet/" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/@NSCETeConnect" class="fixed-instagrem" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/nscettmhnu/" class="fixed-twitter" target="_blank"><i class="fa fa-instagram"></i> </a>
                        </div>
                    </div>
                </div>


            </ul>


        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const nav_switch = document.querySelector(".nav_switch")
        const navigations_lists = document.querySelector(".navigations_lists")
        nav_switch.addEventListener('click', () => {
            navigations_lists.classList.toggle('active')

        })
    })
</script>