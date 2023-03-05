<?php
include("./includes/session.php");
include("./includes/header.php");
?>

<div class="main shadow bg-light">
    <?php
    include("./includes/sidebar.php");
    ?>

    <!-- content -->
    <div class="content">
        <?php
        include("./includes/navbar.php");
        ?>

        <div class="inner-content">
            <div class="alert alert-warning p-2">
                <p class="display-5 text-center">Module is still under development</p>
            </div>
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                
                </tbody>
            </table>
        </div>

        <?php
        include("./includes/bottom.php");
        ?>
    </div>
    <!-- content -->

    
</div>


<?php

include("./includes/footer.php");
?>