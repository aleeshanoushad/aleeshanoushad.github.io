<?php
// Portfolio Configuration — edit these values
$config = [
    'name'       => 'Aleesha Noushad', // Your name
    'title'      => 'Senior Backend Developer [PHP, Node.JS]', // Your title
    'tagline'    => 'Building scalable systems & clean APIs',
    'email'      => 'aleeshaanoushad46@gmail.com',
    'github'     => 'https://github.com/aleeshanoushad',
    'linkedin'   => 'www.linkedin.com/in/aleesha-noushad-0767b5119',
    'location'   => 'Dubai, UAE (Resident Visa Holder)',
    'available'  => true,
    'years_exp'  => 6,
    'avatar'     => 'aleeshanoushad.jpg', // place your photo in the same folder
];

// ── SMTP Configuration (Gmail) ──────────────────────────────────────────────
// 1. Enable 2-Step Verification on your Google account
// 2. Go to https://myaccount.google.com/apppasswords
// 3. Generate an App Password for "Mail" → paste it below
$smtp = [
    'host'     => 'smtp.gmail.com',
    'username' => 'aleeshaanoushad46@gmail.com', // your Gmail address
    'password' => 'YOUR_APP_PASSWORD_HERE',       // 16-char App Password (not your Gmail password)
    'port'     => 587,
    'from'     => 'aleeshaanoushad46@gmail.com',
    'from_name'=> 'Aleesha Noushad Portfolio',
];

$skills = [
    'Languages'  => ['PHP',  'Node Js' ,'Python',  'JavaScript', 'SQL' ],
    'Frameworks' => ['Laravel', 'Lumen','FastAPI', 'Express.js', 'Codeigniter', 'Wordpress', 'React JS'],
    'Databases'  => ['MySQL', 'MSSQL', 'Redis', 'MongoDB','SQLite'],
    'DevOps'     => ['Docker',  'AWS', 'CI/CD', 'Nginx','Azure(Basic)'],
    'APIs & Security'  => ['RESTfull API', 'GraphQL (basic)', 'OAuth2', 'JWT', 'Laravel Sanctum'],
    'Third-Party Integrations'      => ['Stripe (Payment)', 'Twilio (SMS)', 'Dialogflow', 'Alexa', 'WhatsApp API', 'Facebook API', 'Google Business Messages'],
   
    'Tools'      => ['Git','PHPUnit', 'RabbitMQ', 'Elasticsearch', 'GitHub', 'GitLab','Ratchet', 'Postman','Swagger','Jira', 'Trello', 'Slack', 'Bitbucket'],
     'AI Development Tools' => ['GitHub Copilot', 'ChatGPT', 'Claude AI', 'Google Gemini'],
];

