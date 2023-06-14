<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Venta> $ventas
 */
?>
<div class="ventas index content">
    <?= $this->Html->link(__('New Venta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ventas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_cliente') ?></th>
                    <th><?= $this->Paginator->sort('id_gorra') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_venta') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                <tr>
                    <td><?= $this->Number->format($venta->id) ?></td>
                    <td><?= $this->Number->format($venta->id_cliente) ?></td>
                    <td><?= $this->Number->format($venta->id_gorra) ?></td>
                    <td><?= h($venta->fecha) ?></td>
                    <td><?= $this->Number->format($venta->cantidad_venta) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venta->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venta->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?>
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
