# CHANGELOG

*1.3.7* (2019-04-16)
- Shortcode people: doctoral program (#198)
- Search for labs UI (#194)

*1.3.6* (2019-04-11)
- Add/Update/Complete some translations (#197)
- Shortcode News Fix (#196)

*1.3.5* (2019-04-03)
- People Fix (#193)
- Add Tags to breadcrumb (#183)
- Fix php notices (#191)

*1.3.4* (2019-03-29)
- People Fix (#192)

*1.3.3* (2019-03-28)
- Revert in part Fix PHP notices messages

*1.3.2* (2019-03-28)
- Fix PHP notice messages

*1.3.1* (2019-03-21)
- Font are fetched from root www

*1.3.0* (2019-03-19)
- Update to styleguide 2.0.0
- Add favicons links
- Set the "50 years" label in top and hamburger menus

*1.2.34* (2019-03-14)
- Fix showing link when no page exist in the aimed langage (#186)
- Fix translation for Retour in hamburger (#184)
- Update footer texts and links
- Shorcode memento : Add speaker (#187)

*1.2.33* (2019-03-06)
- Update fonction_fr or fonction_en after change into people app (#181)

*1.2.32* (2019-02-28)
- Allow "Phantom" menu entry at the root (#182)

*1.2.31* (2019-02-21)
- Add missing translations (#179)
- Handle image order in WP gallery (#180)

*1.2.30* (2019-02-07)
- Get a fallback menu if the root menu is not correctly set as expected (#178)
- Fix order function people problem (#176)
- fix people room (#177)

*1.2.29* (2019-01-31)
  - Fix the fallback menu being used by default (#173)
  - Fix the missing À on "À propos" (#172)
  - Set epfl root url to a static value, mainly for logo and breadcrumb (#175)

*1.2.28* (2019-01-24)
  - Fix search input on mobile

*1.2.27* (2019-01-24)
  - Fix langage switcher on mobile
  - Fix url for the 50y logo (#169)
  - Add a default top menu as fallback (#170)

*1.2.25* (2019-01-17)
  - Update the english celebration link

*1.2.24* (2019-01-14)
  - Add new logo for the 50 years (#164)
  - Fix scienceqa form problem (#166)
  - Fix breadcrumbs mobile behaviour
  - Fix creation date for Posts (#117)
  - Fix Post Teaser empty element when grey mode enabled (#111)

*1.2.23* (2018-12-18)
  - Update to styleguide 1.3.7
  - Active the don't track option for Twitter widget (#160)
  - Fix breadcrumbs for mobile (#161)
  - Set language on homepage links (#159)
  - Fix php notices (#158)
  - Some code cleaning

*1.2.22* (2018-12-10)
  - Update to styleguide 1.3.6

*1.2.21* (2018-12-03)
  - Update urls to www

*1.2.20* (2018-11-29)
  - Set version for css and js based on the mtime of VERSION file
  
*1.2.19* (2018-11-29)
  - Update Styleguide to 1.3.5, including the footer
  - Add multi language navigation design (#152) 
  - Add translation for browse button (#153)

*1.2.18* (2018-11-19)
  - Fix epfl-news: wrong label replace by lastest news (#149)
  - Fix epfl-memento: not display event if even hasn't date (#148)
  - Set a fixed url until we go a better solution (#150)
  - Add translations for the footer (#147) 
  - Use the theme's wwp-get_multisite_home_url to calculate home links (#151)

*1.2.17* (2018-11-14)
  - Fix post teaser gray background (#146)
  - Fix epfl people design (#145) 

*1.2.16* (2018-11-14)
  - epfl_social_feed: simplify renderer to align the feed in center (#144)
  - epfl_card: set full container in all case; allow to add a gray wrapper (#143)
  - custom_teaser, custom_highlight, schools, hero: add recommended size (#142)
  - epfl_links_group: Add margin (#141)
  - Fix people html (#138)
  - highlight page: improve image width (#140)
  - epfl_quote: crop quote image with square crop (#139)
  - epfl_publication: fix wrong context for translation (#136)
  - use crop_large instead crop (too short) (#137)
  - Merge pull request #135 from epfl-idevelop/epfl-google-forms
  - Update shortcodes/epfl_google_forms/view.php
  - Move 'loading' parameter from shortcode to theme and use of internal
  - Put everything in a <div class='container'>
  - Add render for 'epfl-google-forms' plugin

*1.2.15* (2018-11-06)
  - Set padding only for cards view (#134)
  - Fix missing padding for shortcodes on the full container (#133)
  - Add full tel number; don't show empty office or position (#131)
  - Add epfl tableau shortcode (#132)
  - Render epfl-quote (#91)
  - Add french translations for people shortcode render (#129)

*1.2.14* (2018-10-26)
  - Styleguide 1.3.3 with temporary fixes
    - Language switcher fix
    - Javascript crashing fix
  - Fix People list not in a container

*1.2.13* (2018-10-25)
  - Styleguide 1.3.3
  - Add a search to the 404 page (#119)
  - Add a way to render people in list (#126)
  - Fix toggle id to be unique (#121)
  - Add some translations (#118)
  - Fix richtext render for epfl-card and epfl-contact (#123) 

*1.2.12* (2018-10-22)
  - Quick menu-related fixes (#122)

*1.2.11* (2018-10-16)
  - Fix infoscience search warnings (#116)
  - Allow to set multiple columns on people render (#110)
  - Move from a clickable card to a static card with links (#115)
  - Simplify the 404 page (#113)
  - Add shortcode preview translations (#112)
  - Add contact render (#108)
  - Print image from id, not form an url (#107)
  - Add and change containers margin to my-3 (#106)
  - Allow to print multiple cards (#105)

*1.2.10* (2018-10-04)
  - fix epfl-cover: check if description exists
  - epfl-social: render HTML
  - epfl-share: render HTML
  - epfl-people: render HTML
  - fix custom_hightlight admin label 
  - epfl-memento: render HTML for listing templates
  - epfl-toggle: render v2

*1.2.9* (2018-09-22)
  - epfl-news: delete stickers parameter

*1.2.8* (2018-09-20)
  - bump version to fix missing commits

*1.2.7* (2018-09-20)
  - epfl-news: add video mp4 feature
  - fix for all plugins : fix html escaping
  - epfl-news: add template card for 1,2 or 3 news
  - epfl-infoscience-search: add render html
  - epfl-video: clean width and heigt parameters
  - epfl-map: add render html

*1.2.6* (2018-09-11)
  - Styleguide 1.3.0 + Header search
  - Refactor faculty to schools for all visible parts
  - Fix homepage behaviour

*1.2.5* (2018-09-07)
  - epfl-video: render HTML
  - epfl-links-group: render HTML
  - epfl-cover: render HTML
  - epfl-toggle: render HTML
  - epfl-memento: fix resolution image 448x448
  - epfl-news: fix div tag badly closed PR#74
  - Custom highlight handle image with caption, legend, alt etc..
  - Name menu location, change default name from 'primary' to 'top' to match 2010 theme, prepare for footer

*1.2.4* (2018-08-30)
  - remove top padding on homepage
  - hotfix overflow hidden events 

*1.2.3* (2018-08-30)
  - epfl-news: fix big image for news shortcode

*1.2.2* (2018-08-30)
  - fix: Don't display homepage title on homepage
  - Change behavior of teaser: activate excerpts
  - fix: Hide h1 title when a hero shortcode is in a page content
  - Add search icon in heading for copil
  - Custom teasers implement card deck
  - Add utility class as documented in elements
  - fix: Remove y margin
  - epfl-news: fix big image for news shortcode
  - epfl-memento: fix div tag badly closed
  - implement styleguide version (1.2.1)

*1.2.1* (2018-08-29)
  - epfl-news: fix the width of highlighted template (fullscreen)
  - faculties: increase faculty number to 10 fix
  - implement styleguide version (1.2.0)

*1.2.0* (2018-08-27)
  - MVC structure improvements for shortcodes
  - Theme translation setup
  - debug breadcrumbs to work with polylang and all languages
  - memento shortcode implementation
  - epfl-news: finish first implementation, and implement second template
  - improve repository doc concerning release management

*1.1.2* (2018-08-21)
  - merge QA science shortcode
  - implement styleguide version (1.1.2)
  - fix breadcrumbs on level 0 pages
  - fix main nav classes
  - remove close cross in menu
  - enable excerpt for pages

*1.1.1* (2018-08-13)
  - implement styleguide version (1.1.1)
  - fix main nav on post detail page
  - put breadcrumb inside a ul tag for semantics
  - hotfix php 7.2 error with sozeof and strings

*1.1.0* (2018-08-10)
  - implement styleguide version (1.1.0)
  - implement new verison of the main nav
  - implement nav aside logic
  - implement nav aside with children only
  - implement nav aside with siblings only
  - implement archive listing for posts
  - implement category listing for posts
  - base the breadcrumbs on the menu structure
  - implement new nav lang markup
  - implement list group markup
  - implement custom highlight shortcode
  - implement post teaser shortcode
  - change faculties shortcode image

*1.0.1* (2018-08-07)
  - remove backend editor container
  - implement page teaser shortode
  - add options for grey background for shortcodes
  - implement definition list shortcode
  - recover dev build of styleguide for release (commit 9877c9b666029200d2dc2edcc8f8cd489473c57a on branch feature/pages)

*1.0.0* (2018-07-26)
  - First release
  - current state of the styleguide (1.0.0)