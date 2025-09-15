<?php
class forms {
    public function signup(){

?>

<form action='' method='post'>
        <input type='text' name='username' placeholder='Username' required>
        <input type='email' name='email' placeholder='Email' required>
        <input type='password' name='password' placeholder='Password' required>
        <button type='submit'>Sign Up</button>
</form>
<?php
    }
}

