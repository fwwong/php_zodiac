<?php
    $zodiac = array(
        "Monkey",
        "Rooster",
        "Dog",
        "Pig",
        "Rat",
        "Ox",
        "Tiger",
        "Rabbit",
        "Dragon",
        "Snake",
        "Horse",
        "Goat"
    );

    // year has to be between 1990 and 2025 to work
    if ('year' < 1990 || 'year' > 2025) {
        echo "<p>Year must be between 1990 and 2025</p>";
    } else if (isset($_POST['year'])) {
        $year = $_POST['year'];
        $remainder = $year % 12;
        echo "<p>You were born under the sign of the " . $zodiac[$remainder] . "</p>";
        echo "<img src='zodiac/" . $zodiac[$remainder] . ".png' alt='" . $zodiac[$remainder] . "'>";
    } 

?>