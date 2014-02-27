<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Admin Login</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="/packaged/css/semantic.css">

  <script src="http://semantic-ui.com/javascript/library/jquery.min.js"></script>
  <script src="/packaged/javascript/semantic.js"></script>
  <script src="homepage.js"></script>
  <script src="js/login.js"></script>

</head>
<body id="home">

<?
session_start();
if($_SESSION['logged'] == 1){
?>

<div class="ui tiered menu">
  <div class="menu">
    <a class="active item">
      <i class="users icon"></i>
      Friends
    </a>
    <a class="item">
      <i class="grid layout icon"></i> Browse
    </a>
    <a id="notes" class="item">
      <i class="mail icon"></i> Notes
    </a>

    <div class="right menu">
      <div class="item">
        <div id="add-notes" class="ui button down">Add Notes</div>
      </div>
      <div class="item">
        <div class="ui icon input">
          <input type="text" placeholder="Search...">
          <i class="search icon"></i>
        </div>
      </div>
      <div class="ui dropdown item">
        Account <i class="icon dropdown"></i>
        <div class="menu">
          <a class="item"><i class="edit icon"></i> Edit Profile</a>
          <a class="item"><i class="globe icon"></i> Choose Language</a>
          <a class="item"><i class="settings icon"></i> Account Settings</a>
          <a href="logout.php" class="item"><i class="off icon"></i>Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="admin-content" class="ui grid">

<div id="notes-content" class="five column doubling ui grid">
</div>

      
</div>
<div class="ui pagination menu">
  <a class="icon item">
    <i class="left arrow icon"></i>
  </a>
  <a class="active item">
    1
  </a>
  <div class="disabled item">
    ...
  </div>

  <a class="item">
    12
  </a>
  <a class="icon item">
    <i class="right arrow icon"></i>
  </a>
</div>
</div>
</div>






<?
}
else{
  ?>

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
      <div class="ui error message">
        <div class="header">We noticed some issues</div>
      </div>
      <div id="login" class="ui blue submit button">Login</div>
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
      <p>Invalid Username or Password</p>
    </div>
  </div></div>


  <?
}

?>
</body>

</html>