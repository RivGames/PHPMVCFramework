<div class="container">

    <?php foreach ($posts as $post): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= $post['title'] ?>
            </div>
            <div class="panel-body">
                <?= $post['content'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
