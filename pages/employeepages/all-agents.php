<?php
session_start();
require("../database/db.php");

$sacco_employee_session=$_SESSION["email_employee"];


if(!isset($_SESSION["email_employee"])){
    
    header("Location:../employeepages/employee-login.php");
}


?>
    <html>

    <head>
        <title>All agents</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../mycss/mycss.css">
        <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">




    </head>

    <body id="body" onload="start()">
       
       
       
        <div class="container-fluid" id="my-modal-div">
            <div class="row" style="padding:20px">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" id="my-modal">
                <div class="col-md-12" id="my-modal-header">
                    <h2>Edit user</h2>
                </div>
                

                </div>
                <div class="col-sm-4"></div>

            </div>

        </div>

   <!--include nav-->
    <?php
    include ('nav/nav.php');
    ?>

        <div class="container-fluid" id="navdiv">

            <div class="row">

                <div class="col-sm-2" id="logo">
                    <a href=""> <span id="thelogo">E-</span> <span id="junglelogo">matatu</span></a>
                </div>
                <div class="col-sm-3" id="centernav">
                    <span id="menubar" onclick="triggersidemenu()"><i class="glyphicon glyphicon-list"></i> MENU</span>
                    <a href=""></a>
                </div>
                <div class="col-sm-3" id="rightnav">
                    <a href="">Home</a>

                </div>
                <div class="col-sm-4" id="login-signup">

                    <a href="employee-logout.php"><button class="btn btn-danger" id="">Log Out</button></a>
                </div>


            </div>
        </div>

        <div class="container-fluid">

            <div class="row" style="padding:0px">


                <div class="col-sm-2"></div>
                <div class="col-sm-8" id="form-div">
                    <h3>All agents</h3>
                    <hr>

                    <div id="all-agents" style="overflow:auto">
                        <img src="../img/loading.gif" alt="" id="loading">
                    </div>
                </div>

                <div class="col-sm-2"></div>
            </div>

        </div>

        <div id="linksuccessnotification">
            Please wait...
        </div>
        
        
        <div class="col-sm-12" id="view-agent-modal">
          
          <div class="col-sm-12" id="view-agent-modal-header">
             
              <span class="pull-right" id="view-agent-close" onclick="closeViewAgentModal()"><i class="glyphicon glyphicon-remove"></i></span>
              <span class="pull-right" id="view-agent-maximize" onclick="maximizeViewAgentModal()"><i class="glyphicon glyphicon-adjust"></i></span>
          </div>
          <div class="col-sm-12" id="view-agent-modal-body">
               View Agent <img src="../img/loading.gif" alt="" id="loading">
              
          </div>
          
        
        </div>










        <script src="../../assets/jquery-3.2.1.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>
        <script src="../js/jquery2.1.min.js"></script>

        <script>
            function start() {
                //
                startloading();
                setTimeout(function() {
                    displayagents();

                }, 0);
            }
        </script>

    </body>

    </html>