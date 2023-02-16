<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Manupilation</title>
</head>

<body>
    <?php
    //date function
    echo "Today is " . date("d/m/Y") . "<br>";
    echo "<br>";

    //date formate
    $d = date_create_from_format("j-M-Y", "25-oct-2003");
    echo date_format($d, "d/m/Y") . "<br>";
    echo "<br>";

    //date_date_set
    $date = date_create();
    date_date_set($date, 2020, 10, 31);
    echo date_format($date, "d/m/Y") . "<br>";
    echo "<br>";

    //check date
    var_dump(checkdate(12, 31, -400));
    echo "<br>";
    var_dump(checkdate(2, 29, 2004));
    echo "<br>";
    echo "<br>";

    //date add interval_create_from...
    $date = date_create("2013-06-27");
    date_add($date, date_interval_create_from_date_string("20 days"));
    echo date_format($date, "Y-m-d");
    echo "<br>";
    echo "<br>";

    //date_default_timezone_get
    echo date_default_timezone_get() . "<br>";
    echo "<br>";

    //date_default_timezone_set
    //india
    date_default_timezone_set("Asia/Kolkata");
    echo "Time is " . date("h:i:sa") . "<br>";
    echo "<br>";

    //Chicago
    date_default_timezone_set("America/Chicago");
    echo "Time is " . date("h:i:sa") . "<br>";
    echo "<br>";

    //London
    date_default_timezone_set("Europe/London");
    echo "Time is " . date("h:i:sa") . "<br>";
    echo "<br>";

    //Berlin
    date_default_timezone_set("Europe/Berlin");
    echo "Time is " . date("h:i:sa") . "<br>";
    echo "<br>";

    //Tokyo
    date_default_timezone_set("Asia/Tokyo");
    echo "Time is " . date("h:i:sa") . "<br>";
    echo "<br>";

    //date diff
    $date1 = date_create("2013-03-15");
    $date2 = date_create("2013-12-12");
    $diff = date_diff($date2, $date1);
    echo $diff->format("%R%a days"); // this is date interval formate function
    echo "<br>";
    echo "<br>";

    //iso date
    $v = date_create("2021/10/25");
    date_isodate_set($v, 2021, 1);
    echo date_format($v, "Y-m-d") . "<br>";
    echo "<br>";

    //date parse from formate
    print_r(date_parse_from_format("j.n.Y H:iP", "12.5.2013 14:35+02:00"));
    echo "<br>";
    echo "<br>";

    //Auto Copyright Year
    echo "&copy 2003-" . date("Y") . "<br>";
    echo "<br>";

    //date_get_last_errors
    date_create("gyuiyiuyui%&&/");
    print_r(date_get_last_errors());
    echo "<br>";
    echo "<br>";

    //date modify
    $date = date_create("2023-06-27");
    date_modify($date, "+120 days");
    echo date_format($date, "Y-m-d");
    echo "<br>";
    echo "<br>";

    //date sub
    $r = date_create(2021 - 10 - 25);
    date_sub($date, date_interval_create_from_date_string("120 days"));
    echo date_format($date, "Y-m-d");
    echo "<br>";
    echo "<br>";

    //strtotime
    $d = strtotime("17:30 October 25 2003");
    echo date("d/m/Y h:i:sa", $d) . "<br>";
    echo "<br>";

    //---
    $d1 = strtotime("June 27");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
    echo "There are " . $d2 . " days until 27th of June.";
    echo "<br>";
    echo "<br>";

    //---
    $startdate = strtotime("Monday");
    $enddate = strtotime("+6 weeks", $startdate);
    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    echo "<br>";

    //date sun info
    echo "<h3>Date: 25th october, 2021</h3>";
    $sun_info = date_sun_info(strtotime("2021-10-25"), 22.336910, 73.831871);
    foreach ($sun_info as $key => $val) {
        echo "$key: " . date("H:i:s", $val) . "<br>";
    }
    echo "<br>";
    echo "<br>";

    //timestemp get and set
    $date = date_create("2003/10/25 17:00");
    echo date_timestamp_get($date);
    echo "<br>";
    date_timestamp_set($date, 1067068800);
    echo date_format($date, "U = Y-m-d H:i:s");
    echo "<br>";
    echo "<br>";

    //make time
    $d = mktime(22, 25, 23, 6, 27, 2003);
    echo "That day is " . date("d/m/Y h:i:sa", $d) . "<br>";
    echo "<br>";


    ?>
</body>

</html>