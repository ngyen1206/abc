<form action="bai2.php" method="get">
    <input type="text" placeholder="Tu khoa..." id="search" name="search">
    <button type="submit">Tim</button>
</form>
<?php if (isset($_GET['search'])) { ?>

    <p>Kết quả tìm kiếm với từ khóa <b class="key">
            <?php echo $_GET["search"]; ?>
        </b></p>
    <p>với từ khóa <b class="key">
            <?php echo $_GET["search"]; ?>
        </b> được nhập từ form.</p>
    <?php
}
?>