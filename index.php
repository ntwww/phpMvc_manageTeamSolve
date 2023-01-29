<?php
if(isset($_GET['controller'])&&isset($_GET['action'])){
    $controller=$_GET['controller'];
    $action=$_GET['action'];
}
else{
    $controller='pages';
    $action='home';
}


?>
<html>

    <body>
    <?php echo "จัดทำโดยนายณัฐวุฒิ รอดเลิศ รหัสนิสิต 6320502398";?><br>
    <a href="?controller=pages&action=home">Home</a><br>
      [<a href="?controller=member&action=indexMember">รายชื่อสมาชิกในทีมที่ออกปฎิบัติงาน</a>]
      [<a href="?controller=problem&action=indexProblem">รายละเอียดของการแก้ไขปัญหา</a>]
      [<a href="?controller=status&action=indexStatus">สรุปสถานะของการแก้ไขปัญหา</a>]
        <?php require_once("routes.php");?>
        
    </body>
    
</html>