<?php

use app\models\User;

/** @var User $user */

?>
<div class="block" id="viewprofile">
    <h2><span>Profile</span></h2>
    <div class="box">
        <div class="fakeform">
            <div class="inform">
                <fieldset>
                    <legend>Personal</legend>
                    <div class="infldset">
                        <dl>
                            <dt>Username</dt>
                            <dd><?= $user->username ?></dd>
                            <dt>Title</dt>
                            <dd>Administrator</dd>
                        </dl>
                        <div class="clearer"></div>
                    </div>
                </fieldset>
            </div>
            <div class="inform">
                <fieldset>
                    <legend>User activity</legend>
                    <div class="infldset">
                        <dl>
                            <dt>Posts</dt>
                            <dd>3 - <a href="search.php?action=show_user_topics&amp;user_id=2">Show all topics</a> - <a href="search.php?action=show_user_posts&amp;user_id=2">Show all posts</a></dd>
                            <dt>Last post</dt>
                            <dd>Today 11:38:55</dd>
                            <dt>Registered</dt>
                            <dd>2016-02-28</dd>
                        </dl>
                        <div class="clearer"></div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>