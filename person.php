<?php
session_start();
//echo session_id();

$_SESSION['time'] = (isset($_SESSION['time'])) ? $_SESSION['time'] : time();
$loginFromCookies = $_COOKIE['login'];


/*if (isset($_POST['submit1'])) {
    checkDiscount();
    $result = checkDiscount();
}
else $result = null;*/
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>mainforme</title> 
<link rel="stylesheet" type="text/css" href="styles.css" title="tyylit" />
</head>
<body>
<div class="web">
    <div class="header">
        <div class="otsikko">My Spa Salon</div>
        <div class="otsikko">Enjoy the best quality</div>
        <div class="singin">
        Welcome, <?= $loginFromCookies ?><br>
        <a href="logout.php">Sign out</a>
        </div>
    </div>
    <div class="nav">	
        <div class="link" id="mylink"> <a href="#discounts">My discounts</a></div>
        <div class="link"> <a href="#about">About</a></div>
        <div class="link">  <a href="#treatmens">Treatmens</a></div>
        <div class="link"> <a href="#allfotos">Fotos</a></div>
        <div class="link">  <a href="#reviews">Reviews</a></div>
        <div class="link">  <a href="#contactus">Contact</a></div>
    </div>	
    <div class="main">
        <h4>--- My personal discounts ---</h4><br/>
        <h3><p>You are always welcome! We invite you to experience the array of professional hairstyling services and day spa treatments! Visit us!</p></h3>
            <div class="main" id="personal"><h3>Order within 24 hours of singin in and you will receive a unique 10% discount!</h3>
            <?php
                $res = null;
                require __DIR__ . '/functions.php';
                print_r(checkTime($res));
                ?>
            </div>
            <div class="main" id="personal">
            <?php
                if (isset($_POST['submit1'])) {
                    $result = checkDiscount();
                }
                else $result = null;
                
                if ($result === null):  
                ?>

        <h3>Select the date of your birthday and check your personal discount!</h3>
                    <form action="person.php" method="post">
                        <select id="number" name="day">
                            <option>Day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                        <select id="number" name="month">
                            <option>Month</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                        <input class="input" id="number" name="submit1" type="submit" value="--- Check ---"></br></br>
                    </form><br/>
                <?php else: ?>
                    <span style="color: rgb(124 21 108); font-size: 1.3em;">
                        <?= "<br>" . $result . "<br>" . "<br>";?>
                    </span>
                <?php endif;  ?>
            </div> 
        </div>
    <div class="main" id="about">
        <h4>--- About us ---</h4>
            <h3>The Spa Salon team of experienced and highly trained beauty therapists will be happy to put together a spa or beauty treatment package designed specifically for your needs and to offer you advice on your skin’s requirements. </h3>
            <p>We offer a wide range of massages, rituals and treatments, leaning on ancient practices.</p>
            <p>My Spa Salon allows you to relax in beautiful surroundings and enjoy a whole range of treatments designed to rejuvenate both body and mind.</p>
            <p> Distilling years of professional experience into every single beauty treatment to offer visible results paired with an unrivaled sensorial spa experience.</p>
            <p>Put your best face forward with our collection of hydrating and natural beauty face masks for your skin. Upgrade your skincare routine with our range of fresh masks, all made using natural ingredients.</p>
    </div>	
    <div class="main" id="treatmens">
        <h4>--- Treatmens ---</h4>
        <h3>Our beauty salon offers a stunning complement of therapeutic and rejuvenating face and body beauty treatments, using only the best skincare products with the finest ingredients.</h3>
            <ul>
                <li><p>A manicure at a spa can clean, shape, strengthen and colour your nails, and soften the skin on your hands. It also has the side-effect of relaxing you as there are pressure points on your hands that relate to other parts of your body. </p></li>
                <li><p>We can offer everything from a cut and colour to a special blow dry or updo. There are also different masks and treatments available, from rich moisturisers to steaming.</p></li>
                <li><p>You can book a make-up lesson, have your make-up applied by a professional for a special occasion, or simply book a consultation to find out the best colours and products for your skin type and tone</p></li>
                <li><p>A tanning treatment at a spa can leave your skin looking and feeling great, as well as being an enjoyable experience. Self-tanning creams, oils, sprays and lotions are a safer way to achieve an even tan than exposing yourself to the sun.</p></li>
            </ul>
    </div>	
    <div class="main" id="reviews">
        <h4>--- Reviews ---</h4>
            <p><span>Kristina S.:</span> "I read the reviews prior to going here and also went to the website and read about the stylist that work there. The place was very nice and everyone was super sweet."</p>
            <p><span>Martina V.:</span> "Absolutely love this place! My Spa Salon is so cute!"</p>
            <p><span>Alice W.:</span> "The team is amazing ! Sweet and helpfull and understanding and very nice!" </p>
            <p><span>Luca K.:</span> "I wont go anywhere else they have everything I need and great people to work with. Thank you."</p>
            <p><span>Lora P.:</span> "I have been using SalonSpa.us for years when acquiring different products and equipment for my salon and day spa. Their prices are reasonable for the quality products they sell and the customers service has always been spot on."</p>
    </div>		
    <div class="main">
        <h4>--- Galleria ---</h4>
            <div class="fotos" id="allfotos">
                <div class="foto-link"><a href="foto/foto1.jpg"><img src="foto/foto1_small.jpg" alt=""></a></div>	
                <div class="foto-link"><a href="foto/foto2.jpg"><img src="foto/foto2_small.jpg" alt=""></a></div>	
                <div class="foto-link"><a href="foto/foto3.jpg"><img src="foto/foto3_small.jpg" alt=""></a></div>
                <div class="foto-link"><a href="foto/foto4.jpg"><img src="foto/foto4_small.jpg" alt=""></a></div>
                <div class="foto-link"><a href="foto/foto5.jpg"><img src="foto/foto5_small.jpg" alt=""></a></div>
                <div class="foto-link"><a href="foto/foto6.jpg"><img src="foto/foto6_small.jpg" alt=""></a></div>
                <div class="foto-link"><a href="foto/foto8.jpg"><img src="foto/foto8_small.jpg" alt=""></a></div>
                <div class="foto-link"><a href="foto/foto9.jpg"><img src="foto/foto9_small.jpg" alt=""></a></div>
            </div>   
    </div>
    <div class="main" id="contactus"> 
        <p><h4>--- Contact us ---</h4><h3>My Spa Salon</h3></p>
        <p>West Street, 33A London</p>
        <p> tel. 020 3342 5577 info@spa.uk</p>
        <p>Open every day 10:00 am – 04:00 pm</p>
    </div>	
    <div class="footer"> 
        <p>© COPYRIGHT 2022 | WEB DESIGN & SM | ALL RIGHTS RESERVED</p>
    </div>	
</div>	
</body>
</html>	