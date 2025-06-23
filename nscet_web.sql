-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2025 at 03:00 PM
-- Server version: 8.0.37
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nscet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

CREATE TABLE `association` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `dept_short` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`id`, `name`, `image`, `description`, `dept_short`) VALUES
(1, 'Fraternity of Immortal Software Technocrats', 'fist.png', 'Never doubt that a group of talented engineers and developers, who love to involve both themselves and others in every technical and non-technical event led to the growth of our proud “COMPUTER SCIENCE ENGINEERING ASSOCIATION”. Our FIST Association has been successfully running over six years. Every year we conduct events that invoke the technical and creative skills of every single individual and with the constant support of all the students, our association has stepped into the 7th year of excellence. Strengthen our association with your pillars of support and we hope for the best of our association in the future.', 'cse'),
(2, '7 TH SENSE ASSOCIATION', 'seventh.png', 'Touch allows you to experience pleasure and pain, the ability to physically connect,\nas well as the ability to interpret whether something is good or bad for you. Hearing and\nsight allow you to become aware of what is around you. Your sixth sense allows you to\n&#39;feel&#39; what is intangible.', 's-and-h'),
(3, 'Association of Intelligence Minds', 'aim.png', NULL, 'ai-and-ds'),
(4, 'Innovative Software Product Industry of NSCET', 'ispin.png', 'iSPIN is a pure IT sector of NSCET with Resourceful students under the guidance of Faculties, Industry Specialists, and the Alumni of NSCET. It will be the First of its kind idea for the incubation cell of NSCET. iSPIN will be responsible for developing the products for NSCET and its clients. The essence of iSPIN is the strategy of Unlearn & Learn based on Self-Learning Strategy.', 'cse'),
(5, 'Electroblitz', 'Electroblitz.png', 'The objective of Electroblitz is to support the development of highly skilled engineers and technicians needed by industries. To achieve this, the Department of Electrical and Electronics Engineering (EEE) established as its department association. Through ELECTROBLITZ various technical events, ELECTROBLITZ aims to enhance both academic and extracurricular activities, fostering an environment of continuous improvement for the professional growth of students and faculty.', 'eee'),
(6, 'ECHELONZ', 'ECHELONZ.png', 'The Echelonz Association strives to empower students by selecting leaders from the ECE department who inspire and motivate their peers to achieve excellence. These representatives are tasked with organizing various programs that enhance skills and provide platforms to showcase talent in both academic and cultural spheres. They actively encourage every student to participate in the events and activities conducted under the association&#39;s banner, fostering a vibrant and inclusive environment.', 'ece'),
(7, 'Mechanical Association of Student Society', 'mass.png', ' The association fosters leadership, innovation, collaboration, holistic growth, professional ethics, and continuous learning through events, projects, and networking, aligning with the college\'s vision for world-class engineers.', 'mech'),
(8, 'Energy Young Civil Association', 'EYCA.png', '', 'civil'),
(9, 'Network Experts in Unified Systems', 'nexus.jpg', '', 'it');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` text,
  `dept_short` varchar(50) NOT NULL,
  `dept_content` longtext,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `dept_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `short_description`, `dept_short`, `dept_content`, `vision`, `mission`, `dept_banner`) VALUES
