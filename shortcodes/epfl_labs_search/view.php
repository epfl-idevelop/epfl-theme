<?php
    $sites = get_query_var('epfl_labs-sites');
    $predefined_faculty = get_query_var('epfl_labs-predefined_faculty');
    $combo_list_content = get_query_var('eplf_labs-combo_list_content');
?>

<div class="container my-3">
    <div id="sites-list" class="d-flex flex-column">
        <div class="form-group">
            <div>
                <?php foreach($combo_list_content as $type => $names): ?>
                    <select
                        id="select-<?php echo esc_html($type); ?>"
                        class="epfl-labs-select custom-select mb-2"
                    >
                        <option <?php echo (empty($predefined_faculty))?"selected":"";?> value="all">
                        <?php
                            switch ($type) {
                                case "faculty":
                                    _e('All faculties', 'epfl');
                                    break;
                                case "institute":
                                    _e('All institutes', 'epfl');
                                    break;
                                case "field-of-research":
                                    _e('All field of research', 'epfl');
                                    break;
                                default:
                                _e("All", 'epfl');
                            }
                        ?>
                        </option>
                    <?php foreach($names as $name): ?>
                        <option
                            <?php echo (!empty($predefined_faculty) && strtoupper($name) === strtoupper($predefined_faculty))?"selected":"";?>
                             value="<?php echo esc_html($name); ?>"><?php echo esc_html($name); ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                <?php endforeach; ?>

                <input
                    type="text"
                    id="labs-search-input"
                    class="form-control search"
                    placeholder="<?php _e('Type here a name, an url, a keyword, ...', 'epfl') ?>"
                    aria-describedby="labs-search-input-help"
                >
            </div>
        </div>
        <div id="sorting-header" class="flex-row d-md-flex pt-1 pb-1 border-bottom align-items-center mb-2">
                <div class="sort col-2" data-sort="site-title"><a href="#"><?php _e('Acronym') ?></a></div>
                <div class="sort col-7" data-sort="site-tagline"><a href="#"><?php _e('Title') ?></a></div>
        </div>
        <div class="list">

        <?php if (!(empty($sites))): ?>
            <?php foreach($sites as $key => $site): ?>
            <div class="flex-row d-md-flex pt-1 pb-1 border-bottom align-items-center">
                <div class="site-title col-2"><?php echo esc_html($site->title); ?></div>
                <div class="col-7"><a class="site-url" href="<?php echo esc_html($site->url); ?>"><span class="site-tagline"><?php echo esc_html($site->tagline); ?></span></a></div>
                <?php if (!(empty($site->tags))): ?>
                <div class="site-tags col-2 pt-1"
                    data-tags="<?php
                                foreach($site->tags as $tag):
                                    echo esc_html($tag->name);
                                    if( $tag !== end($site->tags) ) {
                                        echo ';';
                                    }
                                endforeach;
                                ?>">
                    <?php foreach($site->tags as $tag): ?>
                    <a href="<?php echo esc_html($tag->url); ?>" class="tag tag-primary site-tags-<?php echo esc_html($tag->type); ?>"><?php echo esc_html($tag->name); ?></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>

    </div>
</div>

<?php get_template_part('shortcodes/epfl_labs_search/javascript'); ?>