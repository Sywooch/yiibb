<div class="blockform">
    <h2><span>Request password</span></h2>
    <div class="box">
        <form onsubmit="this.request_pass.disabled=true;if(process_form(this)){return true;}else{this.request_pass.disabled=false;return false;}" action="login.php?action=forget_2" method="post" id="request_pass">
            <div class="inform">
                <fieldset>
                    <legend>Enter the email address with which you registered</legend>
                    <div class="infldset">
                        <input type="hidden" value="1" name="form_sent">
                        <label class="required"><strong>Email <span>(Required)</span></strong><br><input type="text" maxlength="80" size="50" name="req_email" id="req_email"><br></label>
                        <p>A new password together with a link to activate the new password will be sent to that address.</p>
                    </div>
                </fieldset>
            </div>
            <p class="buttons"><input type="submit" value="Submit" name="request_pass"> <a href="javascript:history.go(-1)">Go back</a></p>
        </form>
    </div>
</div>