<div class="modal fade" id="modal-window-auth" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">
          <span class="fa fa-window-close fa-2x"></span>
        </button>
        <h3 class="modal-title"><b>Authentication form</b></h3>
      </div>
      <div class="modal-body">
        <div class="panel-group">
          <div class="form-log">
            <form role="form" class="center-block form">

              <div class="form-group">
                <label for="login" class="title-form-input">Login</label>
                <input type="login" class="form-control form-input" id="login-auth" placeholder="Input login">
              </div>

              <div class="form-group">
                <label for="pass" class="title-form-input">Password</label>
                <input type="password" class="form-control form-input" id="pass-auth" placeholder="Input password">
              </div>

              <div class="checkbox">
                <label class="title-form-input"><input type="checkbox" class="checkbox" id="checkbox-auth">&nbsp;&nbsp;I'm not registered</label><br><br>
                <button type="submit" class="btn btn-primary title-form-button center-block">
                  Log In
                </button> 
              </div>    
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php ?>