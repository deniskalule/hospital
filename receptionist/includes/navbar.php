<nav class="navbar">
    <div class="button" id="bars">
        <i class="fas fa-bars    "></i>
    </div>
    <div class="profile">
        <div class="username mr-5">
            <i class="fas fa-user-circle    "></i>
            <?php
            $select = "select * from staff where staffID = '".$_SESSION['user']."'";
            $query = $conn->query($select);

            $row = $query->fetch_assoc();

            ?>
            <span><?= $row['FullNames'] ?></span>
        </div>
        <a href="logout.php" class="logout text-danger mr-5" style="cursor: pointer; text-decoration:none;">
            <i class="fas fa-power-off   "></i>
            <span>Logout</span>
        </a>
    </div>
    
</nav>