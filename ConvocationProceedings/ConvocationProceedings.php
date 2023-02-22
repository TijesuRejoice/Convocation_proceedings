<!DOCTYPE html>
<html>
<head>
    <title>Convocation form</title>
    <style>
        body {
            background-color: white;
        }

        fieldset {
            background-color: silver;
            border-radius: 10px;
        }

        input {
            font-family: cursive;
            width: 94%;
        }

        #lecturerTitle, #availableProceedings {
            font-family: cursive;
            width: 96%;
        }

        label {
            font-family: cursive;
        }
        #dateer {
            width: 94%;
        }
        #submit {
            float: right;
        }
    </style>
</head>
<body>
                <form method = "POST" action = "form.php">
                    <br>

<!-- convocationNo, dateer, lectureTitle,lecturerTitle, LnameLecturer, fnameLecturer,
 OthernameLecturer, -->
        <center>
            <hi><strong>COVENANT UNIVERSITY CONVOCATION ORDER OF PROCEEDINGS</strong></hi>
        </center>
        <br>
        <div>
            <fieldset style = "width: 350px; margin:  0px auto;"><br>
                <label for = "convocationNo">Convocation No.: <br>
                <input type = "text" id = "convocationNo" name = "convocationNo" placeholder = "e.g 1, 16, 22"
                    required maxlength = "15"/><br></label>

                <label for = "Date">Convocation Date:<br></label>
                <input type = "date" name = "dateer" id = "dateer" required/><br>

                <label for = "lecture">Convocation Lecture Title: <br></label>
                <textarea id = "lectureTitle" name = "lectureTitle"
                    required rows = "4" cols = "43"></textarea><br>

                <label for = "lecturerTitle">Lecturer Title:</label>
                <select name = "lecturerTitle" id = "lecturerTitle" required><br><br>
                    <option value = "Prof">Prof.</option>
                    <option value = "Dr">Dr.</option>
                    <option value = "Mrs">Mrs.</option>
                    <option value = "Mr">Mr.</option>
                </select>
                <br><br>

                    <label for = "LnameLecturer">Lecturer surname: <br></label>
                    <input type = "text" id = "LnameLecturer" name = "LnameLecturer"
                    required/><br>

                    <label for = "fnameLecturer">Lecturer firstname: <br></label>
                <input type = "text" id = "fnameLecturer" name = "fnameLecturer"
                    required/><br>

                    <label for = "OthernameLecturer">Lecturer other name: <br></label>
                <input type = "text" id = "OthernameLecturer" name = "OthernameLecturer"
                    required/><br>


                <label for = "availableProceedings">Are copies of the proceedings available?</label>
                <select name = "availableProceedings" id = "availableProceedings" required><br><br>
                    <option value = "Yes">Yes</option>
                    <option value = "No">No</option>
                </select>

               <p> <center><button type = "submit" name = "submit" value = "Submit" id = "submit">Submit</button></center></p>
            </fieldset>
        </div>
    </form>
</body>

</html>