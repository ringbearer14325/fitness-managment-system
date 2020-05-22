<?php include('header.php'); ?>
<div class="wrapper">
    <form action="index.php" method="post">
        <div id="container">
        <?php if (isset($login_status) && false == $login_status ) : ?>
            <div class="error">
                <p> Your username and password are incorrect. Try again.</p>
            </div>
        </div>
        <?php endif; ?>
<?php include('footer.php'); ?>