$experience = [
  [
        'role'    => 'Freelance PHP Developer',
        'company' => 'Jiitak Technologies LLC & Self-Employed',
        'period'  => '2025 – Present',
        'desc'    => '• Delivered 5+ client projects (small to mid-scale) using Laravel, CodeIgniter, and MySQL, achieving 100% on-time
delivery.
• Engineered RESTful APIs and integrated third-party services, improving client application performance by 25%.
• Implemented secure coding practices including input validation, XSS prevention, and SQL injection prevention;
optimised MySQL queries, reducing API response times by 20%.
• Deployed projects on AWS EC2 and applied SEO optimisation to improve website search rankings.
• Leveraged AI-assisted development tools (GitHub Copilot, ChatGPT) to accelerate coding, debugging, and
documentation — reducing overall delivery time.
• Gathered requirements directly from clients, managed full development lifecycle from feature development
through to testing and deployment.',
        'tags'    => ['Codeigniter', 'Laravel',  'Docker', 'AWS','MySQL', 'Git'],
    ],
    [
        'role'    => 'Career Break',
        'company' => 'Maternity Leave',
        'period'  => '2024 –  2025',
        'desc'    => 'Planned break for pregnancy and postpartum recovery. Continued professional
development through self-learning, online projects, and upskilling in PHP 8.x, Laravel,Node Js and React.js.',
        'tags'    => [],
    ],
    [
        'role'    => 'Part-Time PHP Developer',
        'company' => 'Deerom Technologies',
        'period'  => '2024 – 2024',
        'desc'    => '• Contributed to Laravel-based enhancements, bug fixes, and API integrations for multiple client projects.
• Optimised MySQL database queries, improving average execution time by 15%.
• Collaborated in Agile sprints, ensuring timely delivery of features and bug fixes.',
        'tags'    => ['Codeigniter','WordPress', 'Laravel',  'Docker', 'AWS','MySQL', 'Git', 'Agile'],
    ],
    [
        'role'    => 'Full Stack Developer',
        'company' => 'Farnek Services LLC (Hitek AI)', 
        'period'  => '2022 – 2023',
        'desc'    => '• Developed and deployed enterprise-scale web applications using Laravel, CodeIgniter, Node.js, JavaScript, and
MySQL, serving 5,000+ active users.
• Designed and implemented RESTful APIs in both PHP and Node.js, improving system scalability and overall
performance.
• Optimised API response times by 30% through MySQL query tuning and strategic caching.
• Implemented role-based authentication (RBAC) and robust data security across multi-system integrations.
• Integrated Stripe payment gateway and Twilio SMS notifications, ensuring PCI-compliant secure transactions
and real-time communication.
• Built responsive front-end UIs using JavaScript, HTML5, and CSS3, fully integrated with PHP backend logic.
• Developed and maintained reusable PHP modules and efficient database schemas following MVC best practices.
• Contributed to Farnek Buddy (Hitek) — an internal employee management platform — using Node.js backend
services and APIs.',
        'tags'    => ['Node.js', 'Laravel','Codeigniter', 'Stripe','MSSQL'],
    ],
    [
        'role'    => 'PHP Developer',
        'company' => 'Riafy Techonologies',
        'period'  => '2020 – 2022',
        'desc'    => '• Led a team of 3 developers, overseeing backend development, code quality, and project delivery.
• Built CI/CD pipelines with Git and AWS EC2, reducing deployment time by 40%.
• Implemented OAuth2 and JWT security protocols across multi-system integrations.
• Designed and deployed NoSQL-based (MongoDB) data storage, improving system uptime by 20%.
• Automated unit testing using PHPUnit and conducted code reviews, reducing production defects by 15%.
• Participated in full Scrum ceremonies (Sprint Planning, Stand-ups, Retrospectives) within a team of 10+
developers.
• Integrated front-end elements with backend logic, improving overall application responsiveness by 20%.',
        'tags'    => ['PHP', 'Python','MySQL', 'JavaScript','Laravel', 'Git', 'AWS', 'OAuth2', 'JWT', 'MongoDB', 'PHPUnit', 'Scrum'],
    ],
    [
        'role'    => 'Junior PHP Developer',
        'company' => 'Nova e-Solution',
        'period'  => '2018 – 2020',
        'desc'    => '• Developed and customised WordPress websites including custom theme development, HTML-to-WordPress
conversion, and plugin creation. 
• Integrated third-party APIs and plugins to extend website functionality.
• Conducted thorough testing and debugging, reducing client-reported issues by 20%.
• Used Jira for task tracking and sprint planning • Bitbucket and Git for version control and collaboration with
senior developers.',
        'tags'    => ['PHP', 'MySQL', 'JavaScript','codeigniter', 'WordPress', 'Git', 'Jira', 'Bitbucket'],
    ],
];

