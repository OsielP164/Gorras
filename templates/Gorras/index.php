<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gorra> $gorras
 */
?>
<div class="gorras index content">
    <?= $this->Html->link(__('New Gorra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gorras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('modelo') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('talla') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gorras as $gorra): ?>
                <tr>
                    <td><?= $this->Number->format($gorra->id) ?></td>
                    <td><?= h($gorra->marca) ?></td>
                    <td><?= h($gorra->modelo) ?></td>
                    <td><?= h($gorra->color) ?></td>
                    <td><?= h($gorra->talla) ?></td>
                    <td><?= $this->Number->format($gorra->precio) ?></td>
                    <td><?= $this->Number->format($gorra->cantidad) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gorra->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gorra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gorra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gorra->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
