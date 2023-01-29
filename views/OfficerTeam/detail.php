<style type="text/css">
#div1 {
    float:left;
    width:150px;
    text-align:left;
}
</style>
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
        <li class="nav-item"><a href="?controller=OfficerTeam&action=index" class="nav-link active">TeamOfficer</a></li>
        <li class="nav-item"><a href="?controller=Survey&action=index" class="nav-link">Survey</a></li>
      </ul>
    </header>
  </div>
<!--header-->
<!--body-->
<div class="album py-5 bg-light">
    <div class="container">
        <br>New OfficerTeam <a class='btn btn-sm btn-outline-secondary' href =?controller=OfficerTeam&action=newOfficerTeam>Create</a><br><br>
        <form method = "get" action="">
            <input type="text" name="key" >
            <input type="hidden" name="controller" value="OfficerTeam"/>
            <button type="submit" name="action" value="search" class='btn btn-sm btn-outline-secondary'> Search</button>
        </form>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class='card shadow-sm'>
                    <div class='card-body'>
                        <?php 
                        $count=1;
                            foreach($officerTeam as $officer){
                                if($count<=1){
                                    echo "<p class='card-text'>
                                    Team No. : $officer->officerTeamListID<br></p>";
                                    $count++;
                                }
                                echo "
                                    
                                            <p class='card-text'>
                                            Officer Name : $officer->officerTitle$officer->firstName&nbsp;$officer->lastName<br>
                                            Position in Team : $officer->officerTeamPosition
                                            
                                        ";
                            }
                                
                        ?>
                    </div>
                 </div>
            </div>
        </div>
        <br><a href=?controller=OfficerTeam&action=index class='btn btn-sm btn-outline-secondary'>BACK</a><br>
    </div>
</div>

<!--body-->
<!-- <br><a href=?controller=OfficerTeam&action=index class='btn btn-sm btn-outline-secondary'>BACK</a><br>
<table border = 1>
    <tr> <td>ID</td><td>OFFICERNAME</td><td>Position in Team</td>
    <?php //foreach($officerTeam as $officer)
    // {
    //     echo"<tr><td>$officer->officerID</td>
    //     <td>
    //         <div id='div1'>
    //             $officer->officerTitle
    //             $officer->firstName
    //         </div>
    //         &nbsp;&nbsp;&nbsp;&nbsp;
    //         <div id='div1'> 
    //         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    //             $officer->lastName
    //         </div>
    //     </td>
    //     <td>$officer->officerTeamPosition</td>
    //     </tr>";
    // }
    // echo "</table>";
    ?>
    </tr> -->