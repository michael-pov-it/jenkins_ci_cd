<?php

// Add arrays for CV
$name = "Mike Gordievsky";
$position = "DevOps | PM";
$contacts = [
    "Place:" => "Ukraine, Odessa, 65012",
    "Email:" => "Email: <a href='mailto: mike.gordievsky@gmail.com'>mike.gordievsky@gmail.com</a>",
    "Lnkdn:" => "LinkedIn: <a href='https://www.linkedin.com/in/gordievsky/'>Gordievsky</a>",
];
$technologies = [
    "AWS", "Docker", "Jenkins", "JS/HTML/CSS", "NPM"
];
$experience_summary = [
    "System Administrator (Windows + Hardware)  since  2003",
    "Work in IT-Companies and freelance  since 2006",
    "DevOps, Linux user  and freelancer since 2011"
];
$education = [
    "Bachelor Degree in Computer Engineering (IT Specialist)",
    "ESE English school in Malta. Upper-intermediate level (B2)"
];

// Output layout
// 1. Name & Position
echo "<body><div class='wrapper' style='padding: 20px 5%'>";
echo "<h1>$name</h1>";
echo "<h2>$position</h2>";

// 2. Contacts
echo "<h3>Contacts</h3>\n";
foreach($contacts as $contact) {
    echo "$contact<br/>";
}

// 3. Technologies
echo "<h3>Technologies</h3>\n";
echo join(", ", $technologies);

// 4. Experience
echo "<h3>Experience</h3>\n";
echo "<ul style='padding: 0'>";
foreach($experience_summary as $es) {
    echo "<li>$es</li>\n";
}
echo "</ul>";

// 5. Education and additional information
echo "<h3>Education and certificates</h3>\n";
echo "<ul style='padding: 0'>";
foreach($education as $ed) {
    echo "<li>$ed</li>\n";
}
echo "</ul>";
echo "</div>";

// Set Kiev timezone
date_default_timezone_set('Europe/Kiev');
// Show current time in Kiev
Echo "<footer style='padding: 0 5%'>";
Echo "<br/>******************<br/>";
Echo "Now in Ukraine: ";
Echo date("l jS \of F Y h:i:s A\n");
include_once('build.php');
// End of loyaut
echo "</footer></body>";



?>
