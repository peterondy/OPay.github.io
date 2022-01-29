<?php include 'header.php';?>
<?php

        //get id action
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $_SESSION['id'] = $_GET['id'];
            
        }elseif(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
        }
        
    echo '<div class="float-start bg-success col-md-3 mt-2 pt-4 ml-1">
        <ul>
            <li><a href="?set=general&id=' . $id . '" class="pt-3">General Informations</a></li>
            <li><a href="?set=cards&id=' . $id . '" class="pt-3">Cadrs</a></li>
        </ul>
    </div>';

    echo '<div class="container float-end bg-success col-md-8 mt-2 pt-4 pb-4">';
        //get set action
        if(isset($_GET['set'])){
            $set = $_GET['set'];
        }else{
            $set = 'general';
        }



        echo '<h2>Welcome To ' . $set . ' Page</h2>';
        if($set == 'general'){

            //get the informations of the user table

            $stmt = $con->prepare("SELECT userName, email, password FROM pay WHERE id = ? ");
            $stmt->execute(array($id));
            $row = $stmt->fetch();
            $count = $stmt->rowCount();
       

            //get the informations of the user table in the form input

            echo '<form action="?set=update&id=' . $id . '" method="POST">
                <h4 class="pt-2 pb-2">User Name</h4>
                <input type="text" name="name" placeholder="userName" autocomplete="off" value='. $row['userName'] .'>
                <h4 class="pt-2 pb-2">Email</h4>
                <input type="text" name="email" placeholder="User Name" autocomplete="off" value='. $row['email'] .'>
                <h4 class="pt-2 pb-2">Password</h4>
                <input type="text" name="password" placeholder="Password" autocomplete="off" value="">
                <input type="submit" class="btn btn-primary btn-block float-end p-4 pt-2 pb-2" value="Save"> 
            </form>';
            
            //edit/update the informations of the user table

            /**/

            
        }elseif($set == 'update'){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // update the informations

                $stmt = $con->prepare("UPDATE pay SET userName = ?, email = ?, password = ? WHERE id=" . $id);

                $stmt->execute(array($_POST['name'], $_POST['email'], $_POST['password']));
                $row = $stmt->fetch();
                $count = $stmt->rowCount();
                echo ' <h2 class="alert alert-success">' . $count . 'Record Updated</h2>';

            }else{
                echo '<h2 class="alert alert-danger">Sorry You Cant Browse This Page Directly</h2>';
            }

        }elseif($set == 'cards'){

            $stmt = $con->prepare("SELECT creditCardNumber FROM pay WHERE id = ? ");
            $stmt->execute(array($id));
            $row = $stmt->fetch();
            $count = $stmt->rowCount();

            echo '<div class="col-md-8 col-sm-8 bg-success m-2 pt-4 pb-4"><h3>National Number</h3>
                    <span class="span-pay-style">' . $row['creditCardNumber'] .'<span>
                 </div>';
                
        }
    echo '</div>';

?>
<?php include 'footer.php';?>