<!DOCTYPE html> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link rel="stylesheet" href="css/login.css"/> 
    <title><?=$title ?? "Admin - Login"?></title>

    <!-- JS Cookie -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js" integrity="sha256-0H3Nuz3aug3afVbUlsu12Puxva3CP4EhJtPExqs54Vg=" crossorigin="anonymous"></script>

    <!-- Jquery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Axios Library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head> 
<body> 
<main>
      <div class="container">
      <div class="login-form">
          <form id="login-admin-form" method="post">
            <div style="margin-bottom: 30px">
                <h1 style="text-align:center; margin-bottom: 0px">ADMIN LOGIN</h1>
                <span id="login-admin-title-message" style="text-align:center;"></span>
            </div>

              <div class="input-box">
                  <i ></i>
                  <input type="text" name="username" placeholder="Please enter username..."><br>
                  <span id="login-admin-error-username" class="login-admin-error"></span>
              </div>
              <div class="input-box">
                  <i ></i>
                  <input type="password" name="password" placeholder="Please enter password"><br>
                  <span id="login-admin-error-password" class="login-admin-error"></span>
              </div>
              <div class="btn-box">
                  <button type="submit">Login</button>
              </div>
          </form>
      </div>
      </div>
      <input type="hidden" id="api-url" value="<?=API_URL?>">
      <input type="hidden" id="app-url" value="<?=APP_URL?>">
  </main>
  <script src="js/login.js"></script>
</body> 
</html> 