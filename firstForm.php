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
$name = $fieldset->addElement('text', 'name', array('size' => 50, 'maxlength' => 255));
$name->setLabel('Enter your name:');

/**
 * Добавить кнопку
 */
$fieldset->addElement('submit', 'send', array('value' => 'Send!'));

/**
 * Отправить форму на страницу
 */
echo $form;

/**
 * Удалить лишние пробелы вначале и в конце
 */
$name->addFilter('trim');

/**
 * Задать правила валидации
 */
$name->addRule('required', 'Please enter your name');

if ($form->validate()) {
    echo '<h1>Hello, ' . htmlspecialchars($name->getValue()) . '!</h1>';
} else {
    echo 'Валидация не прошла';
}


