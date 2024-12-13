<?php
include('header.html');
?>

<div class="checkout">
    <form action="credentials.php" method="post">
        <div class="check-box">
            <h2>Enter Details</h2>
            <input type="text" name="firstname" size="10" placeholder="First Name" required />
            <input type="text" name="lastname" size="10" placeholder="Last Name" required />
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" required />
            <br /><br />
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male" /> Male
            <input type="radio" name="gender" value="female" /> Female
            <br /><br />
            <input type="text" name="address" size="50" placeholder="Address" required />
            <br /><br />
            <p><b>Only UPI Payments Available</b></p>
            <input type="email" name="mailid" size="20" placeholder="Mail-ID" required />
            <br />
            <input type="password" name="otp" size="10" placeholder="OTP" required /><br />
            <input type="email" name="upi" size="20" placeholder="UPI ID" required /><br /><br /><br />

            <label for="item"><b>Select Your Item</b></label>
            <select name="item" required>
                <option value="TravisxJordan1">Travis Scott x Jordan 1</option>
                <option value="NikeRetro">Nike Dunk Low Retro</option>
                <option value="YeezyFoam">Yeezy Foamrunners</option>
                <option value="AirForce">AirForce 1's</option>
                <option value="TravisLow">Travis Scott Jordan Low</option>
                <option value="ConverseOffWhite">Converse x Off-White</option>
                <option value="RedOctober">Yeezy Red Octobers</option>
                <option value="AdidasSamba">Adidas Samba</option>
                <option value="AdidasSambaG">Adidas Samba Green</option>
            </select><br /><br />

            <label for="size"><b>Select Your Size</b></label>
            <select name="size" required>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
            </select><br /><br /><br />
            
            <button type="submit">Checkout</button>
        </div>
    </form>
</div>

<?php
include('footer.html');
?>
