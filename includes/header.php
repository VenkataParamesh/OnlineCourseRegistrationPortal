<?php
include("includes/config.php");
error_reporting(0);
?>
<?php if($_SESSION['login']!="")
{?>
<header style="background-color:#3D3D3D">
        <div class="container" style="background-color:#3D3D3D; color:white;" >
            <div class="row" style="background-color:#3D3D3D; color:white;" >
                <div class="col-md-12" style="background-color:#3D3D3D;color:white;" >
                    <strong>Hi, Welcome : </strong><?php echo htmlentities($_SESSION['sname']);?>
                    &nbsp;&nbsp;
                    


                    <strong>Your last login informantion:<?php 
        $ret=mysqli_query($con,"SELECT  * from userlog where studentRegno='".$_SESSION['login']."' order by id desc limit 1,1");
                    $row=mysqli_fetch_array($ret);
                    echo $row['userip']; ?> at <?php echo $row['loginTime'];?></strong>
                </div>

            </div>
        </div>
    </header>
    <?php } ?>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero" style="background-color:#6378DF;color:white; padding:15px" >
        <div class="container" style="background-color:#6378DF;color:white; padding:50px margin:10px">
            <div class="navbar-header" style="background-#6378DF:black;color:white; margin:1px">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:#fff; font-size:30px;4px; line-height:40px; ">

                   VTOP ONLINE COURSE REGISTRATION
                </a>

            </div>

            <div class="left-div">
               <img src="assets/img/vitap.png" class="img-responsive pull-left" alt="User Image" width="100" >
        </div>
            </div>
        </div>