(1, 'Computer Science and Engineering', '{\"points\": [\n     \"Be life long learners who continue to pursue professional development.\",\n     \"Participate and thrive in a multidisciplinary, systems-oriented work environment.\",\n     \"Contribute to the solution of complex technical problems that exist in the software industry.\",\n     \"Understand their ethical roles as a professional engineer and strive to promote a practice of integrity, tolerance, and respect in the workplace.\"\n ]}', 'cse', 'The Computer Science and Engineering department aims at nurturing a conducive upbringing for erudition and research by using appropriate computing technologies in its everyday activities. The department equips its students with technological expertise and skills in the field of computer science. Students at CSE are nurtured to become the best software professionals or entrepreneurs in their own innovative way. The prime objective of the department endeavors is to produce confident professionals tuned to real-time working environments. The department offers an excellent academic environment with a team of highly qualified faculty members to inspire the students to develop their technical skills and inculcate the spirit of teamwork in them.', 'To become a leading hub in the field of Computer engineering', ' {\"points\": [\n        \"To provide a strong theoretical and practical knowledge emphasizing on software developments.\",\n        \"To encourage autonomous learning foster interactions and establish partnership with renowned software industries.\",\n        \"To inculcate soft skills, leadership qualities and innovative research skills with ethical values.\"\n    ]}', 'cse.webp'),
(2, 'Electronics and Communication Engineering', '\n{\n  \"points\": [\n    \"To impart the source of inspiration and a frame of reference to endure students professional and ethical values.\",\n    \"To understand the basic principles that underlie modern Electronics and Communication Engineering.\",\n    \"To provide practical exposures to the student through well-advanced laboratories with continuous upgradation.\",\n    \"To create technical awareness among the students through special lectures from the eminent experts.\",\n    \"To improve the faculty performance through various competency development programmes.\"\n  ]\n}\n', 'ece', 'The Department of Electronics and Communication Engineering offers an academic programme which has an optimum mix of Electronics, Communication and Computer Engineering with an emphasis on VLSI, Embedded systems, Instrumentation, Automation and Robotics, and allied subjects. Our strict adherence to quality norms in teaching-learning and evaluation has always been the strength of the department. Students are carved to be technically skilled and socially conscious so as to contribute to finding solutions to real-life problems. They are provided with avenues to develop inter-disciplinary projects and to acquire organization, presentation and leadership skills.', 'To become pioneer in creating engineers well–versed in communication engineering and electronic market', '{\n  \"points\": [\n    \"To provide quality education as per the requirement of the communication field using the state-of-art infrastructure.\",\n    \"To promote excellence, creativity, nurture the spirit of innovation in the field of digital technology.\",\n    \"To enhance relationships with electronics and communication industries, professional society, government bodies and alumni.\",\n    \"To promote soft skills, leadership qualities and innovative research skills with ethical values.\"\n  ]\n}\n', 'ece.jpg'),
(3, 'Artificial Intelligence & Data Science', '{\r\n        \"points\": [\r\n            \"Students will be able to analyse problems, devise and implement solutions, and adapt to changes in technology after four years of graduation.\",\r\n            \"Participate in higher education and assist in the development of new technologies.\",\r\n            \"As an individual or member of a team, work ethically to achieve the objectives of the project or organisation.\",\r\n            \"When putting technical solutions into implementation, work with regard for social attitudes and environmental awareness.\"\r\n        ]\r\n    }', 'ai-and-ds', 'B.Tech. Artificial Intelligence & Data Science is an undergraduate programme with the need of the time advanced learning paradigms like machine learning, reinforcement learning, deep learning, big data, data sciences and artificial intelligence as a whole. The program\'s curriculum is created to give students the skills they need to combine cutting-edge technology to create intelligent equipment, software, or applications. Artificial intelligence\'s main objective is to give computers the capacity to learn from examples and experience in order to address problems without explicit human programming. Such applications are already widely used and are attracting interest in the IT sector. Applications used in financial management that evaluate historical sales data to forecast client behaviour, Recognition of a human face or voice, industrial robotics optimization to produce better results with less human resources.', 'To become a center for excellence in the field of Artificial Intelligence by promoting knowledge based education, innovation and cutting edge research in artificial engineering and data science.', '{\n  \"points\": [\n    \"To create an environment that encourages students to achieve their potential and pursue their professional goals.\",\n    \"In order to create and develop cutting-edge breakthroughs in artificial intelligence as a whole and as they are connected with other disciplines, it is important to support ongoing research and development efforts in partnership with prestigious enterprises and research centers.\",\n    \"To improve students’ interpersonal talents and human personalities in order to instill entrepreneurial skills that can thrive national growth.\"\n  ]\n}\n', 'ai_ds.webp'),
(4, 'Electrical and Electronics Engineering', '{\r\n        \"points\": [\r\n            \"To make the students best in analytical ability, technical skills and engineering concepts those are necessary to renovate a concept into a reliable, commercial and safe product.\",\r\n            \"To develop the students in core areas of Electrical and Electronics Engineering in order to make them suitable for working in core Industries, research establishment and also as entrepreneurs by understanding the importance of professional ethics and codes of professional practice.\",\r\n            \"To enhance the knowledge of the students in multidisciplinary areas with good scientific and engineering scope to understand, examine and design products.\",\r\n            \"To prepare the students to understand problems relevant to the society and provide ethical engineering solutions.\",\r\n            \"To encourage student consciousness for continuous learning and importance of professional ethics and codes of professional practice.\"\r\n        ]\r\n    }', 'eee', 'Electrical and Electronics Engineering (EEE) is the front runner because of its recent recognition and adoption by all industries and academia, thereby gaining self-confidence of our students to compete successfully with all competitive disciplines. It imparts quality education in multifarious disciplines of Electrical, Electronics, Communication, Control Engineering, etc. along with generation, transmission and distribution of electrical power and a set of subjects specially focusing on the performance and design of DC, AC and Special Electric Machines. The inherent skills of our students are being well nurtured by highly qualified faculty and hard working staff in achieving goals & objectives of the Department.', 'To emerge as a valuable global resource for power sector and consumer electronics.', '{\n  \"points\": [\n    \"To utilize efficient and required teaching methodologies to nurture learners, as well as, establish industry-institute interactions.\",\n    \"To execute projects with integrity and ethics keeping pace with the latest trends in power industry.\",\n    \"To develop energy parks to handle various sustainable challenges in the society.\",\n    \"To upgrade the technical knowledge and skills of faculty through quality improvement programmes.\"\n  ]\n}\n', 'eee.jpg'),
(5, 'Information Technology', '{\r\n        \"points\": [\r\n            \"Understand the Multidisciplinary Domain of Information Science and work towards Industrial needs.\",\r\n            \"Develop ethically consistent and adaptive technicians to thrive in this ever demanding field of Information technology.\",\r\n            \"Contribute to the technical, scientific and economic needs of the specialization sector in IT field.\"\r\n        ]\r\n    }', 'it', 'The Information Technology department aims at nurturing a conducive upbringing for erudition and research by use of appropriate computing technologies in its everyday activities. The department mainly equips its students with technological expertise and appropriate skills in the field of information technology. Students at IT are nurtured to become best software professionals or Entrepreneurs in their own innovative way. The prime objective of the department endeavors is to produce confident professionals tuned to real time working environment. The department offers excellent academic environment with a team of highly qualified faculty members to inspire the students to develop their technical skills and inculcate the spirit of team work in them.', 'To bring out streamlined technocrats for building sustenance civilization.', '{\n  \"points\": [\n    \"To inculcate technologies that decodes the solution for real world exigency.\",\n    \"To encourage and develop generous and ethical contributions to cater the industrial demands.\",\n    \"To impart and ignite the research skills along with soft skills to shine in the era of automation.\"\n  ]\n}\n', 'it.webp'),
(6, 'Civil Engineering', '{\r\n        \"points\": [\r\n            \"Design considerations will include Strength, Stiffness, and Stability of the Structure.\",\r\n            \"Other considerations include Cost, Constructability, Safety, Aesthetics and Sustainability.\",\r\n            \"Structural Engineering is concerned with Design and Analysis of Buildings, Bridges, Towers, Flyovers, Tunnels, etc.\",\r\n            \"The Structural Engineer must Design the structures to be Safe for their users and to Successfully fulfill the function they are designed for Serviceable.\"\r\n        ]\r\n    }', 'civil', 'The Civil Engineering department of NSCET has the state of art facilities equipped with latest instruments, equipment, and software for imparting technical knowledge on par with international requirements. To develop responsible savvy professional techno-managers, the department also offers a PG program in M.E.Structural Engineering with an intake of 18 students. Experienced and well-qualified faculty members, well-equipped laboratories and workshops are the strengths of this department. Advanced licensed software includes Autocad, Primavera, MS-project, StaadPro, ANSYS, and REVIT are available to students to take up real time projects. The consultancy cell of this department is active in testing the quality of materials like concrete, brick, soil, water, bitumen, aggregates and steel reinforcement.', 'To build professional and entrepreneurial skills to face the challenges in the socio-economic domains.', '{\n  \"points\": [\n    \"To create sustainable environment to meet professional challenges existing in the Civil Engineering field.\",\n    \"To mentor learners to adapt to innovative, structural and designing excellence in construction field.\",\n    \"To keep in constant touch with industries to update students with professional requirement during their learning period.\",\n    \"Endeavour for excellence in all facets of Civil Engineering.\"\n  ]\n}\n', 'civil.jpg'),
(7, 'Mechanical Engineering', '{\r\n        \"points\": [\r\n            \"To design and conduct experiments, as well as to analyze and interpret data.\",\r\n            \"To design a system, component to meet desired needs.\",\r\n            \"To function on multi-disciplinary team.\",\r\n            \"To identify, formulate, and solve engineering problems.\",\r\n            \"Understanding of professional and ethical responsibility.\",\r\n            \"To use the technique, skills, and modern engineering tools which are necessary for engineering practice, recognition of the need for, and an ability to engage in lifelong learning.\"\r\n        ]\r\n    }', 'mech', 'Mechanical Engineering is one of the most comprehensive professional disciplines.Mechanical engineering principles are employed in a wide range of industries such as power generation, manufacturing, energy, repair and maintenance, automation and control, robotics, electronics, nanotechnology, food industries, automotive, petroleum, aerospace, etc. Over the last decade, we have grown our expertise and competence in core Mechanical Engineering and Research.Our primary aim is to motivate, inspire, and build trust and confidence in students. They are also taught interdisciplinary themes such as Health, Environment, Civics, and Entrepreneurship. I welcome your interest in our department and wish you a successful and enjoyable experience with us.', 'To become a centre for outstanding education and research in the field of Mechanical Engineering.', '{\n  \"points\": [\n    \"To impart highest quality education among students to stabilize their Mechanical Engineering knowledge and innovative skills to solve work related and social issues.\",\n    \"To develop alliance with research and development industries and alumni for achieving excellence in consultancy and product design.\",\n    \"To enhance knowledge and expertise through professional programmes in the field of thermal, manufacturing and industrial engineering.\",\n    \"To promote soft skills, leadership qualities and innovative research skills with ethical values.\"\n  ]\n}\n', 'mech.jpg'),
(8, 'Science and Humanities', '{\n        \"points\": [\n            \"To instill confidence and moral values.\",\n            \"To instill in the students a desire of appreciation of independent thought, accuracy, neatness, and thoroughness.\",\n            \"Molding students to adapt to the emerging technologies.\",\n            \"To provide the students with the fundamental understanding of the basic principle of the subject.\"\n        ]\n    }', 's-and-h', 'Science and Humanities dept. aims to provide a strong foundation for students of Engg. It is one of the indispensable dept. of the institute .It comprises of applied physics,applied chemistry,applied mathematics,along with communication skill. Department has qualified staff which enable students to employ fundamental principles to create innovative new technologies with well equipped lab.I wish you best luck for your Engg. Degree and hope you are transformed into good and successful Enggineers after the completion of your graduate programme in our college.', 'To bridge the gap between the school and college education in basic engineering and language skills.', '{   \"points\": [     \"To make students familiar with science and technology to overcome the issues in the society and industry.\",     \"To develop skills in the fields of Mathematics, Science, and Communication with ethical values.\",     \"To promote soft skills, leadership qualities, and innovative research skills.\"   ] }', 's_and_h.jpg'),
(9, 'Structural Engineering', '{\r\n        \"points\": [\r\n            \"Structural Engineering is concerned with Design and Analysis of Buildings, Bridges, Towers, Flyovers, Tunnels, etc.\",\r\n            \"The Structural Engineer must Design the structures to be Safe for their users and to Successfully fulfill the function they are designed for Serviceable.\",\r\n            \"Design considerations will include Strength, Stiffness, and Stability of the Structure.\",\r\n            \"Other considerations include Cost, Constructability, Safety, Aesthetics and Sustainability.\"\r\n        ]\r\n    }', 'se', 'The Civil Engineering department of NSCET has the state of art facilities equipped with latest instruments, equipment, and software for imparting technical knowledge on par with international requirements. To develop responsible savvy professional techno-managers, the department also offers a PG program in M.E.Structural Engineering with an intake of 18 students. Experienced and well-qualified faculty members, well-equipped laboratories and workshops are the strengths of this department. Advanced licensed software includes Autocad, Primavera, MS-project, StaadPro, ANSYS, and REVIT are available to students to take up real time projects. The consultancy cell of this department is active in testing the quality of materials like concrete, brick, soil, water, bitumen, aggregates and steel reinforcement.', 'Build professional and entrepreneurial skills to lead socio-economic domains.', '{\n  \"points\": [\n    \"Practice sustainable environment to meet professional challenges with ethics.\",\n    \"Mentor students for innovative thinking with relevance to civilization.\",\n    \"Interact consistently with the industries to work on problems.\",\n    \"Endeavour for excellence in all facets of civil engineering.\"\n  ]\n}\n', NULL),
(10, 'Manufacture Engineering', '{\r\n        \"points\": [\r\n            \"To design and conduct experiments, as well as to analyze and interpret data.\",\r\n            \"To design a system, component to meet desired needs.\",\r\n            \"To function on a multi-disciplinary team.\",\r\n            \"To identify, formulate, and solve engineering problems.\",\r\n            \"Understanding of professional and ethical responsibility.\",\r\n            \"To use the techniques, skills, and modern engineering tools which are necessary for engineering practice, recognition of the need for, and an ability to engage in lifelong learning.\"\r\n        ]\r\n    }', 'mfe', 'The Department of Manufacturing Engineering focuses on equipping students with skills in designing and optimizing manufacturing processes. With hands-on learning in advanced technologies like robotics and automation, students are prepared for careers in industries like automotive and aerospace. We emphasize innovation, sustainability, and real-world problem-solving for future leaders.', '?	To emerge as a center of excellence, offering Technical education and research opportunities of very high standards to the students, and imparting timeless core values to the learners to serve Multicultural Society.', '{\n  \"points\": [\n    \"Imparting quality education to create efficient Mechanical Engineers who can compete at the global level.\",\n    \"Building state of the art research facilities in Mechanical Engineering in order to enable the faculty and students to learn and disseminate knowledge and innovative in their applications.\",\n    \"Facilitating team work culture, improve the social standards and quality of life of gratitude.\"\n  ]\n}\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `city` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `tenth_score` varchar(10) NOT NULL,
  `twelth_score` varchar(10) NOT NULL,
  `hear_about` varchar(255) NOT NULL,
  `submitted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `city`, `school`, `major`, `tenth_score`, `twelth_score`, `hear_about`, `submitted_at`) VALUES
(1, 'S Harish Kumar', '9922008367@klu.ac.in', '8489812528', 'Theni', 'Nadar Saraswathi Higher Secondary school', 'mech', '480', '556', 'Friend', '2025-02-21 09:08:55'),
(2, 'Praveen ', 'praveenmuniappan@outlook.com', '9080170378', 'Theni ', 'Andal alagar matric hr sec school ', 'se', '73 percent', '49 percent', 'Friend ', '2025-03-16 06:19:42'),
(3, 'Soumiya', 'banu@email.com', '9092108811', 'Andipatty', 'Government Girls Hr Sec school Andipatty', 'cse', '311', ' --', 'Google', '2025-04-04 14:36:14'),
(4, 'Soumiya', 'banu@email.com', '9092108811', 'Andipatty', 'Government Girls Hr Sec school Andipatty', 'ai-and-ds', '311', ' --', 'Google', '2025-04-04 14:37:05'),
(5, 'Soumiya', 'banu@gmail.com', '9092108811', 'Andipatty', 'Government Girls Hr Sec school Andipatty', 'cse', '311', ' --', 'Google', '2025-04-13 17:11:05'),
(6, 'Soumiya', 'banu@gmail.com', '9092108811', 'Andipatty', 'Government Girls Hr Sec school Andipatty', 'ai-and-ds', '311', ' --', 'Google', '2025-04-13 17:12:06'),
(7, 'S. Sivagururajakannan', 'kkannan64014@gmail.com', '8098971965', 'Theni', 'Nadar saraswathi boys higher secondary school', 'it', '415', '400', 'School', '2025-04-17 03:30:30'),
(8, 'PRABAHARAN ', 'prabaharpradeep8@gmail.com', '9025714650', 'Theni', 'Nadar high secondary school,Bodi', 'se', '318', '762', 'Website ', '2025-04-22 08:37:12'),
(9, 'PRABAHARAN ', 'prabaharpradeep8@gmail.com', '9025714650', 'Theni', 'Nadar high secondary school,Bodi', 'se', '318', '762', 'Website ', '2025-04-22 08:38:31'),
(10, 'PRABAHARAN ', 'prabaharpradeep8@gmail.com', '9025714650', 'Theni', 'Nadar high secondary school,Bodi', 'se', '318', '762', 'Website ', '2025-04-22 08:38:43'),
(11, 'PRABAHARAN ', 'prabaharpradeep8@gmail.com', '9025714658', 'Theni', 'Nadar high secondary school,Bodi', 'se', '318', '762', 'Website ', '2025-04-22 08:38:57'),
(12, 'VIJAYA HARSHITHA B', 'yesbas1983@gmail.com', '9942613777', 'VIRUDHUNAGAR', 'KSHATRIYA GIRLS HR SEC SCHOOL', 'ai-and-ds', '413', '0000', '6374273341', '2025-04-23 07:57:06'),
(13, 'SUGIRTHA SHREE S', 'selvacatering@gmail.com', '9629006667', 'PERIYAKULAM', 'RENUGA VIDHYALAYAM SCHOOL LAKSHMIPURAM', 'ai-and-ds', '413', '437', 'WEBSITE', '2025-05-08 07:27:01'),
(14, 'Agneeswaran', 'agneeshs2@gmail.com', '8825517438', 'chinnamanur', 'St. Aloysius Hr. Sec. School, Royappanpatty', 'it', '379', '441', 'Social Media', '2025-05-10 07:25:35'),
(15, 'Harrys R', 'manimalachandran008@gmail.com', '7871711782', 'Pattiveeranpatti ', 'NSVV Mat Hr Sec School, Pattiveeranpatti ', 'ai-and-ds', '349', '380', 'Website ', '2025-05-13 14:26:48'),
(16, 'HASEENA FATHIMA ', 'jameemahajeeyar@gmail.com', '9842145860', 'Uthamapalayam', 'VELAMMALVIDYALAYA Muthuthevanpatti THENI', 'ai-and-ds', '356', '323', 'Website ', '2025-05-13 14:32:39'),
(17, 'Riya ', 'ashrn007@gmail.com', '9894106216', 'MADURAI', 'Ponmani metric higher secondary school', 'cse', '412', '494', 'Friends', '2025-05-16 02:17:32'),
(18, 'KISHORE J', 'www.jeyachandran01@gmail.com', '9345373704', 'KOMBAI', 'SKP HR SEC SCHOOL KOMBAI', 'eee', '299', '428', 'PROFESSOR ', '2025-05-19 07:06:14'),
(19, 'RAMKUMAR A', 'ramkumarva33@gmail.com', '9487758285', 'Dindigul', 'NSVV Hr Sec School Pattiveeranpatti', 'ai-and-ds', '415', '466', 'Friend', '2025-05-20 06:21:25'),
(20, 'V Vasanth', 'Vasanthvasa6958@gmail.com', '9159514183', 'Kodaikanal', 'St saviour hr.sec school,Kodaikanal', 'cse', '403', '398', 'Relatives', '2025-05-20 12:33:27'),
(21, 'nanthini P', 'naveenkumar432004@gmail.com', '9095038168', 'dindigul', 'annai vailankanni ', 's-and-h', '298', '440', 'social media', '2025-05-21 09:03:42'),
(22, 'ZAP', 'zaproxy@example.com', '9999999999', 'East Romaineburgh', 'ZAP', 'cse', 'ZAP', 'ZAP', 'ZAP', '2025-05-25 08:14:22'),
(23, 'POOVESH M', 'poveshpoovesh586@gmail.com', '8667527583', 'THENI', 'GOVERNMENT KALLAR HIGHER SECONDARY SCHOOL', 'cse', '292', '346', 'SCHOOL TEACHERS,', '2025-05-26 01:37:27'),
(24, 'Nivetha D', 'nivethad190398@gmail.com', '8681048360', 'Theni', 'K.V.A Girls HSE', 'ece', '467', '949', 'Website', '2025-05-29 03:55:54'),
(25, 'Kanika S', 'balakrishkt@gmail.com', '9650636867', 'Andipatty', 'SKA Matriculation School', 'cse', '393', '444', 'Relatives', '2025-06-07 10:17:11'),
(26, 'Preethi ', '11biog2raglm@gmail.com', '9688115553', 'theni', 'tmhnumhss mtp', 'ai-and-ds', '438', '499', 'school', '2025-06-08 13:58:54'),
(27, '* * * Get Free Bitcoin Now: https://shoecareclinic.co.uk/index.php?sbs1fy * * * hs=00ad738f40d5e92cd', 'pazapz@mailbox.in.ua', '957313568125', 'ty27j1', 'dzqar2', 'mfe', 'rkgzth', 'dwyptv', 'rilfk2', '2025-06-09 08:29:50'),
(28, '* * * <a href=\"https://shoecareclinic.co.uk/index.php?sbs1fy\">Claim Free iPhone 16</a> * * * hs=00ad', 'pazapz@mailbox.in.ua', '957313568125', 'ty27j1', 'dzqar2', 'mfe', 'rkgzth', 'dwyptv', 'rilfk2', '2025-06-09 08:29:52'),
(29, '* * * Get Free Bitcoin Now: https://visalynk.com/index.php?nobgy9 * * * hs=b7fcf8c98ae297954756828dd', 'pazapz@mailbox.in.ua', '704323028380', 'giadh8', '9mhhox', 'mfe', '7e8598', 'jt3bz4', 'hmo09v', '2025-06-09 08:30:16'),
(30, '* * * <a href=\"https://visalynk.com/index.php?nobgy9\">Win Free Cash Instantly</a> * * * hs=b7fcf8c98', 'pazapz@mailbox.in.ua', '704323028380', 'giadh8', '9mhhox', 'mfe', '7e8598', 'jt3bz4', 'hmo09v', '2025-06-09 08:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int NOT NULL,
  `sectionName` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `sectionName`, `content`) VALUES
(1, 'marquee', '{\"content\":\"Celebrating Excellence! 5 Teams from Our College Shortlisted for Smart India Hackathon Finals. Two Teams from Our College Emerge Victorious at Smart India Hackathon Finals!\\r\\n\"}'),
(2, 'heroSection', '[{\"subHeading\":\"-\",\"heading\":\"NSCET Annual Day \' 24\",\"paragraph\":\"Anitha Sampath attended NSCET Annual Day 2024, spreading joy and motivation!\",\"btn\":\"-\",\"image\":\".\\/media\\/heroSection\\/SBD_8445.JPG\",\"url\":\"-\"}]'),
(3, 'timerSection', '[{\"title\":\"ICAMS 2K24\",\"time\":\"HYBRID MODE\",\"countdown\":\"2024\\/03\\/05\"}]'),
(4, 'newsSection', '[{\"title\":\"9th Graduation day\",\"date\":\"April 20, 2024\",\"tags\":\"Graduation day 2024\",\"imgUrl\":\".\\/media\\/newsSection\\/2024  Graduation Invitation.jpg\",\"url\":\"#\"},{\"title\":\"International Conference ICRTT\\u201925 \",\"date\":\"April 30, 2025\",\"tags\":\"conference\",\"imgUrl\":\".\\/media\\/newsSection\\/1743944769043.jpeg\",\"url\":\"https:\\/\\/nscet.org\\/ICRTT2025\\/\"},{\"title\":\"15th Annual Cultural Fest \\u2013 Euphoria-25!\",\"date\":\"March 28, 2025\",\"tags\":\"#\",\"imgUrl\":\".\\/media\\/newsSection\\/1743131768874.jpeg\",\"url\":\"#\"},{\"title\":\"11th Graduation Day at NSCET! \",\"date\":\"March 29, 2025\",\"tags\":\"graduationday\",\"imgUrl\":\".\\/media\\/newsSection\\/1743343315535.jpeg\",\"url\":\"#\"}]'),
(5, 'videoSection', '[\"https:\\/\\/www.youtube.com\\/embed\\/qfN2MmAUs7U?si=UGIKSzZYSs2HgLq3\",\"https:\\/\\/www.youtube.com\\/embed\\/x1Fzp_Xx7qw?si=2j2s7Z7CNOJCL_xm\"]'),
(6, 'imgSection', '[\".\\/media\\/imageSection\\/sih-day.jpeg\",\".\\/media\\/imageSection\\/website - TECH CREED.jpg\",\".\\/media\\/imageSection\\/website - CYBER TORTOISE.jpg\",\".\\/media\\/imageSection\\/website - INNOVATION SQUAD.jpg\",\".\\/media\\/imageSection\\/website - TECH TITANS3.jpg\",\".\\/media\\/imageSection\\/website - TECHATSUKI.jpg\"]'),
(7, 'principalDesk', '{\"name\":\"Dr.C.Mathalai Sundaram M.E.,MBA.,Ph.D., Principal, NSCET\",\"content\":\"As a 21st century organization, NSCET desires to set an approach to learning that incorporates inquiry, research, analytical thinking and an ethical approach that becomes a lifetime habit. I strongly believe that education is a collaborative effort that involves professional administrators, committed teachers and motivated students. We dedicate ourselves as professional administrators in creating a dynamic education programme empowering the students in a global perspective. We are a group of diverse experiences and outlooks, committed to excellence in preparing learners for enriched opportunities worldwide. In short, learning at NSCET is a wholesome package of attitude, challenge and opportunity.\",\"image\":\".\\/media\\/principalSection\\/Principal-photo.jpg\",\"bgUrl\":\"https:\\/\\/nscet.org\\/Home_Assets\\/img\\/dummy\\/about-us.jpg\"}'),
(8, 'ugCourses', '[\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.E - Computer Science & Engineering\",\n    \"imgUrl\": \"./media/ugCoursesSection/CSE.jpg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"cse\"\n  },\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.E - Civil Engineering\",\n    \"imgUrl\": \"./media/ugCoursesSection/CIVIL.jpg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"civil\"\n  },\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.E - Electrical & Electronics Engineering\",\n    \"imgUrl\": \"./media/ugCoursesSection/EEE.jpg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"eee\"\n  },\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.E - Electronics & Communication Engineering\",\n    \"imgUrl\": \"./media/ugCoursesSection/ECE.jpg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"ece\"\n  },\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.E - Mechanical Engineering\",\n    \"imgUrl\": \"./media/ugCoursesSection/MECH.jpeg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"mech\"\n  },\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.Tech - Artificial Intelligence And Data Science\",\n    \"imgUrl\": \"./media/ugCoursesSection/AIDS.jpg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"ai-and-ds\"\n  },\n  {\n    \"subHeading\": \"-\",\n    \"name\": \"B.Tech - Information Technology\",\n    \"imgUrl\": \"./media/ugCoursesSection/IT.jpg\",\n    \"date\": \"January 4, 2024\",\n    \"short\": \"it\"\n  }]'),
(9, 'pgCourses', '[\n    {\n        \"subHeading\": \"-\",\n        \"name\": \"M.E - Manufacturing Engineering\",\n        \"imgUrl\": \"./media/pgCoursesSection/MANUFACTURE.jpg\",\n        \"date\": \"January 4, 2024\",\n        \"short\": \"mfe\" \n    },\n    {\n        \"subHeading\": \"-\",\n        \"name\": \"M.E - Structural Engineering\",\n        \"imgUrl\": \"./media/pgCoursesSection/STRUCTURAL.jpg\",\n        \"date\": \"January 4, 2024\",\n        \"short\": \"se\" \n    }\n]\n'),
(10, 'counterSection', '[]'),
(11, 'requiterSection', '[\".\\/media\\/requiterSection\\/client11.png\",\".\\/media\\/requiterSection\\/client12.jpg\",\".\\/media\\/requiterSection\\/client12.png\",\".\\/media\\/requiterSection\\/client13.png\",\".\\/media\\/requiterSection\\/client14.png\",\".\\/media\\/requiterSection\\/client15.png\",\".\\/media\\/requiterSection\\/client16.png\"]'),
(12, 'modelSection', '{\"title\":\"I\'m a Modal\",\"content\":\"To showcase the Important Event and Festivel. Click anywhere to close\"}');

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

CREATE TABLE `laboratories` (
  `id` int NOT NULL,
  `dept_short` varchar(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non_teaching`
--

CREATE TABLE `non_teaching` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_teaching`
--

INSERT INTO `non_teaching` (`id`, `name`, `position`, `dept`) VALUES
(1, 'Mr. J. Narayanasamy', 'Lab Assistant', 'Mech'),
(2, 'Mr. M. Santhosh Pandian', 'Lab Assistant', 'Mech'),
(3, 'Mr. M. Vijayakumar', 'Lab Assistant', 'Mech'),
(4, 'Mr. M. Ananth', 'Workshop Instructor', 'Mech'),
(5, 'Mr. Edison Anandaraj', 'Lab Assistant', 'Mech'),
(6, 'Mr. S. Ambarish', 'Lab Assistant', 'Mech'),
(7, 'Mr. T. Balakrishnan', 'Lab Assistant', 'Civil'),
(8, 'Mr. G. Parthiban', 'Lab Assistant', 'Civil'),
(9, 'Mr. M. Pravin', 'Lab Assistant', 'Civil'),
(10, 'Mr. K. Samundeeswaran', 'Lab Assistant', 'ECE'),
(11, 'Mr. P. Gopinathan', 'Lab Assistant', 'ECE'),
(12, 'Ms. A. Mala', 'Lab Assistant', 'ECE'),
(13, 'Mr. K.M. Senthil Kumar', 'Lab Assistant', 'EEE'),
(14, 'Mr. N. Naresh Krishnan', 'Lab Assistant', 'EEE'),
(15, 'Mr. P. Kumaravel', 'Lab Assistant', 'CSE'),
(16, 'Mr. S. Lawrence', 'Lab Assistant', 'CSE'),
(17, 'Mrs. M. Shobana', 'Lab Assistant', 'CSE'),
(18, 'Mr. T. Muthuraj', 'System Admin', 'CSE'),
(19, 'Mrs. P.Amutha', 'Lab Assistant', 'CSE'),
(20, 'Mrs. S. Kavitha', 'Lab Assistant', 'AI & DS'),
(21, 'Mr. A. Jainulabudeen', 'Lab Assistant', 'S&H');

-- --------------------------------------------------------

--
-- Table structure for table `papers_list`
--

CREATE TABLE `papers_list` (
  `id` int NOT NULL,
  `main_author_name` varchar(500) NOT NULL,
  `paper_authors` text NOT NULL,
  `paper_id` varchar(500) NOT NULL,
  `paper_title` text NOT NULL,
  `paper_pdf` varchar(1000) NOT NULL,
  `transaction_id` varchar(1000) NOT NULL,
  `receipt` varchar(2555) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone_no` varchar(1000) NOT NULL,
  `college_Name` text,
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers_list`
--

INSERT INTO `papers_list` (`id`, `main_author_name`, `paper_authors`, `paper_id`, `paper_title`, `paper_pdf`, `transaction_id`, `receipt`, `created_at`, `phone_no`, `college_Name`, `department`) VALUES
(11, 'Mr. Magesh R.J', '[\"Dr. Janani S\",\"Mr. Mohamed Sameen U\",\"Mr. Kalairishi Sudhakar\"]', 'ICRTT25EC015', 'PIEZOELECTRIC FLOOR MAT FOR ENERGY HARVESTING', 'uploads/1744530696_67fb6d08b20a8_PIEZOELECTRIC FLOOR MAT FOR ENERGY HARVESTING.pdf', '546974692009', 'uploads/1744530696_67fb6d08b20ae_WhatsApp Image 2025-04-13 at 1.18.01 PM.jpeg', '2025-04-13 07:51:37', '9384483521', 'Periyar Maniammai Institute of Science & Technology (Deemed to be University), Vallam, Thanjavur 613403, Tamil Nadu, India', 'Electronics and Communication Engineering'),
(12, 'HARITHA KUMARAN', '[\"KALAIRISHI SUDHAKAR\",\"MOHAMED SAMEEN USMAN ALI\",\"DINESH SASIKUMAR\",\"S.JANANI\"]', 'ICRTT25EC016', 'EXPLORING THE NVIDIA JETSON NANO: A GATEWAY TO AI-POWERED EDGE COMPUTING', 'uploads/1744705680_67fe1890a0c93_EXPLORING THE NVIDIA JETSON NANO A GATEWAY TO AI-POWERED EDGE COMPUTING.pdf', '547165489399', 'uploads/1744705680_67fe1890a0c9b_Transaction for Paper.jpg', '2025-04-15 08:28:00', '9361077730', 'Periyar Maniammai Institute of Science & Technology', 'Electronics and Communication Engineering'),
(13, 'G.KAVITHA/LECTURER EEE', '[\"S.DEVASHREE\",\"S.GOPIKA\",\"P.ANISH\",\"A AAMIN ARSATH\"]', 'ICRTT25EE007', 'AI- driven real time power distribution in Renewable Energy ', 'uploads/1744714159_67fe39af49c56_AI-Driven Real-Time Power Distribution in Renewable Energy-Based Smart Grid EV Charging.docx', 'bshuhaib96@okicic', 'uploads/1744714159_67fe39af49c5f_IMG-20250415-WA0024.jpg', '2025-04-15 10:49:19', '9360521455', 'THIAGARAJAR POLYTECHNIC COLLEGE ', 'Electrical and Electronics Engineering'),
(14, 'Mrs.Tamilselvi K ', '[\"9442583263\",\"6385363917\"]', 'ICRTT25EE005', 'IOT BASED E- VEHICLE MONITORING AND FAULT-FINDING  SYSTEM', 'uploads/1744717140_67fe4554db11b_ICRTT25EE005.pdf', '547111736580', 'uploads/1744717140_67fe4554db123_Screenshot_2025-04-15-17-05-07-85_4336b74596784d9a2aa81f87c2016f50.jpg', '2025-04-15 11:39:01', '9578713865', 'NPR COLLEGE OF ENGINEERING AND TECHNOLOGY ', 'Electrical and Electronics Engineering'),
(15, 'Krishnakant Akhilesh Tiwari', '[\"Chetan Kansal\",\"Divyansh Singh\"]', 'ICRTT25CS003', 'ML-Driven Transactions for E-Commerce', 'uploads/1744717527_67fe46d7c7e07_ML-Driven Transactions for E-Commerce.pdf', '510537128743', 'uploads/1744717527_67fe46d7c7e11_WhatsApp Image 2025-04-15 at 17.13.37_377e2140.jpg', '2025-04-15 11:45:27', '6388359648', 'Raj Kumar Goel Institute Of Technology', 'Computer Science and Engineering'),
(16, 'Logesh S ', '[\"Sathyapriyan M\",\"Vishal ganesh J\",\"Vikram J \",\"Selva perumal  S\"]', 'ICRTT25EE003', 'ALL DAY POWER GENERATION USING SOLAR PV - THERMOELECTRIC GENERATOR HYBRID', 'uploads/1744723948_67fe5feccaf95_ALL day power production with using Thermoelectric generator and solar hybrid.docx', '103225356197', 'uploads/1744723948_67fe5feccaf9c_Screenshot_20250415_190209.jpg', '2025-04-15 13:32:29', '6381520059', 'NPR COLLEGE OF ENGINEERING AND TECHNOLOGY ', 'Electrical and Electronics Engineering'),
(17, 'JEEVADHARANI P ', '[\"LAARA DOLLY S \",\"JEYAVARTHINI T \",\"VASANTH PRABAKARAN R \",\"Dr.K.RAJESH\"]', 'ICRTT25EE006', 'AUTOMATED DUAL AXIS SOLAR TRACKER INTEGRATED WITH WEATHER SENSING', 'uploads/1744726765_67fe6aed6b618_Paper.pdf', '547117159705', 'uploads/1744726765_67fe6aed6b61d_receipt.pdf', '2025-04-15 14:19:25', '+91 82705 18554', 'NPR COLLEGE OF ENGINEERING AND TECHNOLOGY ', 'Electrical and Electronics Engineering'),
(18, 'Vinoth K', '[]', 'ICRTT25EE001', 'RFID-Enabled Intelligent Controller for Seamless E-Bike Access at Urban Toll Gates', 'uploads/1744727176_67fe6c881d3e5_vinoth 15.4.25.docx', 'CICAgMjL2OLfRA', 'uploads/1744727176_67fe6c881d3ed_IMG-20250415-WA0001.jpg', '2025-04-15 14:26:16', '8310596345', 'NPR college of engineering and technology ', 'Electrical and Electronics Engineering'),
(19, 'Vani R', '[\"Jagan K\",\"Bushra Khan\"]', 'ICRTT25EE008', 'RASPBERRY PI POWERED AUTOMATED PLANT WATERING SYSTEM', 'uploads/1744730892_67fe7b0cb25b1_RASPBERRY PI POWERED AUTOMATED PLANT WATERING SYSTEM.pdf', '103235518592', 'uploads/1744730892_67fe7b0cb25b9_ICRTT 25 Raspberry Pi (2).jpeg', '2025-04-15 15:28:12', '9444757461', 'Pyush Kumar', 'Electronics and Communication Engineering'),
(20, 'Pramod Gururajan ', '[\"Samvardhan Singh\",\"Anumita R. Ajit \",\"Nikhil Shivanath \",\"R. Vani\"]', 'ICRTT25EE009', 'Hospital Inspection Using Audit AI', 'uploads/1744736857_67fe9259711d2_Pramod  Abstract.pdf', '103240720538', 'uploads/1744736857_67fe9259711da_Paper receipt  .jpg', '2025-04-15 17:07:37', '8056021433', 'SRM Institute of Science and Technology', 'Electronics and Computer Engineering'),
(21, 'KEERTHIKA P ', '[\"RAMYA M \",\"SRISAISAKTHI R \",\"Dr.K.KANIMOZHI\"]', 'ICRTT25EE004', 'FABRICATION OF WEARABLE SENSOR BASED ON TRIBOELECTRIC NANOGENERATORS FOR RESPIRATORY MONITORING', 'uploads/1744739903_67fe9e3f57ece_Keerthika 15.4.25 paper.pdf', '547142088234', 'uploads/1744739903_67fe9e3f57ed4_receipt keerthi.pdf', '2025-04-15 17:58:24', '+91 9080474770', 'NPR COLLEGE OF ENGINEERING AND TECHNOLOGY ', 'Electrical and Electronics Engineering'),
(22, 'Dr.S.Aiswarya', '[\"X. Shobia Rosalin Marrie \",\"P. Sharmila Sahayarani \",\"R. Japhia Pauline \",\"R. Mahaalakshmy \"]', 'ICRTT25EC018', 'The IoT- Based Rural Water Supply Management System ', 'uploads/1744741269_67fea395cf8ba_Conference Paper IoT.pdf', '510520704950', 'uploads/1744741269_67fea395cf8c6_receipt conference .pdf', '2025-04-15 18:21:09', '8608921657', 'University College of Engineering Dindigul.', 'Electronics and Communication Engineering'),
(23, 'Sudharsan M', '[\"Naresh karthik ms\",\"Gokula krishnan\",\"Logeswaran s\"]', 'ICRTT25EE002', 'Instant Power Production  Using Piezoelectric Sensor Dedicated to        Smart Phone', 'uploads/1744741587_67fea4d3b16ec_PAPER PRESENTATION EEE 2025 N.pdf', '510521111705', 'uploads/1744741587_67fea4d3b16f3_IMG-20250415-WA0058.jpg', '2025-04-15 18:26:27', '7094566960', 'Npr college of engineering and technology ', 'Electrical and Electronics Engineering'),
(25, 'Srihari V M', '[\" Dr.S.Aiswarya\",\"Akshayasri S\",\"Priya Gupta K\",\"Deviga S\"]', 'ICRTT25EC020', 'PROXIMITY-BASED ALARM SYSTEM FOR CHILD SAFETY NEAR OPEN BOREWELLS & DRAINS', 'uploads/1744801312_67ff8e20d71f6_ieee-conference paper for borewell and drains prevent............pdf', 'T2504161627208077536733', 'uploads/1744801312_67ff8e20d71fd_WhatsApp Image 2025-04-16 at 4.30.48 PM.jpeg', '2025-04-16 11:01:53', '9487244524', 'University college of Engineering, Dindigul', 'Electronics and Communication Engineering'),
(26, 'N.Deepashree', '[\"Dr.M.K.Banga\"]', '10', 'Software Reusability and Testing Using Machine  Learning ', 'uploads/1745391633_68089011b4625_deepa con as on 2 April IEEE FORMAT-1.pdf', '511378845616', 'uploads/1745391633_68089011b462c_WhatsApp Image 2025-04-22 at 10.48.23 PM.jpeg', '2025-04-23 07:00:33', '8431339837', 'Dayananda Sagar University', 'Computer Science and Engineering'),
(27, 'Dhivya R', '[]', 'NA', 'Hybrid techniques for Vision detection ', 'uploads/1745395110_68089da63046e_Hybrid techniques for Vision detection - Abstract.jpeg', '103640753703', 'uploads/1745395110_68089da630473_Payment Receipt.jpeg', '2025-04-23 07:58:30', '9791294789', 'Mohamed Sathak Engineering College', 'Information Technology'),
(28, 'M VIMAL', '[]', 'DataScience', 'DESCRIPTIVE ANALYSIS OF SALES DATA TO  IMPROVE BUSINESS STRATEGY', 'uploads/1745484137_6809f969d4db8_Descriptive_SalesData.pdf', '511409922977', 'uploads/1745484137_6809f969d4dbf_Descriptive_SalesData.pdf', '2025-04-24 08:42:18', '9597515629', 'M VIMAL ', 'Artificial Intelligence and Data Science'),
(29, 'A SUMITHRA', '[]', 'Deep Learning ', 'Automated Diabetic Retinopathy Detection', 'uploads/1745484917_6809fc75da4b3_IEEE REPORT FINAL.pdf', '511444117090', 'uploads/1745484917_6809fc75da4be_Screenshot_2025-04-24-14-24-32-19_4336b74596784d9a2aa81f87c2016f50.jpg', '2025-04-24 08:55:18', '8072463090', 'A SUMITHRA ', 'Artificial Intelligence and Data Science'),
(30, 'Ramya P', '[\"Srikanth C\",\"Nagendran P\",\"Veera Manoj V\"]', 'ICRTT25IT001', 'CARDIOVASCULAR DISEASE PREDICTION WITH ML USING RANDOM FOREST CLASSIFIER ALGORITHM', 'uploads/1745577436_680b65dca6464_Cardiovascular_Paper_ (1).pdf', '548195395666', 'uploads/1745577436_680b65dca646b_payment-yogadinesh.jpeg', '2025-04-25 10:37:17', '9655343241', 'Mr. S. Yogadinesh ', 'Computer Science and Engineering'),
(31, 'SHAAFIYA PARVEEN K', '[]', 'AI', 'Medicinal Plant Identification and Health-Based  Recommendation Syste', 'uploads/1745588090_680b8f7a0295f_IEEE paper.pdf', '511501078562', 'uploads/1745588090_680b8f7a02965_IMG-20250425-WA0011.jpg', '2025-04-25 13:34:50', '9442108806', 'CARE COLLEGE OF ENGINEERING ', 'Artificial Intelligence and Data Science'),
(32, 'Sheshagiri Achar K P ', '[\"Sanjay B L\",\"Chandan Gowda L M\",\"Tejas G V\",\"R Aruna\"]', 'ICRTT25EC023', 'A Review of Low-Cost and Machine Learning-Driven BCI  Control Architectures', 'uploads/1745599864_680bbd7866f06_review_paper.pdf', '103780378015', 'uploads/1745599864_680bbd7866f0e_IMG-20250425-WA0016.jpg', '2025-04-25 16:51:04', '7760768692', 'AMC ENGINEERING COLLEGE Bangalore ', 'Electronics and Communication Engineering'),
(33, 'Pradeep Nalawade ', '[\"Pallavi S\",\"Prathibha H\",\"Naveen Balundagi \",\"Aruna ramalingam \"]', 'ICRTT25EC021', 'Monitoring Structural Integrity and Water levels and Advanced Techniques for Crack Detection', 'uploads/1745600878_680bc16e7177c_review_paper final.pdf', '511341040803', 'uploads/1745600878_680bc16e71783_IMG-20250423-WA0005.jpg', '2025-04-25 17:07:58', '8088968407', 'AMC engineering college ', 'Electronics and Communication Engineering'),
(34, 'Logesh A', '[\"Hariharan K\",\"Sibi S\",\"Sudha R\"]', 'ICRTT25CS015', 'Pothole Detection Techniques Using Deep Learning and YOLO Variants ', 'uploads/1745845520_680f7d10323bc_Pothole_Detection_Techniques_Using_Deep_Learning_and_YOLO.pdf', '103923928771', 'uploads/1745845520_680f7d10323c3_Screenshot_2025-04-28-18-33-28-194_com.google.android.apps.nbu.paisa.user.jpg', '2025-04-28 13:05:20', '638033648', 'Chettinad college of engineering and technology ', 'Computer Science and Engineering'),
(35, 'Balamurugan k', '[\"J.jenisha\",\"Harish.R\",\"Yukesh kannan.G\",\"Vasu dev.N\"]', 'ICRTT25EC025', 'AR Based Learning and Career Guidance Platform ', 'uploads/1745853465_680f9c191ae34_journal paper final.docx', '511881248103', 'uploads/1745853465_680f9c191ae3b_IMG-20250428-WA0005.jpg', '2025-04-28 15:17:45', '9443342582', 'Chettinad college of engineering and technology ', 'Electronics and Communication Engineering'),
(36, 'Karuppusamy M', '[\"Annalakshmi D\",\"Manivel S\",\"Santhiya D\"]', 'ICRTT25CS013', 'AI-Enabled Smart safety wearable for child Protection', 'uploads/1745854505_680fa029ebdeb_AI-Enabled Smart Safety Wearable for Child Protection.pdf', '511886969823', 'uploads/1745854505_680fa029ebdf1_Payment.jpeg', '2025-04-28 15:35:06', '8608515590', 'Chettinad College of Engineering & Technology', 'Computer Science and Engineering'),
(37, 'Arun Krishna. P', '[\"Sandhiya. S\"]', ' ICRTT25CS018', 'Voice Biometric Based Security Authentication System', 'uploads/1745860866_680fb9023b306_ConferenceFormat.pdf', '511861150799', 'uploads/1745860866_680fb9023b30d_PaymentReceipt.jpg', '2025-04-28 17:21:06', '9345317779', 'Jerusalem College of Engineering', 'Computer Science and Engineering'),
(38, 'DEVA DHARSHINI C', '[]', 'ICRTT25CS021', 'AUTO BLURRING TECHNOLOGY IN CAMERA BY USING AI-ML', 'uploads/1745903958_6810615607d9b_paper conference.pdf', '284017584153', 'uploads/1745903958_6810615607da4_RECEIPT.jpg', '2025-04-29 05:19:18', '6385288577', 'SRI RANGANATHAR INSTITUTE OF ENGINEERING AND TECHNOLOGY', 'Computer Science and Engineering'),
(39, 'A.Prasannakumari	', '[\"Dr.G.Kannan\"]', 'ICRTT25IT008', 'Early Analysis and Prediction of Lung Cancer using Machine Learning Classifiers', 'uploads/1745921912_6810a77810a34_Early Prediction of Lung Cancer.pdf', '511884951683', 'uploads/1745921912_6810a77810a3a_IMG-20250429-WA0014 (1).jpg', '2025-04-29 10:18:32', '9843193357', 'Annamalai University , Annamalai Nagar, Chidambaram', 'Information Technology'),
(40, 'T.Harish', '[\" P.Udhaya Prakash\",\" M.Tamil Selvan\"]', 'ICRTT25CS029', 'Facial Composite Generation and Identification in Forensic Investigations', 'uploads/1745933664_6810d560166ff_conference paper.pdf', '511921610481', 'uploads/1745933664_6810d56016704_WhatsApp Image 2025-04-29 at 7.03.09 PM.jpeg', '2025-04-29 13:34:25', '9894477964', 'N.S.N. College of Engineering and Technology, Karur', 'Computer Science and Engineering'),
(41, 'Deepakkannan R', '[\"Dineshkumar R\",\"Periyakandiyammal M\",\"Hemalatha V\"]', ' ICRTT25CS023', 'Desktop Voice Assistance', 'uploads/1745935111_6810db0797489_Desktop Voice Assistance.pdf', '548588603180', 'uploads/1745935111_6810db079748f_paid.jpg', '2025-04-29 13:58:31', '7806868750', 'N.S.N. College of Engineering and Technology', 'Computer Science and Engineering'),
(42, 'Dineshkumar A', '[\"Uthirakumar V\",\"Hemalatha V\"]', 'ICRTT25CS024', 'Easyweb - lightweight programming language ', 'uploads/1745937410_6810e402a4a59_Easyweb-IEEE-1.docx', '100157765110', 'uploads/1745937410_6810e402a4a62_IMG-20250429-WA0001.jpg', '2025-04-29 14:36:50', '9361318372', 'N.S.N college of engineering and technology ', 'Computer Science and Engineering'),
(43, 'M.prithivraj', '[\"P.sundharasekar\",\"C.jegan\",\"V.Hemalatha assistant prof,cse\"]', 'ICRTT25CS031', 'First Step Learning Platform ', 'uploads/1745940575_6810f05f2c85b_First Step Learning Platform journel.docx', '548547830002', 'uploads/1745940575_6810f05f2c863_IMG-20250429-WA0006.jpg', '2025-04-29 15:29:36', '9751925823', 'Nsn college of engineering and technology, karur ', 'Computer Science and Engineering'),
(44, 'M.prithivraj', '[]', 'ICRTT25CS040', 'First Step Learning Platform ', 'uploads/1745941048_6810f238af209_First Step Learning Platform journel.docx', '548547830002 ', 'uploads/1745941048_6810f238af211_IMG-20250429-WA0006.jpg', '2025-04-29 15:37:30', '9751925823', 'Nsn college of engineering and technology, karur ', 'Computer Science and Engineering'),
(45, '3', '[\"9080586934\"]', 'ICRTT25CS032', 'SUGARCANE DISEASES PREDICTION AND TREATMENT SYSTEM ', 'uploads/1745942182_6810f6a613d6b_report.pdf', '103991029660', 'uploads/1745942182_6810f6a613d72_Screenshot_2025_0429_212236.jpg', '2025-04-29 15:56:22', '7810028284', 'NSN COLLEGE OF ENGINEERING AND TECHNOLOGY ', 'Computer Science and Engineering'),
(46, 'Ms.Sangeetha Raj S ', '[]', 'ICRTT25CS035', 'A Supervised Learning Framework for Predicting GSC Antibody  Seropositivity in Guillain–Barré Syndrome Using Multivariate Clinical  and Demographic Indicators', 'uploads/1745944064_6810fe0057098_final paper supervised gbs research 2.pdf', '511907004834', 'uploads/1745944064_6810fe005709e_IMG-20250429-WA0070.jpg', '2025-04-29 16:27:44', '7870810384', 'AMC ENGINEERING COLLEGE ', 'Computer Science and Engineering'),
(47, 'SRIDHAR. S', '[\"P.SIVABSLAKRISHANAN\",\"M.RANJITHA\"]', 'ICRTT25CS025', 'Image Modification And Edit Detection ', 'uploads/1745944300_6810feec35ea0_image modification and edit detection IEEE.pdf', '103992901436', 'uploads/1745944300_6810feec35ea8_IMG-20250429-WA0006.jpg', '2025-04-29 16:31:40', '9344264059', 'N.S.N COLLEGE OF ENGINEERING AND TECHNOLOGY ', 'Computer Science and Engineering'),
(48, 'Kavana R', '[\"Mahalakshmi B\",\"Manoj Gowda M\",\"Kalyan G V\",\"Manoj S\"]', 'ICRTT25CS034', '  A secure data sharing and authorized framework for e-healthcare', 'uploads/1745944967_6811018707d2f_Dsas Paper.pdf', 'T2504292208087841788355', 'uploads/1745944967_6811018707d36_WhatsApp Image 2025-04-29 at 22.09.21_f14ab91c.jpg', '2025-04-29 16:42:47', '9632808006', 'AMC Engineering College', 'Computer Science and Engineering'),
(49, 'Prof. B Jaya Karuna', '[\"Prof. Priyanka Nilesh Chavan\",\"Arpita Chandrashekar Mogavir\",\"Chandana R\"]', 'ICRTT25IT010', 'EARLY DRUG DISCOVERY: TARGET IDENTIFICATION, SCREENING, AND OPTIMIZATION USING GCN', 'uploads/1745945449_68110369a74a9_Abstract_Early_Drug_Discovery.pdf', '511905090931', 'uploads/1745945449_68110369a74af_09c74fed-7e0e-4b16-81bf-d3b684fb07f0.jpeg', '2025-04-29 16:50:49', '98852 35961', 'AMCEC Engineering College ( B Shree Nikhil)', 'Information Technology'),
(50, 'Suraj Parashar ', '[\"Priyanka Nilesh Chavan \",\"Soumya Roushan \",\"Uday Kr. Sahu\",\"Sibu Bourah\"]', 'ICRTT25CS028', 'Real Time Flood Forecast Using ML ', 'uploads/1745948892_681110dc2f716_Abstract final.pdf', 'NEF31372376053047878c0106a83eaf11ee', 'uploads/1745948892_681110dc2f721_IMG_7460.png', '2025-04-29 17:48:12', '7091905290', 'Amc Engineering College ', 'Computer Science and Engineering'),
(51, 'Noor Azad ', '[\"Ms. B.Vijaya Nirmala \",\"Harish N S \",\"Mahadev \"]', 'ICRTT25CS027', 'Spoiled food detection and removal ', 'uploads/1745952113_68111d71893c0_New IEEE.pdf', 'T2504292356033301142595', 'uploads/1745952113_68111d71893ca_TransactionReceipt3759899050943087767.jpeg.pdf', '2025-04-29 18:41:53', '9318309422', 'AMC ENGINEERING COLLEGE ', 'Computer Science and Engineering'),
(52, 'Mrs.P.Shantha Devi', '[\"Vijayalakshmi G \",\"Shanjini S \",\"Saranya R\"]', 'ICRTT25EC27', 'Eco Marine: Smart boat for plastic free waters ', 'uploads/1745988880_6811ad10bbdcc_EcoMarine abstract (1).pdf', 'T250430094424628060705', 'uploads/1745988880_6811ad10bbdd5_IMG-20250430-WA0000.jpg', '2025-04-30 04:54:40', '6381902003', 'Nadar Saraswati College of Engineering and Technology ', 'Electronics and Communication Engineering'),
(53, 'Sasinath D', '[\"Surya V\",\"Vaishali U\",\"Sangeetha C\"]', 'ICRTT25CS016', 'Efficient Automated Number Plate Recognition System using YOLOv8 and Paddle OCR', 'uploads/1745991252_6811b6544b866_Efficient Automated Number Plate Recognition System using YOLOv8 and Paddle OCR.pdf', '979614931205', 'uploads/1745991252_6811b6544b86e_Payment.jpg', '2025-04-30 05:34:12', '8825782192', 'Chettinad College of Engineering and Technology', 'Computer Science and Engineering'),
(54, 'Santhiya K', '[\"8270497982\",\"9585142660\"]', 'ICRTT25AD005', 'Multi Model CNN based stroke detection from CT images and Clinical Data', 'uploads/1745991386_6811b6da65325_santhiya_paper.pdf', '284098748709', 'uploads/1745991386_6811b6da6532b_Screenshot_20250430_110140.jpg', '2025-04-30 05:36:27', '9363187749', 'Chettinad College of Engineering and Technology ', 'Computer Science and Engineering'),
(55, 'Mathan Raj M', '[\"Nirmalraj K\",\"Karthisan M\",\"Sangeetha C\"]', 'ICRTT25CS039', 'FloodScout: Machine Learning and Real-Time  Geospatial Intelligence for Flood Hotspot Prediction  and Disaster Resilience', 'uploads/1745992020_6811b9545f87e_confernce paper.pdf', '548617741837', 'uploads/1745992020_6811b9545f884_WhatsApp Image 2025-04-30 at 11.14.55_8fee0c68.jpg', '2025-04-30 05:47:00', '6379152566', 'Chettinad College of Engineering and Technology ', 'Computer Science and Engineering'),
(56, 'P.Tharika', '[]', 'ICRTT25EC28', 'An IoT based Automatic vehicle Accident Detection and Visual Situation Reporting System ', 'uploads/1745992903_6811bcc79e3ec_1000046685.pdf', '178901000017346', 'uploads/1745992903_6811bcc79e3f2_Amount paid.pdf', '2025-04-30 06:01:43', '9360169826', 'Nadar saraswati college of engineering and technology ', 'Electronics and Communication Engineering'),
(57, 'A Rajalashmi ', '[]', 'ICRTT25AD004', 'Hybrid machine learning and deep learning approaches for Big Data Processing ', 'uploads/1745993883_6811c09b8fd37_ml and dl-journal.pdf', 'ICRTT25AD004', 'uploads/1745993883_6811c09b8fd3d_IMG-20250429-WA0008.jpg', '2025-04-30 06:18:04', '8610079458', 'P S.R.R College of Engineering ', 'Artificial Intelligence and Data Science'),
(58, 'RAMYA K', '[\"YUVASRITHA S - 9342634770\",\"VENKATALAKSHMI L - 9677334211\"]', 'ICRTT25CS030', 'Hybrid Machine Leaning Techniques for Smart Energy Forecasting and Optimization', 'uploads/1745993946_6811c0da7533c_Hybrid Machine Leaning Techniques for Smart Energy.pdf', '512046984434', 'uploads/1745993946_6811c0da75344_Transaction-receipt .jpg', '2025-04-30 06:19:06', '9345677190', 'Chettinad College of Engineering and Technology ', 'Computer Science and Engineering'),
(59, 'Nallamilli Kavita Reddy', '[\"Dr. Swetha Rani. L \"]', 'ICRTT25EC29', 'Hybrid CMOS-Memristor based Logic gates Design', 'uploads/1745994839_6811c4578624c_abstract.pdf', 'T2504301201448050787431', 'uploads/1745994839_6811c45786251_WhatsApp Image 2025-04-30 at 12.02.44.jpeg', '2025-04-30 06:33:59', '8008461231', 'AMC College of Engineering', 'Electronics and Communication Engineering'),
(60, 'Venkatesh S', '[\"Dr T Gobinath\",\"Monish M\",\"Thanigaivel J\"]', 'ICRTT25CS041', 'A Machine Learning-Driven Framework for DoS Attack Detection in Cluster-Based Wireless Sensor Networks', 'uploads/1745995293_6811c61dec3c1_IEEE_paper_WNS.pdf', '548655539805', 'uploads/1745995293_6811c61dec3ca_WhatsApp Image 2025-04-30 at 12.10.50_883eaebe.jpg', '2025-04-30 06:41:33', '7708345336', 'Chettinad College Of Engineering And Technology', 'Computer Science and Engineering'),
(61, 'Abirami Kayathiri S', '[\"\",\"\"]', 'ICRTT25AD006', 'cloud-powered AI platform for vulnerability Detection in Open-Source software', 'uploads/1745996421_6811ca85df9e1_Cloud-Powered AI Platform for Vulnerability Detection in Open-Source Software.docx', 'T2504301155511265971835', 'uploads/1745996421_6811ca85df9e9_TransactionReceipt6458599233349943342.jpeg', '2025-04-30 07:00:22', '7530008380', 'NSCET', 'Artificial Intelligence and Data Science'),
(62, 'Pratheesh R', '[\"Pranav Jeyan V\",\"Srikanth K\",\"Gobinath T\"]', 'ICRTT25CS042', 'Machine learning-based strategy for efficient node localization in wireless sensor networks', 'uploads/1745998724_6811d384965d0_Machine learning-based strategy for efficient node localization in wireless sensor networks.pdf', '512035113836', 'uploads/1745998724_6811d384965d7_receipt.jpg', '2025-04-30 07:38:44', '9342798869', 'Chettinad College of Engineering and Technology', 'Computer Science and Engineering'),
(63, 'Sree Lakshmi M', '[]', 'ICRTT25CS050', ' SENTRY CONNECT (Smart Early Notification and Tracking Response System): An AI-Powered Early Warning and Alert System for Terror Prevention in Conflict-Prone Zones (With Reference to the Pahalgam Attack) ', 'uploads/1746004190_6811e8de7653f_SENTRY CONNECT ABSTRACT FINAL.pdf', '512051100281', 'uploads/1746004190_6811e8de76545_NPR college receipt.jpg', '2025-04-30 09:09:50', '8778464527', 'Sethu Institute of Technology', 'Computer Science and Engineering'),
(64, 'Venishkumar T', '[\"Jaseema A\",\"Thenmozhi K\"]', 'ICRTT25EC26', 'AI/ML Model generation for Industrial Sector-Defect  detection in bottle manufacturing and Human posture estimation  for manpower productivity improvement  ', 'uploads/1746006017_6811f00139f75_word abstract.pdf', 'T2504301411337570821345', 'uploads/1746006017_6811f00139f7a_TransactionReceipt785340822069858534.jpeg', '2025-04-30 09:40:17', '9095577477', 'Nadar Saraswathi College of Engineering and Technology', 'Electronics and Communication Engineering'),
(65, 'Ram Prasath K', '[\"Vignesh G\",\"Akash V\",\"Yogesh S\",\"Dr.J.Mathalai Raj M.E(CSE) Ph.D.\"]', 'ICRTT25CS046', 'Plant Disease Detection using Deep Learning', 'uploads/1746007531_6811f5ebb785a_Abstract Final.pdf', '548676974039', 'uploads/1746007531_6811f5ebb7860_WhatsApp Image 2025-04-30 at 15.30.06.jpeg', '2025-04-30 10:05:31', '6379610219', 'Nadar Saraswathi College of Engineering and Technology', 'Computer Science and Engineering'),
(66, 'Pradeep Kumar R', '[\"Divya A \",\"Devadharshini V\",\"Sishani K\"]', 'ICRTT25EC33', 'Design and Optimization of a 5.8 GHz Microstrip Patch Antenna for RFID Systems in the ISM Band', 'uploads/1746009333_6811fcf50af26_Abstract.pdf', '512076834279', 'uploads/1746009333_6811fcf50af2f_99786879-d897-4408-9655-6104967eb6cb_payment_confirmation_202504120-040109.png', '2025-04-30 10:35:33', '+91 90033 18223', 'Nadar Saraswathi College of Engineering and Technology ', 'Electronics and Communication Engineering'),
(67, 'Anish S', '[\"Dharani K\",\"Jayasri B\",\"\"]', 'ICRTT25CS022', 'Real-Time Sign Language Recognition And Text  Conversion Using LSTM For Enhanced  Communication Accessibility', 'uploads/1746009581_6811fded83bf8_Survey-live-paper.pdf', '104024733035', 'uploads/1746009581_6811fded83bff_WhatsApp Image 2025-04-30 at 4.07.20 PM.jpeg', '2025-04-30 10:39:41', '9361071464', 'Chettinad College of Engineering and Technology', 'Computer Science and Engineering'),
(68, 'K.R.vijay sanjay kumar', '[]', 'ID:ICRTT25CS045', 'REAL-TIME DRIVER DEPRESSION MONITORING FOR  ACCIDENT PREVENTION IN SMART VEHICLES', 'uploads/1746012450_681209225d24e_team tech titans conference paper.pdf', '512001236966', 'uploads/1746012450_681209225d255_Screenshot_2025-04-30-16-55-39-572_com.google.android.apps.nbu.paisa.user.jpg', '2025-04-30 11:27:30', '8015539451', 'Chettinad college of engineering and technology ', 'Computer Science and Engineering'),
(69, 'Karthikeyan M', '[\"Gokul NL\",\"Ragul K\"]', 'ICRTT25CS043', 'Early Diabetes Prediction Using AI Models and EHR Data', 'uploads/1746012930_68120b025725d_conference paper.pdf', '548674460592', 'uploads/1746012930_68120b0257264_conference fee.jpg', '2025-04-30 11:35:30', '9363313534', 'Chettinad College of Engineering and Technology', 'Computer Science and Engineering'),
(70, 'S. Prathap', '[]', 'ICRTT25EC31', 'Smart Spectrum Sharing and Sensing in Cognitive Radio Network', 'uploads/1746017499_68121cdbc3545_word abstract.pdf', '104032617305', 'uploads/1746017499_68121cdbc354d_IMG-20250430-WA0004.jpg', '2025-04-30 12:51:39', '+919677530374', 'Nadar Saraswathi College of Engineering and Technology', 'Electronics and Communication Engineering'),
(71, 'Dr V Mareeswari', '[\"Prof. Snigdha Kesh\",\"9916954133\",\"ABHISHEK R\",\"8690934828\"]', 'ICRTT25IT009', 'IDENTIFICATION OF MEDICINAL PLANTS', 'uploads/1746018848_681222207aa0b_ICRTT25IT009- IDENTIFICATION OF MEDICINAL PLANTS.pdf', '104028124482', 'uploads/1746018848_681222207aa14_WhatsApp Image 2025-04-30 at 6.43.29 PM.jpeg', '2025-04-30 13:14:08', '9845198389', 'Lakshmikanth G N', 'Information Technology'),
(72, 'R. Aiyswarrya', '[\"S. Asmitha\",\"A. Sakana sri\"]', 'ICRTT25EC30', 'ORGANIC 6G CONTINUUM ARCHITECTURE: A UNIFORM CONTROL PLANE  ACROSS DEVICES, RADIO AND CORE', 'uploads/1746019641_68122539591ba_PROJECT_ABSTRACT.pdf', '548673479043', 'uploads/1746019641_68122539591c1_Screenshot_2025-04-30-18-58-08-135_com.google.android.apps.nbu.paisa.user.jpg', '2025-04-30 13:27:21', '9363146089', 'Nadar Saraswathi college of Engineering and Technology', 'Electronics and Communication Engineering'),
(73, 'Likitha K ', '[\"M.P Varshini \",\"Harshitha CR\",\"Deepika M\",\"Dr Malini S\"]', 'ICRTT25EC23', ' Advances in Bone Conduction Audio Technology: A Review of Crosstalk Cancellation, Vibration Sensing, and Speech Intelligibility', 'uploads/1746020451_68122863f28d8_review.pdf', 'T2504301839566035035096', 'uploads/1746020451_68122863f28e2_Screenshot_20250430_184010_PhonePe.jpg', '2025-04-30 13:40:51', '8147266078', 'Amc Engineering College ', 'Electronics and Communication Engineering'),
(74, 'Aravindhan P', '[\"\"]', 'ICRTT25CS037', 'Safeguard Net: Enhancing Corporate Safety via Tailored Deep Transfer Learning for Threat Recognition', 'uploads/1746026351_68123f6f568e3_confernce paper template.pdf', '512063164880', 'uploads/1746026351_68123f6f568eb_WhatsApp Image 2025-04-30 at 20.47.34_44436439.jpg', '2025-04-30 15:19:11', '6382750935', 'Chettinad College of Engineering and Technology', 'Computer Science and Engineering'),
(75, 'Dinesh L S', '[\"93615 12206\",\"96294 04119\"]', 'ICRTT25CS048', 'Early-Stage Oral Cancer Identification Using White Light Imaging and Light GBM Algorithm', 'uploads/1746027617_6812446191249_oral cancer.pdf', '512066059943', 'uploads/1746027617_681244619124f_WhatsApp Image 2025-04-30 at 21.08.48_0ddd1300.jpg', '2025-04-30 15:40:17', '9342311741', 'CHETTINAD COLLEGE OF ENGINEERING AND TECHNOLOGY', 'Computer Science and Engineering'),
(76, 'Sachithanandan S ', '[\"Dr.M sathya\",\"Naveen Bharathi B\"]', 'ICRTT25CS033', 'Enhancing Precision Agriculture with AI, IoT, and  Edge Computing for Real-timeDecision Support', 'uploads/1746028767_681248df814a8_Enhancing Precision Agriculture with AI, IoT, and Edge Computing for Real-time-2.pdf', '512038463300', 'uploads/1746028767_681248df814af_Screenshot_2025-04-30-21-28-33-687_com.google.android.apps.nbu.paisa.user.jpg', '2025-04-30 15:59:28', '9677810500', 'Nadar saraswati college of engineering and technology ', 'Computer Science and Engineering'),
(77, 'Gowtham S', '[]', 'ICRTT25CS044', 'Generative AI for Jurisprudential  Analysis: Automated Legal Reasoning and Scenario-Specific Guidance in Indian Law with a GPT-3 and LawBERT  Hybrid Model.', 'uploads/1746035282_68126252c84b1_LawGBERT_icrtt_paper.pdf', '512070053588', 'uploads/1746035282_68126252c84c0_icrtt_reciept.pdf', '2025-04-30 17:48:02', '7810045220', 'Chettinad College of Engineering and Technology,karur', 'Computer Science and Engineering'),
(78, 'Sivani.M', '[\"Atchaya.A\",\"Aishvarrya.A\",\"Jeyasakthi.G\"]', 'ECE35', 'Compact Wideband Flexible Implantable Slot Antenna With Enhanced Gain ', 'uploads/1746077977_681309191a543_NADAR SARASWATHI COLLEGE OF ENGINEERING AND TECHNOLOGY.pptx', '512136220869', 'uploads/1746077977_681309191a54b_IMG-20250501-WA0002.jpg', '2025-05-01 05:39:37', '6374794554', 'Nadar Saraswathi college of engineering and technology ', 'Electronics and Communication Engineering'),
(79, 'Mr.P.Vetrivel ', '[\"Deepikaa E\",\"Mahalakshmi M\"]', 'ICRTT25AD007', 'Optimizing Edge Computing with Volunteer  Resources: A Hybrid Approach to Fog and  Volunteer Computing ', 'uploads/1746093367_681345374f0fa_Optimizing Edge Computing with Volunteer Resources.pdf', '548743010526', 'uploads/1746093367_681345374f102_Proof.jpeg', '2025-05-01 09:56:07', '96002 11610', 'Ramco Institute of Technology ', 'Artificial Intelligence and Data Science'),
(80, 'Divyanshu Srivastava ', '[\"Gaurav Garg \",\"Harsh Nandan\",\"Yatin tyagi \",\"Deepti gangwar \"]', 'ICRTT25CS006', 'Intelligent Document Parsing and Calculation System Using Artificial Vision ', 'uploads/1746096435_68135133318d6_Research paper.pdf', '512105130737', 'uploads/1746096435_68135133318dd_IMG-20250501-WA0005.jpg', '2025-05-01 10:47:15', '8840133918', 'Raj Kumar goel institute of technology ', 'Computer Science and Engineering'),
(81, 'Divyanshu Srivastava ', '[]', 'ICRTT25CS006.', 'Intelligent Document Parsing and Calculation System Using Artificial Vision ', 'uploads/1746096512_681351800954d_Research paper.pdf', '512105130737', 'uploads/1746096512_6813518009554_IMG-20250501-WA0005.jpg', '2025-05-01 10:48:32', '8840133918', 'Raj Kumar goel institute of technology ', 'Computer Science and Engineering'),
(82, 'Mamitha T', '[\"Kiruthika M\",\"Lalithambihai R.G\",\"Sujithra V\"]', 'ICRTT25CS017', 'Gesture-Based Tool for Sterile Browsing Using Radiology Images', 'uploads/1746105013_681372b52781b_gesture.pdf', '548588907529', 'uploads/1746105013_681372b527822_payment receipt.jpeg', '2025-05-01 13:10:13', '8122939062', 'Nadar Saraswathi College of Enginerring and Technology', 'Computer Science and Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `parents_tickets`
--

CREATE TABLE `parents_tickets` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mob_no` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Pending','Resolved') COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dept_short` varchar(50) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `qualification`, `image`, `dept_short`, `position`, `email`, `phone`) VALUES
(1, 'Mr. N. Nagarathinam', 'M. E., M. I. S. T. E., (Ph. D)', 'civil/nagarathinam.jpg', 'civil', 'Assistant Professor & Head [I/C]', 'nagarathinam@nscet.org', '9095100234'),
(2, 'Mrs. S. Gayathri', 'M. E., M. I. S. T. E.', 'civil/gayathri.jpg', 'civil', 'Assistant Professor', 'gayathri@nscet.org', '8220467759'),
(3, 'Mr. R. Shanmugapriyan', 'M. E', 'civil/shanmugapriyan.jpg', 'civil', 'Assistant Professor', 'shanmugapriyan@nscet.org', '8778768674'),
(4, 'Mrs. M. Sindhu', 'M. E., (Ph.D)', 'civil/sindhu.jpg', 'civil', 'Assistant Professor', 'sindhu@nscet.org', '8124810525'),
(5, 'Mrs. B. Sowmiya', 'M.E', 'civil/sowmiya.jpg', 'civil', 'Assistant Professor', 'sowmiya@nscet.org', '9629264297'),
(6, 'Mrs. M. Kanimozhi', 'M. E', 'civil/kanimozhi.jpg', 'civil', 'Assistant Professor', 'kanimozhi@nscet.org', '6381304118'),
(7, 'Mr. P. Arul Jebaraj', 'M Tech', 'civil/aruljebaraj.jpg', 'civil', 'Assistant Professor', 'aruljebaraj@nscet.org', '8754882164'),
(8, 'Mrs. R. Nathirun Sabinash', 'M. E', 'civil/nathirunsabinash.jpg', 'civil', 'Assistant Professor', 'nathirunsabinash@nscet.org', '7373843755'),
(9, 'Mr. T. Hariprasath', 'M. E', 'civil/68060bc69f1b8_hariprasath.jpg', 'civil', 'Assistant Professor', 'mailtohari16@gmail.com', '9944032831'),
(10, 'Dr. J. Mathalai Raj', 'M.E (CSE), Ph.D', 'cse/67dd26bfce3c4_mathalairaj.jpg', 'cse', 'Assistant Professor & Head [I/C]', 'hodcse@nscet.org', '9677878808'),
(11, 'Mr. C. Prathap', 'M.Tech., (Ph.D)', 's-and-h/prathap.jpg', 'cse', 'Assistant Professor & Head [I/C] / S&H', 'prathapc@nscet.org', '8667675692'),
(12, 'Mr. R. Udhaya Kumar', 'M.E (CSE), MBA (ITM), (Ph.D)', 'cse/udhayakumar.jpg', 'cse', 'Assistant Professor', 'udhayakumar@nscet.org', '8870534091'),
(13, 'Mrs. S. Arul Jothi', 'M.E., (Ph.D)', 'cse/aruljothi.jpg', 'cse', 'Assistant Professor', 'aruljothi@nscet.org', '9894776604'),
(14, 'Mrs. R. Keerthana', 'M.E., (Ph.D)', 'cse/keerthana.jpg', 'cse', 'Assistant Professor', 'keerthana@nscet.org', '8148665621'),
(15, 'Mr. J. Ayyanaprabu', 'M.E., (Ph.D)', 'cse/ayyanaprabhu.jpg', 'cse', 'Assistant Professor', 'ayyanaprabu@nscet.org', '9003191314'),
(16, 'Mrs. K. Deepiga', NULL, 'cse/deepika.jpg', 'cse', 'Assistant Professor', NULL, NULL),
(17, 'Mr. N. Kesavamoorthy', 'M.E (CSE)', 'cse/kesavamoorthy.jpg', 'cse', 'Assistant Professor', 'kesavamoorthy@nscet.org', '9942390288'),
(18, 'Mrs. P. Niranjana', 'M.Tech (CSE)', 'cse/niranjana.jpg', 'cse', 'Assistant Professor', 'niranjana@nscet.org', '6369038001'),
(19, 'Dr. T. Venishkumar', 'M.E., Ph.D', 'ece/venishkumar.jpg', 'ece', 'Associate Professor & Head [I/C]', 'venishkumar@nscet.org', '9095577477'),
(20, 'Dr. N. Mathavan', 'B.Tech., ME., Ph.D', 'ece/Mathavan.jpg', 'ece', 'Vice Principal', 'memadhavan@gmail.com', '9600879103'),
(21, 'Mr. M. Idhayachandran', 'M.E.', 'ece/idhayachandran.jpg', 'ece', 'Assistant Professor', 'idhayachandran@nscet.org', '9629088748'),
(22, 'Mr. S. Prathap', 'M.E (PhD)', 'ece/prathap.jpg', 'ece', 'Assistant Professor', 'prathaps@nscet.org', '9677530374'),
(23, 'Mr. R. Pradeep Kumar', 'M.E (PhD)', 'ece/pradeepkumar.jpg', 'ece', 'Assistant Professor', 'pradeepkumar@nscet.org', '9003318223'),
(24, 'Mrs. T. Tamil Selvi', 'M.Tech., (Ph.D.)', 'ece/tamilselvi.jpg', 'ece', 'Assistant Professor', 'tamilselvi@nscet.org', '8015739129'),
(25, 'Mrs. P. Shantha Devi', 'M.E., (Ph.D.)', 'ece/shanthadevi.jpg', 'ece', 'Assistant Professor', 'shanthadevi@nscet.org', '6381902003'),
(26, 'Mrs. S. Kalaivani', 'M.Tech.', 'ece/kalaivani.jpg', 'ece', 'Assistant Professor', 'kalaivani@nscet.org', '9840311308'),
(27, 'Mrs. P. Gowthami', 'M.E.', 'ece/gowthami.jpg', 'ece', 'Assistant Professor', 'gowthami@nscet.org', '9865170808'),
(28, 'Dr. R. Athilingam', 'M.E., Ph.D', 'eee/Dr_athilingam.jpg', 'eee', 'Associate Professor & Head [I/C]', 'athilingam@nscet.org', '9486825649'),
(30, 'Mr. K. Ganesh', 'M.E., (Ph.D.)', 'eee/ganesh.jpg', 'eee', 'Assistant Professor', 'ganesh@nscet.org', '9566893474'),
(31, 'Mr. R. Raja Karthick', 'M.E.', 'eee/raja_karthick.jpg', 'eee', 'Assistant Professor', 'rajakarthick@nscet.org', '9944551172'),
(32, 'Mrs. A. Nishetha Jeflin Nixon', 'M.E.', 'eee/Nishetha_jeflin_nixon.jpg', 'eee', 'Assistant Professor', 'nishethajeflinnixon@nscet.org', '9500095952'),
(33, 'Mrs. M. Vijayalakshmi', 'M.E.', 'eee/Vijayalakshmi.jpg', 'eee', 'Assistant Professor', 'vijayalakshmi@nscet.org', '9791423467'),
(34, 'Dr. B. Radha Krishnan', 'M.E., Ph.D., MISTE., MIE.', 'mech/radhakrishnan.jpg', 'mech', 'Professor & Head [I/C]', 'hodmech@nscet.org', '9095100227'),
(35, 'Dr. E. Anantha Krishnan', 'M. E., Ph. D., ', 'civil/ananthakrishnan.jpg', 'se', 'Professor & Head [I/C]', 'ananthakrishnan@nscet.org', '9443450051'),
(36, 'Mr. A. Vembathurajesh', 'M.E., MISTE.', 'mech/vembathurajesh.png', 'mfe', 'Associate Professor & Head [I/C]', 'vembathurajesh@nscet.org', '9976412468'),
(37, 'Mr. C. Prathap', 'M.Tech., (Ph.D)', 's-and-h/prathap.jpg', 's-and-h', 'HOD', 'prathapc@nscet.org', '8667675692'),
(38, 'Dr. C. Chithra', 'M.Sc., M.Phil., B.Ed., P.G.D.C.A., Ph.D.', 's-and-h/drchitra.jpg', 's-and-h', 'Professor & Co-Ordinator', 'chithra.c@nscet.org', '9790148325'),
(39, 'Dr. N. David Mathan', 'M.Sc., Ph.D.', 's-and-h/davidmathan.jpg', 's-and-h', 'Professor', 'davidmathan@nscet.org', '9003554367'),
(40, 'Mr. R.C. Richard Britto', 'M.A., M.Phil.', 's-and-h/richard britto.jpg', 's-and-h', 'Assistant Professor', 'richardbritto@nscet.org', '8220109547'),
(41, 'Mrs. M. Fathima Beevi', 'M.A., M.Phil.', 's-and-h/fathimabeevi.jpg', 's-and-h', 'Assistant Professor', 'fathimabeevi@nscet.org', '8680056397'),
(42, 'Mrs. S. Jothi', 'M.A., M.Phil., PGDCA.', 's-and-h/Jothi.jpg', 's-and-h', 'Assistant Professor', 'jothis@nscet.org', '8122784697'),
(43, 'Mrs. T. Subathamani', 'M.A., M.Phil., B.Ed.', 's-and-h/Subathamani.png', 's-and-h', 'Assistant Professor', 'subathamani@gmail.com', '7200179450'),
(44, 'Dr. B. Mallaiyasamy', 'M.Sc., M.Phil., M.Ed., PGDCA, Ph.D., MIST', 's-and-h/mailysamy.jpg', 's-and-h', 'Associate Professor', 'mallaiyasamy@nscet.org', '9865959888'),
(45, 'Mrs. R. Karunyah', 'M.Sc., M.Phil.', 's-and-h/karunyah.jpg', 's-and-h', 'Assistant Professor', 'mkaruniya@gmail.com', '7338754171'),
(46, 'Mrs. M. Arulvizhi', 'M.Sc., M.Phil.', 's-and-h/arulvizhi.jpg', 's-and-h', 'Assistant Professor', 'arulvizhimaths@gmail.com', '9600719181'),
(47, 'Mrs. M. Mahalakshmi', 'M.Sc., M.Phil., SET', 's-and-h/mahalakshmi.jpg', 's-and-h', 'Assistant Professor', 'mahalakshmi.m@nscet.org', '9942089298'),
(48, 'Mr. R. Dhandayuthapani', 'M.Sc., M.Phil.', 's-and-h/dhandayuthapani.jpg', 's-and-h', 'Assistant Professor', 'rdpani2000@gmail.com', '9944810547'),
(49, 'Mr. K. Rajaguru', 'M.Sc., M.Phil.', 's-and-h/rajaguru.jpg', 's-and-h', 'Assistant Professor', 'rajaguru@nscet.org', '9150762418'),
(50, 'Dr. V. Ananthi', 'M.Sc., M.Phil., P.G.D.C.A., M.Ed., Ph.D.', 's-and-h/ananthi.jpg', 's-and-h', 'Assistant Professor', 'ananthi@nscet.org', '9894859899'),
(51, 'Dr. S.R. Krishnamoorthi', 'M.Sc., M.Phil., Ph.D., MISTE', 's-and-h/krishnamoorthy.jpg', 's-and-h', 'Associate Professor', 'krishnamoorthi@nscet.org', '8825911740'),
(54, 'Dr. C. Mathalai Sundaram', 'Ph.D.', 'mech/principle.png', 'mfe', 'Principal | Professor', 'principal@nscet.org', '91 98426 85138 '),
(55, 'Mr. A. Vembathurajesh', 'M.E., MISTE.', 'mech/vembathurajesh.png', 'mech', 'Associate Professor & Head [I/C]', 'vembathurajesh@nscet.org', '9976412468'),
(56, 'Mr. R. Santhaseelan', 'M.E., MISTE.', 'mech/santhaseelan.jpg', 'mech', 'Assistant Professor', 'santhaseelan@nscet.org', '9003398111'),
(57, 'Mr. V. Thirumalairaj', 'M.E., MISTE.', 'mech/Thirumalairaj.jpg', 'mech', 'Assistant Professor', 'thirumalairaj.in@gmail.com', '9994991711'),
(58, 'Mr. V. Sivaganesan', 'M.E., MISTE.', 'mech/sivaganesan.jpg', 'mech', 'Assistant Professor', 'sivaganesan@nscet.org', '8678925269'),
(60, 'Mr. B. Nagarajan', 'M.E., MISTE.', 'mech/nagarajan.jpg', 'mech', 'Assistant Professor', 'nagarajan@nscet.org', '9894933543'),
(61, 'Mr. P. Surulimani', 'M.E., MISTE.', 'mech/Surulimani.jpg', 'mech', 'Assistant Professor', 'surulimanip@gmail.com', '8667364503'),
(62, 'Mr. S. Harikishore', 'M.E., MISTE.', 'mech/harikishore.jpg', 'mech', 'Assistant Professor', 'harikishore@nscet.org', '9677406940'),
(63, 'Mr. A. Vennimalai Rajan', 'M.E., MISTE.', 'mech/Vennimalairajan.jpg', 'mech', 'Assistant Professor', 'vennimalairajan@nscet.org', '9566585541'),
(64, 'Mr. J. Chakaravarthy Samy Durai', 'M.E., MISTE.', 'mech/chakravarthysamydurai.jpg', 's-and-h', 'Assistant Professor(General)', 'chakravarthysamydurai@nscet.org', '9710728061 '),
(65, 'Mr. G. Arun Kumar', 'M.E.', 'mech/arunkumar.jpg', 's-and-h', 'Assistant Professor(General)', 'arunkumar1603@gmail.com', '9095365090 '),
(66, 'DR. M. SATHYA', 'M.TECH., MBA., Ph.D', 'it/6805f9f3b1cd0_sathya.jpeg', 'it', 'Vice Principal & Head [I/C]', 'hodit@nscet.org', '9884854043 '),
(67, 'Mrs. A. Sangeetha', '', 'it/sangeetha.jpg', 'it', 'Assistant Professor', 'sangeetha@nscet.org', ''),
(68, 'J. KANIMOLI', 'M.E.', 'it/kanimoli.jpg', 'it', 'Assistant Professor', 'kanimoli@nscet.org', '6374228589'),
(69, 'G. KEERTHANA', 'M.E.', 'it/Keerthana.jpg', 'it', 'Assistant Professor', 'gkeerthana@nscet.org', '9384525211'),
(70, 'Mr. L.S. Vignesh', 'M.E., (Ph.D)', '/ai_ds/vignesh.jpg', 'ai-and-ds', 'Assistant Professor & Head [I/C]', 'hodai_ds@nscet.org', '9865717042'),
(71, 'Mrs. R. Archana', 'M.E., (Ph.D)', '/ai_ds/archana.jpg', 'ai-and-ds', 'Assistant Professor', 'archana@nscet.org', '9750299776'),
(72, 'Mr. J. Vinoth Kumar', 'M.E., (Ph.D)', '/ai_ds/vinothkumar.jpg', 'ai-and-ds', 'Assistant Professor', 'vinothkumar@nscet.org', '8072435849'),
(73, 'Ms. S. Abirami Kayathiri', 'M.E.', 'ai-and-ds/68060ac787943_Abi Kayathiri.jpg', 'ai-and-ds', 'Assistant Professor', 'abiramikayathiri@nscet.org', '7530008380'),
(74, 'Mrs. S. Jenifer Briscilla', 'M.E.', '/ai_ds/Jenifer Briscilla.png', 'ai-and-ds', 'Assistant Professor', NULL, NULL),
(75, 'Mrs. G. Geerthiga', 'M.E.', 'ai-and-ds/68060bda58c98_Geerthiga.jpg', 'ai-and-ds', 'Assistant Professor', NULL, '7708095103'),
(88, 'Mr. R. Nagaraja', 'M.E., MISTE.', 'mech/nagaraja.jpg', 'mfe', 'Assistant Professor', 'nagaraja@nscet.org', '7502150100'),
(98, 'Dr. S. Pattammal', ' M.A., M.Ed., M.Phil., Ph.D.', 's-and-h/pattammal.png', 's-and-h', 'Assistant Professor', 'pattammal@nscet.org', '9965881884'),
(100, 'B. SAI SUGANYA', 'M.TECH.', 'it/68060d94a3a65_sai suganya.jpg', 'it', 'Assistant Professor', 'saisuganya@nscet.org', '7200082257'),
(102, 'Mr. K. Bharathi Kannan', 'M.E.', 'ece/bharathikannan.jpg', 'eee', 'Assistant Professor', 'bharathikannan@nscet.org', '9597504645'),
(11248, 'Mr. R. Manoj Prabakar', 'M.E.', 'civil/Manoj_prabakar.jpg', 'se', 'Assistant Professor', 'manojprabakar@nscet.org', '8667098569'),
(11249, 'Mr. C. Shiva', 'M.E., (Ph.D.)', 'eee/shiva.jpg', 'eee', 'Assistant Professor', 'shiva@nscet.org', '9677791274'),
(11250, 'Mrs. N. Abirami', 'M.E., (Ph.D.)', 'eee/Abirami.jpg', 'eee', 'Assistant Professor', 'abiramin@nscet.org', '7868063436'),
(11251, 'Mrs. M. Monica Dhana Ranjini', 'M.E., (Ph.D.)', 'ece/monicadhanaranjani.jpg', 'eee', 'Assistant Professor', 'monicadhanaranjini@nscet.org', '8883804330'),
(11252, 'Dr. B. Helen Sheeba', 'M.A., M.Phil., Ph.D.', 's-and-h/Helen Sheeba.jpg', 's-and-h', 'Assistant Professor', 'sheebahelen.b@gmail.com', '7845708788'),
(11253, 'Dr. S. Selvapriya', 'M.A., M.Phil., Ph.D.', 's-and-h/Selvapriya.jpg', 's-and-h', 'Assistant Professor', 'selvapriyashailesh@gamil.com', '9965368580'),
(11254, 'Mrs. S. Reka', 'M.A., M.Phil.', 's-and-h/Reka.jpg', 's-and-h', 'Assistant Professor', 'subhalakshmireka@gamil.com', '9080813770'),
(11255, 'Dr. P. Buvaneshwari', 'B.Sc., M.Sc., Ph.D.', 's-and-h/Buvaneswarih.jpg', 's-and-h', 'Physics', 'buvaneshjeyam5@gmail.com', '9626572520'),
(11256, 'Mrs. K. Kowsalya', 'BE., ME.', 's-and-h/Kowsalya.jpg', 's-and-h', 'Assistant Professor', 'kowsalyamech35@gmail.com', '8220892917'),
(11257, 'Mr. G. Annamalai', 'BE., ME.', 's-and-h/Annamalai.jpg', 's-and-h', 'Assistant Professor', 'Annamalaicmr60@gmail.com', '8760504328'),
(11258, 'Mr. R. Radhakrishnan', 'BE., ME.', 's-and-h/RRK.JPG', 's-and-h', 'Assistant Professor', 'radhakrishnan18190@gmail.com', '9894819149'),
(11259, 'Mrs. M Bhavani', 'B.Tech.', 'it/681edc339e8a7_bhavani photos.jpg', 'it', 'Assistant Professor', 'gmbhavani1990@gmail.com', '9600476863'),
(11260, 'Mrs. K. Benita Merlin Isabella', 'M.E', 'se/681edd0ec90d8_Benita Photo.jpg', 'se', 'Assistant Professor', 'benitamerlin22@gmail.com', '9500426227'),
(11261, 'Mr.S. Manimaran', 'B.E', 's-and-h/681ede53e491f_Manimaran Photo.jpg', 's-and-h', 'Assistant Professor ( General )', 'manimaran@nscet.org', '9566415081  '),
(11262, 'Dr. S. Devimeenakshmi', 'B.E ', 's-and-h/681edf0c1a5c3_DEVI MEENAKSHI.jpg', 's-and-h', 'Assistant Professor ( CHEMISTRY ) ', 'devimeenakshi84@gmail.com', '9976637141'),
(11263, 'Mrs. R. Chitra', 'B.E.', 's-and-h/chitra.jpg', 's-and-h', 'Assistant Professor', 'chitrar@nscet.org', '9500795012');

-- --------------------------------------------------------

--
-- Table structure for table `staffs_tickets`
--

CREATE TABLE `staffs_tickets` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mob_no` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Pending','Resolved') COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs_tickets`
--

INSERT INTO `staffs_tickets` (`id`, `name`, `dept`, `mob_no`, `email`, `title`, `description`, `status`, `created_at`, `role`, `ticket_id`) VALUES
(1, 'Udhaya Kumar R', 'cse', '1234567892', 'udhayakumar@nscet.org', 'trail check', 'just for checking', 'Pending', '2024-12-27 03:57:40', 'staff', 'NSHD_676E25B472C93'),
(2, 'Udhaya Kumar R', 'cse', '1234567891', 'udhayakumar@nscet.org', 'trail 2', 'trail 2', 'Resolved', '2024-12-27 05:15:33', 'staff', 'NSHD_676E37F5935E5');

-- --------------------------------------------------------

--
-- Table structure for table `students_tickets`
--

CREATE TABLE `students_tickets` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `regno` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Pending','Resolved','In Progress','Closed') COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_tickets`
--

INSERT INTO `students_tickets` (`id`, `name`, `regno`, `dept`, `year`, `email`, `title`, `description`, `status`, `created_at`, `role`, `ticket_id`) VALUES
(3, 'MyName', 'TestUser', 'John', '1st', 'lncytgtl@do-not-respond.me', 'Alice', 'yZYKYofX WLFDH kdIDA XHOQM KNWl irJX fbJhPg', 'Pending', '2025-03-03 02:02:26', 'student', 'NSHD_67C50DB228298'),
(4, 'MyName', 'Hello', 'Hello', '1st', 'vaamdulf@do-not-respond.me', 'Hello', 'opQZrJmU nDOQ CSik btvhtOm FinWT', 'Pending', '2025-03-03 02:02:26', 'student', 'NSHD_67C50DB292D0C'),
(5, 'Alice', 'Alice', 'MyName', '1st', 'dleiymfq@do-not-respond.me', 'Hello', 'XTnK zluLmbLZ tWzaka nnanLlm LxfqQh', 'Pending', '2025-03-03 11:03:29', 'student', 'NSHD_67C58C8110229'),
(6, 'Alice', 'MyName', 'John', '1st', 'wuwdcnfl@do-not-respond.me', 'TestUser', 'pDN DupAxPQ hTsGE XZL dBKVU', 'Pending', '2025-03-03 11:03:29', 'student', 'NSHD_67C58C819F076'),
(7, 'John', 'TestUser', 'TestUser', '1st', 'qqrcaxdm@do-not-respond.me', 'Hello', 'gTPnscD Zuyn DOK KPppXpA RuOLTMo gzEl', 'Pending', '2025-03-09 11:32:09', 'student', 'NSHD_67CD7C39768D3'),
(8, 'MyName', 'Alice', 'Hello', '1st', 'exxqzavo@do-not-respond.me', 'MyName', 'PiuKz JkAHn bOCBTe AVSYYMS nVQJXjh ComxVHrM cvmPG', 'Pending', '2025-03-09 11:32:11', 'student', 'NSHD_67CD7C3BC6169'),
(9, 'Hello', 'MyName', 'John', '1st', 'vmlczmvv@do-not-respond.me', 'MyName', 'XQADF kQHDQyJZ xxMFcpb aMpzRMU vkwqKhA pyr', 'Pending', '2025-03-13 08:47:40', 'student', 'NSHD_67D29BAC0177D'),
(10, 'John', 'Hello', 'MyName', '1st', 'srbetuzg@do-not-respond.me', 'Alice', 'GBZ xGIHLp Kinumm', 'Pending', '2025-03-13 08:47:40', 'student', 'NSHD_67D29BAC81268'),
(11, 'Hello', 'Hello', 'MyName', '1st', 'rgoowutn@do-not-respond.me', 'Alice', 'wHDfUgW RPhIVR dkm ukxpm yKttc qfBF LvSSfZW', 'Pending', '2025-03-13 17:19:31', 'student', 'NSHD_67D313A38A15A'),
(12, 'TestUser', 'MyName', 'John', '1st', 'mneaqchs@do-not-respond.me', 'Alice', 'VCLQouF uFG rOsxxJw bqG OHA IUWYGQLA', 'Pending', '2025-03-13 17:19:32', 'student', 'NSHD_67D313A49C2C6'),
(13, 'Hello', 'MyName', 'MyName', '1st', 'qijudcap@formtest.guru', 'Hello', 'jXJkFWMK tUs YErbFwt ZOCOg IsAHfBvb', 'Pending', '2025-04-18 00:31:18', 'student', 'NSHD_68019D560D8F3'),
(14, 'MyName', 'Hello', 'TestUser', '1st', 'vqwncazf@formtest.guru', 'MyName', 'WqsaHX Cjb kSgnknbw kLuY mcYwM', 'Pending', '2025-05-09 05:17:57', 'student', 'NSHD_681D90058F4DC'),
(15, 'ZAP', 'ZAP', 'ZAP', '2nd', 'zaproxy@example.com', 'ZAP', 'Zaproxy alias impedit expedita quisquam pariatur exercitationem. Nemo rerum eveniet dolores rem quia dignissimos.', 'Pending', '2025-05-25 08:16:49', 'student', 'NSHD_6832D1F1831B5');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int NOT NULL,
  `role` enum('student','parent','staff') COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `regno` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dept` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year` enum('1st','2nd','3rd','4th') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mob_no` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Pending','In Progress','Resolved','Closed') COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mathalai Sundaram', 'principal@nscet.org', 'ms123'),
(2, 'admin_team', 'admin@gmail.com', 'admin123team'),
(3, 'icrtt_25', 'icrtt@gmail.com', 'nscet_icrtt_25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_short` (`dept_short`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dept_short` (`dept_short`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories`
--
ALTER TABLE `laboratories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_short` (`dept_short`);

--
-- Indexes for table `non_teaching`
--
ALTER TABLE `non_teaching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers_list`
--
ALTER TABLE `papers_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paper_id` (`paper_id`);

--
-- Indexes for table `parents_tickets`
--
ALTER TABLE `parents_tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staff_department` (`dept_short`);

--
-- Indexes for table `staffs_tickets`
--
ALTER TABLE `staffs_tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `students_tickets`
--
ALTER TABLE `students_tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `association`
--
ALTER TABLE `association`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `non_teaching`
--
ALTER TABLE `non_teaching`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `papers_list`
--
ALTER TABLE `papers_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `parents_tickets`
--
ALTER TABLE `parents_tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11264;

--
-- AUTO_INCREMENT for table `staffs_tickets`
--
ALTER TABLE `staffs_tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students_tickets`
--
ALTER TABLE `students_tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `association_ibfk_1` FOREIGN KEY (`dept_short`) REFERENCES `departments` (`dept_short`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laboratories`
--
ALTER TABLE `laboratories`
  ADD CONSTRAINT `laboratories_ibfk_1` FOREIGN KEY (`dept_short`) REFERENCES `departments` (`dept_short`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
