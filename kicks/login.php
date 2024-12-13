<?php
include('header.html')
?>
<login>
    <div class="login">
    <form action="connect.php" method="post">
    <div class="login-box">
            <h2>Login</h2>
            <form>
                <input type="text" name="firstn" placeholder="First Name" required>
                <input type="text" name="lastn" placeholder="Last Name" required>
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <div class="options">
                    <label>
                        <input type="checkbox"> Remember Me?
                    </label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit"><a href="#">Login</a></button>
            </form>
        </div>
    </div>
    </form>


</login>
<?php
include('footer.html')
?>