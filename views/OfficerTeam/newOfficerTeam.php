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
        <br>
            <form method = "get"action="">
            <input type="hidden" name="officerTeamListID" value="<?php echo "$id";?>"/>
                <label>Officer Name<br>
                    <select name="officerID" class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($officerList as $officer){
                            echo "<option value=$officer->officerID>$officer->officerTitle $officer->firstName $officer->lastName</option>";
                        }?>
                    </select>
                </label><br>
                <label>Position in Team
                    <select name="enum"class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($enumList as $enum){
                            echo "<option value = $enum> $enum</option>";
                        }?>
                    </select>
                </label><br>
                <label>Officer Name<br>
                    <select name="officerID1" class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($officerList as $officer){
                            echo "<option value=$officer->officerID>$officer->officerTitle $officer->firstName $officer->lastName</option>";
                        }?>
                    </select>
                </label><br>
                <label>Position in Team
                    <select name="enum1"class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($enumList as $enum){
                            echo "<option value = $enum> $enum</option>";
                        }?>
                    </select>
                </label><br>
                <label>Officer Name<br>
                    <select name="officerID2" class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($officerList as $officer){
                            echo "<option value=$officer->officerID>$officer->officerTitle $officer->firstName $officer->lastName</option>";
                        }?>
                    </select>
                </label><br>
                <label>Position in Team
                    <select name="enum2"class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                        <?php foreach($enumList as $enum){
                            echo "<option value = $enum> $enum</option>";
                        }?>
                    </select>
                </label><br><br><br>
                <input type="hidden" name="controller" value="OfficerTeam"/>
                <button type="submit" name="action" value="index" class='btn btn-sm btn-outline-secondary'>Back</button>
                <button type="submit" name="action" value="addOfficerTeam" class='btn btn-sm btn-outline-secondary'>Create</button>
            </form>
    </div>
</div>
<!--body-->
<!-- <br>
<form method = "get"action="">
<input type="hidden" name="officerTeamListID" value="<?php //echo "$id";?>"/>
    <label>Officer Name<select name="officerID">
        <!-- <?php //foreach($officerList as $officer){ -->
            // echo "<option value=$officer->officerID>$officer->officerTitle $officer->firstName $officer->lastName</option>";
        // }?>
        </select></label><br>
    <label>Position in Team <select name="enum">
            <!-- <?php //foreach($enumList as $enum){ -->
                // echo "<option value = $enum> $enum</option>";
            // }?>
    </select>
    </label><br>
    <label>Officer Name<select name="officerID1">
        <!-- <?php //foreach($officerList as $officer){ -->
            // echo "<option value=$officer->officerID>$officer->officerTitle $officer->firstName $officer->lastName</option>";
        // }?>
        </select></label><br>
    <label>Position in Team <select name="enum1">
            <!-- <?php //foreach($enumList as $enum){ -->
                // echo "<option value = $enum> $enum</option>";
            // }?>
    </select>
    </label><br>
    <label>Officer Name<select name="officerID2">
        <!-- <?php //foreach($officerList as $officer){ -->
            // echo "<option value=$officer->officerID>$officer->officerTitle $officer->firstName $officer->lastName</option>";
        // }?>
        </select></label><br>
    <label>Position in Team <select name="enum2">
            <!-- <?php //foreach($enumList as $enum){ -->
                // echo "<option value = $enum> $enum</option>";
            // }?>
    </select>
    </label><br>
    <input type="hidden" name="controller" value="OfficerTeam"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addOfficerTeam">Create</button> -->