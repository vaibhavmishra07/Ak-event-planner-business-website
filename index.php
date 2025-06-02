<?php 
include 'db_connect.php';

session_start();


?>

<?php 

include 'db_connect.php';


if (isset($_POST['contact'])) {

    $name = $_POST['name'];
    $mobile = $_POST['email'];
    $address = $_POST['message'];

    $inst = "INSERT INTO contact(name, email, message) VALUES ('$name', '$mobile', '$address')";
    

    if ($conn ->query($inst)) {
        echo "message send successful";
    }else{
        echo "error";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best-Event-Planner</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header class="head">
        <a href="#" class="logo"><h2>AK Event Planners</h2></a>
        <nav class="navbar ">
            <a href="index.php" class="active">Home</a>
            <a href="#service">Service</a>
            <a href="#vendor">Vendors</a>
            <a href="#invite">Card Design</a>
            <a href="#contact">Contact Us</a>
            <a href="login.html" name="login" id="login"><?php 
             if (isset($_SESSION['full_name'])) {
                echo "<a href='logout.php'>" .$_SESSION['full_name']."</a>";
             }else{
                echo "<a href='login.html'>Login</a>";
             }
            
            
            ?></a>
        </nav>
        <div id="menu-bar"><i class="fas fa-bars"></i></div>
    </header>
    <!---------------------------Home--------------------->
    <section class="home" id="home">
      
            <div class="search-box">
                <h1>Welcome To AK Event Planners</h1>
                <p>We are the best Events/Wedding planners and Organisers in Varanasi with trusted reviews and budget friendly.</p>
                
               
            </div>
        
    </section>

    <!------------------------services-------------------->
    <section class="service" id="service">
        <div class="title">
            <h1><span>S</span>ervice</h1>
        </div>
        <div class="services-row">
            <div class="services-col">
                <i class="fas fa-book-open"></i>
                <h2>invitation</h2>
                <p>We design the inviation for you..</p>
            </div>
            <div class="services-col">
                <i class="fas fa-camera"></i>
                <h2>Photography & Video</h2>
                <p>We are known for our photography and videography.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-brush"></i>
                <h2>Beauty & Makeup</h2>
                <p>We have experienced makeup artists..</p>
            </div>
            <div class="services-col">
                <i class="fab fa-pagelines"></i>
                <h2>Office Events & Gallery</h2>
                <p>We also organises office events professionally and also make gallery..</p>
            </div>
            <div class="services-col">
                <i class="fas fa-birthday-cake"></i>
                <h2>Birthday Parties</h2>
                <p>We are known for our uniqueness in surprise birthday parties and efficient management.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-music"></i>
                <h2>Music band & DJ</h2>
                <p>We have our own music bands and Dj also..</p>
            </div>
            <div class="services-col">
                <i class="fas fa-utensils"></i>
                <h2>Catering</h2>
                <p>Our Catering services are best in area. We provides the delicious italian foods also..</p>
            </div>
            <div class="services-col">
                <i class="fas fa-ring"></i>
                <h2>Decoration & Tent</h2>
                <p>We provide the best tent systems and the most beautiful decoration of Varanasi.</p>
            </div>
        </div>
    </section>
    <!-----------------------------vendor------------------->
    <section class="vendor" id="vendor">
        <div class="title">
            <h1><span>F</span>eatured <span>V</span>endor</h1>
        </div>
        <div class="vendor-list">
            <div class="vendor-row">
                <div class="rate">4.5&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx2jIs0QwA35A1A6ImRtpnJtzpi4JnUzX2Xz0DZev2fqH7cYturVxeNAi23ApIRwg4vjQ&usqp=CAU" alt="img">
                <h2>Beauty tales</h2>
                <p>Bridal Makeup</p>
                <h3>Rs.10,000 onwards</h3>
            </div>
            <div class="vendor-row">
                <div class="rate">4.2&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="https://www.weddingsutra.com/images/Vendor_Images/Wedding_Planners/flinter-management/flinters-management-10.JPG" alt="img">
                <h2>Mandap Decoration</h2>
                <p>Wedding Planner</p>
                <h3>Rs.30k-4lakh</h3>
            </div>
            <div class="vendor-row">
                <div class="rate">5.0&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="https://image.wedmegood.com/resized/540X/uploads/member/1494292/1614355555_DAS00513.jpg" alt="img">
                <h2>Party Stage Makers</h2>
                <p>Event management </p>
                <h3>Rs.10,000-30,000</h3>
            </div>
            <div class="vendor-row">
                <div class="rate">4.1&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="https://image.wedmegood.com/resized/800X/uploads/member/163998/1690976884_IMG_8228.jpg" alt="img">
                <h2>Company Events & Parties</h2>
                <p>Company parties rental only</p>
                <h3>Rs.40,000 Onwards</h3>
            </div>
            <div class="vendor-row">
                <div class="rate">4.3&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="https://cdn0.weddingwire.in/vendor/3716/3_2/960/jpg/img-6044-1_15_73716-159886590564236.jpeg" alt="img">
                <h2>Ring Ceremony Stage</h2>
                <p>Wedding Decorators</p>
                <h3>Rs.40,000-3,00,000</h3>
            </div>
            <div class="vendor-row">
                <div class="rate">4.0&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnfX8qi5nm-zPlzwniYu6P1UYJJhLwa8xiAA&usqp=CAU" alt="img">
                <h2>Haldi Decoration</h2>
                <p>Wedding Decorators</p>
                <h3>Rs.10k-1.8 Lakh</h3>
            </div>
        </div>
    </section>
    
    <!------------------E-invitation------------------>
    <section class="invite" id="invite">
        <div class="title">
            <h1>Card<span>Design</span></h1>
            <p>Choose the best card Design.</p>
        </div>
        <div class="invitation-row">
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-psd/wedding-invitation-greeting-cards-elegant-vintage-style_1340-49408.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/indian-wedding-card-invitation-template_1017-38268.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-psd/wedding-invitation-greeting-cards-elegant-vintage-style_1340-49454.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/indian-wedding-invitation_52683-44378.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/luxury-indian-wedding-card-design-nice-template_1017-40618.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-psd/gradient-indian-wedding-invitation_23-2149326394.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/gradient-wedding-invitations-spanish_52683-81134.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/abstract-watercolor-wedding-invitation_23-2149069669.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/premium-psd/beautiful-floral-wedding-invitation-card-template-free-psd_1340-49835.jpg?size=626&ext=jpg&ga=GA1.1.1580806941.1707068233&semt=ais" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-psd/wedding-invitation-greeting-cards-elegant-vintage-style_1340-49374.jpg?size=626&ext=jpg&ga=GA1.1.1580806941.1707068233&semt=ais" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/gradient-wedding-invitation-template_23-2148889950.jpg?size=626&ext=jpg&ga=GA1.1.1580806941.1707068233&semt=ais" alt="">
            </div>
            <div class="invitation-box">
                <img src="https://img.freepik.com/free-vector/indian-wedding-invitation-card-lovely-template-design_1017-40690.jpg?size=626&ext=jpg&ga=GA1.1.1580806941.1707068233&semt=ais" alt="">
            </div>
        </div>
    </section>

    <!--------------------------------------------footer section--------------------------->
    <footer id="contact">
        <div class="container">
            <div class="f-container">
                <h2>AK Event Planner - Your Personal Event Planner</h2><br>
                <p>AK Event Planners is a well-known event management company based in Varanasi, India, renowned for creating memorable and bespoke events. Whether organizing grand weddings, intimate parties, or corporate events, the team at AK Event Planners specializes in curating experiences tailored to their clients' visions and requirements.</p>
                <div>
                    <a href="./register.html"><button class="btn">Register as a User</button></a>
                </div>
                <div class="social">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
            <div class="f-container">
                <h2>Our Location</h2>
                <a href="#"><i class="fas fa-angle-right"></i>Lanka,BHU</a>
                <a href="#"><i class="fas fa-angle-right"></i>Babatpur Airport</a>
                <a href="#"><i class="fas fa-angle-right"></i>Varanasi Cantonment</a>
                <a href="#" "><i class=" fas fa-angle-right "></i>Harahua</a>
                <a href="# "><i class="fas fa-angle-right "></i>Baragaon</a>
                <a href="# "><i class="fas fa-angle-right "></i>Pandeypur</a>
                <a href="# "><i class="fas fa-angle-right "></i>Bhojubeer</a>
                <a href="# "><i class="fas fa-angle-right "></i>Shivpur</a>
                <a href="# "><i class="fas fa-angle-right "></i>Varanasi All locations.</a>
            </div>
                <form action="#" method="post">
                <div class="f-container ">
                    <h2>Contact Me</h2>
                    <p>Enter Your Name.</p>
                    <input type="text" name="name" id="" placeholder="Enter Your Name">
                    <p>Enter Your Email</p>
                    <input type="text " name="email" placeholder="Enter Your Email "required>
                    <p>Enter Your Message</p>
                    <input style="height: 100px;" type="text" name="message" id="" placeholder="Enter Your Message">
                    <button class="btn " name="contact" id="contact">send</button>
                    </div>
            </form>
            </div>
        </footer>
        <div class="copyright ">
            <p>Copyright &copy; 2024 Design By Vaibhav Mishra</p>
        </div>
</body>
<script src="script.js"></script> 
</html>