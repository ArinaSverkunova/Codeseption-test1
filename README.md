Инструкция:
Открыть веб-консоль на php.
Указать путь к репозиторию.
Создать тест: php codecept.phar generate:cept acceptance test1
Запустить тест: php codecept.phar run acceptance test1Cept.php
Открыть папку tests -> файл acceptance.suile.yml 
Заменить строку url на тестируемый сайт.
Сохранить.
Открыть файл test1Cept.php 
$I->wantTo('проверить поиск'); //проверить поисковую строку через поиск цитрамона
$I->amOnPage('/'); //зайти на главную страницу
$I->fillField('term', 'цитрамон'); //написать в поиск слово цитрамон
$I->uncheckOption("input[name='search_title']"); //убрать галочку "искать только в названиях"
$I->click('Найти'); //нажать "найти"
$I->see('Найдено 12 товаров'); //увидить надпись "найдено 12 товаров"