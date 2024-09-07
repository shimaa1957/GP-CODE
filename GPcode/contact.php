<!DOCTYPE html >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CONTACT US</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" 
integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="contact.css"/>
</head>
<body>

    <div class="cont">
        <div class="navbar">
            <img src="foto/logo.GP-removebg-preview.png" class="logo" >
            <nav>
                <ul id="list">
                    <li class="item"><a class="line" href="home.html">HOME</a></li>
                    <li class="item"><a class="line" href="sign.html">LOGIN</a></li>
                    <li class="item"><a class="line" href="ContactUs.html">CONTACT US</a></li>
                </ul>
            </nav>
            <img src="foto/menu.png" class="menu-icon" >
        </div>

    <section class="contact">
        <div class="content">
             <h2>CONTACT US</h2>
        </div>
        <div class="container">
            <div class="contactInfo">
             <div class="box" >
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text" >
                    <h3><i>Email:</i></h3><br>
                    <p>photography.website.projectg@gmail.com</p>
                    </div> 
             </div>
             <div class="box" >
                <div class="icon"></div>
                <div class="text" >
                    <h3><i>Common Question:</i></h3><br>
                    <p>
                        <ul><li>What is the benefit of the site?</li>
                        <br> Easy access to photographers and communication with them.
                        <br><br>
                        <li>Is the site for reservations or for selling photos?</li>
                        <br> No, just for show.
                         <br><br>
                        <li>How to book appointments for photo sessions?</li> 
                       <br>By communicating with the chosen photographer via his personal e-mail.
                     </ul></p>
                    </div> 
             </div></div>
                    
             <div class="contactForm">
                <form action="send.php"  method="post">
                    <h2>You`r Review</h2>
                    <div class="inputBox">
                    <input type="text" name="name" id="name" required="required" placeholder="Full Name"  autocomplete="off" require>
                    
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" required="required" placeholder="Email"  autocomplete="off" require>
                
                </div>
                <div class="inputBox">
                    <input type="text" name="subject" id="subject" required="required" placeholder="Subject"  autocomplete="off" require>
                
                </div>
                <div class="inputBox">
                    <textarea required="required"  name="message" id="message" placeholder="Send your REVIWE..." ></textarea>  
                </div>
                <div class="inputBox">
                    <button type="submit" name="send" id="btn">SEND</button>
                </div>
                </form>
             </div> 
            </div>
               
        </div> 
     </div>
    </section>
</body>
</html>



