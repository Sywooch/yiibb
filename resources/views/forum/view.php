<?php

/** @var \app\models\Forum $forum */

$this->title = $forum->name;
$this->params['page'] = 'viewforum';
$this->params['breadcrumbs'] = [$this->title];

?>
<div class="linksb">
    <div class="inbox crumbsplus">
        <?= \app\widgets\Breadcrumbs::widget() ?>
        <div class="pagepost">
            <p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        </div>
        <div class="clearer"></div>
    </div>
</div>

<div class="blocktable" id="vf">
    <div class="box">
        <div class="inbox">
            <table>
                <thead>
                <tr>
                    <th scope="col" class="tcl">Topic</th>
                    <th scope="col" class="tc2">Replies</th>
                    <th scope="col" class="tc3">Views</th>
                    <th scope="col" class="tcr">Last post</th>
                </tr>
                </thead>
                <tbody>
                <tr class="rowodd">
                    <td class="tcl">
                        <div class="icon"><div class="nosize">1</div></div>
                        <div class="tclcon">
                            <div>
                                <a href="viewtopic.php?id=1">Test topic</a> <span class="byuser">by Sonic</span>
                            </div>
                        </div>
                    </td>
                    <td class="tc2">0</td>
                    <td class="tc3">4</td>
                    <td class="tcr"><a href="viewtopic.php?pid=1#p1">2016-02-28 16:42:54</a> <span class="byuser">by Sonic</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="linksb">
    <div class="inbox crumbsplus">
        <div class="pagepost">
            <p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        </div>
        <?= \app\widgets\Breadcrumbs::widget() ?>
        <div class="clearer"></div>
    </div>
</div>