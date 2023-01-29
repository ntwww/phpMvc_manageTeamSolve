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
        <li class="nav-item"><a href="?controller=pages&action=home" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="?controller=Officer&action=index" class="nav-link active">Officer</a></li>
        <li class="nav-item"><a href="?controller=OfficerTeam&action=index" class="nav-link">TeamOfficer</a></li>
        <li class="nav-item"><a href="?controller=Survey&action=index" class="nav-link">Survey</a></li>
      </ul>
    </header>
  </div>
<!--header-->
<!--body-->
<div class="album py-5 bg-light">
    <div class="container">
<br>New Officer <a class='btn btn-sm btn-outline-secondary' href =?controller=Officer&action=newOfficer>Create</a><br><br>
<form method = "get" action="">
    <input type="text" name="key" >
    <input type="hidden" name="controller" value="Officer"/>
    <button type="submit" name="action" value="search" class='btn btn-sm btn-outline-secondary'> Search</button>
</form>

    
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <?php foreach($officerList as $officer)
        echo"
                    <div class='card shadow-sm'>
                        <div class='card-body'>
                            <p class='card-text'>ID : $officer->officerID<br> 
                                Officer Name : $officer->officerTitle$officer->firstName&nbsp;$officer->lastName<br>
                                AgencyName : $officer->agencyName<br>
                                Address : $officer->districtName&nbsp;&nbsp;$officer->provinceName
                            </p>

                                    <a class='btn btn-sm btn-outline-secondary' href=?controller=Officer&action=updateForm&officerID=$officer->officerID>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class='btn btn-sm btn-outline-secondary' href=?controller=Officer&action=deleteConfirm&officerID=$officer->officerID>Delete</a>

                            </div>
                        </div>
        ";
    ?>
          
        </div>
      </div>
    </div>
  </div>
<!--body-->
<!-- <br>new Officer <a href =?controller=Officer&action=newOfficer>click</a><br>
<form method = "get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="Officer"/>
    <button type="submit" name="action" value="search"> Search</button>
</form>
<table border = 1>
    <tr> <td>ID</td><td>OFFICERNAME</td><td>AgencyName</td><td>Address</td>
    <?php //foreach($officerList as $officer)
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
    //         </td><td>
    //         <div id='div1'>
    //             $officer->agencyName
    //         </div>
    //         </td>
    //         <td>
    //         <div id='div1'>
    //             $officer->districtName
    //         </div>
    //         <div id='div1'>
    //             $officer->provinceName
    //         </div>
    //         </td>
    //     <td><a href=?controller=Officer&action=updateForm&officerID=$officer->officerID>update</a></td><td>
    //     <a href=?controller=Officer&action=deleteConfirm&officerID=$officer->officerID>delete</a></td>
    //     </tr>";
    // }
    // echo "</table>";
    ?> -->