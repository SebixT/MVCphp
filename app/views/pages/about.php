<?php require APPROOT . '/views/inc/about/header.php'; ?>
<section class="title">
    <header class="wrapper">
        <h2><?php echo $data['title']; ?></h2>
        <p class="description"><?php echo $data['description']; ?></p>
    </header>
</section>
<section class="content">
    <div class="mouse-follower" id="mouse-follower">
        <div class="head"></div>
        <div class="face"></div>
        <div id="eye-wrapper1"></div>
        <div id="eye-wrapper2"></div>
        <div id="eye1"></div>
        <div id="eye2"></div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
