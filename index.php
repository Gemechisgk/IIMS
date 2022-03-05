<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIMS - Internship Information Management System</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- css file link  -->
    <link rel="stylesheet" href="/styles/style.css">

</head>
<body>
    <!--- pop up login---->
    <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' action="login.php" method="post" class='input-group-login'>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type='text'name="uname" class='input-field'placeholder='ID Number' required >
		    <input type='password'name="password" class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
         <form id='register' class='input-group-register'>
             <h1>Not Registered ?</h1>
             <h2>To register for <strong>IIMS</strong> please consult your faculty </h2>
         </form>
		 
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	
<!--pop up end--->
    
<!-- heading section starts -->

<header>

    <a href="#" class="logo"><i class="fas fa-graduation-cap"></i>IIMS</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#features">features</a></li>
            <li><a href="#testimony">testimony</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#"onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">login</a></li>
        </ul>
    </nav>

</header>

<!-- heading section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1 id="amu">Arbaminch University's <br> <i> FCSE Information Management System</i></h1>
        
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus earum aliquid ullam, impedit sunt tempora a! Animi nihil sunt beatae.</p>
        <a href="#"><button class="btn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Explore</button></a>
    </div>

    <div class="image">
        <img src="/images/presentation-animate.svg" alt="">
    </div>

</section>


<!-- home section ends -->

<!-- about section starts  --> 

<section class="about" id="about">

    <div class="image">
        <img src="images/contact-us-animate.svg" alt="">
    </div>

    <div class="content">
        <h1 class="heading">What is IIMS</h1>
        <h3>Internship Information Management System</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laborum quia, ducimus vel consequatur consequuntur perferendis necessitatibus obcaecati quos quis.</p>
        <ul>
            <li> <i class="fas fa-check-double"></i> Web based submition </li>
            <li> <i class="fas fa-check-double"></i> No physical contact </li>
            <li> <i class="fas fa-check-double"></i> Web based advising </li>
            <li> <i class="fas fa-check-double"></i> Independent user accounts </li>
        </ul>
    </div>

</section>

<!-- about section ends -->

<!-- Description section starts  -->

<section class="features" id="features">

<h1 class="heading">IIMS features</h1>

<h1 class="title">new and outstanding features</h1>

<p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet molestiae repellat labore possimus velit ex aperiam sequi atque veniam consectetur.</p>

<div class="box-container">

    <div class="box">
        <i class="fas fa-wifi"></i>
        <h3>Internet based</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti doloribus asperiores neque facere magni fugiat labore ipsum provident sed numquam.</p>
    </div>

    <div class="box">
        <i class="fas fa-people-arrows"></i>
        <h3>Physical contact not needed</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti doloribus asperiores neque facere magni fugiat labore ipsum provident sed numquam.</p>
    </div>

    <div class="box">
        <i class="fas fa-gamepad"></i>
        <h3>easy control</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti doloribus asperiores neque facere magni fugiat labore ipsum provident sed numquam.</p>
    </div>

    <div class="box">
        <i class="fas fa-headset"></i>
        <h3>Better communication</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti doloribus asperiores neque facere magni fugiat labore ipsum provident sed numquam.</p>
    </div>

</div>

</section>

<!-- Description section ends -->

<!-- testimony section starts  -->

<section class="testimony" id="testimony">

<h1 class="heading">testimonys</h1>

<h1 class="title">lorem ipsum dolor sit amet consectetur adipsicing</h1>

<div class="box-container">

    <div class="box">
        <h3>lorem ipsum</h3>
        <img src="images/stay-at-home-animate.svg" alt="">
        <span class="name">***/-</span>
        
    </div>

    <div class="box">
        <h3>lorem ipsum</h3>
        <img src="images/stay-at-home-animate.svg" alt="">
        <span class="name">****/-</span>
      
    </div>

    <div class="box">
        <h3>lorem ipsum</h3>
        <img src="images/stay-at-home-animate.svg" alt="">
        <span class="name">Dr. Lorem</span>
        
    </div>

    <div class="box">
        <h3>lorem ipsum</h3>
        <img src="images/stay-at-home-animate.svg" alt="">
        <span class="name">***/-</span>
       
    </div>

</div>

</section>

<!-- testimony section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">contact or ask question</h1>

<h1 class="title">contact us if you have questions about <strong>IIMS</strong></h1>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="first name">
        <input type="text" placeholder="last name">
    </div>

    <div class="inputBox">
        <input type="email" placeholder="your email">
    </div>

    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

    <input type="submit" value="message" class="btn">

</form>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

<h1 class="heading">FAQ</h1>

<h1 class="title">Frequently asked questions</h1>

<div class="row">

    <div class="image">
        <img src="/images/faq-animate.svg" alt="">
        
    </div>

    <div class="accordion-container">

        <div class="accordion">
            <h1 class="accordion-heading">
                How to register for IIMS ?
            </h1>
            <p class="accordion-content">
                To register for IIMS a user must contact his/her faculty or department 
                After contacting faculty or department system adminstrastors can create account. 
            </p>
        </div>

        <div class="accordion">
            <h1 class="accordion-heading">
                Who can create account ?
            </h1>
            <p class="accordion-content">
               Only a system adminstrastor or faculty can create and assign Accounts.
            </p>
        </div>

        <div class="accordion">
            <h1 class="accordion-heading">
                How to change password ?
            </h1>
            <p class="accordion-content">
               In order to change password a user must first log in into his/her account and request a password change on the website.
            </p>
        </div>

        <div class="accordion">
            <h1 class="accordion-heading">
                Reset forgotten passwords
            </h1>
            <p class="accordion-content">
               If password is forgotten a user must request a password change from department or faculty
                Password reset is done only by faculty or department 
            </p>
        </div>

        <div class="accordion">
            <h1 class="accordion-heading">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi!
            </h1>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam, fuga sit nostrum minus culpa cumque veniam earum facilis architecto.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, cupiditate.
            </p>
        </div>

    </div>

</div>

</section>

<!-- faq section ends -->

<!-----back to top------>
<a href="#home"><button class="totop"><i class="fas fa-arrow-up"> back to top</i></button></a>

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>why choose us?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero ea repellendus aut commodi, sequi praesentium! Neque aliquam excepturi quas.</p>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#features">features</a>
        <a href="#testimony">testimonys</a>
        <a href="#contact">contact</a>
        <a href="#faq">FAQ</a>
    </div>

    <div class="box">
        <h3>contact us</h3>
        <p> <i class="fas fa-map-marker-alt"></i> Arbaminch, Ethiopia  </p>
        <p> <i class="fas fa-envelope-square"></i> P.O Box 21</p>
        <p><i class="fas fa-mail-bulk" ></i> amit.computer@amu.edu.et</p>
        <p> <i class="fas fa-globe"></i> WWW.AMU.EDU.ET </p>
        <p> <i class="fas fa-phone"></i> +251-46881-4421 </p>
    </div>

</div>

<h1 class="credit"> Copyright &copy 2022     Arbaminch Ethiopia </h1>

</section>

<!-- footer section ends -->























<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js.js"></script>

</body>
</html>