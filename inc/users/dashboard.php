<?php include 'header.php';?>
  <?php 
  //if the id is from to user ==> enter to dashboard || if id is from to admin enter to admin
  if(isset($_GET['id'])):
    $id = $_GET['id'];

        //echo $id;
                
      ?>
          <?php $stmt = $con->prepare("SELECT credit,id FROM pay WHERE id = ?");
                      $stmt->execute(array($id));
                      $rowsend = $stmt->fetch();
                      $count = $stmt->rowCount();
              if($count == 1):
          ?>
        
                  <div class="container">

                    <section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">
                      <div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Earings</h3>
                        <span class="span-pay-style"><?php echo $rowsend['credit']; ?>$<span>
                      </div>

                      <div class="col-md-3 col-sm-3 bg-light m-2 pt-4 pb-4"><h3>Last Pay</h3>
                        <span class="span-pay-style">50$<span>
                      </div>

                      <div class="col-md-3 col-sm-3 bg-danger m-2 pt-4 pb-4"><h3>Tax</h3>
                        <span class="span-pay-style">50$<span>
                      </div>
                    </section>

                  <?php 
                      $stmt1 = $con->prepare("SELECT * FROM paylisttable");
                      $stmt1->execute();
                      $rowsend1 = $stmt1->fetch();
                      $count1 = $stmt1->rowCount();

                      if($count == 1):
                  ?>

                          <section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">
                            <h2>Last Pays</h2>
                            <table class="table" style="font-size: 1.25rem">
                              <tr class="bg-dark" style="color: #fff">
                                  <td>ID</td>
                                  <td>Date</td>
                                  <td>Adress To Send</td>
                                  <td>Value Of Transaction</td>
                              </tr>
                              <tr>
                                  <td>#<?php echo $rowsend1['id']; ?></td>
                                  <td><?php echo $rowsend1['date']; ?></td>
                                  <td><?php echo $rowsend1['adressEmail']; ?></td>
                                  <td><?php echo $rowsend1['value']; ?>$</td>
                              </tr>
              
                            </table>
                        </section>
                      <?php else :?>

                          <h4 class="errorMessage alert alert-danger" role="alert">Nothing Pay Found</h4>
                        
                        <?php endif;?>


              <?php else :?>

                  <h4 class="errorMessage alert alert-danger" role="alert">ID not found</h4>
                
                <?php endif;?>
  


  

  <?php else:

    echo '<h4 class="errorMessage alert alert-danger" role="alert">ID not found</h4>';
  
  endif;?>
    <?php include 'footer.php';?>
