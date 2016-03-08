<?php

\app\resources\assets\bundles\AppAsset::register($this);

$this->name = 'index';

?>
<div class="blocktable" id="idx1">
    <h2><span>Test category</span></h2>
    <div class="box">
        <div class="inbox">
            <table>
                <thead>
                <tr>
                    <th scope="col" class="tcl">Forum</th>
                    <th scope="col" class="tc2">Topics</th>
                    <th scope="col" class="tc3">Posts</th>
                    <th scope="col" class="tcr">Last post</th>
                </tr>
                </thead>
                <tbody>
                <tr class="rowodd">
                    <td class="tcl">
                        <div class="icon"><div class="nosize">1</div></div>
                        <div class="tclcon">
                            <div>
                                <h3><a href="viewforum.php?id=1">Test forum</a></h3>
                                <div class="forumdesc">This is just a test forum</div>
                            </div>
                        </div>
                    </td>
                    <td class="tc2">1</td>
                    <td class="tc3">1</td>
                    <td class="tcr"><a href="viewtopic.php?pid=1#p1">2016-02-28 16:42:54</a> <span class="byuser">by Sonic</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="block" id="brdstats">
    <h2><span>Board information</span></h2>
    <div class="box">
        <div class="inbox">
            <dl class="conr">
                <dt><strong>Board statistics</strong></dt>
                <dd><span>Total number of registered users: <strong>1</strong></span></dd>
                <dd><span>Total number of topics: <strong>1</strong></span></dd>
                <dd><span>Total number of posts: <strong>1</strong></span></dd>
            </dl>
            <dl class="conl">
                <dt><strong>User information</strong></dt>
                <dd><span>Newest registered user: <a href="profile.php?id=2">Sonic</a></span></dd>
                <dd><span>Registered users online: <strong>0</strong></span></dd>
                <dd><span>Guests online: <strong>1</strong></span></dd>
            </dl>
            <div class="clearer"></div>
        </div>
    </div>
</div>