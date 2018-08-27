<?php
$memento = get_query_var('epfl_memento_name'); 
?>

<div class="card-slider-footer">
    <div>
        <button role="button" id="card-slider-prev" class="card-slider-btn link-trapeze-horizontal disabled">
            <svg class="icon" aria-hidden="true"><use xlink:href="#icon-chevron-left"></use></svg>
        </button>
        <button role="button" id="card-slider-next" class="card-slider-btn link-trapeze-horizontal">
            <svg class="icon" aria-hidden="true"><use xlink:href="#icon-chevron-right"></use></svg>
        </button>
    </div>
<div>
<a href="<?php echo "https://memento.epfl.ch/" . $memento . "/?period=30" ?>">
    <?php if (get_locale() == 'fr_FR'): ?> 
        Voir l’agenda complet des événements
    <?php else: ?> 
        Complete agenda of events
    <?php endif ?> 
</a>