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
        <br>
            <form method = "get"action="">
                <label>TeamOfficer<br>
                    <select name="officerTeamListID" class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($officerTeamList as $officer){
                            echo "<option value=$officer->officerTeamListID>$officer->officerTeamListID</option>";
                        }?>
                    </select>
                </label><br>
                <label>Barrier Location
                    <select name="barrierID"class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($barrierList as $barrier){
                            echo "<option value=$barrier->barrierID>$barrier->riverName $barrier->subDistrictName $barrier->districtName $barrier->provinceName</option>";
                        }?>
                    </select>
                </label><br>
                <label>Status
                    <select name="enum" class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($enumList as $enum){
                            echo "<option value = $enum> $enum</option>";
                        }?>
                    </select>
                </label><br>
                <label>Date<br>
                    <input type="Date" name="surveyDate" class="dropdown-menu d-block position-static p-2 shadow rounded-3 w-340px"/>
                </label><br>
                <label>Issue<br>
                    <input type="text" name ="surveyIssue" class="form-control"/>
                </label><br>
                <label>Issue Detail<br>
                    <input type"text" name ="surveyIssueDetail" rows="5" cols="50" class="form-control"/>
                </label><br><br><br>
                <input type="hidden" name="controller" value="Survey"/>
                <button type="submit" name="action" value="index" class='btn btn-sm btn-outline-secondary'>Back</button>
                <button type="submit" name="action" value="addSurvey" class='btn btn-sm btn-outline-secondary'>Create</button>
            </form>
    </div>
</div>
<!--body-->
