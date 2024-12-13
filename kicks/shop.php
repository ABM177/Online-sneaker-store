<?php
include('header.html')
?>
    <shop>
        <div class="cont">
            <div class="header3">
                <h1>Shop Sneakers</h1>
            </div>
            <div class="shop">
                <div class="shop-container">
                    <div class="card" onclick="openPopup('Nike Dunk Low Retro','Rs.9,599', '../kicks/images/sneakers/nikedunklow.png')">
                        <img src="../kicks/images/sneakers/nikedunklow.png" alt="Nike Dunk Low Retro">
                        <h3>Nike Dunk Low Retro</h3>
                        <p>Rs.9,599</p>
                    </div>
                    <div class="card" onclick="openPopup('Yeezy Foamrunners','Rs.6,899', '../kicks/images/sneakers/foamrunners.jpg')">
                        <img src="../kicks/images/sneakers/foamrunners.jpg" alt="Yeezy Foamrunners">
                        <h3>Yeezy Foamrunners</h3>
                        <p>Rs.6,699</p>
                    </div>
                    <div class="card" onclick="openPopup('Travis Scott Jordan 1','Rs.22,499', '../kicks/images/sneakers/travis.jpg')">
                        <img src="../kicks/images/sneakers/travis.jpg" alt="Travis Scott Jordan 1">
                        <h3>Travis Scott Jordan 1</h3>
                        <p>Rs.22,499</p>
                    </div>
                    <div class="card" onclick="openPopup('Air Force 1s','Rs.6,999', '../kicks/images/sneakers/airforce.jpg')">
                        <img src="../kicks/images/sneakers/airforce.jpg" alt="Air Force 1s">
                        <h3>Air Force 1's</h3>
                        <p>Rs.6,999</p>
                    </div>
                    <div class="card" onclick="openPopup('Converse Off White','Rs.19,899', '../kicks/images/sneakers/converse.jpg')">
                        <img src="../kicks/images/sneakers/converse.jpg" alt="Converse Off White">
                        <h3>Converse x Off White</h3>
                        <p>Rs.19,899</p>
                    </div>
                    <div class="card" onclick="openPopup('Travis Scott Jordan 1 Low','Rs.16,599', '../kicks/images/sneakers/travis.jpg')">
                        <img src="../kicks/images/sneakers/travislow.jpg" alt="Travis Scott Jordan 1 Low">
                        <h3>Travis Scott Jordan 1 Low</h3>
                        <p>Rs.16,599</p>
                    </div>
                    <div class="card" onclick="openPopup('Adidas Samba','Rs.8,499', '../kicks/images/sneakers/adidas.jpeg')">
                        <img src="../kicks/images/sneakers/adidas.jpeg" alt="Adidas Samba">
                        <h3>Adidas Samba</h3>
                        <p>Rs.8,499</p>
                    </div>
                    <div class="card" onclick="openPopup('Yeezy Red Octobers','Rs.24,699', '../kicks/images/sneakers/Nike-Air-Yeezy-II-Red-October.jpg')">
                        <img src="../kicks/images/sneakers/Nike-Air-Yeezy-II-Red-October.jpg" alt="Red Octobers">
                        <h3>Yeezy Red Octobers</h3>
                        <p>Rs.24,699</p>
                    </div>
                    <div class="card" onclick="openPopup('Adidas Samba Green','Rs.8,499', '../kicks/images/sneakers/greenadidas.jpg')">
                        <img src="../kicks/images/sneakers/greenadidas.jpg" alt="Adidas Samba Green">
                        <h3>Adidas Samba Green</h3>
                        <p>Rs.8,499</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <img id="popup-image" src="" alt="Product Image">
            <h2 id="popup-title"></h2>
            <p id="popup-price"></p>
            <button class="btn"><a href="checkout.php">Checkout</a></button>

        </div>
    </div>
    <script src="shop.js"></script> 
    </shop>
<?php
include('footer.html')
?>