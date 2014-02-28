<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Sign Up</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="/packaged/css/semantic.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="/packaged/javascript/semantic.js"></script>
  <script src="/js/signup.js"></script>

</head>
<body id="home">
  <div class="ui form segment">
      <div class="field">
        <label>Username</label>
        <div class="ui left labeled icon input">
          <input id="user" type="text" placeholder="user">
          <i class="user icon"></i>
          <div class="ui corner label">
            <i class="icon asterisk"></i>
          </div>
        </div>
      </div>
      <div class="field">
        <label>Password</label>
        <div class="ui left labeled icon input">
          <input id="password" type="password" placeholder="pass">
          <i class="lock icon"></i>
          <div class="ui corner label">
            <i class="icon asterisk"></i>
          </div>
        </div>
      </div>

      <div class="field">
        <label>Email</label>
        <div class="ui left labeled icon input">
          <input id="email" type="text" placeholder="email">
          <i class="mail icon"></i>
          <div class="ui corner label">
            <i class="icon asterisk"></i>
          </div>
        </div>
      </div>

      <div class="field">
        <label>Tel</label>
        <div class="ui left labeled icon input">
          <input id="tel" type="text" placeholder="telephone">
          <i class="telephone icon"></i>
          <div class="ui corner label">
            <i class="icon asterisk"></i>
          </div>
        </div>
      </div>

      <div class="ui error message">
        <div class="header">We noticed some issues</div>
      </div>
      <div id="login" class="ui blue submit button">Sign Up</div>
    </div>
    <div class="ui dimmer page hidden"><div class="ui basic modal transition hidden" style="margin-top: -142px;">
    <div class="header">
      Change Your Homepage
    </div>
    <div class="content">
      <div class="left">
        <i class="home icon"></i>
      </div>
      <div class="right">
        <p>Are you sure you want to change your homepage to <b>Poodle.com</b>?</p>
      </div>
    </div>
    <div class="actions">
      <div class="two fluid ui buttons">
        <div class="ui negative labeled icon button">
          <i class="remove icon"></i>
          No
        </div>
        <div class="ui positive right labeled icon button">
          Yes
          <i class="checkmark icon"></i>
        </div>
      </div>
    </div>
  </div><div class="ui small modal transition hidden" style="margin-top: -70px;">
    <i class="close icon"></i>
    <div class="header">
    </div>
    <div class="content">
      <p id="signup-modal">Invalid Username or Password</p>
    </div>
  </div></div>
</body>

</html>
