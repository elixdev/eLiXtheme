<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         functions.php
* @Package:      GetSimple
* @Action:       eLiXtheme theme for GetSimple CMS
*
*****************************************************/

/**
 * Vytvoření menu v navigaci
 *
 * @param array Stránky v menu
 * @param string Aktuální stránka
 * @param array Nadřazené stránky
 * @param int Úroveň
 * @return string Menu
 */
function eLiXtheme_nav($page, $currentpage, $pagesSorted, $level) {
    if ($page['menu'] == '') { $page['menu'] = $page['title']; }
    if ($page['title'] == '') { $page['title'] = $page['menu']; }

    // kontrola zda má stránka jinou nadřazenou stránku
    $Children = getChildren($page['url']);
    if (count($Children) == 0) {
        // nejsou žádné nadřazené stránky
        $link = '<a href="' . find_url($page['url'], $page['parent']) . '" title="' . encode_quotes(cl($page['title'])) . '">' . strip_decode($page['menu']) . '</a>';
        $submenu = '';
    } else {
        // jsou nadřazené stránky, vytvoříme podmenu
        $caret = ($level == 1) ? '<b class="caret"></b>' : '';
        $link = '<a href="' . find_url($page['url'], $page['parent']) . '" title="' . encode_quotes(cl($page['title'])) . '" class="dropdown-toggle" data-toggle="dropdown">' . strip_decode($page['menu']) . $caret . '</a>';
        $submenu = '<ul class="dropdown-menu">';
        foreach ($pagesSorted as $Child) {
            if ((in_array($Child['url'], $Children)) && ($Child['menuStatus'] == 'Y') && (($Child['private'] != 'Y') || ((isset($USR) && $USR == get_cookie('GS_ADMIN_USERNAME'))))) {
              $submenu .= eLiXtheme_nav($Child, $currentpage, $pagesSorted, $level + 1);
            }
        }
        $submenu .= '</ul>';
    }

    // kontrola zda je aktuální stránka stránkou v menu
    if (($currentpage == $page['url']) || (stripos($submenu, "current active") !== false)) {
        $li_classes = "current active " . $page['parent'] . " " . $page['url'];
    } else {
        $li_classes = trim($page['parent'] . " " . $page['url']);
    }
    if (count($Children) > 0) {
        if ($level == 1) {
            $li_classes .= " dropdown";
        } else {
            $li_classes .= " dropdown-submenu";
        }
    }

    return '<li class="' . $li_classes . '">' . $link . $submenu . '</li>' . "\n";
}




/**
 * Vytvoření a zobrazení menu
 *
 * @param string Aktuální stránka
 * @return void
 */
function eLiXtheme_getNav($currentpage) {
    global $pagesArray, $USR;
    $menu = '';
    $pagesSorted = subval_sort($pagesArray, 'menuOrder');
    if (count($pagesSorted) != 0) {
        foreach ($pagesSorted as $page) {
            if ((!$page['parent']) && ($page['menuStatus'] == 'Y') && (($page['private'] != 'Y') || ((isset($USR) && $USR == get_cookie('GS_ADMIN_USERNAME'))))) {
                $menu .= eLiXtheme_nav($page, $currentpage, $pagesSorted, 1);
            }
        }
    }

    echo exec_filter('menuitems',$menu);
}
