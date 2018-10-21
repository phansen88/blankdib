<?
include('dbconfig.php');
session_start();



                $id = $_GET['id'];




                //$sth = $conn->prepare("SELECT sys_bid.quantity, sys_user.username FROM sys_bid, sys_user WHERE sys_bid.pid = :id AND sys_bid.uid = sys_user.id");
                $sth = $conn->prepare("SELECT SUM(sys_bid.quantity) AS quantity, sys_user.username FROM sys_bid, sys_user WHERE sys_bid.pid = :id AND sys_bid.uid = sys_user.id GROUP BY sys_bid.uid");
                $sth->bindParam(':id', $id);
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                $length = count($result);
                $result=json_encode($result,JSON_PRETTY_PRINT);



                  $sth1 = $conn->prepare("SELECT COALESCE(SUM(quantity),0) as myQuantity FROM sys_bid WHERE pid = :id");
                  $sth1->bindParam(':id', $id);
                  $sth1->execute();
                  $result1 = $sth1->fetch(PDO::FETCH_OBJ);

                  $ticketsleft = ($result->price /  10) - $result1->myQuantity;
             

              ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blankdib.com</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
    crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand" href="/">Blankdib.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
      </form <? } else {?>
      Du er logget ind som
      <?= $_SESSION['user_name']?> og id er
      <?= $_SESSION['user_id']?>
      <? }?>
    </div>
  </nav>
</header>

<body>
  <div class="container">
    <div class="row flex-xl-nowrap">

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5>Grupperet data fra db</h5>
            <? print("<pre>".print_r($result,true)."</pre>"); ?>
            <h5>Her findes vinderen</h5>
            <?



                    $totalqty = 0;
                    $json_output = json_decode($result, true);       

                    echo $json_output[0]->quantity; 
  foreach ($json_output as $trend){

    if($trend['username'] == 'brugernavn1')
      $varbruger1 = $trend['quantity'];

$totalqty += $trend['quantity'];

   
  } 
  $gen = rand(0, $totalqty);
echo 'talet som vinder:';
echo $gen;


if($gen > $varbruger1)
echo '<div>Brugernavn2 vandt</div>';
else
echo '<div>Brugernavn1 vandt</div>';

                    ?>
          </div>
        </div>
      </div>



    </div>
  </div>
</body>

</html>