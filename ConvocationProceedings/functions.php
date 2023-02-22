<?php
function convocation ($conn,$convocationNo, $dateer, $lectureTitle, $lecturerTitle, $LnameLecturer, $fnameLecturer, $OthernameLecturer, $availableProceedings, $ip) {
    // using sql to create a data entry query (first line - db fields, second line, form fields)
    $sql = "INSERT INTO convocationproceedings (convocation_no, convocation_date, convocation_lecture, lecturer_title, lecturer_surname, lecturer_firstname, lecturer_othername, available_proceedings, entry_date, ip_id)
       VALUES ('$convocationNo', '$dateer', '$lectureTitle', '$lecturerTitle', '$LnameLecturer', '$fnameLecturer', '$OthernameLecturer', '$availableProceedings', now(), '$ip')"; // form fields must match
    // send query to the database to add values and confirm if successful
    if (mysqli_query($conn, $sql)) {
        echo "New record created. <br><br>
        Click <a href = 'viewTables.php' >here</a> to view.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // close connection
            mysqli_close($conn);
    }
    function viewallproceedings($conn)
    {
        $sql = "select convocation_no, convocation_date, convocation_lecture, lecturer_title, lecturer_surname, lecturer_firstname,
       lecturer_othername, available_proceedings from convocationproceedings";
        $stmt = mysqli_query($conn, $sql);
        return mysqli_fetch_all($stmt);

    }
    function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }
    ?>