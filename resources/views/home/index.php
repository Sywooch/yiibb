<?php

\app\resources\assets\bundles\AppAsset::register($this);

/** @var \app\models\Category[] $categories */

$this->name = 'index';
?>
<div class="blocktable" id="idx1">
    <?php foreach ($categories as $category): ?>
    <h2><span><?= e($category->name) ?></span></h2>
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
                <?php foreach($category->forums as $forum): ?>
                <tr class="rowodd">
                    <td class="tcl">
                        <div class="icon"><div class="nosize">1</div></div>
                        <div class="tclcon">
                            <div>
                                <h3><a href="<?= url(['forum/view', 'id' => $forum->id]) ?>"><?= e($forum->name) ?></a></h3>
                                <?php if ($forum->description): ?>
                                <div class="forumdesc"><?= e($forum->description) ?></div>
                                <?php endif ?>
                            </div>
                        </div>
                    </td>
                    <td class="tc2"><?= e($forum->count_topics) ?></td>
                    <td class="tc3"><?= e($forum->count_posts) ?></td>
                    <td class="tcr"><a href="viewtopic.php?pid=1#p1">2016-02-28 16:42:54</a> <span class="byuser">by Sonic</span></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endforeach ?>
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