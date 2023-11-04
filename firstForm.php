<?php
require_once "vendor\autoload.php";

/**
 * Создать объект формы
 */
$form = new HTML_QuickForm2('myTest');

/**
 * Добавление объекта с данными по умолчанию
 */
$form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
    'name' => 'Jon'
)));

/**
 * Поставить группу для элементов формы
 */
$fieldset = $form->addElement('fieldset')
                 ->setLabel('QuickForm2');

/**
 * Добавить поле типа Текст
 */
$fieldset->addElement('text', 'name-for-Jon', array('size' => 50, 'maxlength' => 255))
         ->setLabel('Enter your name:');

/**
 * Добавить кнопку
 */
$fieldset->addElement('submit', 'send', array('value' => 'Send!'));


/**
 * Отправить форму на страницу
 */
echo $form;

if (isset($_POST)) {
    foreach($_POST as $key=>$val) {
        echo "$key=>$val<br>";
    }
}
