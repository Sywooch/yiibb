<?php

use app\widgets\Breadcrumbs;
use app\widgets\LinkPager;

/* @var \app\models\Topic $topic */

$this->title = 3;
$this->params['page'] = 'viewtopic';
$this->params['breadcrumbs'] = [
    ['label' => $topic->forum->name, 'url' => ['forum/view', 'id' => $topic->forum->id]],
    ['label' => $topic->subject]
];

?>
<div class="linkst">
    <div class="inbox crumbsplus">
        <?= Breadcrumbs::widget() ?>
        <div class="pagepost">
            <p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        </div>
        <div class="clearer"></div>
    </div>
</div>

<div class="blockpost rowodd firstpost blockpost1" id="p61624">
    <h2><span><span class="conr">#1</span> <a href="viewtopic.php?pid=61624#p61624">2016-01-02 05:02:22</a></span></h2>
    <div class="box">
        <div class="inbox">
            <div class="postbody">
                <div class="postleft">
                    <dl>
                        <dt><strong>soahs</strong></dt>
                        <dd class="usertitle"><strong>New member</strong></dd>
                        <dd><span>Registered: 2016-01-02</span></dd>
                        <dd><span>Posts: 1</span></dd>
                    </dl>
                </div>
                <div class="postright">
                    <h3>Monitor won't dim even though Flux says it is</h3>
                    <div class="postmsg">
                        <p>I am not sure if this is a bug or just a consequence of not being online.&nbsp; I have always installed Flux while online.&nbsp; This time I got another computer going and didn't want to go online before installing my antivirus.&nbsp; I had a previous download of flux and installed that.&nbsp; Flux said it was dimming the monitor, but the brightness was unchanged.&nbsp; I tried the Alt/page down key to dim the brightness and it did not change.&nbsp; Then I went online and everything worked.&nbsp; Is it supposed to work like this?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inbox">
            <div class="postfoot clearb">
                <div class="postfootleft"><p><span>Offline</span></p></div>
            </div>
        </div>
    </div>
</div>

<div class="blockpost roweven" id="p61627">
    <h2><span><span class="conr">#2</span> <a href="viewtopic.php?pid=61627#p61627">2016-01-02 09:44:55</a></span></h2>
    <div class="box">
        <div class="inbox">
            <div class="postbody">
                <div class="postleft">
                    <dl>
                        <dt><strong>Gary</strong></dt>
                        <dd class="usertitle"><strong>Moderator</strong></dd>
                        <dd class="postavatar"><img width="128" height="128" alt="" src="http://fluxbb.org/forums/img/avatars/3216.png?m=1450004649"></dd>
                        <dd><span>From: Sydney, Australia</span></dd>
                        <dd><span>Registered: 2009-09-07</span></dd>
                        <dd><span>Posts: 174</span></dd>
                    </dl>
                </div>
                <div class="postright">
                    <h3>Re: Monitor won't dim even though Flux says it is</h3>
                    <div class="postmsg">
                        <p>I do apologise in advance soahs, but I'm afraid this is not the f.lux forum you are after. FluxBB is forum software, not the software that makes the colour of your computer's screen/display adapt to the time of day (I have used it before though).</p><p>I believe the site you are after is located at <a rel="nofollow" href="https://justgetflux.com/">https://justgetflux.com/</a>.</p><p>Thanks for stopping by though! I do hope you get your issue resolved.</p>
                    </div>
                    <div class="postsignature postmsg"><hr><p><em>Free FluxBB hosting service coming soon.</em></p></div>
                </div>
            </div>
        </div>
        <div class="inbox">
            <div class="postfoot clearb">
                <div class="postfootleft"><p><span>Offline</span></p></div>
            </div>
        </div>
    </div>
</div>

<div class="blockpost rowodd" id="p61629">
    <h2><span><span class="conr">#3</span> <a href="viewtopic.php?pid=61629#p61629">2016-01-04 10:00:35</a></span></h2>
    <div class="box">
        <div class="inbox">
            <div class="postbody">
                <div class="postleft">
                    <dl>
                        <dt><strong>Franz</strong></dt>
                        <dd class="usertitle"><strong>Lead developer</strong></dd>
                        <dd class="postavatar"><img width="70" height="80" alt="" src="http://fluxbb.org/forums/img/avatars/157.jpg?m=1361636977"></dd>
                        <dd><span>From: Germany</span></dd>
                        <dd><span>Registered: 2008-05-13</span></dd>
                        <dd><span>Posts: 6,267</span></dd>
                        <dd class="usercontacts"><span class="website"><a rel="nofollow" href="http://www.develophp.org">Website</a></span></dd>
                    </dl>
                </div>
                <div class="postright">
                    <h3>Re: Monitor won't dim even though Flux says it is</h3>
                    <div class="postmsg">
                        <p>Yep, f.lux is cool software! But they have [their own forum](<a rel="nofollow" href="https://justgetflux.com/forum/">https://justgetflux.com/forum/</a>).</p>
                    </div>
                    <div class="postsignature postmsg"><hr><p><a rel="nofollow" href="http://www.fluxbb.de">fluxbb.de</a> | <a rel="nofollow" href="http://www.develophp.org">develoPHP</a></p><p><em>"As code is more often read than written it's really important to write clean code."</em></p></div>
                </div>
            </div>
        </div>
        <div class="inbox">
            <div class="postfoot clearb">
                <div class="postfootleft"><p><span>Offline</span></p></div>
            </div>
        </div>
    </div>
</div>

<div class="postlinksb">
    <div class="inbox crumbsplus">
        <div class="pagepost">
            <p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        </div>
        <?= Breadcrumbs::widget() ?>
        <div class="clearer"></div>
    </div>
</div>