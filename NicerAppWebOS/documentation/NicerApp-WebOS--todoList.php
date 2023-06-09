<?php
    global $naWebOS;
    require_once ($naWebOS->basePath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/pageHeader.php');
?>

<h1 class="contentSectionTitle2"><span class="contentSectionTitle2_span">NicerApp WebOS Development Direction</span></h1><br/><br/>
<ol class="todoList">

<li class="todoList"><div>
<ul class="todoList_l1">
    <li class="todoList_l1"><div>Versions 3.y.z and lower : Increasingly stylish, and compatible with older browsers, but in terms of core code quite bulky and slow.</li>
    <li class="todoList_l1"><div>4.0.0 : complete rewrite of the version 3.Y.Z, much faster startup times.</li>
    <li class="todoList_l1"><div>4.1.0 : added many of the apps of the v3.Y.Z back in (tarot, music player, news, etc).</li>
    <li class="todoList_l1"><div>4.1.1 : vertical roots for vividMenu added.</li>
    <li class="todoList_l1"><div>4.2.0 : webmail functionality finished but not including an editor for the config settings yet (as these have to be stored encrypted, and i have no way of doing that yet).</li>
    <li class="todoList_l1"><div>4.2.1 : many small improvements and additions to apps/nicer.app</li>
    <li class="todoList_l1"><div>4.3.0 : crypto per page / app / whatever now possible, oAuth support put on todo list, creditCard & ING.NL iDeal payment support put on todo list, made vividButton's (text version) height fit to the text placed in the vividButton, made the top menu bar *completely* resolution independent.</li>
    <li class="todoList_l1"><div>5.0.0 : bugfixes and efficiency improvements in the core code
        <ul class="todoList_l2">
        <li class="todoList_l2"><div>Lots of changes and standarization of the entire code convention or naming structure for variables, Server-side PHP class names, Browser-side Javascript root level objects, and all the other "root-level" "variable names" used in NicerApp WebOS</li>
        <li class="todoList_l2"><div>MySQL and PostgreSQL added to the list of supported database architectures (via .../NicerAppWebOS/3rd-party/adodb5), currently only couchdb is supported.<br/>
        Why? because upon installation of a new version of the operating system (around every 2 years), all of the OS component maintainers are likely taking a holiday of some sorts.<br/></li>
        </ul>
    </li>
</ul>

    <li class="todoList"><div>(DONE) (2021-2022) Create a Theme Editor.</div></li>

    <li class="todoList"><div>(DONE) (2022) Automatic site background rotations via #btnOptions dialog's first 'setting'.</div></li>

    <li class="todoList"><div>(DONE) (2022) Better error display features (list full error details in seperate dialog on the site itself).</div></li>

    <li class="todoList"><div>(DONE) (2022-Sept) Allow Guest users to use the Theme Editor (by storing theme settings per IP address + User-Agent in the database's existing theme_settings table).</div></li>

    <li class="todoList"><div>(DONE) (2022-Sept) Restore the old links, like the 3D WebGL (component) demos.</div></li>

    <li class="todoList"><div>(DONE) (2022-Sept) Improve the database access diversity.</div></li>

    <li class="todoList releaseDate"><div>(DONE) (2022 Nov 7th) : the emerging of <a href="https://said.by" class="nomod noPushState noVividText contentSectionTitle2_a" target="saidDotBy" style="margin:0 !important;"><span class="contentSectionTitle2_span">https://said.by</span></a> as an online blogging platform for end-users</a>.</li>

    <li class="todoList releaseDate"><div>(DONE) (2023 Mar 31st) Release <a href="https://github.com/NicerEnterprises/NicerApp-WebOS" class="nomod noPushState noVividText contentSectionTitle2_a" target="ghNA"><span class="contentSectionTitle2_span">version 5.2.5</span></a> : Fixes for the remaining blogging feature bugs, smartphone bugs, the page switching bugs and many other bugs. Improved user-interface as well.
    </div></li>


    <li class="todoList"><div>(2023-2024) The rest of the items below here will be created in a seperate copy of the code, as version 5.y.z, that will run on my localhost server, shielded from the public internet, before getting copied into the live servers at https://nicer.app and https://said.by.
        <ol class="todoList_l1">
            <li class="todoList_l1"><div>(DONE) (2023 Apr) Rewrite the page loading.
            </div></li>

            <li class="todoList_l1"><div>(STALLED UNTIL COMPLETION OF <a href="https://github.com/apache/couchdb/pull/4139" class="nomod noPushState contentSectionTitle2_a" target="_new"><span class="contentSectionTitle2_span">THIS</span></a>) (2023) Establish a proper permissions system and add users and groups editing capabilities to <a href="/cms" class="nomod noPushState contentSectionTitle3_a" target="_new"><span class="contentSectionTitle3_span">/cms</span></a>.<br/>
            The last thing you wanna do in software development is replicate other people's work that you can work with (or soon can).</div></li>

            <li class="todoList_l1"><div>(STALLED) (2023) Upgrade the theme editor to allow users to specify which theme a new end-user should initially see for a page managed by them on a NicerApp domain.</div></li>



            <li class="todoList_l1"><div>Rework the 'vividButton' user-interface components of NicerApp WebOS. There are currently 3 versions, and they can't be put in menus yet.
            </div></li>

            <li class="todoList_l1"><div>(2023) Upgrade the na.desktop component to it's next major version (a complete rewrite, but one that enhances the old feature set by a significant degree).<br/>This version will allow for dialogs to be repositioned and resized by drag and drop.</div></li>



            <li class="todoList_l1"><div>Transform the Theme Editor (that's currently restricted to NicerApp vividDialogs) into a Universal Web Theme Editor.<br/>
            Tie specific HTML classes -that you can edit without technical knowledge using the UWTE- to specific HTML&amp;CSS selectors.<br/>
            Add more tab-pages to specify even more different HTML styles to HTML selectors.
            </div></li>

            <li class="todoList_l1"><div>Start work on a custom HTML WYSIWYG rich-text editor component of my own, that ties into the UWTE.<br/>
                <ol class="todoList_l2">
                    <li class="todoList_l2"><div>supply data from a HTML+CSS form into <a href="https://github.com/NicerEnterprises/NicerApp-WebOS-dev/blob/main/NicerAppWebOS/logic.business/class.core.WebsiteOperatingSystem-5.y.z.php#L1088" class="noPushState" target="naGH_wos1088">css_keyframes_to_array() and css_animation_template_to_animation()</a>.</div></li>
                </ol>
            </li>

            <li class="todoList_l1">
<div><pre class="todoList">
rewrite the backgrounds analysis and automatic resizing routines;
- put all of the backgrounds in a DOMAIN_TLD___backgrounds dataSet with relative filepath (starting at siteMedia/backgrounds) and image size.
- let users search for backgrounds based on filepath, then save those searches in their account settings and make them viewable as photoalbums.
</pre></div>
            </li>


            <!--<li class="todoList_l1"><div>Show a small error window for a short time when a page can't load.</div></li>-->
        </ol>
    </div></li>

    <li class="todoList"><div>Restore the automatic retrieval of new backgrounds download routines for nicerapp via free to use methods of delivery at Google image search and (TODO :)Bing image search.</div></li>

    <li class="todoList"><div>Upgrade the news app and vividDialog : add siteToolbarLeft functionality :<br/>
        <ol class="todoList_l1">
            <li><div>add/enable/disable/remove any URL to a combination of lists that are each given a name, which get stored in several database-stored dataSubSets (records/documents) inside a dataSet (table/couchdb-database).<br/>
            </li>
            <li><div>the ability to assign specific 'theme' and 'sub-theme' settings to such a URL.</div></li>
            <li><div>the ability to do keyphrase searches (perhaps later with 'or' and 'and' logic support) on the news content gatered, and paint that content with specific 'theme' and/or 'sub-theme' settings.<br/>
            (putting all of this in siteToolbarLeft and the rest in the siteThemeEditor, and that those can already be shown at the same time, means you can edit *all* user-interface settings for *any* app or service on any HD screen or pad screen.</div></li>
            <li><div>let vividDialog have a vividMenu, with vividButton icons that will lead to vividMenus and vividDialogs and vividDialogPopups, at the top-right of it's borders.<br/>
            the contents of this menu should be defined in a &lt;UL&gt; structure (that can, if needed, get loaded with fresh content via AJAX), much like the vividMenu already is today.</div></li>
        </ol>
    </div>
    </li>

    <li class="todoList"><div>Full server backup facilities within NicerApp WebOS. Currently this is only needed for couchdb data and IMAP Maildir data), to other servers on the LAN or even outside the LAN of the web server, <b>and</b> to zip files (by using the php7.4-zip ubuntu OS library), <b>with</b> progress bar for the zip file creation processes, and also with restore functionality built right into the browser.</div></li>


    <li class="todoList"><div>Figure out a way to store the width and height of each background found in the filesystem in the output of .../NicerAppWebOS/domainConfigs/DOMAIN.TLD/ajax_backgrounds_recursive.php and .../NicerAppWebOS/domainConfigs/DOMAIN.TLD/ajax_backgrounds.php.<br/>
    (NOT DONE) Then use this information in the backgrounds menu to select only elligible backgrounds, and popup an error message 'No backgrounds found, reverting to search key = {$someSearchKey}' when no backgrounds are found for the current search / menu-option.</div></li>

    <li class="todoList"><div>Build a view port into <a href="https://wikipedia.org" target="wikipedia">https://wikipedia.org</a> data, whose content one may re-use without legal consequences, and which is *great*. :D</li>

    <li class="todoList"><div>Facebook-like timeline features with it's own look, feel and artwork.</div></li>

    <li class="todoList"><div>Integration of payment platforms (as plugins) for paypal.com, creditcards, and the Dutch banking system iDeal.</div></li>

    <li class="todoList"><div>Webshop functionality</div></li>

    <li class="todoList"><div>Basic Google Drive like facilities (to facilitate large attachments in email).</div></li>

    <li class="todoList"><div>Integration of oAuth (Google and Facebook authentication systems).</div></li>

    <li class="todoList"><div>Webmail features that can hopefully work with another IMAP data provider like Gmail and Hotmail as the primary email (backup) provider, IF Gmail and/or Hotmail still allow this.</div></li>

    <li class="todoList"><div>Small business administration features.</div></li>

    <li class="todoList"><div>Forums features.</div></li>

    <li class="todoList"><div>Music production app via linux commandline app sonic-pi, integration of that app with payment modules and musicPlayer.</div></li>
</ol>
