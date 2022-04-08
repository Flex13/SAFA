<ol class="breadcrumb mb-2">

    <?php if (isset($crumbs)):?>
    <?php foreach ($crumbs as $crumb):?>

    <li class="breadcrumb-item"><a class="text-success" href="<?=ROOT . $crumb[1]?>"><?=$crumb[0]?></a></li>

    <?php endforeach;?>
    <?php endif;?>
</ol>