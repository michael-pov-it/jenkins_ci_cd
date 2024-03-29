<?php

// Layout variables
$row = "<div class='row'>";
$dark = true;
$dark_mode = "<div class='dark_mode'><a href='#'>Dark Mode</a></div>";

// Add variables to CV
$name = "Mike H.";
$position = "DevOps | TechLead";
$contacts = [
    "Location:" => "Slovakia, Banská Bystrica, 974 01",
    "Email:" => "<a href='mailto: admin@web-dev-studio.com'>admin@web-dev-studio.com</a>",
    "Skype:" => "<a href='skype:live:.cid.3d4de0dbb497155a?chat'>Start Chat</a>",
    "Telegram:" => "<a href='https://t.me/Mike_The_Engineer'>@Mike_The_Engineer</a>",
];
$technologies = [
    "Expert:" => "Zabbix, Linux (Debian, RHEL, Arch), Networks, VCS (Git, SVN)",
    "Middle level" => "AWS (EC2, Lightsail, ALB, EFS, S3, Route53, IAM, SES|SWS|SQS), GCP, Digital Ocean, Docker, Terraform, MySQL DBs, NoSQL DBs (Redis, Mongo), Jira|Confluence, bash",
    "Junior level" => "AWS (Beanstalk, VPC, Cloud Front, RDS, DynamoDB), Ansible, Jenkins, TeamCity, K8s",
    "Also:" => "Grafana, HTML/CSS/JS, MVC pattern, PHP, NodeJS/VueJS/ReactJS/AngularJS"
];
$experience_summary = [
    "System Administrator (Windows + Hardware) since 2003",
    "Work in IT-Companies since 2006",
    "Linux user and freelancer since 2011",
    "Working in DevOps position since 2019"
];
$experience = [
    "IT-company (DaaS) / MVNO Engineer | Middle DevOps" => [
        "Date" => "March 2021 - Present Time, Remote",
        "Responsibilities:" => "Work on different EU&USA companies"
    ],
    "AVyS Telecom / MVNO Engineer | System Engineer " => [
        "Date" => "March 2020 - March 2021, Remote",
        "Responsibilities:" => "Maintenance european mobile-operator. Assistance with support. Monitoring. Databases"
    ],
    "Imonomy Interactive LTD / DevOps" => [
        "Date" => "November 2019 - February 2020, Odessa",
        "Responsibilities:" => "Configuring the RTB-servers up; Bash scripts; Crontab; Docker; Replications; Agents; Web-servers (Apache&NGINX), MySQL; Wordpress, AWS"
    ]
];
$education = [
    "Bachelor Degree in Computer Engineering (IT Specialist)",
    "English B2-level (Upper-intermediate). ESE school in Malta 2019.",
    "CCNA in progress"
];

?>