$projects = [
    [
        'name'   => 'Feddy Chatbot — Federal Bank (Google Award Winner & Google-Featured Project)',
        'desc'   => 'Developed an AI-powered chatbot for banking operations integrated with Alexa, WhatsApp, Facebook, and Google
Business Messages. Deployed all endpoints and backend on AWS EC2. Secured sensitive banking interactions using
OAuth2. Load-tested for 50,000+ concurrent users. Winner of Google Business Messages Global Contest; featured in an
official Google case study for Federal Bank.',
        'tags'   => ['Core PHP', 'Dialogflow', 'AWS EC2', 'OAuth2', 'WhatsApp API', 'Facebook API', 'Alexa', 'Google Business Messages'],
        'github' => 'https://www.federal.bank.in/',
        'demo'   => 'projects_img/Web-banner-Feddy.jpg',
        'icon'   => '🤖',
    ],
    [
        'name'   => 'Locopay — Tax Management System (Japan)',
        'desc'   => 'Developed a Tax Management System for Japan including Admin Portal and Store Portal. Built secure REST APIs for mobile app integration with role-based access control using Laravel Sanctum. Implemented GitHub CI/CD pipeline for
deployment automation and integrated file storage with AWS S3.',
        'tags'   => ['Laravel', 'MySQL', 'AWS S3', 'GitHub CI/CD', 'Laravel Sanctum'],
        'github' => 'https://locopay.co.jp/',
        'demo'   => null,
        'icon'   => '🧾',
    ],
    [
        'name'   => 'FlexiGuest — Guest Management Platform',
        'desc'   => 'Developed REST APIs for mobile apps, admin portals, and guest portals. Optimised API response times by 25% and enforced role-based access security across all endpoints. Integrated third-party services including Stripe for payments and Twilio for SMS notifications. Deployed on AWS EC2 with Docker containers.',
        'tags'   => ['CodeIgniter', 'REST API', 'JWT', 'MySQL','AWS EC2', 'Docker', 'Stripe API', 'Twilio API'],
        'github' => null,
        'demo'   => null,
        'icon'   => '🏨',
    ],
    [
        'name'   => 'Farnek Buddy — Internal Employee Management Platform',
        'desc'   => 'Built an internal employee management platform with leave management, salary tracking, and admin controls.
Developed Node.js REST APIs and Angular, React JS frontend with role-based access and mobile app integration.',
        'tags'   => ['Node.js', 'React Js','Angular', 'REST API', 'MySQL'],
        'github' => null,
        'demo'   => null,
        'icon'   => '�',
    ],
    [
        'name'   => 'DPA — Dubai Police Academy Portal',
        'desc'   => 'Developed admin portal and mobile APIs for Dubai Police Academy. Enforced API authentication using JWT to secure all communication between services.',
        'tags'   => ['CodeIgniter', 'JWT', 'REST API'],
        'github' => null,
        'demo'   => null,
        'icon'   => '�️',
    ],
    [
        'name'   => 'SafeTek — Jeddah Airport Safety Management System',
        'desc'   => 'Developed a safety management system for Jeddah Airport including a full inspection and compliance module.',
        'tags'   => ['Laravel', 'MySQL'],
        'github' => null,
        'demo'   => null,
        'icon'   => '✈️',
    ],
    [
        'name'   => 'CAFM — Facility Management System',
        'desc'   => 'Developed Purchase Order Module and Supplier Portal for a Facility Management System.',
        'tags'   => ['Laravel', 'MySQL'],
        'github' => null,
        'demo'   => null,
        'icon'   => '🏗️',
    ],
    [
        'name'   => 'E-nursing & Nurses Career Portal',
        'desc'   => 'Implemented Interview module for a recruitment and management system for nursing homes and Implemented Inventory module and Employee Performance module for a nursing home management system in Ireland. in Ireland.',
        'tags'   => ['CodeIgniter', 'MySQL'],
        'github' => null,
        'demo'   => null,
        'icon'   => '🏥',
    ],
    [
        'name'   => 'Farmatch — Pharmacist Matching Service (Japan)',
        'desc'   => 'Developed a Japanese pharmacist-to-pharmacy and hospital matching platform designed to connect pharmacists with
workplaces suited to their specific lifestyle needs, including childcare support, retirement, side jobs, and flexible work
styles.',
        'tags'   => ['Laravel', 'MySQL', 'Laravel Passport', 'JWT', 'Laravel Jobs', 'Queues'],
        'github' => null,
        'demo'   => null,
        'icon'   => '�',
    ],
];

$certifications = [
    [
        'name'   => 'Introduction to Artificial Intelligence',
        'issuer' => 'LinkedIn',
        'date'   => '2026',
        'icon'   => '☁️',
        'color'  => '#FF9900',
        'url'    => null,
    ],
    [
        'name'   => 'A standAlone project: Integration between AWS Lambda and AWS API Gateway',
        'issuer' => 'LinkedIn',
        'date'   => '2026',
        'icon'   => '🐘',
        'color'  => '#7c3aed',
        'url'    => null,
    ],
    [
        'name'   => 'Node.js — Essential Training',
         'issuer' => 'LinkedIn',
        'date'   => '2026',
        'icon'   => '🟢',
        'color'  => '#10b981',
        'url'    => null,
    ],
    [
        'name'   => 'Advanced PHP Debugging Techniques',
         'issuer' => 'LinkedIn',
        'date'   => '2026',
        'icon'   => '⚛️',
        'color'  => '#3b82f6',
        'url'    => null,
    ],
    [
        'name'   => 'Build REST API with FastAPI',
         'issuer' => 'LinkedIn',
        'date'   => '2026',
        'icon'   => '🐳',
        'color'  => '#0ea5e9',
        'url'    => null,
    ],
    [
        'name'   => 'Build RESTFUL API with Node js and Express',
        'issuer' => 'Udemy',
        'date'   => '2021',
        'icon'   => '🔴',
        'color'  => '#ef4444',
        'url'    => null,
    ],
];

