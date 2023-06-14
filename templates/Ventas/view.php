<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venta'), ['action' => 'edit', $venta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venta'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ventas view content">
            <h3><?= h($venta->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venta->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Cliente') ?></th>
                    <td><?= $this->Number->format($venta->id_cliente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Gorra') ?></th>
                    <td><?= $this->Number->format($venta->id_gorra) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad Venta') ?></th>
                    <td><?= $this->Number->format($venta->cantidad_venta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($venta->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
