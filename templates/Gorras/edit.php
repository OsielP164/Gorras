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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gorra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gorra->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gorras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gorras form content">
            <?= $this->Form->create($gorra) ?>
            <fieldset>
                <legend><?= __('Edit Gorra') ?></legend>
                <?php
                    echo $this->Form->control('marca');
                    echo $this->Form->control('modelo');
                    echo $this->Form->control('color');
                    echo $this->Form->control('talla');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
