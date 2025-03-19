<div class="main_top_header">
    <div class="college_main_logo">
        <div class="college_logo">
            <a href="https://www.nscet.org/"> <img src="https://nscet.org/main_images/College_logo.webp" alt=""></a>
        </div>

        <div class="header_img">
            <a href="https://www.nscet.org/"> <img src="https://nscet.org/main_images/header.png" alt=""></a>
        </div>
    </div>
    <div class="college_logos">
        <div class="karmarajar_logo">
            <img src="https://nscet.org/main_images/kamarajar_logo.webp" alt="">
        </div>
        <div class="naac_logo">
            <img src="https://nscet.org/main_images/naac.png" alt="">
        </div>

        <div class="rank_logo">
            <img src="https://nscet.org/main_images/rank.png" alt="">
        </div>
    </div>

    <div class="social_media">
        <div class="top-social">
            <div>
                <a href="/demo/contact/" class="fixed-twitter" target="_blank"><i class="fa-solid fa-address-book"></i></a>
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

    <div class="alerts_section">
        <button class="btn custom_dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Information Corner
        </button>
        <div class="dropdown-menu custome-dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/demo/Information_corner/#Circular">Circular and Notices</a>
            <a class="dropdown-item" href="/demo/Information_corner/#Announcements">Announcements</a>
            <a class="dropdown-item" href="/demo/Information_corner/#Newsletters">Newsletters</a>
            <a class="dropdown-item" href="/demo/Information_corner/#News & Recent events">News & Recent events</a>
            <a class="dropdown-item" href="/demo/Information_corner/#Job Openings">Reservation Roster</a>
            <a class="dropdown-item" href="/demo/Information_corner/#Reservation Roster">Job Openings</a>
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
                        <a class="dropdown-item" href="/demo/Information_corner/#Circular">Circular and Notices</a>
                        <a class="dropdown-item" href="/demo/Information_corner/#Announcements">Announcements</a>
                        <a class="dropdown-item" href="/demo/Information_corner/#Newsletters">Newsletters</a>
                        <a class="dropdown-item" href="/demo/Information_corner/#News & Recent events">News & Recent events</a>
                        <a class="dropdown-item" href="/demo/Information_corner/#Job Openings">Reservation Roster</a>
                        <a class="dropdown-item" href="/demo/Information_corner/#Reservation Roster">Job Openings</a>
                    </div>
                </div>
                <div class="Code_college">
                    <button class="btn custom_dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <strong>Counselling code</strong> : 9210

                    </button>
                </div>

                <!-- social -->
                <div class="mobile_social_media ">
                    <div class="mobile_top_social">
                        <div>
                            <a href="/demo/contact/" class="fixed-twitter" target="_blank"><i class="fa-solid fa-address-book"></i></a>
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