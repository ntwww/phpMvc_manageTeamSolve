
<!--header-->
<div class="container">
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item">นายปวีณวิชญ์ ท่าดี 6320502461</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="?controller=pages&action=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img class ="fs-4" href="?controller=pages&action=home" src="https://i.pinimg.com/originals/6e/4c/97/6e4c972b5c6d213f6331537211897328.jpg" alt="home" width="50" height="50">
        <!--<span class="fs-4" รทเsrc="https://i.pinimg.com/originals/6e/4c/97/6e4c972b5c6d213f6331537211897328.jpg"></span>-->
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="?controller=pages&action=home" class="nav-link" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="?controller=Officer&action=index" class="nav-link">Officer</a></li>
        <li class="nav-item"><a href="?controller=OfficerTeam&action=index" class="nav-link">TeamOfficer</a></li>
        <li class="nav-item"><a href="?controller=Survey&action=index" class="nav-link active">Survey</a></li>
      </ul>
    </header>
  </div>
<!--header-->

<!--body-->
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <?php
        echo"
                    <div class='card shadow-sm'>
                        <div class='card-body'>
                            <p class='card-text'>
                                 Date : $survey->surveyDate<br>
                                 Status : $survey->surveyStatus<br>
                                 Issue : ";
                                             if($survey->surveyStatus=="พัง"){
                                                echo " $survey->surveyIssue<br>
                                                 Detail : $survey->surveyIssueDetail<br>";
                                             }else{
                                                 echo "ไม่พบปัญหา<br>
                                                 Detail : ไม่พบปัญหา<br>";
                                             }echo"
                                Location : $survey->riverName&nbsp;&nbsp;$survey->subDistrictName<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$survey->districtName&nbsp;&nbsp;$survey->provinceName<br>
                                Reporter : 
                                                $survey->officerTitle
                                                $survey->firstName                                            
                                                &nbsp;
                                                $survey->lastName
                                            
                            </p>
                                
                            </div>
                        </div>
        ";
    ?>
          
        </div>
      </div>
      <br><a class='btn btn-sm btn-outline-secondary' href=?controller=Survey&action=index>BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo"<a class='btn btn-sm btn-outline-secondary' href=?controller=Survey&action=updateComfirm&surveyID=$survey->surveyListID>Edit</a><br>";?>
    </div>
  </div>
  
  
<!--body-->

<!-- <table border = 1>
    <tr> <td>ID</td><td>Date</td><td>Status</td><td>Issue</td><td>Detail</td><td>Location</td><td>Reporter</td>
    <?php
    // {
    //     echo"
    //     <tr>
    //         <td>$survey->surveyListID</td>
    //         <td>$survey->surveyDate</td>

    //         <td>$survey->surveyStatus</td>";
    //             if($survey->surveyStatus=="พัง"){
    //                echo " <td>$survey->surveyIssue</td>
    //                 <td>$survey->surveyIssueDetail</td>";
    //             }else{
    //                 echo "<td>ไม่พบปัญหา</td>
    //                 <td>ไม่พบปัญหา</td>";
    //             }
                
    //         echo"
    //         <td>$survey->riverName&nbsp;&nbsp;$survey->subDistrictName&nbsp;&nbsp;$survey->districtName&nbsp;&nbsp;$survey->provinceName</td>
    //         <td>
    //             <div id='div1'>
    //                 $survey->officerTitle
    //                 $survey->firstName
    //             </div>
    //             &nbsp;&nbsp;&nbsp;&nbsp;
    //             <div id='div1'> 
    //                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    //                 $survey->lastName
    //             </div>
    //         </td>
    //     </tr>";
    // }
    ?>
    </tr>
</table> -->