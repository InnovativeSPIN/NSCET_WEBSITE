<?php 

include('../resources/conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholarship | <?php echo $colle_Name; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<!-- custom css -->
<link rel="stylesheet" href="../assets/css/resources/style.css">

<style>
    .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .section-title {
            margin-bottom: 30px;
        }
        .breadcrumb {
            margin-bottom: 10px;
            font-size: 14px;
        }
        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        h3 {
            color:  #007bff;
            font-weight: 600;
            margin: 20px 0;
            font-size: 24px;
            text-align: center;
        }
        h4 {
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px 0;
            font-size: 18px;
            color: #333;
            text-align: center;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        .scholarship-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .scholarship-card:hover {
            transform: translateY(-5px);
        }
        .scholarship-card h5 {
            font-size: 16px;
            font-weight: 600;
            color:  #007bff;
            margin: 0 0 10px;
        }
        .scholarship-card i {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 10px;
        }
        .scholarship-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .scholarship-card ul li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }
        .scholarship-card ul li:before {
            content: '»';
            position: absolute;
            left: 0;
            color:  #007bff;
        }
        .scholarship-card p {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
        }
        @media (max-width: 600px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
</style>
<!-- custom js -->
<script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('../resources/navbar.php');?>



 <section id="about">
        <div class="container">
            <div class="section-title">
               
                
                <!-- Undergraduate Scholarships -->
                <h3>Under Graduate Scholarship</h3>
                
                <h4>State Scholarships</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>AdiDravidar and Tribal Welfare Scholarship</h5>
                        <ul>
                            <li>For SC students in higher education</li>
                            <li>Degree and postgraduate level professional courses</li>
                            <li>Family income up to Rs. 2.00 lakh</li>
                            <li>Applicable for converted Christians</li>
                        </ul>
                    </div>
                </div>

                <h4>Central Schemes</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Ministry of Social Justice & Empowerment - Top Class Education Scheme for SC Students</h5>
                        <ul>
                            <li>For SC students beyond 12th class</li>
                            <li>Family income up to Rs. 8.00 lakh</li>
                            <li>Full tuition fee and academic allowance (Rs. 86,000 first year, Rs. 41,000 subsequent years)</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Post Matric Scholarship for SC students (All States)</h5>
                        <ul>
                            <li>For SC students in higher education</li>
                            <li>Professional and graduate courses</li>
                            <li>Family income up to Rs. 2,50,000</li>
                            <li>Rs. 3000-13500/year based on course</li>
                        </ul>
                    </div>
                </div>

                <h4>Ministry of Labour & Employment</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Financial Assistance for Education of the Wards of Beedi/Cine/IOMC/LSDM Workers - Post-Matric</h5>
                        <ul>
                            <li>Rs. 1000-25000 per annum</li>
                            <li>Degree courses: Rs. 6000</li>
                            <li>Professional courses: Rs. 25000</li>
                            <li>Family income limits: Beedi Rs.10,000, Mine Rs.10,000, Cine Rs.8,000/month</li>
                        </ul>
                    </div>
                </div>

                <h4>Ministry of Tribal Affairs</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>National Fellowship and Scholarship for Higher Education of ST Students</h5>
                        <ul>
                            <li>For professional fields (Management, Medicine, Engineering, etc.)</li>
                            <li>Family income up to Rs. 6.0 lakh</li>
                            <li>M.Phil: Rs. 25000 PM, Ph.D: Rs. 28000 PM</li>
                            <li>Full tuition fees for government institutions</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Post Matric Scholarship Scheme for ST students</h5>
                        <ul>
                            <li>For recognized courses post Class X</li>
                            <li>Family income up to Rs. 2.50 lakh</li>
                            <li>Hosteller: Rs. 1200/month, Day Scholar: Rs. 550/month</li>
                            <li>Additional allowances for disabilities, study tours, books</li>
                        </ul>
                    </div>
                </div>

                <h4>Department of Higher Education</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Pradhan Mantri Uchchatar Shiksha Protsahan (PM-USP) Yojana</h5>
                        <ul>
                            <li>For graduate/postgraduate and professional courses</li>
                            <li>80 percentile in Class XII</li>
                            <li>Family income up to Rs. 4.5 lakh</li>
                            <li>Rs. 12,000 p.a. (graduation), Rs. 20,000 p.a. (postgrad/professional)</li>
                        </ul>
                    </div>
                </div>

                <h4>Department of Empowerment of Persons with Disabilities</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Post-matric Scholarship for Students with Disabilities</h5>
                        <ul>
                            <li>Class XI to Master's Degree/Diploma</li>
                            <li>Family income up to Rs. 2.50 lakh</li>
                            <li>Maintenance: Rs. 900-1600 PM (hosteller), Rs. 550-750 PM (day scholar)</li>
                            <li>Tuition fee up to Rs. 1.50 lakh, book/disability allowances</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Scholarship for Top Class Education for Students with Disabilities</h5>
                        <ul>
                            <li>Graduate/Post Graduate Degree or Diploma</li>
                            <li>Maintenance: Rs. 3000 (hosteller), Rs. 1500 (day scholar)</li>
                            <li>Disability allowance: Rs. 2000 PM, Books: Rs. 5000 p.a.</li>
                            <li>Tuition fee up to Rs. 2 lakh p.a.</li>
                        </ul>
                    </div>
                </div>

                <h4>Ministry of Minority Affairs</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Post Matric Scholarships Scheme for Minorities</h5>
                        <i>(Muslims, Sikhs, Christians, Buddhists, Jain, Zoroastrians)</i>
                        <ul>
                            <li>Minimum 50% marks</li>
                            <li>Family income up to Rs. 2.00 lakh</li>
                            <li>Tuition fee: Rs. 3000 p.a.</li>
                            <li>Maintenance: Rs. 570-1200 PM (hosteller), Rs. 300-550 PM (day scholar)</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Merit Cum Means Scholarship for Professional and Technical Courses CS</h5>
                        <ul>
                            <li>Minimum 50% marks</li>
                            <li>Family income up to Rs. 2.50 lakh</li>
                            <li>Course fee: Rs. 20,000 p.a.</li>
                            <li>Maintenance: Rs. 1000 PM (hosteller), Rs. 500 PM (day scholar)</li>
                        </ul>
                    </div>
                </div>

                <h4>Department of Higher Education</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Prime Minister's Scholarship Scheme For Central Armed Police Forces And Assam Rifles</h5>
                        <ul>
                            <li>For CAPFs/AR and States/UTs Police personnel</li>
                            <li>Girls: Rs. 3000 PM, Boys: Rs. 2500 PM</li>
                            <li>Annual: Rs. 36,000 (girls), Rs. 30,000 (boys)</li>
                        </ul>
                    </div>
                </div>

                <h4>RPF/RPSF, Ministry of Railway</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Prime Minister's Scholarship Scheme For RPF/RPSF</h5>
                        <i>(Ministry of Railways)</i>
                        <ul>
                            <li>Professional courses (BE, B.Tech, MBBS, etc.)</li>
                            <li>Minimum 60% in 12th/Diploma/Graduation</li>
                            <li>Male: Rs. 2500 PM, Female: Rs. 3000 PM</li>
                        </ul>
                    </div>
                </div>

                <h4>All India Council for Technical Education-AICTE</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Pragati Scholarship Scheme For Girl Students (Technical Degree)</h5>
                        <ul>
                            <li>For girls in 1st/2nd year of technical degree</li>
                            <li>Rs. 50,000 p.a. for each year of study</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Saksham Scholarship Scheme For Specially Abled Student (Technical Degree)</h5>
                        <ul>
                            <li>For specially-abled students (≥40% disability)</li>
                            <li>Family income up to Rs. 8 lakh</li>
                            <li>Rs. 50,000 p.a. for each year of study</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>AICTE – Swanath Scholarship Scheme (Technical Degree)</h5>
                        <ul>
                            <li>For orphans, COVID-19 affected, or wards of martyrs</li>
                            <li>Family income up to Rs. 8 lakh</li>
                            <li>Rs. 50,000 p.a. for each year of study</li>
                        </ul>
                    </div>
                </div>

                <!-- Postgraduate Scholarships -->
                <h3>Post Graduate Scholarship</h3>

                <h4>National Overseas Scholarship</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>National Overseas Scholarship for SC Candidates</h5>
                        <i>(Also for Denotified Nomadic/Semi-Nomadic Tribes, Landless Labourers, Artisans)</i>
                        <ul>
                            <li>Minimum 60% in qualifying exam</li>
                            <li>Age ≤ 35 years</li>
                            <li>Admission in Top 500 QS Ranking Institutions</li>
                        </ul>
                    </div>
                </div>

                <h4>Tamilnadu Overseas Scholarship</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Tamilnadu Overseas Scholarship for SC Candidates</h5>
                        <ul>
                            <li>Minimum 60% in qualifying exam</li>
                            <li>Age ≤ 35 years</li>
                        </ul>
                    </div>
                </div>

                <h4>University Grants Commission – MHRD</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>Post Graduate Scholarship for Single Girl Child</h5>
                        <ul>
                            <li>For single girl child in PG courses</li>
                            <li>Age ≤ 30 years at admission</li>
                            <li>Rs. 36,200 p.a. for 2 years</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Post Graduate Scholarship For University Rank Holders</h5>
                        <ul>
                            <li>For 1st PG degree in specified streams</li>
                            <li>Age ≤ 30 years at admission</li>
                            <li>Rs. 3,100 PM for 2 years</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Post Graduate Scholarship For Professional Courses For SC/ST</h5>
                        <ul>
                            <li>For approved professional courses</li>
                            <li>ME/MTech: Rs. 7800 PM</li>
                            <li>Other courses: Rs. 4500 PM</li>
                        </ul>
                    </div>
                </div>

                <!-- Doctor of Philosophy -->
                <h3>Doctor of Philosophy</h3>

                <h4>Overseas Fellowship</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>National Overseas Scholarship for SC Candidates</h5>
                        <i>(Also for Denotified Nomadic/Semi-Nomadic Tribes, Landless Labourers, Artisans)</i>
                        <ul>
                            <li>Minimum 60% in Master’s/Bachelor’s</li>
                            <li>Age ≤ 35 years</li>
                            <li>Admission in Top 500 QS Ranking Institutions</li>
                        </ul>
                    </div>
                </div>

                <h4>National Fellowship</h4>
                <div class="grid-container">
                    <div class="scholarship-card">
                        <h5>National Fellowship Scheme for Higher Education Of ST Students</h5>
                        <i>https://scholarships.gov.in</i>
                        <ul>
                            <li>Post-Graduation passed, enrolled in M.Phil/Ph.D</li>
                            <li>Family income up to Rs. 6.0 lakh</li>
                            <li>M.Phil: Rs. 25000 PM, Ph.D: Rs. 28000 PM</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Junior Research Fellowship in Engineering & Technology</h5>
                        <ul>
                            <li>Master’s in engineering/technology/pharmacy, 55% marks</li>
                            <li>Age ≤ 40 years (extendable for women/SC/ST)</li>
                            <li>Rs. 14,000 PM (initial 2 years), Rs. 15,000 PM (later)</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Junior Research Fellowship in Science, Humanities and Social Sciences</h5>
                        <ul>
                            <li>Qualified NET or UGC-CSIR joint test</li>
                            <li>Rs. 12,000 PM (initial 2 years), Rs. 14,000 PM (SRF)</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Maulana Azad National Fellowship for Minority Students</h5>
                        <ul>
                            <li>For minority communities</li>
                            <li>Enrolled in M.Phil/Ph.D</li>
                            <li>Rs. 16,000 PM (JRF), Rs. 18,000 PM (SRF)</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Fulbright-Kalam Climate Fellowship</h5>
                        <i>http://www.usief.org.in/Fulbright-Kalam-Climate-Fellowship.aspx</i>
                        <ul>
                            <li>Ph.D. registered, research in India/U.S. resources</li>
                        </ul>
                    </div>
                    <div class="scholarship-card">
                        <h5>Fulbright-Nehru Doctoral Fellowship</h5>
                        <i>http://www.usief.org.in/Fulbright-Nehru-Fellowships.aspx</i>
                        <ul>
                            <li>Ph.D. registered in India, research in India/U.S.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('../resources/footer.php'); ?>

<!-- custom js -->
<script src="./assets/js/resources/script.js"></script>
</body>
</html>