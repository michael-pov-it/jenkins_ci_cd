<?php

// 1. Name & Position
echo "<body><div class='wrapper'>";
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

// 5. Education and additional information
echo "<h3>Education and certificates</h3>\n";
echo "<ul>";
foreach($education as $ed) {
    echo "<li>$ed</li>\n";
}
echo "</ul>";
echo "</div>";

// Set Kiev timezone
date_default_timezone_set('Europe/Kiev');

// Show current time in Kiev
Echo "<footer>";
Echo "******************<br/><div class='now'>";
Echo "Now in Ukraine: ";
Echo date("l jS \of F Y h:i:s A\n");
Echo "</div><div class='build_info'>";
include_once('build.php');
Echo "</div>";

// End of loyaut
echo "</footer></body>";

?>