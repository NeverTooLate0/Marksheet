<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter Grades</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  // Define individual variables for each course
  $course1_name = "WEB TECHNOLOGIES";
  $course2_name = "INNOVATION MANAGEMENT AND NEW PRODUCT";
  $course3_name = "COMPUTATIONAL THINKING";
  $course4_name = "INTRODUCTION TO COMMUNICATION SKILLS";
  $course5_name = "Yoga";
  $course6_name = "Python";

  // Function to convert letter grades to points
  function grade_to_points($grade)
  {
    switch (strtoupper($grade)) {
      case 'A+':
        return 10;
      case 'A':
        return 9;
      case 'B+':
        return 8;
      case 'B':
        return 7;
      case 'C+':
        return 6;
      case 'C':
        return 5;
      case 'D+':
        return 4;
      case 'D':
        return 3;
      case 'E':
        return 2;
      case 'F':
        return 0;
      default:
        return 0;
    }
  }

  /**
   * Function to convert average points back to a letter grade.
   */
  function points_to_grade($points)
  {
    if ($points >= 9.5) {
      return 'A+';
    } elseif ($points >= 8.5) {
      return 'A';
    } elseif ($points >= 7.5) {
      return 'B+';
    } elseif ($points >= 6.5) {
      return 'B';
    } elseif ($points >= 5.5) {
      return 'C+';
    } elseif ($points >= 4.5) {
      return 'C';
    } elseif ($points >= 3.5) {
      return 'D+';
    } elseif ($points >= 2.5) {
      return 'D';
    } elseif ($points >= 1.5) {
      return 'E';
    } else {
      return 'F';
    }
  }
  ?>


  <form action="" method="post">
    <h1>Enter Grades for Three Subjects</h1>
    <!-- Row 1 -->
    <div class="form-row">
      <div class="form-column">
        <p><strong>Course Name:</strong> <?php echo $course2_name; ?></p>
        <label for="ca_grade2">CA Grade:</label>
        <input type="text" id="ca_grade2" name="ca_grade2" required>
        <label for="term_end_grade2">Term End Grade:</label>
        <input type="text" id="term_end_grade2" name="term_end_grade2" required>
      </div>
      <div class="form-column">
        <p><strong>Course Name:</strong> <?php echo $course1_name; ?></p>
        <label for="ca_grade1">CA Grade:</label>
        <input type="text" id="ca_grade1" name="ca_grade1" required>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="form-row">
      <div class="form-column">
        <p><strong>Course Name:</strong> <?php echo $course3_name; ?></p>
        <label for="ca_grade3">CA Grade:</label>
        <input type="text" id="ca_grade3" name="ca_grade3" required>
        <label for="term_end_grade3">Term End Grade:</label>
        <input type="text" id="term_end_grade3" name="term_end_grade3" required>
      </div>
      <div class="form-column">
        <p><strong>Course Name:</strong> <?php echo $course4_name; ?></p>
        <label for="ca_grade4">CA Grade:</label>
        <input type="text" id="ca_grade4" name="ca_grade4" required>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="form-row">
      <div class="form-column">
        <p><strong>Course Name:</strong> <?php echo $course6_name; ?></p>
        <label for="ca_grade6">CA Grade:</label>
        <input type="text" id="ca_grade6" name="ca_grade6" required>
        <label for="term_end_grade6">Term End Grade:</label>
        <input type="text" id="term_end_grade6" name="term_end_grade6" required>
      </div>
      <div class="form-column">
        <p><strong>Course Name:</strong> <?php echo $course5_name; ?></p>
        <label for="ca_grade5">CA Grade:</label>
        <input type="text" id="ca_grade5" name="ca_grade5" required>
      </div>
    </div>

    <!-- Submit Button -->
    <input type="submit" value="Submit">
  </form>



  <?php
  // Process the form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve posted grades for each course
    $ca_grade1       = $_POST["ca_grade1"];


    $ca_grade2       = $_POST["ca_grade2"];
    $term_end_grade2 = $_POST["term_end_grade2"];

    $ca_grade3       = $_POST["ca_grade3"];
    $term_end_grade3 = $_POST["term_end_grade3"];


    $ca_grade4       = $_POST["ca_grade4"];


    $ca_grade5       = $_POST["ca_grade5"];


    $ca_grade6       = $_POST["ca_grade6"];
    $term_end_grade6 = $_POST["term_end_grade6"];

    // Convert grades to points
    $ca_points1       = grade_to_points($ca_grade1);

    $ca_points2       = grade_to_points($ca_grade2);
    $term_end_points2 = grade_to_points($term_end_grade2);
    $ca_points3       = grade_to_points($ca_grade3);
    $term_end_points3 = grade_to_points($term_end_grade3);
    $ca_points4       = grade_to_points($ca_grade4);

    $ca_points5      = grade_to_points($ca_grade5);

    $ca_points6      = grade_to_points($ca_grade6);
    $term_end_points6 = grade_to_points($term_end_grade6);

    // Calculate average numeric points for each course
    $avg_points1 = ($ca_points1);
    $avg_points2 = ($ca_points2 + $term_end_points2) / 2;
    $avg_points3 = ($ca_points3 + $term_end_points3) / 2;
    $avg_points4 = ($ca_points4);
    $avg_points5 = ($ca_points5);
    $avg_points6 = ($ca_points6 + $term_end_points6) / 2;

    // Convert the average points back to a letter grade for display
    $avg_grade1 = points_to_grade($avg_points1);
    $avg_grade2 = points_to_grade($avg_points2);
    $avg_grade3 = points_to_grade($avg_points3);
    $avg_grade4 = points_to_grade($avg_points4);
    $avg_grade5 = points_to_grade($avg_points5);
    $avg_grade6 = points_to_grade($avg_points6);


    // Calculate overall GPA from numeric points
    $total_grade_points = $avg_points1 + $avg_points2 + $avg_points3 + $avg_points4 + $avg_points5 + $avg_points6;
    $total_courses      = 6;
    $overall_gpa        = $total_grade_points / $total_courses;

  ?>
    <table>
      <tr id="gg">
        <th id="mg" colspan="2"><img src="logo.png"></th>
        <th colspan="10" rowspan="" id="titl">SYMBIOSIS INTERNATIONAL (DEEMED UNIVERSITY)
          <br>(Established under section 3 of the UGC act 1956) Re-accredited by <br>NAAC
          with ‘A++’ Grade Gram-Lavale, Tal- Mulshi, Dist-Pune Pin <br>Code- 412115 Web
          Site : www.siu.edu.in, Email : coe@siu.edu.in
        </th>
      </tr>

      <tr>
        <th colspan="12" id="title1">eGRADESHEET</th>
      </tr>

      <tr>
        <th colspan="12"> INSTITUTE :SYMBIOSIS INSTITUTE OF COMPUTER STUDIES AND RESEARCH, PUNE</th>
      </tr>

      <tr>
        <th colspan="12"> PROGRAMME :BACHELOR OF COMPUTER APPLICATIONS - HONOURS/ HONOURS </th>
      </tr>

      <tr>
        <th colspan="12">SEMESTER : I <strong id="mon">MONTH & YEAR OF EXAM: ODD 2024</strong></th>
      </tr>
      <tr>
        <th colspan="12">SEAT NO. : 467506 <strong id="prn"> PRN:</strong> 24030124031</th>
      </tr>
      <tr>
        <th colspan="12">NAME : Azzam ali mustafa mohammed </th>
      </tr>




      <tr>
        <th rowspan="1">COURSE CODE</th>
        <th colspan="5">COURSE</th>
        <th colspan="2">CA GRADE</th>
        <th colspan="2">TREAM END GRADE</th>
        <th colspan="2">TOTAL GRADE</th>
      </tr>

      <tr>
        <td colspan="1">0101</td>
        <td colspan="5"><?php echo $course1_name  ?></td>
        <td colspan="2"><?php echo $ca_grade1 ?></td>
        <td colspan="2"></td>
        <td colspan="2"><?php echo  $avg_grade1 ?></td>
      </tr>
      <tr>
        <td colspan="1">0102</td>
        <td colspan="5"><?php echo $course2_name  ?></td>
        <td colspan="2"><?php echo $ca_grade2 ?></td>
        <td colspan="2"><?php echo $term_end_grade2 ?></td>
        <td colspan="2"><?php echo  $avg_grade2 ?></td>
      </tr>
      <tr>
        <td colspan="1">0103</td>
        <td colspan="5"><?php echo $course3_name  ?></td>
        <td colspan="2"><?php echo $ca_grade3 ?></td>
        <td colspan="2"><?php echo $term_end_grade3 ?></td>
        <td colspan="2"><?php echo  $avg_grade3 ?></td>
      </tr>
      <tr>
        <td colspan="1">0104</td>
        <td colspan="5"><?php echo $course4_name  ?></td>
        <td colspan="2"><?php echo $ca_grade4 ?></td>
        <td colspan="2"></td>
        <td colspan="2"><?php echo  $avg_grade4 ?></td>
      </tr>
      <tr>
        <td colspan="1">0105</td>
        <td colspan="5"><?php echo $course5_name  ?></td>
        <td colspan="2"><?php echo $ca_grade5 ?></td>
        <td colspan="2"></td>
        <td colspan="2"><?php echo  $avg_grade5 ?></td>
      </tr>
      <tr>
        <td colspan="1">0106</td>
        <td colspan="5"><?php echo $course6_name  ?></td>
        <td colspan="2"><?php echo $ca_grade6 ?></td>
        <td colspan="2"><?php echo $term_end_grade6 ?></td>
        <td colspan="2"><?php echo  $avg_grade6 ?></td>
      </tr>
      <tr>
        <th colspan="10">RESULT DATE</th>
        <th colspan="2">Gpa : <?php echo round($total_grade_points / 6, 1)  ?></th>

      </tr>
      <tr>
        <td colspan="12">
          <p><strong>Please Note that:</strong><br>



            1. Symbiosis International (Deemed University) is not responsible for
            any inadvertent error that may have crept in the results being published on Net.

            <br>II. The results published on net are for immediate information only.

            <br>III. These cannot be treated as original gradesheet, please verify the
            information from original gradesheet issued by the Symbiosis International
            (Deemed University) seperately.
            <br>IV. & 6.1 Rule and # 6.2 Rule
            <br>V. Re-appearing
            <br> VL @ Letter Grade/ Audit courses
            <br>VII ~ Absolute Grande/ Audit course
          </p>
        </td>
      </tr>
      <tr>
        <th colspan="12" id="lst"> </th>
      </tr>
    </table>
  <?php

  }

  ?>


</body>

</html>