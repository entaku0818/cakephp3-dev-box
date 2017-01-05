<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="appointments index large-9 medium-8 columns content">
    <h3><?= __('Appointments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('stop') ?></th>
                <th><?= $this->Paginator->sort('table') ?></th>
                <th><?= $this->Paginator->sort('court_id') ?></th>
                <th><?= $this->Paginator->sort('max_user') ?></th>
                <th><?= $this->Paginator->sort('cost') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appointments as $appointment): ?>
            <tr>
                <td><?= $this->Number->format($appointment->id) ?></td>
                <td><?= $appointment->has('user') ? $this->Html->link($appointment->user->name, ['controller' => 'Users', 'action' => 'view', $appointment->user->id]) : '' ?></td>
                <td><?= $appointment->has('order') ? $this->Html->link($appointment->order->id, ['controller' => 'Orders', 'action' => 'view', $appointment->order->id]) : '' ?></td>
                <td><?= h($appointment->date) ?></td>
                <td><?= h($appointment->start) ?></td>
                <td><?= h($appointment->stop) ?></td>
                <td><?= h($appointment->table) ?></td>
                <td><?= h($appointment->court_id) ?></td>
                <td><?= $this->Number->format($appointment->max_user) ?></td>
                <td><?= $this->Number->format($appointment->cost) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
