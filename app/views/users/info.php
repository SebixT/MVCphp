<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="user-container">
        <?php require APPROOT . '/views/inc/user/navigation.php'; ?>
        <section class="user-content">
            <header class="user-name">
                <div><?php echo $data['user_name']; ?></div>
            </header>
        </section>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
