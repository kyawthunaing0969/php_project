<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quiz System || Login</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" /> -->

    <!-- <link rel="stylesheet" href="css/font.css"> -->
    <script src="js/jquery.js" type="text/javascript"></script>

    <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
        img {
            width: 100%;
            height: 90%;

        }

        h3 {
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 24%;
            padding: 5px;
            margin: 4px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo logochay">Quizzy</span>
            </div>
            <div class="col-md-2 col-md-offset-4 bchay">
                <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal">
                    <span class="title1" ><b>ဝင်​ရောက်ရန်</b></span>
                </a>
            </div>
            sign in နှိပ်​ကေ ဖြစ်ရဖို့စွာ-->
    <!-- <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title title1"><span style="color:orange">Log In ဝင်​ရောက်ရန်</span></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>


                                 emial-->
    <!-- <div class="form-group">
                                    <label class="col-md-3 control-label" for="email"></label>  
                                    <div class="col-md-6">
                                        <input id="email" name="email" placeholder="Email လိပ်စာရိုက်ထည့်ပါ" class="form-control input-md" type="email">
                                    
                                    </div> -->
    <!-- </div> -->

    <!-- Password -->
    <!-- <div class="form-group">
                                    <label class="col-md-3 control-label" for="password"></label>
                                    <div class="col-md-6">
                                        <input id="password" name="password" placeholder="စကားဝှက်ရိုက်ထည့်ပါ" class="form-control input-md" type="password">
                                    
                                    </div>
                                </div>

                                 </div> -->
    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ပိတ်မည်</button>
                                        <button type="submit" class="btn btn-primary">ဝင်​ရောက်ရန်</button>
                                </fieldset>
                            </form> -->
    <!-- 

                        </div> 
                    </div> /.modal-content -->
    <!-- </div>/.modal-dialog -->
    <!-- </div>/.modal -->
    <!--sign in နှိပ်ပြီးလခ​ကေ ပြီးလို့ပိတ်ထားစွာ  -->

    <!-- </div>header row closed -->
    <!-- </div> -->


    <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><b> Online Quizz System</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" href="index1.php"><i class="fa-solid fa-house-user mx-2 "></i><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php"><i class="fa-solid fa-people-group mx-2"></i><b>About us</b></a>
          </li>
        </ul>
        
        <i class="fa-solid fa-lock"></i>
        <a href="./admin/login.php" class="text-black mx-2"><b>Admin</b></a>
        <a href="home.php" class="text-black mx-2"><i class="fa-solid fa-right-from-bracket mx-2"></i><b>Log Out</b></a>
      </div>
    </div>
  </nav>

    <div class="row">
        <div class="column">
            <img src="images/kyaw.jpg">
            <h3>Kyaw Thu Naing</h3>
        </div>
        <div class="column">
            <img src="images/077.jpg">
            <h3>Ma Khine Htay</h3>
        </div>
        <div class="column">
            <img src="images/lin.jpg">
            <h3>Kyaw Zay Lin</h3>
        </div>

        <div class="column">
            <img src="images/033.jpg">
            <h3>Win May Thein</h3>
        </div>
        <div class="column">
            <img src="images/zaw.jpg">
            <h3>U Zaw Naing</h3>
        </div>
        <div class="column">
            <img src="images/022.jpg">
            <h3>Kye Sin Win Hlaing</h3>
        </div>
        <div class="column">
            <img src="images/001.jpg">
            <h3>Myat Hla Win</h3>
        </div>
    </div>




    <p>Our online examination system provides innovative and impeccable solutions for exams throughout various colleges, universities, educational institutions, and many leading corporate entities. Conduct Exam is developed by a highly qualified team and specialized in creating high impact online exam software which is highly efficient in terms of reliability and speed.</p>

    <p>With our online examination system, anyone can conduct online exams or tests easily, and a team of innovators constantly research on making the procedure of exam simple & easy. Conduct Exam aims to help the students and the clients, such as companies and universities, to transcend the time constraints and geographical boundaries with a highly skilled administrator and monitor. Complete and precise information on the exam is available on the portal.</p>









    <!--Footer start-->
    <div class="row footer">
        <div class="col-md-4 box logochay">
            <a href="aboutus.php" style="color:chartreuse" target="_blank">ကျွန်ုပ်တို့အ​ကြောင်း</a>
        </div>
        <div class="col-md-4 box">
            <a href="ourplan.php" style="color:chartreuse">ကျွန်ုပ်တို့​မျှော်မှန်းချက်</a>
        </div>
        <div class="col-md-4 box">
            <a href="#" data-toggle="modal" style="color:chartreuse" data-target="#login">Admin Login</a>
        </div>




        <!-- admin login-->
        <div class="modal fade" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">အပြင်လူမဝင်ရ</span></h4>
                    </div>
                    <div class="modal-body title1">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <form role="form" method="post" action="admin.php?q=index.php">
                                    <div class="form-group">
                                        <input type="text" name="uname" maxlength="20" placeholder="Admin" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" maxlength="15" placeholder="စကားဝှက်" class="form-control" />
                                    </div>
                                    <div class="form-group" align="center">
                                        <input type="submit" name="login" value="ဝင်​ရောက်ရန်" class="btn btn-primary" />
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--footer end-->
    </div>
</body>

</html>