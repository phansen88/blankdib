<?
include('dbconfig.php');
session_start();
?>
<?



                $id = $_GET['id'];




                $sth = $conn->prepare("SELECT * FROM sys_products WHERE id = :id");
                $sth->bindParam(':id', $id);
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetch(PDO::FETCH_OBJ);


                  $sth1 = $conn->prepare("SELECT COALESCE(SUM(quantity),0) as myQuantity FROM sys_bid WHERE pid = :id");
                  $sth1->bindParam(':id', $id);
                  $sth1->execute();
                  $result1 = $sth1->fetch(PDO::FETCH_OBJ);

                  $ticketsleft = ($result->price /  10) - $result1->myQuantity;
             


                

                if(isset($_POST['buyout'])) {

                  $user_id = $_SESSION['user_id'];

                  $statement = $conn->prepare("INSERT INTO sys_bid(pid, uid, quantity) VALUES(:pid, :uid, :quantity)");
                  $statement->execute(array(
                      "pid" => $id,
                      "uid" => $user_id,
                      "quantity" => $ticketsleft
                  ));
$sth1 = $conn->prepare("SELECT COALESCE(SUM(quantity),0) as myQuantity FROM sys_bid WHERE pid = :id");
                  $sth1->bindParam(':id', $id);
                  $sth1->execute();
                  $result1 = $sth1->fetch(PDO::FETCH_OBJ);

                  $ticketsleft = ($result->price /  10) - $result1->myQuantity;
                  
                }

                if(isset($_POST['buyqty']) && isset($_POST['quantity'])) {

                  $user_id = $_SESSION['user_id'];

                  $quantity = $_POST['quantity'];

                  $statement = $conn->prepare("INSERT INTO sys_bid(pid, uid, quantity) VALUES(:pid, :uid, :quantity)");
                  $statement->execute(array(
                      "pid" => $id,
                      "uid" => $user_id,
                      "quantity" => $quantity
                  ));
$sth1 = $conn->prepare("SELECT COALESCE(SUM(quantity),0) as myQuantity FROM sys_bid WHERE pid = :id");
                  $sth1->bindParam(':id', $id);
                  $sth1->execute();
                  $result1 = $sth1->fetch(PDO::FETCH_OBJ);

                  $ticketsleft = ($result->price /  10) - $result1->myQuantity;
                  
                }

              ?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Blankdib.com</title>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   </head>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px">
         <a class="navbar-brand" href="/">Blankdib.com</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
               </li>
               <? if($_SESSION['user_session']){ ?>
               <li class="nav-item active">
                  <a class="nav-link" href="/logout.php">Log af</a>
               </li>
               <? } ?>
            </ul>
            <? if(!$_SESSION['user_session']){ ?>
            <form class="form-inline my-2 my-lg-0" action="/" method="post">
               <input class="form-control mr-sm-2" type="text" placeholder="Username" name="username" aria-label="username">
               <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password" aria-label="password">
               <button class="btn btn-outline-success my-2 my-sm-0" name="login" type="submit">Login</button>
            </form
            <? } else  {?>
            Du er logget ind som <?= $_SESSION['user_name']?> og id er <?= $_SESSION['user_id']?>
            <? }?>
         </div>
      </nav>
   </header>
   <body>
      <div class="container">
         <div class="row flex-xl-nowrap">

              <div class="col-4">
               <div class="card">
                  <img class="card-img-top" src="http://via.placeholder.com/318x180" alt="Card image cap">
                  <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?id=<?=$id?>">
                     <h4 class="card-title"><?= $result->name ?></h4>
                     <p class="card-text"><?= $result->price ?></p>
                     <? if($ticketsleft > 0) { ?>
                     <div class="form-inline">
                     <div class="form-group mx-sm-3">
                        <input type="text" name="quantity" class="form-control" />
                      </div>
                      <input type="submit" name="buyqty" class="btn btn-default" value="Køb" />
                     </div>
                     <div class="form-group mx-sm-3" style="margin-top: 1rem">
                     <input type="submit" name="buyout" class="btn btn-warning btn-block" value="Køb resterende dibs" />
                     </div>
                     <? } ?>
                     </form>
                  </div>
               </div>
               </div>
               <div class="col-8">
                Der er <?= $ticketsleft; ?> dibs tilbage
               </div>
      
            
         </div>
      </div>
   </body>
</html>