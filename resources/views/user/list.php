<div class="blockform">
    <h2><span>User search</span></h2>
    <div class="box">
        <form action="userlist.php" method="get" id="userlist">
            <div class="inform">
                <fieldset>
                    <legend>Find and sort users</legend>
                    <div class="infldset">
                        <label class="conl">Username<br><input type="text" maxlength="25" size="25" value="" name="username"><br></label>
                        <label class="conl">User group
                            <br><select name="show_group">
                                <option selected="selected" value="-1">All</option>
                                <option value="1">Administrators</option>
                                <option value="2">Moderators</option>
                                <option value="4">Members</option>
                            </select>
                            <br></label>
                        <label class="conl">Sort by
                            <br><select name="sort_by">
                                <option selected="selected" value="username">Username</option>
                                <option value="registered">Registered</option>
                                <option value="num_posts">Number of posts</option>
                            </select>
                            <br></label>
                        <label class="conl">Sort order
                            <br><select name="sort_dir">
                                <option selected="selected" value="ASC">Ascending</option>
                                <option value="DESC">Descending</option>
                            </select>
                            <br></label>
                        <p class="clearb">Enter a username to search for and/or a user group to filter by. The username field can be left blank. Use the wildcard character * for partial matches. Sort users by name, date registered or number of posts and in ascending/descending order.</p>
                    </div>
                </fieldset>
            </div>
            <p class="buttons"><input type="submit" accesskey="s" value="Submit" name="search"></p>
        </form>
    </div>
</div>

<div class="linkst">
    <div class="inbox">
        <p class="pagelink"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        <div class="clearer"></div>
    </div>
</div>

<div class="blocktable" id="users1">
    <h2><span>User list</span></h2>
    <div class="box">
        <div class="inbox">
            <table>
                <thead>
                <tr>
                    <th scope="col" class="tcl">Username</th>
                    <th scope="col" class="tc2">Title</th>
                    <th scope="col" class="tc3">Posts</th>
                    <th scope="col" class="tcr">Registered</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="tcl"><a href="profile.php?id=2">Sonic</a></td>
                    <td class="tc2">Administrator</td>
                    <td class="tc3">1</td>
                    <td class="tcr">2016-02-28</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="linksb">
    <div class="inbox">
        <p class="pagelink"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        <div class="clearer"></div>
    </div>
</div>