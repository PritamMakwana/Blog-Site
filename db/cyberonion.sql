-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberonion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `al_id` int(12) NOT NULL,
  `al_username` varchar(50) NOT NULL,
  `al_pwd` varchar(50) NOT NULL,
  `al_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`al_id`, `al_username`, `al_pwd`, `al_name`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `ana_id` int(12) NOT NULL,
  `ana_title` varchar(20) NOT NULL,
  `ana_sing` varchar(10) NOT NULL DEFAULT '+',
  `ana_number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`ana_id`, `ana_title`, `ana_sing`, `ana_number`) VALUES
(1, 'Worldwide  clients', '+', 2000),
(2, 'Cyber Security Cyber', '+', 200),
(3, 'Retention  rate', '%', 95);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `b_id` int(12) NOT NULL,
  `b_heading` varchar(50) NOT NULL,
  `b_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`b_id`, `b_heading`, `b_desc`) VALUES
(1, 'Cyberonion', 'Cyberonion, cum soluta nobis eligendi optio cumque nihil impedit minus quod maxime');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(12) NOT NULL,
  `b_title` varchar(100) NOT NULL,
  `b_img` varchar(1000) NOT NULL,
  `b_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `b_desc` varchar(2000) NOT NULL,
  `c_id` int(12) DEFAULT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `b_title`, `b_img`, `b_date`, `b_desc`, `c_id`, `c_name`) VALUES
