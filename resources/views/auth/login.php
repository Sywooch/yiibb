<div class="blockform">
    <h2><span>Login</span></h2>
    <div class="box">
        <form onsubmit="return process_form(this)" action="login.php?action=in" method="post" id="login">
            <div class="inform">
                <fieldset>
                    <legend>Enter your username and password below</legend>
                    <div class="infldset">
                        <input type="hidden" value="1" name="form_sent">
                        <input type="hidden" value="http://fluxbb.loc/index.php" name="redirect_url">
                        <label class="conl required"><strong>Username <span>(Required)</span></strong><br><input type="text" tabindex="1" maxlength="25" size="25" name="req_username"><br></label>
                        <label class="conl required"><strong>Password <span>(Required)</span></strong><br><input type="password" tabindex="2" size="25" name="req_password"><br></label>
                        <div class="rbox clearb">
                            <label><input type="checkbox" tabindex="3" value="1" name="save_pass">Log me in automatically each time I visit.<br></label>
                        </div>
                        <p class="clearb">If you have not registered or have forgotten your password click on the appropriate link below.</p>
                        <p class="actions"><span><a tabindex="5" href="register.php">Not registered yet?</a></span> <span><a tabindex="6" href="login.php?action=forget">Forgotten your password?</a></span></p>
                    </div>
                </fieldset>
            </div>
            <p class="buttons"><input type="submit" tabindex="4" value="Login" name="login"></p>
        </form>
    </div>
</div>