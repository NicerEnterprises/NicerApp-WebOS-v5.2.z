<?php
$rootPath_2vuslwos = realpath(dirname(__FILE__).'/../..');
require_once ($rootPath_2vuslwos.'/NicerAppWebOS/boot.php');
    global $filePerms_ownerUser;
    global $filePerms_ownerGroup;
    global $filePerms_perms_publicWriteableExecutable;
    global $filePerms_perms_readonly;

$fc = file_get_contents (dirname(__FILE__).'/.htaccess.build.part1.txt');
$fc .= PHP_EOL.PHP_EOL;

$lineEnding = ' [N]';


$fc .= 
    '<IfModule mod_rewrite.c>'.PHP_EOL
    .'# .../NicerAppWebOS/domainConfigs/nicer.app/mainmenu.items.php::$na_apps_structure as RewriteRules back into /*--NICERAPP_BASICS--*/'.PHP_EOL.PHP_EOL;

$fc2 = '"url","apps"'.PHP_EOL;

$counts = [];
    
global $naWebOS;
require_once ($rootPath_2vuslwos.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/mainmenu.items.php');
$counts['.../NicerAppWebOS/domainConfigs/nicer.app/mainmenu.items.php'] = 0;
global $na_apps_structure;
$naURLs = array();
foreach ($na_apps_structure as $pageID => $pageStructure) {
//echo 'Added to .../.htaccess as RewriteRule : global $naURLs[\''.$pageID.'\'];'.PHP_EOL;
foreach ($pageStructure as $viewKeyID => $viewKeySettings) {
//var_dump ($viewKeyID); var_dump ($viewKeySettings);

foreach ($viewKeySettings as $softwareKey => $softwareKeySettings) {
//var_dump ($softwareKey, $softwareKeySettings);

foreach ($softwareKeySettings as $softKey => $softSettings) {
//var_dump ($softKey); var_dump($softSettings);

    if ($softKey==='misc') {
        $folder = $softSettings['folder'];
    }
    if ($softKey==='apps') {
        foreach ($softSettings as $viewFolderName => $viewSettings) {
            //$viewSettings['path'] = $folder;
            
            $fsID = $folder.'/'.$viewFolderName;
            
            $asa = [$fsID=>$viewSettings];
            //echo '---';var_dump($asa);echo '---'.PHP_EOL;
            if (array_key_exists('SEO_value', $asa[$fsID])) {
                if (is_array($asa[$fsID]['SEO_value'])) {
                    $svs = $asa[$fsID]['SEO_value'];
                    foreach ($svs as $seovIdx => $seoValue) {
                        $url = '^'.$seoValue.'$';
                        $json = json_encode ($asa);
                        $line = 
                            'RewriteCond %{REQUEST_FILENAME} !-f'.PHP_EOL
                            .'RewriteCond %{REQUEST_FILENAME} !-d'.PHP_EOL
                            .'RewriteCond %{REQUEST_METHOD} ^(GET)$'.PHP_EOL
                            .'RewriteCond %{HTTP:X-Requested-With} XMLHttpRequest'.PHP_EOL
                            .'RewriteRule '.$url.' /view-content/'.base64_encode_url($json).$lineEnding.PHP_EOL.PHP_EOL
            
                            .'RewriteCond %{REQUEST_FILENAME} !-f'.PHP_EOL
                            .'RewriteCond %{REQUEST_FILENAME} !-d'.PHP_EOL
                            .'RewriteCond %{REQUEST_METHOD} ^(GET)$'.PHP_EOL
                            .'RewriteRule '.$url.' /view/'.base64_encode_url($json).$lineEnding.PHP_EOL.PHP_EOL.PHP_EOL;
                        $fc .= $line.PHP_EOL;
                        $counts['.../NicerAppWebOS/domainConfigs/nicer.app/mainmenu.items.php']++;

                        $fc2 .= '"'.$url.'","'.base64_encode_url($json).'"'.PHP_EOL;
                    }
                } else {
                    $url = '^'.$asa[$fsID]['SEO_value'].'$';
    
                    $json = json_encode($asa);
                    $line = 
                        'RewriteCond %{REQUEST_FILENAME} !-f'.PHP_EOL
                        .'RewriteCond %{REQUEST_FILENAME} !-d'.PHP_EOL
                        .'RewriteCond %{REQUEST_METHOD} ^(GET)$'.PHP_EOL
                    	.'RewriteCond %{HTTP:X-Requested-With} XMLHttpRequest'.PHP_EOL
                    	.'RewriteRule '.$url.' /view-content/'.base64_encode_url($json).$lineEnding.PHP_EOL.PHP_EOL
        
                        .'RewriteCond %{REQUEST_FILENAME} !-f'.PHP_EOL
                        .'RewriteCond %{REQUEST_FILENAME} !-d'.PHP_EOL
                    	.'RewriteCond %{REQUEST_METHOD} ^(GET)$'.PHP_EOL
                    	.'RewriteRule '.$url.' /view/'.base64_encode_url($json).$lineEnding.PHP_EOL.PHP_EOL.PHP_EOL;
                    $fc .= $line.PHP_EOL;
                    $counts['.../NicerAppWebOS/domainConfigs/nicer.app/mainmenu.items.php']++;

                    $fc2 .= '"'.$url.'","'.base64_encode_url($json).'"'.PHP_EOL;
                }
            }
        }

    }
}
}
}
}

$fn = $rootPath_2vuslwos.'/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/news/mainmenu.rewriteRules.htaccess.txt';
$fa = file_get_contents ($fn);
$counts['.../NicerAppWebOS/apps/NicerAppWebOS/applications/2D/news'] = substr_count ($fa, 'RewriteRule');
$fc .= $fa;

$fn = $rootPath_2vuslwos.'/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/news/mainmenu.reverseRewriteRulesCSVlines.csv';
$fa = file_get_contents ($fn);
$fc2 .= $fa;


$fc .= '</IfModule>'.PHP_EOL;


$fc .= PHP_EOL.PHP_EOL;
$fc .= file_get_contents (dirname(__FILE__).'/.htaccess.build.partLast.txt');
$fc .= PHP_EOL.PHP_EOL;


echo 'RewriteRule entries added :'.PHP_EOL;
$totalCount = 0;
foreach ($counts as $countID => $count) {
    $totalCount = $totalCount + $count;
    echo $countID.' : '.$count.PHP_EOL;
}
echo 'Total : '.$totalCount.PHP_EOL;

$bytes = file_put_contents (realpath(dirname(__FILE__).'/../..').'/.htaccess', $fc);
echo $bytes.' bytes written to .../.htaccess and .../.htaccess-reverse'.PHP_EOL;
$bytes = file_put_contents (realpath(dirname(__FILE__).'/../..').'/NicerAppWebOS/siteCache/mainmenu.reverse.csv', $fc2);
echo $bytes.' bytes written to .../NicerAppWebOS/siteCache/mainmenu.reverse.csv'.PHP_EOL;



?>
