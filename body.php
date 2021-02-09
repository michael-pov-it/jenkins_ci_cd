<html>

<body class="<?php if($dark) echo 'dark'; else echo '' ?>">

<?php

// 0. Container
echo "<div class='container wrapper'>";

// 1. Name & Position
echo "<div class='row header'>";
echo "<h1 class='col-xl-12'>$name</h1>";
echo "<h2 class='col-xl-12'>$position</h2>";
echo $dark_mode;

// 2. Contacts
foreach($contacts as $k => $v) {
    echo $row;
    echo "<b class='col-2'>" . $k . "</b><span class='col'>" . $v . "</span></div>";
}

// 3. Technologies
echo "<h3>Technologies</h3>\n";
foreach($technologies as $tech_key => $tech_val) {
    echo $row;
    echo "<b class='col-2'>" . $tech_key . "</b><span class='col'>" . " " . $tech_val . "</span></div>";
}

// 4. Experience Summary
echo "<h3>Experience Summary</h3>\n";
echo $row . "<ul class='col'>";
foreach($experience_summary as $es) {
    echo "<li>$es</li>\n";
}
echo "</ul></div>";

// 5. Jobs
echo "<h3 class='exp'>Experience <i>(click to expand)</i></h3>";
echo "<div class='row accordion'><ul class='col'>";
foreach($experience as $ex => $company) {
    echo "<h4>" . $ex . "</h4>";
    foreach($company as $k => $v) {
        if($k == 'Date') {
            echo "<div class='date'>$v</div>";
        } else {
            echo "<div class='info'><b>$k </b> $v</div>";
        }
    };
};
echo "</ul></div>";

// 6. Education and additional information
echo "<h3>Education and certificates</h3>\n";
echo "<ul>";
foreach($education as $ed) {
    echo "<li>$ed</li>\n";
}
?>
</ul></div>