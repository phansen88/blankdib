<?php
include 'dbconfig.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blankdib.com</title>
    <link rel="stylesheet" href="src/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>
<div id="app">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary" style="margin-bottom: 20px">
            <a href="../" class="navbar-brand">
                <!--<img src="" style="width:30px;margin-right:15px;display:inline-block">-->Blankdib</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dagens deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sidste chance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item active" v-if="logged_in">
                        <a class="nav-link" href="/logout.php">Log af</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <body style="padding-top:4.5rem">

        <div class="container-fluid">


            <div class="row">
                <div class="col-md-2" style="background: #f5f5f5;
    padding-top: 1rem;">
                    <ul>
                        <li>Computere og tilbehør</li>
                        <li>Elektronik og foto</li>
                        <li>Biler og MC</li>
                        <li>Tøj og mode</li>
                        <li>Ure og smykker</li>
                        <li>Til boligen</li>
                        <li>Til børn</li>
                        <li>Sport og fritid</li>
                        <li>Både</li>
                        <li>Cykler</li>
                        <li>Boliger</li>

                    </ul>
                </div>
                <div class="col-md-10" style="padding:0">

                    <div class="row-categories" style="margin-bottom:2rem">
                        <div class="row">
                            <div class="col-9">
                                <h2>Dagens deals...</h2>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                    ornare
                                    in lacus nec ultrices. <a href="javascript:void(0)">Sed vel vehicula tellus</a>.
                                    Maecenas massa lorem, rhoncus nec nulla blandit, commodo ornare sapien. Integer
                                    gravida
                                    leo ut tellus auctor, a porta quam varius. <a href="javascript:void(0)">Curabitur
                                        eget
                                        convallis ligula. Nulla facilisis ut velit vel egestas.</a> Maecenas posuere
                                    pellentesque mauris, at condimentum enim ultricies id</p>
                            </div>
                            <div class="col-3">
                                <div class="row" v-if="!logged_in">

                                    <? require_once 'facebook.php'; ?>


                                </div>
                            </div>
                        </div>

                        <div class="row-categories" v-for="(row, category) in records">
                            <h4>{{category}}</h4>
                            <div class="row flex-xl-nowrap">

                                <div class="col-md-20" v-for="col in row">
                                    <div class="card">
                                        <img class="card-img-top" src="https://via.placeholder.com/318x180" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                {{col.name}} {{col.test}}
                                            </h4>
                                            <p class="card-text">
                                                {{col.price}}
                                            </p>
                                            <a :href="col.url" class="btn btn-login">Meld dit dibs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


    </body>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js" integrity="sha256-FtWfRI+thWlNz2sB3SJbwKx5PgMyKIVgwHCTwa3biXc=" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.1/vue-router.min.js" integrity="sha256-yEB9jUlD51i5kxJZlzgzfR6XmVKI76Nl1WRA1aqIilU=" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" integrity="sha256-mpnrJ5DpEZZkwkE1ZgkEQQJW/46CSEh/STrZKOB/qoM="
    crossorigin="anonymous"></script>

<script src="js/index.js"></script>
<style>
    .row-categories {
        margin-bottom: 1rem;
        -webkit-box-shadow: 0px 1px 15px 1px rgba(81, 77, 92, 0.08);
        box-shadow: 0px 1px 15px 1px rgba(81, 77, 92, 0.08);
        padding: 1rem;
    }

    .f-button {
        color: #fff !important;
        border: 1px solid #161718;
        background: #365195 !important;
        width: 100%;
        font-weight: 600;
        color: #fff;
        padding: 8px 25px;
    }

    .login-or {
        position: relative;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }

    .hr-or {
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    @media (min-width: 768px) {

        .col-md-20 {
            flex: 0 0 20%;
            max-width: 20%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
    }
</style>

</html>