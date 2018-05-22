<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><?= $this->avatar->currentUserSmall('avatar-inline') ?><i class="fa fa-caret-down"></i></a>
    <ul>
        <li class="no-hover"><strong><?= $this->text->e($this->user->getFullname()) ?></strong></li>

        <li>
            <?= $this->url->icon('home', t('My profile'), 'UserViewController', 'show', array('user_id' => $this->user->getId())) ?>
        </li>
        <li>
            <?= $this->url->icon('folder', t('Projects management'), 'ProjectListController', 'show') ?>
        </li>


        <?= $this->hook->render('template:header:dropdown') ?>


        <?php if (! DISABLE_LOGOUT): ?>
            <li>
                <?= $this->url->icon('sign-out', t('Logout'), 'AuthController', 'logout') ?>
            </li>
        <?php endif ?>
    </ul>
</div>
