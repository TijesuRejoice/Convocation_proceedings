<?php
   include 'config.php';
   include 'functions.php';
    if(isset($_POST['submit'])) {
        $convocationNo = $_POST['convocationNo'];
        $dateer = date('Y-m-d', strtotime($_POST['dateer']));
        $lectureTitle = $_POST['lectureTitle'];
        $lecturerTitle = $_POST['lecturerTitle'];
        $LnameLecturer = $_POST['LnameLecturer'];
        $fnameLecturer = $_POST['fnameLecturer'];
        $OthernameLecturer = $_POST['OthernameLecturer'];
        $availableProceedings = $_POST['availableProceedings'];

        $ip_id = $_SERVER['REMOTE_ADDR'];
        convocation($conn,$convocationNo, $dateer, $lectureTitle, $lecturerTitle, $LnameLecturer, $fnameLecturer,
            $OthernameLecturer, $availableProceedings, $ip_id);


//        header("location: viewTables.php");
    }
    ?>


