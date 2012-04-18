<!-- src/Jambudesk/RecordBundle/Resources/views/Form/index.html.php -->
<?php $view->extend('::base.html.php') ?>

<?php $view['slots']->set('title', $form->getName()) ?>

<?php $view['slots']->start('body') ?>
    <h1><?php echo $form->getName() ?></h1>
    
    <form action="<?php echo $view['router']->generate('JambudeskRecordBundle_save_record', array('form_id' => $form->getId())) ?>" method="post" class="record">
        <?php foreach ($form->getFields() as $field): ?>
            <?php if ($field->getIsText()): ?>
                <?php echo $field->getName() ?>
                <textarea></textarea>
            <?php else: ?>
                <?php echo $field->getName() ?>
                <select>
                    <?php foreach ($field->getFieldOptions() as $fieldOption): ?>
                        <option value="<?php echo $fieldOption->getValue() ?>"><?php echo $fieldOption->getValue() ?></option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>
            <br/>
        <?php endforeach; ?>
        <input type="submit" value="Submit">
    </form>
<?php $view['slots']->stop() ?>