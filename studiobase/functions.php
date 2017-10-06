<?php

function public_nav_main_bootstrap() {
    $partial = array('common/menu-partial.phtml', 'default');
    $nav = public_nav_main();  // this looks like $this->navigation()->menu() from Zend
    $nav->setPartial($partial);
    return $nav->render();
}

function public_nav_footer() {
    $partial = array('common/footer-nav-partial.phtml', 'default');
    $nav = public_nav_main();  // this looks like $this->navigation()->menu() from Zend
    $nav->setPartial($partial);
    return $nav->render();
}

/* exhibit builder nav overwritten to get rid of the arrows. */
function studiobase_exhibit_builder_link_to_next_page($text = null, $props = array(), $exhibitPage = null)
{
    if (!$exhibitPage) {
        $exhibitPage = get_current_record('exhibit_page');
    }

    $exhibit = get_record_by_id('Exhibit', $exhibitPage->exhibit_id);

    $targetPage = null;

    // if page object exists, grab link to the first child page if exists. If it doesn't, grab
    // a link to the next page
    $targetPage = $exhibitPage->firstChildOrNext();
    if ($targetPage) {
        if (!isset($props['class'])) {
            $props['class'] = 'next-page';
        }
        if ($text === null) {
            $text = metadata($targetPage, 'title');
        }
        return exhibit_builder_link_to_exhibit($exhibit, $text, $props, $targetPage);
    }

    return null;
}

/**
 * Return a link to the previous exhibit page
 *
 * @param string $text Link text
 * @param array $props Link attributes
 * @param ExhibitPage $exhibitPage If null, will use the current exhibit page
 * @return string
 */
function studiobase_exhibit_builder_link_to_previous_page($text = null, $props = array(), $exhibitPage = null)
{
    if (!$exhibitPage) {
        $exhibitPage = get_current_record('exhibit_page');
    }
    $exhibit = get_record_by_id('Exhibit', $exhibitPage->exhibit_id);

    // If page object exists, grab link to previous exhibit page if exists. If it doesn't, grab
    // a link to the last page on the previous parent page, or the exhibit if at top level
    $previousPage = $exhibitPage->previousOrParent();
    if ($previousPage) {
        if(!isset($props['class'])) {
            $props['class'] = 'previous-page';
        }
        if ($text === null) {
            $text = metadata($previousPage, 'title');
        }
        return exhibit_builder_link_to_exhibit($exhibit, $text, $props, $previousPage);
    }

    return null;
}

