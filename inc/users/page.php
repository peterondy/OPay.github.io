<?php include 'header.php';?>

<?php

        $do = '';
        if(isset($_GET['do'])){
            $do = $_GET['do'];
        }else{
            header('Location: ' . $errors . '404.php');
        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $error = "<h4 class='errorMessage alert alert-danger mt-5' role='alert'>ID not found</h4>";
        }

    if ($do == 'transaction'):         //show page  ?>       
        
            <div class="container">

            <?php if(isset($id)):?>

                <form class="login" action="?do=success&id=<?php echo $id; ?>" method="POST">
                    <h4 class="text-center pt-2">Transaction page</h4>
                    <!--<span><i class="fas fa-sign-in-alt" style="font-size: 4rem;"></i></span>-->
                    
                    <?php $stmt = $con->prepare("SELECT credit FROM pay WHERE id = ?");
                          $stmt->execute(array($id));
                          $rowsend = $stmt->fetch();?>
                    
                    <h4 class='errorMessage alert alert-primary mt-5 text-center' role='alert'>Credit = <?php echo $rowsend['credit']; ?></h4>
                    <input class="mt-2 mb-2 w-100 p-2" type="email" name="email" placeholder="email To Transaction" autocomplete="off">
                    <input class="mt-2 mb-2 w-100 p-2" type="number" name="number" placeholder="Value Of Transaction" autocomplete="new-password">
                    <input class="mt-2 mb-2 w-100 p-2" type="password" name="pass" placeholder="Password Of Your Account" autocomplete="new-password">
                    <input type="submit" class="btn btn-primary mt-2 mb-2 float-end p-2" 
                        style="padding-left: 3rem !important;padding-right: 3rem !important;" value="Go"> 
                </form>

            <?php else : echo $error; endif;?>

            </div>

    <?php elseif ($do == 'success'):          //pay page    ?>
    
        <?php 
            $user = $_POST['email'];
            $number = $_POST['number'];
            $pass = $_POST['pass'];

            //select the sender user informations
            $stmt = $con->prepare("SELECT password,credit FROM pay WHERE id = ?");
            $stmt->execute(array($id));
            $rowsend = $stmt->fetch();

            if($rowsend['password'] == $pass):
                if($rowsend['credit'] > $number || $rowsend['credit'] == $number ):
                    //select the recent user informations
                    $stmt = $con->prepare("SELECT email,credit FROM pay WHERE email = ?");
                    $stmt->execute(array($user));
                    $recentrow = $stmt->fetch();
                    $recentcredit = $recentrow['credit'] + $number;
                    $sendcredit = $rowsend['credit'] - $number;

                    //update the recent user informations
                    $stmt = $con->prepare("UPDATE pay SET credit = ? WHERE email = ?");
                    $stmt->execute(array($recentcredit,$user));
                    $recentrow = $stmt->fetch();

                    //update the sender user informations
                    $stmt = $con->prepare("UPDATE pay SET credit = ? WHERE id = ?");
                    $stmt->execute(array($sendcredit,$id));
                    $recentrow = $stmt->fetch();

                    //select the sender informations
                    $stmt = $con->prepare("SELECT credit FROM pay WHERE id = ?");
                    $stmt->execute(array($id));
                    $rowsend = $stmt->fetch();
                    
                    echo "<h4 class='errorMessage alert alert-success mt-5' role='alert'>You Are Send " . $number . " $ To This Adress " .
                            $user . " And Your Credit In Your Account Is " . $sendcredit . "$ </h4>";

                else:
                    echo "<h4 class='errorMessage alert alert-danger mt-5' role='alert'>Cant send credit because it is Lower</h4>";
                endif;
            else:
                echo "<h4 class='errorMessage alert alert-danger mt-5' role='alert'>Error Password</h4>";
            endif;
              


        ?>

    <?php elseif ($do == 'reserve'):            //reserve page
    
        echo '<div class="container">';


        echo '<section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">';
        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Hotel</h3>';
        echo '<span class="span-pay-style">hotal icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve House</h3>';
        echo '<span class="span-pay-style">house icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Tramwai</h3>';
        echo '<span class="span-pay-style">Tramwai icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bus</h3>';
        echo '<span class="span-pay-style">Bus icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Train</h3>';
        echo '<span class="span-pay-style">Train icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Plane</h3>';
        echo '<span class="span-pay-style">Plane icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Taxi</h3>';
        echo '<span class="span-pay-style">Taxi icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bycicle</h3>';
        echo '<span class="span-pay-style">Bycicle icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Cars</h3>';
        echo '<span class="span-pay-style">Cars icon<span>';        
        echo '</div>';


        echo '</section>';

        

        echo '</div>';


    elseif ($do == 'education'):            //reserve page
    
        echo '<div class="container">';


        echo '<section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">';
        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Hotel</h3>';
        echo '<span class="span-pay-style">hotal icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve House</h3>';
        echo '<span class="span-pay-style">house icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Tramwai</h3>';
        echo '<span class="span-pay-style">Tramwai icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bus</h3>';
        echo '<span class="span-pay-style">Bus icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Train</h3>';
        echo '<span class="span-pay-style">Train icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Plane</h3>';
        echo '<span class="span-pay-style">Plane icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Taxi</h3>';
        echo '<span class="span-pay-style">Taxi icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bycicle</h3>';
        echo '<span class="span-pay-style">Bycicle icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Cars</h3>';
        echo '<span class="span-pay-style">Cars icon<span>';        
        echo '</div>';


        echo '</section>';

        

        echo '</div>';


    endif;





?>
<?php include 'footer.php';?>