(13, 'Virtual CISO Services is the logical choice for cybersecurity leadership for small and medium-sized ', '1682325290-1626026745168.jpg', '2023-04-24 08:34:50', 'Ensuring the security of confidential business data including your customer’s sensitive personal and financial details requires constant attention. And though not every business demands the full-time commitment of an executive to oversee this function, small- to mid-sized businesses do need the same level of security and control capabilities already in place at larger corporations. While the resources for smaller organizations are less, the compliance and risk requirements are often the same as larger companies. This is where Virtual CISO services can play a role to deliver and streamline controls to meet risk and compliance objectives without the need to hire full-time staff members.', 11, 'Virtual CISO'),
(14, 'That’s where we step in.', '1682325317-b2baa01cf41d16c389e06976e21e92b6.jpg', '2023-04-24 08:35:17', 'That’s where we step in. We can protect your organization at the same level you would expect from a full-time chief information security officer through our Virtual CISO service (vCISO service) without the steep investment of executive compensation and their associated benefits package. Work in collaboration with an advanced vCISO professional able to maintain a relationship with your team and become familiar with both your environment and industry so you stay on top of constantly evolving threats and regulations.', 12, 'Penetration Testing'),
(15, 'Penetration Testing?', '1682325349-957104_brock-lesnar-2016-suplex-city-hd-wallpaper-by-deevvk-on-deviantart_1191x670_h.jpg', '2023-04-24 08:35:49', 'Penetration Testing Definition\r\nThe art of exploiting weaknesses and vulnerabilities in networks, web applications, or people. This is different than just performing a vulnerability scan against your network. A penetration test takes the perspective of an outside intruder or an internal individual with malicious intent. This may not always involve technology, however technical controls are a big part of preventing easy exploitation and data compromise', 12, 'Penetration Testing'),
(16, 'Get peace of mind with real world Penetration Testing and Services', '1682325373-5522.jpg', '2023-04-24 08:36:14', '\r\nToo often, organizations take a narrow, reactive approach to cyber security. But we work with companies to help them block hackers proactively, pointing you to small and often overlooked gaps that might allow intruders into your systems to access highly sensitive data—leading to significant monetary loss.', 13, 'Cyber Security Consulting'),
(19, 'Dainik Jagran\r\n', '1682331005-images (2).jpeg', '2023-04-24 10:10:05', 'Dainik Jagran is one of India\'s most widely read Hindi-language newspapers. It is published in Delhi, Uttar Pradesh, Uttarakhand, Jharkhand, Bihar, Madhya Pradesh, Chhattisgarh, and Haryana. The newspaper has over 1.6 crore copies, making it the largest circulated daily newspaper in India. The newspaper was founded in 1942 by Purushottam Das Tandon', 12, 'Penetration Testing'),
(20, 'Hindustan', '1682331028-images (4).png', '2023-04-24 10:10:28', ' Hindustan Newspapers is one of India\'s oldest and most popular newspapers. It was founded in 1857 by a British journalist named William Digby. The Hindustan Times Group currently owns the paper. Hindustan Newspapers have a long history of being a reliable source of news for Indians. The paper covers various topics, including politics, business, sports, and entertainment. Hindustan Newspapers is also known for its investigative journalism. In recent years, Hindustan Newspapers have faced stiff competition from other newspapers, such as The Times of India and The Hindu. However, it remains one of the most widely-read newspapers in India.', 13, 'Cyber Security Consulting'),
(21, 'Dainik Bhaskar', '1682331053-373945.jpg', '2023-04-24 10:10:53', 'Dainik Bhaskar is one of the largest-selling Hindi newspapers in India. It is published in Bhopal, Madhya Pradesh. The newspaper has a circulation of over 40 lakh copies and is read by over one crore people. The newspaper was founded in 1958 by the Late Shri Girwarlal Agarwala. The newspaper is owned by the Dainik Bhaskar Group, which also owns other newspapers and TV channels.', 11, 'Virtual CISO'),
(22, 'Malayala ', '1682331091-5522.jpg', '2023-04-24 10:11:31', '\r\nEverything You Need To Know About The Top Newspapers in India\r\nTable of Content\r\nIn India, newspapers play a significant role in democracy. India has a long and rich history of newspaper publishing, dating back to the 18th century. Today, more than 100,000 newspapers are published in the country in more than one hundred languages. Newspapers are essentially public information sources and play a vital role in shaping public opinion. They also play a crucial role in the country\'s economy, as they are an effective advertising medium. The first newspaper in India was published in 1780 and was called the Bengal Gazette. The first English-language newspaper was published in Calcutta in 1814, and the first Hindi-language newspaper was published in 1826. Today, many diverse types of newspapers in India cater to different audiences.\r\n\r\nDid you know? India imports the majority of its newsprint paper from countries like Canada, the US, and Russia. India is the biggest import market for newsprint paper with  17,981 shipments of Newsprint paper on an average to India every year.\r\n\r\n\r\n\r\nNewspaper Industries in India\r\nThe Indian newspaper industry is one of the largest in the world. India has over 100,000 daily newspapers, and over 42 crores 50 lakh people read newspapers regularly in the country as of 2019. The sector employs over 10 lakh people and has an annual turnover of over ₹200,00 crores. The industry is highly fragmented, with over 80% of the market being served by regional and local newspapers. The top three newspaper groups - The Times of India, Hindustan Times, and The Hindu - account for only 25% of the market. The Indian newspaper industry is facing several challenges. The growth of digital media has led to a decline in print readership. Ad revenues have also been hit as advertisers shift their budgets to digital platforms.\r\n\r\nThe newspaper industry is responding to these challenges by investing in digital businesses and launching new products and services. Many ne', 14, 'Managed Detection and Response'),
(23, 'Daily Thanthi', '1682331122-533b87502bca2a4b3418d89c5598700e.jpg', '2023-04-24 10:12:02', 'Daily Thanthi is a famous Tamil newspaper in India. The paper is headquartered in Chennai and published in sixteen other cities across the country. It has over 12 lakh copies and is read by over 1 crore people daily. The paper was founded in 1942 by S. P. Adithanar and is currently owned by the Adithanar family.', 11, 'Virtual CISO'),
(24, 'dddddddddddddda', '1682335554-Abstract1.jpg', '2023-04-24 11:25:54', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 11, 'Virtual CISO'),
(25, 'aaaaaaaaaaaaaaaaaaaaaaa', '1682335571-Abstract2.jpg', '2023-04-24 11:26:11', 'aavvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 11, 'Virtual CISO'),
(26, 'vvvvvvvvvvvvvvvvv', '1682335586-ad74fe7a7a737f7.jpg', '2023-04-24 11:26:26', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvaaaaaaaaaaaaaaaa eeeeeeeeeeeeeeeee', 11, 'Virtual CISO'),
(27, 'bbbbbb', '1682335618-5522.jpg', '2023-04-24 11:26:58', 'ddddddddddddddddddddddddddd', 11, 'Virtual CISO'),
(28, 'v', '1682335630-533b87502bca2a4b3418d89c5598700e.jpg', '2023-04-24 11:27:10', 'ddddddddddddddddddddaaaaaaaaaaaaaaaaaa', 11, 'Virtual CISO'),
(29, 'q', '1682335645-267f709e4c8b696957ebf9f187c0d344.jpg', '2023-04-24 11:27:25', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQ', 11, 'Virtual CISO'),
(30, 'xxxx', '1682335656-Abstract2.jpg', '2023-04-24 11:27:36', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 11, 'Virtual CISO');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `c_id` int(12) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`c_id`, `c_name`) VALUES
(11, 'Virtual CISO'),
(12, 'Penetration Testing'),
(13, 'Cyber Security Consulting'),
(14, 'Managed Detection and Response');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `f_id` int(12) NOT NULL,
  `f_ques` text NOT NULL,
  `f_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`f_id`, `f_ques`, `f_ans`) VALUES
(2, 'Who are hackers?', 'Many think that “hacker” refers to some self-taught whiz kid or rogue programmer skilled at modifying computer hardware or software so it can be used in ways outside the original developers\' intent. But this is a narrow view that doesn\'t begin to encompass the wide range of reasons why someone turns to hacking. Is all hacking bad? Check out this video which will give you some ideas about different types of hacking:'),
(4, 'Hacking definition: What is hacking? ', 'Hacking refers to activities that seek to compromise digital devices, such as computers, smartphones, tablets, and even entire networks. And while hacking might not always be for malicious purposes, nowadays most references to hacking, and hackers, characterize it/them as unlawful activity by cybercriminals—motivated by financial gain, protest, information gathering (spying), and even just for the “fun” of the challenge.\r\n\r\n'),
(5, 'Hacking tools: How do hackers hack?', 'Hacking is typically technical in nature (like creating malvertising that deposits malware in a drive-by attack requiring no user interaction). But hackers can also use psychology to trick the user into clicking on a malicious attachment or providing personal data. These tactics are referred to as “social engineering.”'),
(6, 'Types of hacking/hackers ?', 'Broadly speaking, you can say that hackers attempt to break into computers and networks for any of four reasons.\r\n\r\nThere\'s criminal financial gain, meaning the theft of credit card numbers or defrauding banking systems.\r\nNext, gaining street cred and burnishing one\'s reputation within hacker subculture motivates some hackers as they leave their mark on websites they vandalize as proof that they pulled off the hack.\r\nThen there\'s corporate espionage or cyber espionage, when one company\'s hackers seek to steal information on a competitor\'s products and services to gain a marketplace advantage.\r\nFinally, entire nations engage in state-sponsored hacking to steal business and/or national intelligence, to destabilize their adversaries\' infrastructure, or even to sow discord and confusion in the target country. (There\'s consensus that China and Russia have carried out such attacks, including one on Forbes.com. In addition, the recent attacks on the Democratic National Committee [DNC] made the news in a big way—especially after Microsoft says hackers accused of hacking into the Democratic National Committee have exploited previously undisclosed flaws in Microsoft\'s Windows operating system and Adobe Systems\' Flash software. There are also instances of hacking courtesy of the United States government.)\r\nThere\'s even another category of cybercriminals: the hacker who is politically or socially motivated for some cause. Such hacker-activists, or “hacktivists,” strive to focus public attention on an issue by garnering unflattering attention on the target—usually by making sensitive information public. For notable hacktivist groups, along with some of their more famous undertakings, see Anonymous, WikiLeaks, and LulzSec.'),
(7, 'Ethical hacking? White, black, and grey hats', 'There\'s also another way we parse hackers. Remember the classic old Western movies? Good guys = white hats. Bad guys = black hats. Today\'s cybersecurity frontier retains that Wild West vibe, with white hat and black hat hackers, and even a third in-between category.\r\n\r\nIf a hacker is a person with deep understanding of computer systems and software, and who uses that knowledge to somehow subvert that technology, then a black hat hacker does so for stealing something valuable or other malicious reasons. So it\'s reasonable to assign any of those four motivations (theft, reputation, corporate espionage, and nation-state hacking) to the black hats.\r\n\r\nWhite hat hackers, on the other hand, strive to improve the security of an organization\'s security systems by finding vulnerable flaws so that they can prevent identity theft or other cybercrimes before the black hats notice. Corporations even employ their own white hat hackers as part of their support staff, as a recent article from the New York Times online edition highlights. Or businesses can even outsource their white hat hacking to services such as HackerOne, which tests software products for vulnerabilities and bugs for a bounty.\r\n\r\nFinally, there\'s the gray hat crowd, hackers who use their skills to break into systems and networks without permission (just like the black hats). But instead of wreaking criminal havoc, they might report their discovery to the target owner and offer to repair the vulnerability for a small fee.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(12) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_short_desc` varchar(100) NOT NULL,
  `s_slug` varchar(100) NOT NULL,
  `s_icon` varchar(1000) NOT NULL,
  `s_image` varchar(1000) NOT NULL,
  `s_key_point` varchar(1000) NOT NULL,
  `s_one_heading` varchar(100) NOT NULL,
  `s_one_paragraph` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_name`, `s_short_desc`, `s_slug`, `s_icon`, `s_image`, `s_key_point`, `s_one_heading`, `s_one_paragraph`) VALUES
(17, 'Network Security', 'Most attacks occur over the network, and network security solutions are designed to identify and blo', '/network-security', '', '1682324092-5580.jpg', 'Network Security,Network ,Security', 'Most attacks occur ', 'Most attacks occur over the network, and network security solutions are designed to identify and block these attacks. These solutions include data and access controls such as Data Loss Prevention (DLP), IAM (Identity Access Management), NAC (Network Access Control), and NGFW (Next-Generation Firewall) application controls to enforce safe web use policies.'),
(18, 'Cloud Security\r\n\r\n', 'While many cloud providers offer security solutions, these are often inadequate to the task of achie', '/cloud-security-r-n-r-n', '', '1682324185-IMG_20151024_184929.jpg', ' Cloud ,Security,Cloud Security\r\n\r\n\r\n\r\n', 'As organizations increasingly adopt', 'As organizations increasingly adopt cloud computing, securing the cloud becomes a major priority. A cloud security strategy includes cyber security solutions, controls, policies, and services that help to protect an organization’s entire cloud deployment (applications, data, infrastructure, etc.) against attack.'),
(19, 'Endpoint Security', 'he zero-trust security model prescribes creating micro-segments around data wherever it may be.', '/endpoint-security', '', '1682324235-images(5).jpg', 'Endpoint ,Security,Endpoint Security', 'Endpoint  Security', 'he zero-trust security model prescribes creating micro-segments around data wherever it may be. One way to do that with a mobile workforce is using endpoint security. With endpoint security, companies can secure end-user devices such as desktops and laptops with data and network security controls, advanced threat prevention such as anti-phishing and anti-ransomware, and technologies that provide forensics such as endpoint detection and response (EDR) solutions.'),
(20, 'Mobile Security', 'Often overlooked, mobile devices such as tablets and smartphones ', '/mobile-security', '', '1682324283-IMG_20211210_201550.jpg', 'Mobile Security,Mobile ,ecurity', 'Often overlooked,', 'Often overlooked, mobile devices such as tablets and smartphones have access to corporate data, exposing businesses to threats from malicious apps, zero-day, phishing, and IM (Instant Messaging) attacks. Mobile security prevents these attacks and secures the operating systems and devices from rooting and jailbreaking. When included with an MDM (Mobile Device Management) solution, this enables enterprises to ensure only compliant mobile devices have access to corporate assets.'),
(21, 'IoT Security', 'While using Internet of Things (IoT) devices certainly delivers productivity benefits.', '/iot-security', '', '1682324329-b294b39a66bdafebb533fb0f3b4094be.jpg', 'IoT Security,IoT,Security', 'IoT Security', 'While using Internet of Things (IoT) devices certainly delivers productivity benefits, it also exposes organizations to new cyber threats. Threat actors seek out vulnerable devices inadvertently connected to the Internet for nefarious uses such as a pathway into a corporate network or for another bot in a global bot network.'),
(22, 'Application Security', 'Web applications, like anything else directly connected to the Internet, are targets for threat acto', '/application-security', '', '1682324414-images (13).jpeg', 'Application,Security,Application Security', 'Application Security', 'Web applications, like anything else directly connected to the Internet, are targets for threat actors. Since 2007, OWASP has tracked the top 10 threats to critical web application security flaws such as injection, broken authentication, misconfiguration, and cross-site scripting to name a few.'),
(23, 'Zero Trust', 'The traditional security model is perimeter-focused, building walls around an organization’s valuabl', '/zero-trust', '', '1682324464-horse_fire-wallpaper-1920x1080.jpg', 'Zero Trust,Zero,Trust', 'The traditional security model', 'The traditional security model is perimeter-focused, building walls around an organization’s valuable assets like a castle. However, this approach has several issues, such as the potential for insider threats and the rapid dissolution of the network perimeter.');

-- --------------------------------------------------------

--
-- Table structure for table `services_advance`
--

CREATE TABLE `services_advance` (
  `sa_id` int(11) NOT NULL,
  `s_id` varchar(12) NOT NULL,
  `sa_heading` varchar(100) NOT NULL,
  `sa_paragraph` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_advance`
--

INSERT INTO `services_advance` (`sa_id`, `s_id`, `sa_heading`, `sa_paragraph`) VALUES
(14, '17', ' Advanced and multi-layered', 'Advanced and multi-layered network threat prevention technologies include IPS (Intrusion Prevention System), NGAV (Next-Gen Antivirus), Sandboxing, and CDR (Content Disarm and Reconstruction). Also important are network analytics, threat hunting, and automated SOAR (Security Orchestration and Response) technologies.'),
(15, '21', ' runtime attacks.', 'protects these devices with discovery and classification of the connected devices, auto-segmentation to control network activities, and using IPS as a virtual patch to prevent exploits against vulnerable IoT devices. In some cases, the firmware of the device can also be augmented with small agents to prevent exploits and runtime attacks.'),
(16, '21', ' Web applications', 'Web applications, like anything else directly connected to the Internet, are targets for threat actors. Since 2007, OWASP has tracked the top 10 threats to critical web application security flaws such as injection, broken authentication, misconfiguration, and cross-site scripting to name a few.'),
(17, '23', ' As corporate assets', 'As corporate assets move off-premises as part of cloud adoption and remote work, a new approach to security is needed. Zero trust takes a more granular approach to security, protecting individual resources through a combination of micro-segmentation, monitoring, and enforcement of role-based access controls.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_id` int(9) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_position` varchar(50) NOT NULL,
  `t_img` text NOT NULL,
  `t_testimonial` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_id`, `t_name`, `t_position`, `t_img`, `t_testimonial`) VALUES
(2, 'gopal saram', 'Vice president', '1682411768-4e7cd3d664ddd6bbe37b6da25676a8db.jpg', 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(3, 'Rock', 'General manager', '1682411796-3d5179a0ce88d316b7e6c4775256b17e.jpg', NULL),
(4, 'Brock', 'Director', '1682411813-4e7cd3d664ddd6bbe37b6da25676a8db.jpg', NULL),
(5, 'monikay', 'Manager', '1682411904-2caa528fdb2388e070a79674747cb510.jpg', NULL),
(6, 'Morgan Cooper', 'CEO & FOUNDER', '1682412141-4e7cd3d664ddd6bbe37b6da25676a8db.jpg', ' Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(7, 'Amanda Brown', 'CO-FOUNDER', '1682412167-3e3a104ee46f4ac209f735779260c379.jpg', NULL),
(8, 'Duglas Rovland', 'CYBER ANALYST', '1682412187-1a014c75597ce56d619ea18ec95554ac.jpg', NULL),
(9, 'Christina Jonson', 'ETHICAL HACKER', '1682412210-1f43eefd69c0fe47bf5d5582cb50ea84.jpg', NULL),
(10, 'Duglas Rovland', 'CYBER ANALYST', '1682412235-0bfa7080d251a618324d2808cf0d2f40.jpg', NULL),
(11, 'Duglas Rovland', 'SECURITY HEAD', '1682412268-4f50f14e9d0bd874ed55c923f86c406f.jpg', NULL),
(12, 'Duglas jons', 'CYBER ANALYST', '1682412591-3b473a8b36726b4f6489efa627384041.jpg', NULL),
(13, 'pritam', 'owner ', '1682412610-5e62e2a403174629b6da9299cbf15b7c.jpg', ' lazy man'),
(15, 'Rock sarma', 'hr on gome', '1682415105-1e7cf99b82a74bcedc966751bec69abc.jpg', ' Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(16, 'borck boy', 'bor', '1682415208-1ea2f025fc43e21ae94b0229c88f53b6.jpg', 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.Wikipedia is a free online encyclopedia,');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `w_id` int(12) NOT NULL,
  `w_address` text NOT NULL,
  `w_email` text NOT NULL,
  `w_mobile` varchar(20) NOT NULL,
  `w_facebook` text NOT NULL,
  `w_twitter` text NOT NULL,
  `w_instagram` text NOT NULL,
  `w_linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`w_id`, `w_address`, `w_email`, `w_mobile`, `w_facebook`, `w_twitter`, `w_instagram`, `w_linkedin`) VALUES
(1, 'The Amazon Corporate Headquarters address is 410 Terry Ave N, Seattle 98109, WA. Get directions to Amazon Corporate Headquarters from Bing: 410 Terry Ave N, Seattle, WA      ', 'admin@gmail.com', '+91 28384 76543', 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`al_id`);

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`ana_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `services_advance`
--
ALTER TABLE `services_advance`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `al_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `ana_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `b_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `f_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `services_advance`
--
ALTER TABLE `services_advance`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `w_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
