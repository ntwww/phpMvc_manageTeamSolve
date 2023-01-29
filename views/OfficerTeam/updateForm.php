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
<br>
<form method = "get"action="">
    <label>ID : <input type="hidden" name="officerID" value="<?php echo $officer->officerID; ?>"/><?php echo $officer->officerID; ?></label><br>
    <label>Title : <select name="officerTitle">
        <?php foreach($enumList as $enum){
            echo"<option value=$enum";
            if($enum==$officer->officerTitle){
                echo "selected='selected'";
            } 
            echo">$enum</option>";
        }
        ?>
    </select></label><br>
    <label>FirstName <input name="firstName" value="<?php echo $officer->firstName; ?>"/> </label><br>
    <label>LastName <input name="lastName" value="<?php echo $officer->lastName; ?>" /></label><br>
    <label>Agency : <?php echo "$officer->agencyID";?><select name="agencyID">
        
        <?php foreach($agencyList as $agency){
            echo"<option value=$agency->agencyID";
            if($agency->agencyID==$officer->agencyID){
                echo "selected='selected'";
            } 
            echo">$agency->agencyName</option>";
        }
        ?>
    </select></label><br>
    <input type="hidden" name="controller" value="Officer"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">Update</button>
