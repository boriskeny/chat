<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 simple chat app - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <script src="jquery-3.5.1.min.js"></script>

</head>
<body>
<link href="font-awesome.min.css" rel="stylesheet">
<div class="container">
    <?php
        session_start();
        if($_SESSION['username'] !== ""){
            $user = $_SESSION['username'];
            if(isset($_POST['s']))
{
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'userm';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
    $mess=mysqli_real_escape_string($db,htmlspecialchars($_POST['s']));
    
    
    $idsql =' SELECT id FROM user where login="'.$user.'" ' ;
    $rid=mysqli_query($db, $idsql);
    $id=mysqli_num_rows($rid);
    $iduser= $id['id'];

                              
    $sql = "INSERT INTO message(mess, id_user) VALUES ('".$mess."','".$id."')";
    mysqli_query($db,$sql); 
}

        }
    

    ?>

    <!-- Page header start -->
    <div class="page-title">
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h5 class="title">Chat App <?= $user?></h5>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="daterange-container">
                    <div class="date-range">
                        <div id="reportrange">
                            <i class="fa fa-calendar cal"></i>
                            <span class="range-text">Jun 11, 2019 - Jul 10, 2019</span>
                            <i class="fa fa-chevron-down arrow"></i>
                        </div>
                    </div>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" class="download-reports" data-original-title="Download CSV">
                        <i class="fa fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card m-0">

                    <!-- Row start -->
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="users-container">
                                <div class="chat-search-box">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-info">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="users">
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                                            <span class="status offline"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time">15/02/2019</span>
 -                                       </p>
                                    </li>
                                    <li class="person active-user" data-chat="person2">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Retail Admin">
                                            <span class="status away"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Peter Gregor</span>
                                            <span class="time">12/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person3">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Jessica Larson</span>
                                            <span class="time">11/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person4">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                            <span class="status offline"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Lisa Guerrero</span>
                                            <span class="time">08/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status away"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time">05/02/2019</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                            <div class="chat-container">
                                <ul class="chat-box chatContainerScroll">
                                    <?php
                                        $db_username = 'root';
                                        $db_password = '';
                                        $db_name     = 'userm';
                                        $db_host     = 'localhost';
                                        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                                               or die('could not connect to database');
                                        
                                        $sql="SELECT login, mess FROM user u, message m WHERE u.id=m.id_user";
                                        $result=  mysqli_query($db,$sql); 
                                        if(mysqli_num_rows($result)>0){
                                            while($chat=  mysqli_fetch_array($result)){

                                    ?>

                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name"><?=$chat['login']?></div>
                                        </div>
                                        <div class="chat-text">
                                            <?= $chat['mess'] ?>
                                        </div>
                                        
                                    </li>
                                    <?php }}?>
                                </ul>
                                <div class="form-group mt-3 mb-0">
                                    <form action="" id="sendForm" method="POST">
                                        <textarea class="form-control" name="s" id="s" rows="3" placeholder="Type your message here..."></textarea>
                                        <input type="submit" name="submit" value="Envoyer">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>
<script src="bootstrap4/js/bootstrap.min.js"></script>

</script>
</body>
</html>