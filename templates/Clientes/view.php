<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($cliente->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
