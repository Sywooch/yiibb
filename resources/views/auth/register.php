<div class="blockform" id="regform">
    <h2><span>Register</span></h2>
    <div class="box">
        <form onsubmit="this.register.disabled=true;if(process_form(this)){return true;}else{this.register.disabled=false;return false;}" action="register.php?action=register" method="post" id="register">
            <div class="inform">
                <div class="forminfo">
                    <h3>Important information</h3>
                    <p>Registration will grant you access to a number of features and capabilities otherwise unavailable. These functions include the ability to edit and delete posts, design your own signature that accompanies your posts and much more. If you have any questions regarding this forum you should ask an administrator.</p>
                    <p>Below is a form you must fill out in order to register. Once you are registered you should visit your profile and review the different settings you can change. The fields below only make up a small part of all the settings you can alter in your profile.</p>
                </div>
                <fieldset>
                    <legend>Please enter a username between 2 and 25 characters long</legend>
                    <div class="infldset">
                        <input type="hidden" value="1" name="form_sent">
                        <label class="required"><strong>Username <span>(Required)</span></strong><br><input type="text" maxlength="25" size="25" value="" name="req_user"><br></label>
                    </div>
                </fieldset>
            </div>
            <div class="inform">
                <fieldset>
                    <legend>Please enter and confirm your chosen password</legend>
                    <div class="infldset">
                        <label class="conl required"><strong>Password <span>(Required)</span></strong><br><input type="password" size="16" value="" name="req_password1"><br></label>
                        <label class="conl required"><strong>Confirm password <span>(Required)</span></strong><br><input type="password" size="16" value="" name="req_password2"><br></label>
                        <p class="clearb">Passwords must be at least 6 characters long. Passwords are case sensitive.</p>
                    </div>
                </fieldset>
            </div>
            <div class="inform">
                <fieldset>
                    <legend>Enter a valid email address</legend>
                    <div class="infldset">
                        <label class="required"><strong>Email <span>(Required)</span></strong><br>
                            <input type="text" maxlength="80" size="50" value="" name="req_email1"><br></label>
                    </div>
                </fieldset>
            </div>
            <div class="inform">
                <fieldset>
                    <legend>Set your localisation options</legend>
                    <div class="infldset">
                        <p>For the forum to display times correctly you must select your local time zone. If Daylight Savings Time is in effect you should also check the option provided which will advance times by 1 hour.</p>
                        <label>Time zone
                            <br><select name="timezone" id="time_zone">
                                <option value="-12">(UTC-12:00) International Date Line West</option>
                                <option value="-11">(UTC-11:00) Niue, Samoa</option>
                                <option value="-10">(UTC-10:00) Hawaii-Aleutian, Cook Island</option>
                                <option value="-9.5">(UTC-09:30) Marquesas Islands</option>
                                <option value="-9">(UTC-09:00) Alaska, Gambier Island</option>
                                <option value="-8.5">(UTC-08:30) Pitcairn Islands</option>
                                <option value="-8">(UTC-08:00) Pacific</option>
                                <option value="-7">(UTC-07:00) Mountain</option>
                                <option value="-6">(UTC-06:00) Central</option>
                                <option value="-5">(UTC-05:00) Eastern</option>
                                <option value="-4">(UTC-04:00) Atlantic</option>
                                <option value="-3.5">(UTC-03:30) Newfoundland</option>
                                <option value="-3">(UTC-03:00) Amazon, Central Greenland</option>
                                <option value="-2">(UTC-02:00) Mid-Atlantic</option>
                                <option value="-1">(UTC-01:00) Azores, Cape Verde, Eastern Greenland</option>
                                <option selected="selected" value="0">(UTC) Western European, Greenwich</option>
                                <option value="1">(UTC+01:00) Central European, West African</option>
                                <option value="2">(UTC+02:00) Eastern European, Central African</option>
                                <option value="3">(UTC+03:00) Eastern African</option>
                                <option value="3.5">(UTC+03:30) Iran</option>
                                <option value="4">(UTC+04:00) Moscow, Gulf, Samara</option>
                                <option value="4.5">(UTC+04:30) Afghanistan</option>
                                <option value="5">(UTC+05:00) Pakistan</option>
                                <option value="5.5">(UTC+05:30) India, Sri Lanka</option>
                                <option value="5.75">(UTC+05:45) Nepal</option>
                                <option value="6">(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg</option>
                                <option value="6.5">(UTC+06:30) Cocos Islands, Myanmar</option>
                                <option value="7">(UTC+07:00) Indochina, Novosibirsk</option>
                                <option value="8">(UTC+08:00) Greater China, Australian Western, Krasnoyarsk</option>
                                <option value="8.75">(UTC+08:45) Southeastern Western Australia</option>
                                <option value="9">(UTC+09:00) Japan, Korea, Chita, Irkutsk</option>
                                <option value="9.5">(UTC+09:30) Australian Central</option>
                                <option value="10">(UTC+10:00) Australian Eastern</option>
                                <option value="10.5">(UTC+10:30) Lord Howe</option>
                                <option value="11">(UTC+11:00) Solomon Island, Vladivostok</option>
                                <option value="11.5">(UTC+11:30) Norfolk Island</option>
                                <option value="12">(UTC+12:00) New Zealand, Fiji, Magadan</option>
                                <option value="12.75">(UTC+12:45) Chatham Islands</option>
                                <option value="13">(UTC+13:00) Tonga, Phoenix Islands, Kamchatka</option>
                                <option value="14">(UTC+14:00) Line Islands</option>
                            </select>
                            <br></label>
                        <div class="rbox">
                            <label><input type="checkbox" value="1" name="dst">Daylight Savings Time is in effect (advance time by 1 hour).<br></label>
                        </div>
                        <label>Language							<br><select name="language">
                                <option selected="selected" value="English">English</option>
                                <option value="Russian">Russian</option>
                            </select>
                            <br></label>
                    </div>
                </fieldset>
            </div>
            <div class="inform">
                <fieldset>
                    <legend>Set your privacy options</legend>
                    <div class="infldset">
                        <p>Select whether you want your email address to be viewable to other users or not and if you want other users to be able to send you email via the forum (form email) or not.</p>
                        <div class="rbox">
                            <label><input type="radio" value="0" name="email_setting">Display your email address to other users.<br></label>
                            <label><input type="radio" checked="checked" value="1" name="email_setting">Hide your email address but allow form email.<br></label>
                            <label><input type="radio" value="2" name="email_setting">Hide your email address and disallow form email.<br></label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <p class="buttons"><input type="submit" value="Register" name="register"></p>
        </form>
    </div>
</div>