<div class="filter-box">
    <form method="get" action="<?= $this->url->dir() ?>" class="search">
        <?= $this->form->hidden('controller', $filters) ?>
        <?= $this->form->hidden('action', $filters) ?>
        <?= $this->form->hidden('plugin', $filters) ?>
        <?= $this->form->hidden('project_id', $filters) ?>



    </form>
</div>
