<?php
require 'menu.php';
 ?>
<div class="signup">
<div class="content">
<div id="reg-frm">
<form action="<?php echo URL; ?>/process" method="post" id="form">
<input id="username" type="text" name="user_name" placeholder="Username" />
<input id="email1" type="email" name="user_email" placeholder="Email" />
<input id="password" type="password" name="user_password_new" placeholder="Password" />
<input id="password" type="password" name="user_password_repeat" placeholder="Repeat Password" />
<input id="signin" type="submit" name="aveshan_register" value="Register" />
</form>
</div>
</div>
</div>