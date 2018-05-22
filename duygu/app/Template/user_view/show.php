<div class="page-header">
    <h2><?= t('Summary') ?></h2>
</div>
<ul class="panel">
    <li><?= t('Login:') ?> <strong><?= $this->text->e($user['username']) ?></strong></li>
    <li><?= t('Full Name:') ?> <strong><?= $this->text->e($user['name']) ?: t('None') ?></strong></li>
    <li><?= t('Email:') ?> <strong><?= $this->text->e($user['email']) ?: t('None') ?></strong></li>
    <li><?= t('Status:') ?> <strong><?= $user['is_active'] ? t('Active') : t('Inactive') ?></strong></li>
    <?= $this->hook->render('template:user:show:profile:info', array('user' => $user)) ?>
</ul>





<?php if (! empty($user['token'])): ?>
    <div class="page-header">
        <h2><?= t('Public access') ?></h2>
    </div>

    <div class="panel">
        <ul class="no-bullet">
            <li><strong><?= $this->url->icon('rss-square', t('RSS feed'), 'FeedController', 'user', array('token' => $user['token']), false, '', '', true) ?></strong></li>
            <li><strong><?= $this->url->icon('calendar', t('iCal feed'), 'ICalendarController', 'user', array('token' => $user['token']), false, '', '', true) ?></strong></li>
        </ul>
    </div>
<?php endif ?>
