
<!DOCTYPE html>
<html>
<head>
    <title>NobleText</title>
    <?= self::meta(); ?>
    <?= self::css('public/css/editor', 'public/css/medium-editor', 'public/css/medium-editor.default', 'public/css/theme-doc'); ?>
    <?= self::js('public/js/jquery-2.1.0.min', 'public/js/medium-editor', 'public/js/main'); ?>
</head>
<body>


<div id="panel">

    <nav>
        <header>NOBLE <strong>TEXT</strong></header>
        <ul>

            <?php foreach($notes as $item): ?>

                <li>
                    <a href="<?= url('/write', $item->id) ?>">
                        <?= $item->title ?>
                        <aside><?= date('d M Y - H:i:s', $item->date) ?></aside>
                    </a>
                </li>

            <?php endforeach; ?>

        </ul>
    </nav>

    <menu>
        <a href="#" data-toggle-panel>
            <i class="fa fa-bars"></i> <span>MENU</span>
        </a>
        <a href="<?= url('/new') ?>">
            <i class="fa fa-plus-circle"></i> <span>NEW</span>
        </a>
        <?php if($note->id): ?>
        <a href="<?= url('/write', $note->id) ?>">
            <i class="fa fa-cloud-upload"></i> <span>SAVE</span>
        </a>
        <a href="<?= url('/delete', $note->id) ?>" onclick="return confirm('Are you sure to delete this note ?')">
            <i class="fa fa-times"></i> <span>DELETE</span>
        </a>
        <?php endif; ?>
    </menu>

</div>

<div id="editor">

    <div class="editable doc">
        <?= $note->content ?>
    </div>

</div>

</body>
</html>