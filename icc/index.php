<?php
include('../resources/conn.php');

function safe_htmlspecialchars($value) {
  return htmlspecialchars($value !== NULL ? $value : '-', ENT_QUOTES, 'UTF-8');
}

$colle_Name = "NSCET";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICC | <?php echo safe_htmlspecialchars($colle_Name); ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/resources/style.css">
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
  <style>
    /* Enhanced Section Styling */
    .section-content {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .section-content:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15) !important;
    }
    .section-title {
      font-weight: 700;
      letter-spacing: 1px;
    }
    .border-line {
      height: 4px;
      width: 60px;
      background: linear-gradient(135deg, #007bff, #0056b3);
      border-radius: 2px;
    }
    /* Animated Bullet Points */
    ul.animated-list {
      list-style: none;
      padding-left: 20px;
    }
    ul.animated-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 10px;
      animation: fadeInUp 0.5s ease forwards;
      animation-delay: calc(0.1s * var(--i));
      opacity: 0;
    }
    ul.animated-list li::before {
      content: '\f058'; /* Font Awesome check-circle */
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      position: absolute;
      left: 0;
      color: #007bff;
      font-size: 1.1rem;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    ul.animated-list li:hover::before {
      transform: scale(1.2);
      color: #0056b3;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    /* Subsection Styling for Nested Cards */
    .subsection-card {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      margin-top: 15px;
      transition: background 0.3s ease;
    }
    .subsection-card:hover {
      background: #e9ecef;
    }
    /* Resources Grid Layout */
    .resources-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    .resources-grid .subsection-card {
      margin-top: 0;
    }
    /* Reports Section Gradient */
    #section-icc-8 {
      background: linear-gradient(180deg, #fff, #f8f9fa);
    }
  </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0;">

<!-- Header -->
<?php include('../resources/navbar.php'); ?>

<!-- Main Content Wrapper -->
<div style="flex: 1; display: flex;">
  <!-- Sidebar -->
  <section role="navigation" id="sidebar" style="width: 250px; background: #f8f9fa; padding: 20px; position: sticky; top: 0; height: 100vh; border-right: 1px solid #dee2e6; transition: transform 0.3s ease-in-out;">
    <nav class="page__menu menu">
      <ul class="menu__list r-list" style="list-style: none; padding: 0;">
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-1" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">About ICC</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-2" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Objectives</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-3" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Roles and Responsibilities</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-4" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Composition</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-5" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Complaint Procedure</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-6" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Policies and Legal Framework</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-7" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Resources, Support and Contact</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-8" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Reports and Awareness</a></li>
        <li class="menu__group" style="margin-bottom: 10px;"><a href="#section-icc-9" class="menu__link r-link" style="display: block; padding: 10px; color: #007bff; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" onmouseover="this.style.background='#e9ecef';" onmouseout="this.style.background='none';">Complaint Forms</a></li>
      </ul>
    </nav>
  </section>

  <!-- Main Content -->
  <main role="main" style="flex: 1; padding: 20px; max-width: 1200px; margin: 0 auto;">
    <!-- Hero Section -->
    <section class="section-content" style="background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 50px 20px; text-align: center; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h1 class="section-title mb-2 text-uppercase">Internal Complaint Committee</h1>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <p style="font-size: 1.25rem; opacity: 0.9; text-align: center;">Ensuring a Safe, Inclusive, and Respectful Campus Environment</p>
    </section>

    <!-- About ICC -->
    <section id="section-icc-1" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">About the ICC</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">The Internal Complaints Committee (ICC) of Nadar Saraswathi College of Engineering and Technology is constituted in line with the University Grants Commission (Prevention, Prohibition and Redressal of Sexual Harassment of Women Employees and Students in Higher Educational Institutions) Regulations, 2015, and the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013.</p>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">The ICC is committed to creating a campus environment that is safe, inclusive, and respectful for all members of the institution. It serves as a redressal body for complaints related to sexual harassment, ensuring fairness, confidentiality, and sensitivity in the grievance-handling process. The committee also plays an active role in promoting gender sensitization through workshops, awareness campaigns, and capacity-building initiatives.</p>
    </section>

    <!-- Objectives -->
    <section id="section-icc-2" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Objectives of the ICC</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
        <li style="--i: 1;">Prevent incidents of sexual harassment on campus through awareness and sensitization.</li>
        <li style="--i: 2;">Protect the rights and dignity of students and employees, especially women, ensuring a harassment-free environment.</li>
        <li style="--i: 3;">Redress grievances related to sexual harassment in a timely and confidential manner.</li>
        <li style="--i: 4;">Foster a culture of equality, mutual respect, and non-discrimination.</li>
        <li style="--i: 5;">Ensure compliance with statutory guidelines laid down by UGC and the Government of India.</li>
      </ul>
    </section>

    <!-- Roles and Responsibilities -->
    <section id="section-icc-3" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Roles and Responsibilities of ICC Members</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <ol style="font-size: 1rem; color: #555; line-height: 1.6; padding-left: 20px; text-align: justify;">
        <li><strong>Presiding Officer</strong>: A senior woman faculty member who leads the inquiry process, ensures fairness, and submits reports.</li>
        <li><strong>Faculty/Staff Members</strong>: Support investigations, organize awareness activities, and help maintain confidentiality and sensitivity.</li>
        <li><strong>External Member</strong>: An expert from an NGO or legal background who provides impartial insights and ensures legal compliance.</li>
        <li><strong>Overall ICC Responsibilities</strong>:
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">Receive and process complaints confidentially.</li>
            <li style="--i: 2;">Conduct fair and timely inquiries (within 90 days).</li>
            <li style="--i: 3;">Recommend actions to the employer.</li>
            <li style="--i: 4;">Organize gender sensitization programs.</li>
            <li style="--i: 5;">Submit an annual report as per POSH Act guidelines.</li>
          </ul>
        </li>
      </ol>
    </section>

    <!-- Composition -->
    <section id="section-icc-4" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Composition of the Committee</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <table class="table table-bordered" style="font-size: 0.95rem; color: #555;">
        <caption style="caption-side: top; text-align: center; font-weight: bold; color: #333;">Internal Complaint Committee Members</caption>
        <thead style="background: #007bff; color: white;">
          <tr>
            <th scope="col" style="padding: 10px;">S.No</th>
            <th scope="col" style="padding: 10px;">Name</th>
            <th scope="col" style="padding: 10px;">Designation</th>
            <th scope="col" style="padding: 10px;">Position</th>
            <th scope="col" style="padding: 10px;">Contact</th>
            <th scope="col" style="padding: 10px;">Mail ID</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $members = [
            ['Dr. M. Sathya', 'VP, HOD/IT', 'Presiding Officer', '9884854043', 'vp_academic@nscet.org'],
            ['Dr. C. Chithra', 'Prof-Coordinator/S&H', 'Member', '9790148325', 'chithra.c@nscet.org'],
            ['Mrs. M. Mahalakshmi', 'Assistant Professor/Maths', 'Member', '9942089298', 'mahalakshmi.m@nscet.org'],
            ['Mrs. S. Gayathri', 'Assistant Professor/Civil', 'Member', '8220467759', 'gayathri@nscet.org'],
            ['Mr. M. Ananth', 'Workshop Instructor/Mech', 'Member', '9943586125', 'ananth@nscet.org'],
            ['Dr. Sabu M. Simon', 'Director of Arogya Agam (NGO)', 'External Member', '9842142306', 'director@arogyaagam.org'],
            ['Ms. S. Nanthidha', 'Student, III Yr./CSE', 'Student Member', '8015869545', 'nanthidha_cse@nscet.org'],
            ['Ms. S. Amutha', 'Student, III Yr./ECE', 'Student Member', '9384453946', 'amuthas_ece@nscet.org'],
            ['Ms. M. Dheivashri', 'Student, III Yr./AI&DS', 'Student Member', '9944110495', 'dheivashrim_ai@nscet.org'],
            ['Mr. K. Sidharth', 'Student, III Yr./Civil', 'Student Member', '8124433842', 'sidharthk_ce@nscet.org'],
          ];
          foreach ($members as $index => $member) {
            $bg = $index % 2 ? '#f8f9fa' : '#fff';
            echo "<tr style='background: $bg; transition: background 0.2s;'>
                    <td style='padding: 10px; text-align: justify;'>".($index + 1)."</td>
                    <td style='padding: 10px; text-align: justify;'>".safe_htmlspecialchars($member[0])."</td>
                    <td style='padding: 10px; text-align: justify;'>".safe_htmlspecialchars($member[1])."</td>
                    <td style='padding: 10px; text-align: justify;'>".safe_htmlspecialchars($member[2])."</td>
                    <td style='padding: 10px; text-align: justify;'>".safe_htmlspecialchars($member[3])."</td>
                    <td style='padding: 10px; text-align: justify;'><span data-email='".safe_htmlspecialchars($member[4])."' style='color: #007bff; text-decoration: none; cursor: pointer; transition: color 0.3s;' onmouseover='this.style.color=\"#0056b3\";' onmouseout='this.style.color=\"#007bff\";'>".safe_htmlspecialchars($member[4])."</span></td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </section>

    <!-- Complaint Procedure -->
    <section id="section-icc-5" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Complaint Procedure (As per POSH Act, 2013)</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <ol style="font-size: 1rem; color: #555; line-height: 1.6; padding-left: 20px; text-align: justify;">
        <li><strong>Filing the Complaint</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">Any aggrieved woman can file a written complaint to the ICC within 3 months of the incident (or last incident, in case of a series).</li>
            <li style="--i: 2;">If she is unable to do so, a legal heir, friend, or counsellor may file it on her behalf.</li>
            <li style="--i: 3;">The ICC may extend the time limit by another 3 months if justified.</li>
          </ul>
        </li>
        <li><strong>Acknowledgment and Forwarding</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">The ICC acknowledges the complaint and forwards a copy to the respondent within 7 working days.</li>
            <li style="--i: 2;">The respondent must reply with a written explanation within 10 working days.</li>
          </ul>
        </li>
        <li><strong>Conciliation (Optional)</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">Before initiating an inquiry, the ICC may offer conciliation if the complainant requests it.</li>
            <li style="--i: 2;">No monetary settlement is allowed as a basis for conciliation.</li>
            <li style="--i: 3;">If conciliation is successful, the matter is closed with a report to the employer.</li>
          </ul>
        </li>
        <li><strong>Inquiry Process</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">If conciliation fails or is not opted for, the ICC conducts a formal inquiry.</li>
            <li style="--i: 2;">The inquiry must be completed within 90 days.</li>
            <li style="--i: 3;">Both parties are given a fair chance to present evidence and witnesses.</li>
          </ul>
        </li>
        <li><strong>Inquiry Report</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">The ICC submits its findings in a report to the employer within 10 days of completing the inquiry.</li>
            <li style="--i: 2;">A copy is shared with both parties.</li>
          </ul>
        </li>
        <li><strong>Action on Findings</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">If the complaint is proven, the employer must act on the ICC’s recommendations within 60 days.</li>
            <li style="--i: 2;">This may include disciplinary action, compensation, or other corrective measures.</li>
          </ul>
        </li>
        <li><strong>Confidentiality</strong>
          <ul class="animated-list" style="padding-left: 20px; text-align: justify;">
            <li style="--i: 1;">All proceedings, identities, and documents are kept strictly confidential under Section 16 of the Act.</li>
          </ul>
        </li>
      </ol>
    </section>

    <!-- Policies and Legal Framework -->
    <section id="section-icc-6" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Policies and Legal Framework</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">Nadar Saraswathi College of Engineering and Technology has adopted a Gender Sensitization and Sexual Harassment Prevention Policy, aligned with the POSH Act and UGC norms. The policy includes:</p>
      <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
        <li style="--i: 1;">Zero-Tolerance Declaration</li>
        <li style="--i: 2;">Comprehensive POSH Policy Document</li>
        <li style="--i: 3;">ICC Constitution and Transparency</li>
        <li style="--i: 4;">Awareness and Training</li>
        <li style="--i: 5;">Accessible Complaint Mechanism</li>
        <li style="--i: 6;">Monitoring and Reporting</li>
        <li style="--i: 7;">Visual and Digital Communication</li>
      </ul>
      <div class="subsection-card">
        <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Governing Legislation</h4>
        <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
          <li style="--i: 1;"><a href="../assets/pdf/icc/1THE SEXUAL HARASSMENT OF WOMEN AT WORKPLACE  Act 2013-Act no.14 of 2013.pdf" target="_blank" style="color: #007bff; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007bff';">The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013 (POSH Act)</a></li>
          <li style="--i: 2;"><a href="../assets/pdf/icc/2UGC_guidelines on_Sexual-Haressment.pdf" target="_blank" style="color: #007bff; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007bff';">UGC Regulations, 2015</a></li>
        </ul>
      </div>
      <div class="subsection-card">
        <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Key Legal Provisions</h4>
        <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
          <li style="--i: 1;">Section 4: Mandates the constitution of the ICC</li>
          <li style="--i: 2;">Section 9–13: Details the complaint process, inquiry, and recommendations</li>
          <li style="--i: 3;">Section 16: Ensures confidentiality of proceedings</li>
          <li style="--i: 4;">Section 19: Lists employer obligations, including awareness and training</li>
        </ul>
      </div>
      <div class="subsection-card">
        <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Related Legal Instruments</h4>
        <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
          <li style="--i: 1;">Indian Penal Code (IPC) Sections 354 & 509</li>
          <li style="--i: 2;">Maternity Benefit Act, 1961</li>
          <li style="--i: 3;">Right to Equality (Articles 14, 15, 21 of the Constitution)</li>
        </ul>
      </div>
    </section>

    <!-- Resources, Support and Contact -->
    <section id="section-icc-7" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Resources, Support, and Contact</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <div class="resources-grid">
        <div class="subsection-card">
          <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Emotional and Counselling Support</h4>
          <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
            <li style="--i: 1;">Student Counselling: Confidential support for emotional well-being</li>
            <li style="--i: 2;">Assistance for legal aid, medical care, and specialized counselling (if needed)</li>
          </ul>
        </div>
        <div class="subsection-card">
          <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Helplines and Emergency Contacts</h4>
          <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
            <li style="--i: 1;">National Women’s Helpline: 181 (24×7)</li>
            <li style="--i: 2;">Police Emergency Number: 100</li>
            <li style="--i: 3;">College Security Office: 04546-263900</li>
          </ul>
        </div>
        <div class="subsection-card">
          <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Reporting Mechanisms</h4>
          <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
            <li style="--i: 1;"><a href="../helpdesk/" style="color: #007bff; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007bff';">Online Complaint Form</a></li>
            <li style="--i: 2;"><a href="../assets/pdf/icc/complain form.pdf" download style="color: #007bff; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007bff';">Downloadable Complaint Form (PDF)</a></li>
            <li style="--i: 3;">Physical Drop Box: Located at various places inside our college</li>
            <li style="--i: 4;">ICC Email: <span data-email="icc@nscet.org" style="color: #007bff; text-decoration: none; cursor: pointer; transition: color 0.3s;" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007bff';">icc@nscet.org</span></li>
          </ul>
        </div>
        <div class="subsection-card">
          <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">Awareness and Training Initiatives</h4>
          <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
            <li style="--i: 1;">Gender Sensitization Workshops & Seminars</li>
            <li style="--i: 2;">POSH Training for students, faculty, and staff</li>
            <li style="--i: 3;">Visual Campaigns: Posters, flyers, and infographics</li>
          </ul>
        </div>
        <div class="subsection-card">
          <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">External Support</h4>
          <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
            <li style="--i: 1;">Local NGO Partner: Arogya Agam</li>
          </ul>
        </div>
        <div class="subsection-card">
          <h4 style="font-size: 1.2rem; color: #333; margin-top: 0; text-align: center;">ICC Contact & Feedback</h4>
          <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
            <li style="--i: 1;">Email: <span data-email="icc@nscet.org" style="color: #007bff; text-decoration: none; cursor: pointer; transition: color 0.3s;" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007bff';">icc@nscet.org</span></li>
            <li style="--i: 2;">Phone: 04546-263900 (Office)</li>
            <li style="--i: 3;">Office: Room 101, Administrative Block</li>
            <li style="--i: 4;">Working Hours: Monday–Friday, 10:00 AM–4:00 PM</li>
          </ul>
        </div>
      </div>
      <div class="subsection-card">
        <h4 style="font-size: 1.2rem; color: #333; margin-top: 20px; text-align: center;">Confidentiality Assurance</h4>
        <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">All communications—complaints, suggestions, or feedback—are handled with utmost confidentiality in accordance with Section 16 of the POSH Act, 2013.</p>
      </div>
    </section>

    <!-- Reports and Awareness Activities -->
    <section id="section-icc-8" class="section-content" style="background: linear-gradient(180deg, #fff, #f8f9fa); padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Reports and Awareness Activities</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">The ICC submits annual reports to the institution head and UGC, detailing complaints received, resolved, and pending, along with actions taken. The college conducts regular awareness activities, including:</p>
      <ul class="animated-list" style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">
        <li style="--i: 1;">Workshops on gender sensitization</li>
        <li style="--i: 2;">POSH training sessions</li>
        <li style="--i: 3;">Campus-wide campaigns with posters and digital media</li>
      </ul>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">Details of past reports and activities will be updated here as available.</p>
    </section>

    <!-- Complaint Forms -->
    <section id="section-icc-9" class="section-content" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 30px;">
      <h2 class="section-title mb-2 text-center text-uppercase">Complaint Forms</h2>
      <div class="border-line" style="margin: 0 auto 20px;"></div>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; text-align: justify;">Submit your grievance through the following channels:</p>
      <div style="text-align: center;">
        <a href="../helpdesk/" style="display: inline-block; padding: 12px 20px; background: linear-gradient(135deg, #007bff, #0056b3); color: white; text-decoration: none; border-radius: 5px; margin: 10px; font-weight: bold; transition: all 0.3s;" onmouseover="this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)';">Submit Online Complaint</a>
        <a href="../assets/pdf/icc/complain form.pdf" download style="display: inline-block; padding: 12px 20px; background: linear-gradient(135deg, #6c757d, #5a6268); color: white; text-decoration: none; border-radius: 5px; margin: 10px; font-weight: bold; transition: all 0.3s;" onmouseover="this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)';">Download Offline Complaint Form</a>
      </div>
    </section>
  </main>
</div>

<!-- Footer -->
<?php include('../resources/footer.php'); ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="../assets/js/resources/script.js"></script>
<script>
// Smooth scrolling for sidebar links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
    if (window.innerWidth < 768) {
      document.getElementById('sidebar').style.transform = 'translateX(-100%)';
    }
  });
});

// Sidebar toggle for mobile
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.style.transform = sidebar.style.transform === 'translateX(-100%)' ? 'translateX(0)' : 'translateX(-100%)';
}

// Hide sidebar by default on mobile
if (window.innerWidth <= 767) {
  document.getElementById('sidebar').style.transform = 'translateX(-100%)';
  if (document.getElementById('sidebarToggle')) {
    document.getElementById('sidebarToggle').style.display = 'block';
  }
}
</script>

<style>
  /* Mobile sidebar toggle */
  @media (max-width: 767px) {
    #sidebar {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      transform: translateX(-100%);
      width: 250px;
    }
    #sidebarToggle {
      display: block !important;
    }
    main {
      padding: 15px !important;
    }
  }
</style>

</body>
</html>