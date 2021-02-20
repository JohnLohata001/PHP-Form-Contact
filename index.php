<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .bg{
    border:solid 1px rgba(241, 2, 2, 0.4) !important;
}
.hidden{
    display: none;
}
</style>
<body>
    <header>
        <div class="col-lg-12 bg-dark p-2"></div>
        <nav class="navbar navbar-expand-md navbar-dark bg-info">
            <div class="container">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <h4 class="text-white m-0 p-0">TECH DEVE INFO</h4>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="col-lg-12">
            <h3>Form Contact</h3>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <h5>Form Contact</h5>
                    <hr>


                    <span id="smsError"></span>
                    <?php

                        //if(isset($MsgError)){echo $MsgError;}
                    
                    ?>
                    
                    <span id="loadSpace"><?php if(isset($_SESSION['error'])){ echo $_SESSION['error'];  unset($_SESSION['error']); } ?></span>
                    <span id="successed"><?php if(isset($_SESSION['success'])){ echo $_SESSION['success']; unset($_SESSION['success']); } ?> </span>
                    <form method="post" action="erroremail.php" id="my_form">

                        <label for="">Name<i><span id="nameError" class="text-danger"></span></i></label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php if(isset($_SESSION['post'][0])) echo $_SESSION['post'][0]; else unset($_SESSION['post'][0]); ?>" style="border-radius:2rem;border:solid 1px #17a2b8!important;padding-left:30px" placeholder="Your name">
                        <label for="">Your E-mail<i><span id="EmailError"></span></i></label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php if(isset($_SESSION['post'][1])) echo $_SESSION['post'][1]; else unset($_SESSION['post'][1]); ?>" style="border-radius:2rem;border:solid 1px #17a2b8!important;padding-left:30px" placeholder="Your E-mail">
                        <label for="">Message<i><span id="messagelError"></span></i></label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message" style="border-radius:0.5rem;border:solid 1px #17a2b8!important;padding-left:30px"><?php if(isset($_SESSION['post'][2])) echo $_SESSION['post'][2]; else unset($_SESSION['post'][2]); ?></textarea>
                        <span id="status"></span>
                        <input type="submit" name="submit" id="submit" value="Send" class="btn btn-outline-info mt-4 pl-5 pr-5" style="border-radius:2rem;border:solid 1px #17a2b8!important;padding-left:30px;">

                    </form>
                    <br>
                </div>

                        <?php unset($_SESSION['post']); ?>



                <div class="col-lg-4">
                    <h5>Adress And Social Media</h5>
                    <hr>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="footer bg-dark mt-5" style="height:auto; border-top:solid 5px #17a2b8;color:#ccc">
        <div class="col-lg-12 p-4">
            <div class="container">
                <br>
                <div class="row">

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 p-0">
                        <h6 class="text-uppercase font-weight-bold">Useful link</h6>
                        <p>
                        <ul>
                            <li><a href="#" style="text-decoration: none; color:#ccc"> Support Us</a>
                            </li>
                            <li> <a href="#" style="text-decoration: none; color:#ccc">Become an Affiliate</a> </li>
                            <li><a href="#" style="text-decoration: none; color:#ccc">Shipping Rates</a></li>
                            <li><a href="#" style="text-decoration: none; color:#ccc">Private Policy</a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">OUR PRODUCTS</h6>
                        <p>
                        <ul>
                            <li>Website</li>
                            <li>Shopping Cart</li>
                            <li>E-commerce</li>
                            <li>Management</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
                        <p>
                        <ul>

                            <li>Greece Athens 12251
                            </li>
                            <li>lohatajean@gmail.com</li>
                            <li>+ 30 697 811 1023</li>
                            <li>+30 21...</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">About Us</h6>
                        <p>
                            My name is John Lohata, i'm programmer
                            i user PHP, MYQL, jQuery, Bootstrap
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2 text-center copyright" style="background:#212529;color:#6c757d;border-top:dotted 1px #17a2b8;">
            CopyRight &copy; all programmers <?= date('Y') ?> / <span> in case you want us, this is our  E-mail : lohatajean@gmail.com</span>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){  
            
            success = $('#successed'); 

            MyTime = setTimeout(function(){
                        success.addClass('hidden'); 
                        // $('#name').val('');
                        // $('#email').val('');
                        // $('#message').val('');
                    },4000, function(){
                        clearTimeout(MyTime);
                    });

            // 
         });


    </script>
</body>
</html>