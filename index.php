<?php

// Add arrays for CV
$name = "Mike Gordievsky";
$position = "DevOps | PM";
$contacts = [
    "Place:" => "Ukraine, Odessa, 65012",
    "Email:" => "mike.gordievsky@gmail.com",
    "Lnkdn:" => "LinkedIn: <a href='https://www.linkedin.com/in/gordievsky/'>Gordievsky</a>",
];
$technologies = [
    "AWS", "Docker", "Jenkins",
];
$experience_summary = [
    "System Administrator (Windows + Hardware)  since  2003",
    "Work in IT-Companies and freelance  since 2006",
    "DevOps, Linux user  and freelancer since 2011"
];

// Output layout
// 1. Name & Position
echo "<body style='padding: 5%'>";
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
echo "<ul>";
foreach($experience_summary as $es) {
    echo "<li>$es</li>\n";
}
echo "</ul>";

// Set Kiev timezone
date_default_timezone_set('Europe/Kiev');
// Show current time in Kiev
Echo "<br/><br/><br/> ******************<br/>";
Echo "Now in Ukraine: ";
Echo date("l jS \of F Y h:i:s A\n");

// End of loyaut
echo "</body>";

?>
