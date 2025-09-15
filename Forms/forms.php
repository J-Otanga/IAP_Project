<?php
class forms {
    public function signup(){

?>

<form action='' method='post'>
        <input type='text' name='username' placeholder='Username' required>
        <input type='email' name='email' placeholder='Email' required>
        <input type='password' name='password' placeholder='Password' required>
        <button type='submit'>Sign Up</button><a href='./signIn.php'>Already have an account? Log in</a>
</form>
<?php
    }
    public function signIn(){
        ?>
<form action='' method='post'>
        <input type='text' name='username' placeholder='Username' required>
        <input type='password' name='password' placeholder='Password' required>
        <button type='submit'>Log In</button><a href='.'>Don't have an account? Sign up</a>
</form>
<?php
    }
}
?>