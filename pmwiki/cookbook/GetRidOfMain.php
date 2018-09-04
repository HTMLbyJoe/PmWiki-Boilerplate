<?php

## https://www.pmwiki.org/wiki/Cookbook/GetRidOfMain

## add default group (Main) to page search path
$PagePathFmt = array(
      '{$Group}.$1',           # page in current group
      '{$DefaultGroup}.$1',    # page in default group (Main)
      '$1.$1',                 # group home page
      '$1.{$DefaultName}',     # group home page
);
SDV($DefaultPage, 'Main.HomePage');
$pagename = MakePageName($DefaultPage, $pagename);

## reformat page urls to omit default group (Main)
$EnablePathInfo = 1;
$FmtPV['$PageUrl'] = 'PUE(($group==$GLOBALS["DefaultGroup"])
                            ? (($name==$GLOBALS["DefaultName"]) ? "$ScriptUrl/" : "$ScriptUrl/$name")
                              : "$ScriptUrl/$group/$name")';
$FmtP["!\\\$ScriptUrl/$DefaultGroup/!"] = '$ScriptUrl/';
