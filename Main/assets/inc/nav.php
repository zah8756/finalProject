<div id="nav">
    <ul>
        <li><a href="index.php" <?php if($_GET['currentPage'] == 'home') echo 'class="active"'; ?>>Home</a></li>
        <li><a href="map.php" <?php if($_GET['currentPage'] == 'map') echo 'class="active"'; ?>>Maps</a></li>
        <li><a href="image_gallery.php" <?php if($_GET['currentPage'] == 'image') echo 'class="active"'; ?>>Image Gallery</a></li>
        <li><a href="data.php" <?php if($_GET['currentPage'] == 'data') echo 'class="active"'; ?>>Learn about</a></li>
        <li><a href="comments.php" <?php if($_GET['currentPage'] == 'comments') echo 'class="active"'; ?>>Comments</a></li>
        <li><a href="booking.php" <?php if($_GET['currentPage'] == 'booking') echo 'class="active"'; ?>>Signup</a></li>
    </ul>
</div>
