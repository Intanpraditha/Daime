<!-- application/views/login.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
        <div><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo base_url('login/process'); ?>">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" name="login_submit" value="Login">
        </div>
        <div>
            <a href="login/register">register</a>
        </div>
    </form>
</body>
</html> -->
<link href="<?php echo base_url('assets/'); ?>css/login.scss" rel="stylesheet">

<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span></span>Login</h2>
            <form action="<?php echo base_url('login/process'); ?>" method="post">
                <div class="form-holder">
                    <input class="input" placeholder="Username" type="text" id="username" name="username" required>
                    <input class="input" placeholder="Password" type="password" id="password" name="password" required>
                </div>
                <input class="submit-btn" type="submit" name="login_submit" value="Login">

                <!-- <button class="submit-btn">Log in</button> -->
            </form>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span></span>Register</h2>
            <form method="post" action="<?php echo base_url('login/register_process'); ?>">
            <div class="form-holder">
                <input placeholder="Username" class="input" type="text" name="username" required>
                <input placeholder="Password" class="input" type="password" name="password" required>
                <input placeholder="Email" class="input" type="email" name="email" required>
                <input placeholder="Nama Lengkap" class="input" type="text" name="namaLengkap" required>
                <input placeholder="Alamat" class="input" name="alamat"></input>
            </div>
            <input class="submit-btn" type="submit" value="Simpan">
            <!-- <button class="submit-btn">Sign up</button> -->
            </form>
			
		</div>
	</div>
</div>

<script>
    console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});
</script>