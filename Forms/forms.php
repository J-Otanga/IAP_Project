<?php
class forms {
    public function signup(){

?>

<form action='' method='post'>
        <input type='text' name='username' placeholder='Username' required>
        <input type='email' name='email' placeholder='Email' required>
        <input type='password' name='password' placeholder='Password' required>

        <?php $this->submit_button('Sign Up', 'signup'); ?>

        <a href='./signIn.php'>Already have an account? Log in</a>
</form>
<?php
    }

    private function submit_button($value, $name){
        ?>  
        <button type='submit' name='<?php echo $name; ?>'><?php echo $value; ?></button>
    <?php
    }
    public function signIn(){

        ?>
<form action='' method='post'>
        <input type='text' name='username' placeholder='Username' required>
        <input type='password' name='password' placeholder='Password' required>
        <?php $this->submit_button('Sign In', 'signIn'); ?>
        <a href='./'>Don't have an account? Sign up</a>
</form>
<?php
    }
}
?>