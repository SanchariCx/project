
<div class="container login">
   <div class="row">
      <div class="col-md-4 col-md-offset-4">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
              

               
               
               <form accept-charset="UTF-8" role="form" action="<?=$_SERVER['PHP_SELF']?>" method="post">
               <?php
                     if(isset($error))
                     {
                        if(!empty($error))
                        {?>
                           <div class="error">
                           <div class="alert alert-danger">
                              <strong>Error</strong><?=$error?>
                           </div>
                           </div>
                        <?php
                        }

                     }
               ?>
                  <fieldset>
                     <div class="form-group">
                        
                           <input class="form-control" placeholder="E-mail" name="email" type="text">
                        </div>
                        <div class="form-group">
                           <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                     </div>
                     <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login-submit"><br>
                  </fieldset>
                  <a href="forgotpass.php">Forgot pasword</a>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>