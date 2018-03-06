<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('проверить поиск');
$I->amOnPage('/');
$I->fillField('term', 'цитрамон');
$I->uncheckOption("input[name='search_title']");
$I->click('Найти');
$I->see('Найдено 12 товаров');