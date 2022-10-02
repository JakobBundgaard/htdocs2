<?php 
$_title = 'Login';
require_once __DIR__.'/comp_header.php';

?>

<main>
    <form action="bridge-login.php" method="POST">
        <input type="text" name="email" placeholder="email">
        <button>Login</button>
    </form>
</main>


</body>
</html>