$stats = [
    ['value' => $config['years_exp'] . '+', 'label' => 'Years Experience'],
    ['value' => '20+',  'label' => 'Projects Delivered'],
    ['value' => '99.9%','label' => 'Uptime SLA'],
    ['value' => '5M+',  'label' => 'Daily API Requests'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($config['name']) ?> — Backend Developer</title>
<meta name="description" content="<?= htmlspecialchars($config['name']) ?> — <?= htmlspecialchars($config['tagline']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg:        #0a0e1a;
    --bg2:       #0f1629;
    --bg3:       #151d35;
    --card:      #111827;
    --border:    #1e2d4a;
    --accent:    #3b82f6;
    --accent2:   #6366f1;
    --green:     #10b981;
    --text:      #e2e8f0;
    --muted:     #64748b;
    --light:     #94a3b8;
    --radius:    12px;
    --radius-lg: 20px;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'Inter', sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
    overflow-x: hidden;
  }

  /* ── Scrollbar ── */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--bg); }
  ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 3px; }

  /* ── Nav ── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 1rem 2rem;
    background: rgba(10,14,26,.85);
    backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--border);
    transition: all .3s;
  }
  .nav-logo {
    font-family: 'JetBrains Mono', monospace;
    font-size: .95rem; color: var(--accent);
    text-decoration: none;
  }
  .nav-links { display: flex; gap: 2rem; list-style: none; }
  .nav-links a {
    color: var(--light); text-decoration: none; font-size: .9rem;
    transition: color .2s;
  }
  .nav-links a:hover { color: var(--accent); }
  .nav-cta {
    background: var(--accent); color: #fff;
    padding: .45rem 1.1rem; border-radius: 8px;
    text-decoration: none; font-size: .85rem; font-weight: 600;
    transition: opacity .2s;
  }
  .nav-cta:hover { opacity: .85; }

  /* ── Hero ── */
  .hero {
    min-height: 100vh;
    display: flex; align-items: center;
    padding: 6rem 2rem 4rem;
    position: relative; overflow: hidden;
  }
  .hero-bg {
    position: absolute; inset: 0; z-index: 0;
    background:
      radial-gradient(ellipse 80% 60% at 60% 40%, rgba(59,130,246,.12) 0%, transparent 70%),
      radial-gradient(ellipse 50% 40% at 20% 80%, rgba(99,102,241,.08) 0%, transparent 60%);
  }
  .hero-grid {
    position: absolute; inset: 0; z-index: 0; opacity: .04;
    background-image:
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  .hero-inner {
    position: relative; z-index: 1;
    max-width: 1100px; margin: 0 auto; width: 100%;
    display: grid; grid-template-columns: 1fr auto; gap: 4rem; align-items: center;
  }
  .hero-badge {
    display: inline-flex; align-items: center; gap: .5rem;
    background: rgba(16,185,129,.1); border: 1px solid rgba(16,185,129,.25);
    color: var(--green); padding: .35rem .9rem; border-radius: 999px;
    font-size: .8rem; font-weight: 500; margin-bottom: 1.5rem;
  }
  .hero-badge .dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--green); animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%,100% { opacity: 1; transform: scale(1); }
    50%      { opacity: .5; transform: scale(1.3); }
  }
  .hero h1 {
    font-size: clamp(2.4rem, 5vw, 3.8rem);
    font-weight: 800; line-height: 1.1;
    margin-bottom: 1rem;
  }
  .hero h1 span {
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  }
  .hero-sub {
    font-size: 1.15rem; color: var(--light);
    max-width: 520px; margin-bottom: 2rem;
  }
  .hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; }
  .btn {
    display: inline-flex; align-items: center; gap: .5rem;
    padding: .75rem 1.6rem; border-radius: 10px;
    font-size: .95rem; font-weight: 600; text-decoration: none;
    transition: all .2s; cursor: pointer; border: none;
  }
  .btn-primary {
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    color: #fff;
  }
  .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(59,130,246,.35); }
  .btn-outline {
    background: transparent; color: var(--text);
    border: 1px solid var(--border);
  }
  .btn-outline:hover { border-color: var(--accent); color: var(--accent); transform: translateY(-2px); }

  .hero-avatar {
    width: 220px; height: 220px; border-radius: 50%;
    border: 3px solid var(--border);
    object-fit: cover;
    box-shadow: 0 0 60px rgba(59,130,246,.2);
    flex-shrink: 0;
  }
  .hero-avatar-placeholder {
    width: 220px; height: 220px; border-radius: 50%;
    border: 3px solid var(--border);
    background: var(--bg3);
    display: flex; align-items: center; justify-content: center;
    font-size: 5rem;
    box-shadow: 0 0 60px rgba(59,130,246,.2);
    flex-shrink: 0;
  }

  /* ── Stats ── */
  .stats {
    background: var(--bg2);
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    padding: 2.5rem 2rem;
  }
  .stats-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;
    text-align: center;
  }
  .stat-value {
    font-size: 2.2rem; font-weight: 800;
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  }
  .stat-label { font-size: .85rem; color: var(--muted); margin-top: .25rem; }

  /* ── Sections ── */
  section { padding: 5rem 2rem; }
  .section-inner { max-width: 1100px; margin: 0 auto; }
  .section-label {
    font-family: 'JetBrains Mono', monospace;
    font-size: .8rem; color: var(--accent);
    text-transform: uppercase; letter-spacing: .1em;
    margin-bottom: .75rem;
  }
  .section-title {
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; margin-bottom: 1rem;
  }
  .section-desc { color: var(--light); max-width: 560px; margin-bottom: 3rem; }

  /* ── Skills ── */
  #skills { background: var(--bg2); }
  .skills-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;
  }
  .skill-group {
    background: var(--card); border: 1px solid var(--border);
    border-radius: var(--radius); padding: 1.5rem;
    transition: border-color .2s, transform .2s;
  }
  .skill-group:hover { border-color: var(--accent); transform: translateY(-3px); }
  .skill-group-title {
    font-size: .75rem; font-weight: 600; color: var(--accent);
    text-transform: uppercase; letter-spacing: .08em; margin-bottom: 1rem;
  }
  .skill-tags { display: flex; flex-wrap: wrap; gap: .5rem; }
  .skill-tag {
    background: var(--bg3); color: var(--light);
    padding: .3rem .75rem; border-radius: 6px;
    font-size: .8rem; font-family: 'JetBrains Mono', monospace;
    border: 1px solid var(--border);
  }

  /* ── Experience ── */
  .timeline { position: relative; padding-left: 2rem; }
  .timeline::before {
    content: ''; position: absolute; left: 0; top: 0; bottom: 0;
    width: 2px; background: linear-gradient(to bottom, var(--accent), var(--accent2), transparent);
  }
  .timeline-item {
    position: relative; margin-bottom: 2.5rem;
    background: var(--card); border: 1px solid var(--border);
    border-radius: var(--radius-lg); padding: 1.75rem;
    transition: border-color .2s, transform .2s;
  }
  .timeline-item:hover { border-color: var(--accent); transform: translateX(4px); }
  .timeline-item::before {
    content: ''; position: absolute; left: -2.6rem; top: 1.75rem;
    width: 12px; height: 12px; border-radius: 50%;
    background: var(--accent); border: 2px solid var(--bg);
    box-shadow: 0 0 10px rgba(59,130,246,.5);
  }
  .timeline-header {
    display: flex; justify-content: space-between; align-items: flex-start;
    flex-wrap: wrap; gap: .5rem; margin-bottom: .75rem;
  }
  .timeline-role { font-size: 1.1rem; font-weight: 700; }
  .timeline-company { color: var(--accent); font-weight: 500; }
  .timeline-period {
    font-size: .8rem; color: var(--muted);
    background: var(--bg3); padding: .3rem .75rem;
    border-radius: 999px; border: 1px solid var(--border);
    font-family: 'JetBrains Mono', monospace;
    white-space: nowrap;
  }
  .timeline-desc { color: var(--light); font-size: .95rem; margin-bottom: 1rem; }
  .tag-list { display: flex; flex-wrap: wrap; gap: .5rem; }
  .tag {
    background: rgba(59,130,246,.1); color: var(--accent);
    border: 1px solid rgba(59,130,246,.2);
    padding: .25rem .65rem; border-radius: 6px;
    font-size: .78rem; font-weight: 500;
  }

  /* ── Projects ── */
  #projects { background: var(--bg2); }
  .projects-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;
  }
  .project-card {
    background: var(--card); border: 1px solid var(--border);
    border-radius: var(--radius-lg); padding: 1.75rem;
    display: flex; flex-direction: column;
    transition: border-color .2s, transform .2s, box-shadow .2s;
  }
  .project-card:hover {
    border-color: var(--accent); transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,.3);
  }
  .project-icon { font-size: 2rem; margin-bottom: 1rem; }
  .project-name { font-size: 1.1rem; font-weight: 700; margin-bottom: .5rem; }
  .project-desc { color: var(--light); font-size: .9rem; flex: 1; margin-bottom: 1.25rem; }
  .project-footer { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: .75rem; }
  .project-links { display: flex; gap: .75rem; }
  .project-link {
    color: var(--muted); text-decoration: none; font-size: .85rem;
    display: flex; align-items: center; gap: .3rem;
    transition: color .2s;
  }
  .project-link:hover { color: var(--accent); }

  /* ── Certifications ── */
  #certifications { background: var(--bg); }
  .certs-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.25rem;
  }
  .cert-card {
    background: var(--card); border: 1px solid var(--border);
    border-radius: var(--radius); padding: 1.5rem;
    display: flex; align-items: flex-start; gap: 1rem;
    transition: border-color .2s, transform .2s;
    text-decoration: none; color: inherit;
  }
  .cert-card:hover { border-color: var(--accent); transform: translateY(-3px); }
  .cert-icon {
    width: 46px; height: 46px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem; flex-shrink: 0;
    background: var(--bg3); border: 1px solid var(--border);
  }
  .cert-name { font-size: .95rem; font-weight: 600; margin-bottom: .3rem; }
  .cert-issuer { font-size: .82rem; color: var(--accent); font-weight: 500; }
  .cert-date {
    font-size: .75rem; color: var(--muted);
    font-family: 'JetBrains Mono', monospace;
    margin-top: .4rem;
  }
  .cert-badge {
    display: inline-flex; align-items: center; gap: .3rem;
    font-size: .72rem; color: var(--green);
    background: rgba(16,185,129,.1); border: 1px solid rgba(16,185,129,.2);
    padding: .2rem .55rem; border-radius: 999px; margin-top: .5rem;
  }

  /* ── Form feedback ── */
  .form-alert {
    padding: .85rem 1.1rem; border-radius: var(--radius);
    font-size: .9rem; font-weight: 500; display: none;
  }
  .form-alert.success {
    background: rgba(16,185,129,.1); border: 1px solid rgba(16,185,129,.3);
    color: var(--green); display: block;
  }
  .form-alert.error {
    background: rgba(239,68,68,.1); border: 1px solid rgba(239,68,68,.3);
    color: #f87171; display: block;
  }
  .btn:disabled { opacity: .6; cursor: not-allowed; transform: none !important; }

  /* ── Contact ── */
  .contact-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;
  }
  .contact-info p { color: var(--light); margin-bottom: 2rem; }
  .contact-links { display: flex; flex-direction: column; gap: 1rem; }
  .contact-link {
    display: flex; align-items: center; gap: 1rem;
    background: var(--card); border: 1px solid var(--border);
    border-radius: var(--radius); padding: 1rem 1.25rem;
    text-decoration: none; color: var(--text);
    transition: border-color .2s, transform .2s;
  }
  .contact-link:hover { border-color: var(--accent); transform: translateX(4px); }
  .contact-link-icon {
    width: 40px; height: 40px; border-radius: 10px;
    background: var(--bg3); display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem; flex-shrink: 0;
  }
  .contact-link-text { font-size: .9rem; }
  .contact-link-label { font-size: .75rem; color: var(--muted); }

  .contact-form { display: flex; flex-direction: column; gap: 1rem; }
  .form-group { display: flex; flex-direction: column; gap: .4rem; }
  .form-group label { font-size: .85rem; color: var(--light); font-weight: 500; }
  .form-group input,
  .form-group textarea {
    background: var(--card); border: 1px solid var(--border);
    border-radius: var(--radius); padding: .75rem 1rem;
    color: var(--text); font-family: 'Inter', sans-serif; font-size: .9rem;
    transition: border-color .2s;
    resize: vertical;
  }
  .form-group input:focus,
  .form-group textarea:focus {
    outline: none; border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(59,130,246,.1);
  }
  .form-group textarea { min-height: 130px; }

  /* ── Footer ── */
  footer {
    background: var(--bg2); border-top: 1px solid var(--border);
    padding: 2rem; text-align: center;
    color: var(--muted); font-size: .85rem;
  }
  footer span { color: var(--accent); }

  /* ── Animations ── */
  .fade-in { opacity: 0; transform: translateY(20px); transition: opacity .6s, transform .6s; }
  .fade-in.visible { opacity: 1; transform: translateY(0); }

  /* ── Responsive ── */
  @media (max-width: 768px) {
    nav { padding: 1rem; }
    .nav-links { display: none; }
    .hero-inner { grid-template-columns: 1fr; text-align: center; }
    .hero-avatar, .hero-avatar-placeholder { margin: 0 auto; width: 160px; height: 160px; }
    .hero-actions { justify-content: center; }
    .hero-badge { margin: 0 auto 1.5rem; }
    .hero-sub { margin: 0 auto 2rem; }
    .stats-inner { grid-template-columns: repeat(2, 1fr); }
    .contact-grid { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <a href="#" class="nav-logo"><<?= htmlspecialchars($config['name']) ?> /></a>
  <ul class="nav-links">
    <li><a href="#skills">Skills</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#certifications">Certifications</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="mailto:<?= htmlspecialchars($config['email']) ?>" class="nav-cta">Hire Me</a>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="hero-inner">
    <div>
      <?php if ($config['available']): ?>
      <div class="hero-badge">
        <span class="dot"></span>
        Available for opportunities
      </div>
      <?php endif; ?>
      <h1>
        <?= htmlspecialchars($config['name']) ?><br>
        <span><?= htmlspecialchars($config['title']) ?></span>
      </h1>
      <p class="hero-sub"><?= htmlspecialchars($config['tagline']) ?> — crafting robust backends that scale.</p>
      <div class="hero-actions">
        <a href="#projects" class="btn btn-primary">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
          View Projects
        </a>
        <a href="mailto:<?= htmlspecialchars($config['email']) ?>" class="btn btn-outline">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
          Get In Touch
        </a>
      </div>
    </div>
    <?php if (file_exists($config['avatar'])): ?>
      <img src="<?= htmlspecialchars($config['avatar']) ?>" alt="<?= htmlspecialchars($config['name']) ?>" class="hero-avatar">
    <?php else: ?>
      <div class="hero-avatar-placeholder">👨‍💻</div>
    <?php endif; ?>
  </div>
</section>

<!-- STATS -->
<!-- <div class="stats">
  <div class="stats-inner">
    <?php foreach ($stats as $s): ?>
    <div class="fade-in">
      <div class="stat-value"><?= htmlspecialchars($s['value']) ?></div>
      <div class="stat-label"><?= htmlspecialchars($s['label']) ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div> -->

<!-- SKILLS -->
<section id="skills">
  <div class="section-inner">
    <div class="section-label">// tech stack</div>
    <h2 class="section-title">Skills & Technologies</h2>
    <p class="section-desc">Tools and technologies I work with daily to build production-grade systems.</p>
    <div class="skills-grid">
      <?php foreach ($skills as $group => $items): ?>
      <div class="skill-group fade-in">
        <div class="skill-group-title"><?= htmlspecialchars($group) ?></div>
        <div class="skill-tags">
          <?php foreach ($items as $skill): ?>
          <span class="skill-tag"><?= htmlspecialchars($skill) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience">
  <div class="section-inner">
    <div class="section-label">// career</div>
    <h2 class="section-title">Work Experience</h2>
    <p class="section-desc">A track record of delivering scalable backend solutions across different industries.</p>
    <div class="timeline">
      <?php foreach ($experience as $job): ?>
      <div class="timeline-item fade-in">
        <div class="timeline-header">
          <div>
            <div class="timeline-role"><?= htmlspecialchars($job['role']) ?></div>
            <div class="timeline-company"><?= htmlspecialchars($job['company']) ?></div>
          </div>
          <span class="timeline-period"><?= htmlspecialchars($job['period']) ?></span>
        </div>
        <p class="timeline-desc"><?= htmlspecialchars($job['desc']) ?></p>
        <div class="tag-list">
          <?php foreach ($job['tags'] as $tag): ?>
          <span class="tag"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="section-inner">
    <div class="section-label">// work</div>
    <h2 class="section-title">Featured Projects</h2>
    <p class="section-desc">Real-world systems built for performance, reliability, and scale.</p>
    <div class="projects-grid">
      <?php foreach ($projects as $p): ?>
      <div class="project-card fade-in">
        <div class="project-icon"><?= $p['icon'] ?></div>
        <div class="project-name"><?= htmlspecialchars($p['name']) ?></div>
        <p class="project-desc"><?= htmlspecialchars($p['desc']) ?></p>
        <div class="project-footer">
          <div class="tag-list">
            <?php foreach ($p['tags'] as $tag): ?>
            <span class="tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <div class="project-links">
            
            <?php if ($p['demo']): ?>
            <a href="<?= htmlspecialchars($p['demo']) ?>" target="_blank" rel="noopener" class="project-link">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              Demo
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS -->
<section id="certifications">
  <div class="section-inner">
    <div class="section-label">// credentials</div>
    <h2 class="section-title">Certifications</h2>
    <p class="section-desc">Continuous learning through recognised courses and certifications.</p>
    <div class="certs-grid">
      <?php foreach ($certifications as $cert): ?>
      <<?= $cert['url'] ? 'a href="' . htmlspecialchars($cert['url']) . '" target="_blank" rel="noopener"' : 'div' ?> class="cert-card fade-in">
        <div class="cert-icon"><?= $cert['icon'] ?></div>
        <div>
          <div class="cert-name"><?= htmlspecialchars($cert['name']) ?></div>
          <div class="cert-issuer"><?= htmlspecialchars($cert['issuer']) ?></div>
          <div class="cert-date">📅 <?= htmlspecialchars($cert['date']) ?></div>
          <div class="cert-badge">
            <svg width="10" height="10" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Completed
          </div>
        </div>
      </<?= $cert['url'] ? 'a' : 'div' ?>>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-inner">
    <div class="section-label">// contact</div>
    <h2 class="section-title">Get In Touch</h2>
    <div class="contact-grid">
      <div class="contact-info">
        <p>Open to new opportunities, collaborations, or just a good tech conversation. Drop me a message.</p>
        <div class="contact-links">
          <a href="mailto:<?= htmlspecialchars($config['email']) ?>" class="contact-link">
            <div class="contact-link-icon">✉️</div>
            <div>
              <div class="contact-link-text"><?= htmlspecialchars($config['email']) ?></div>
              <div class="contact-link-label">Email</div>
            </div>
          </a>
          <a href="<?= htmlspecialchars($config['github']) ?>" target="_blank" rel="noopener" class="contact-link">
            <div class="contact-link-icon">🐙</div>
            <div>
              <div class="contact-link-text">GitHub</div>
              <div class="contact-link-label"><?= htmlspecialchars($config['github']) ?></div>
            </div>
          </a>
          <a href="<?= htmlspecialchars($config['linkedin']) ?>" target="_blank" rel="noopener" class="contact-link">
            <div class="contact-link-icon">💼</div>
            <div>
              <div class="contact-link-text">LinkedIn</div>
              <div class="contact-link-label"><?= htmlspecialchars($config['linkedin']) ?></div>
            </div>
          </a>
          <div class="contact-link">
            <div class="contact-link-icon">📍</div>
            <div>
              <div class="contact-link-text"><?= htmlspecialchars($config['location']) ?></div>
              <div class="contact-link-label">Location</div>
            </div>
          </div>
        </div>
      </div>
      <form class="contact-form" id="contactForm" method="POST" action="#contact">
        <?php
        $form_status = '';
        $form_class  = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $sender_name    = trim(strip_tags($_POST['name']    ?? ''));
            $sender_email   = trim(strip_tags($_POST['email']   ?? ''));
            $sender_message = trim(strip_tags($_POST['message'] ?? ''));

            if (!$sender_name || !$sender_email || !$sender_message) {
                $form_status = 'Please fill in all fields.';
                $form_class  = 'error';
            } elseif (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
                $form_status = 'Please enter a valid email address.';
                $form_class  = 'error';
            } else {
                require_once __DIR__ . '/vendor/autoload.php';

                $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host       = $smtp['host'];
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $smtp['username'];
                    $mail->Password   = $smtp['password'];
                    $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = $smtp['port'];

                    $mail->setFrom($smtp['from'], $smtp['from_name']);
                    $mail->addAddress($config['email'], $config['name']);
                    $mail->addReplyTo($sender_email, $sender_name);

                    $mail->Subject = "Portfolio Contact: $sender_name";
                    $mail->Body    = "You received a new message from your portfolio contact form.\n\n"
                                   . "Name:    $sender_name\n"
                                   . "Email:   $sender_email\n\n"
                                   . "Message:\n$sender_message";

                    $mail->send();
                    $form_status = "Thanks, $sender_name! Your message has been sent successfully.";
                    $form_class  = 'success';
                } catch (\PHPMailer\PHPMailer\Exception $e) {
                    $form_status = 'Message could not be sent. Please email me directly.';
                    $form_class  = 'error';
                }
            }
        }
        ?>
        <?php if ($form_status): ?>
        <div class="form-alert <?= $form_class ?>"><?= htmlspecialchars($form_status) ?></div>
        <?php endif; ?>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name"
                 value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="your@email.com"
                 value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="What's on your mind?" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="submitBtn">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          Send Message
        </button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p>Built by <span><?= htmlspecialchars($config['name']) ?></span> &copy; <?= date('Y') ?></p>
</footer>

<script>
  // Fade-in on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>
</body>
</html>
