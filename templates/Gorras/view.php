<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gorra $gorra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gorra'), ['action' => 'edit', $gorra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gorra'), ['action' => 'delete', $gorra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gorra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gorras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gorra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gorras view content">
            <h3><?= h($gorra->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($gorra->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($gorra->modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($gorra->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talla') ?></th>
                    <td><?= h($gorra->talla) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gorra->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($gorra->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($gorra->cantidad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
