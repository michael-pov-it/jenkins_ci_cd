<?php

// 1. Name & Position
echo "<body><div class='container wrapper'>";
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

?>