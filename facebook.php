<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
  'app_id' => '745325222475119',
  'app_secret' => 'af8730518490ab565775883be4583447',
  'default_graph_version' => 'v2.10',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email', 'user_birthday', 'user_gender', 'user_likes', 'user_location']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://blankdib.com/callback.php', $permissions);

?>

<div class="row">
  <div class="col-xl-6">
    <div class="row">

      <div class="col-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
          </div>
          <input type="text" name="email" v-model="username" class="form-control" id="email" autofocus placeholder="Email">
        </div>
      </div>
      <div class="col-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
          </div>
          <input type="password" name="password" class="form-control" v-model="password" id="password" placeholder="Password">
        </div>
      </div>

      <div class="col-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" name="fn" v-model="firstname" class="form-control" id="fn" placeholder="First name">
          <input type="text" name="ln" v-model="lastname" class="form-control" id="ln" placeholder="Last name">
        </div>
      </div>
      <div class="col-12">
        <button type="button" class=" btn btn-block btn-login " v-on:click="login">Create Your Free Account</button>
      </div>
      <div class="col-12">
        <div class="login-or">
          <hr class="hr-or">
          <span class="span-or">or</span>
        </div>
      </div>
      <div class="col-12">
        <a class="btn btn-block f-button" href="<?=$loginUrl?>">
          <i class="fab fa-facebook-f"></i> Log in with Facebook
        </a>
      </div>
      <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a>
        and <a href="#">Privacy Policy</a>.
      </p>
    </div>
  </div>
</div>