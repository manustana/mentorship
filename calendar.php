<?php
// Set the timezone

    include "navbar.php";
    date_default_timezone_set('UTC');
//    if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
//        header('location: home.php');
//    }
    // Get the current month and year
    $month = isset($_GET['month']) ? intval($_GET['month']) : date('n');
    $year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
    $currentMonth = date('n');

    $currentDay = date('d');

    // Get the number of days in the current month
    $num_days = date('t', mktime(0, 0, 0, $month, 1, $year));

    // Get the name of the current month
    $month_name = date('F', mktime(0, 0, 0, $month, 1, $year));

    // Get the name of the current day of the week
    $day_of_week = date('N', mktime(0, 0, 0, $month, 1, $year));

    // Calculate the number of blank cells at the beginning of the calendar
    $num_blanks = $day_of_week - 1;

    // Create an array of day names
    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    // Create an array of month names
    $months = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    // Output the HTML for the calendar
    echo '<table>';
    echo '<caption>' . $months[$month] . ' ' . $year . '</caption>';
    echo '<thead><tr>';
    foreach ($days as $day) {
        echo '<th>' . $day . '</th>';
    }
    echo '</tr></thead>';
    echo '<tbody>';
    echo '<tr>';
    // Output the blank cells at the beginning of the calendar
    for ($i = 0; $i < $num_blanks; $i++) {
        echo '<td></td>';
    }
    // Output the days of the month
    for ($i = 1; $i <= $num_days; $i++) {
        if ($day_of_week > 7) {
            echo '</tr><tr>';
            $day_of_week = 1;
        }
        if($i == $currentDay && $month == $currentMonth){
            echo '<td style="background-color: red;">' . $i . '</td>';
        } else {
            echo '<td>' . $i . '</td>';
        }
        $day_of_week++;
    }
    // Output the blank cells at the end of the calendar
    for ($i = $day_of_week; $i <= 7; $i++) {
        echo '<td></td>';
    }
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';

    // Output links to previous and next months
    $prev_month = $month == 1 ? 12 : $month - 1;
    $prev_year = $prev_month == 12 ? $year - 1 : $year;
    $next_month = $month == 12 ? 1 : $month + 1;
    $next_year = $next_month == 1 ? $year + 1 : $year;
    echo '<p><a href="?month=' . $prev_month . '&year=' . $prev_year . '">Previous Month</a> | <a href="?month=' . $next_month . '&year=' . $next_year . '">Next Month</a></p>';
    include "footer.php";
?>