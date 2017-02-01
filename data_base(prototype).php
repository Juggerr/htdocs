<?php
class Customer {
	// данные в базу данных должны читаться и писаться для этого нужно сделать методы (гетеры и сетеры)
	private id = 01;
	private logo = '\img\logo.jpg';
	private name = 'Samborskiy or Promelectro';
	private secondname = 'Name';
	private email = 'client@mgnail.com';
	private phone = '380963400394';
	private town = 'kiev';
	private price = '035'; // цена и рядом где то должен быть курс доллара (020,доллар 24, 01.12.2016) и типа истории должно быть сбоку
	private folder = 'folder url';
	private adressDelivery = 'id delivery';

class DeliveryAdress {
	private id = 'adressDelivery';
	private number_sklad = 15;
	private town_delivery = 'kyiv';
	private recipient = 'promelektro'
	private phone = '38097 456-33-33'
	private oplata = 'nal,beznal'; default nal
	private whopay = 'me, client'; default me
}
}
class Zakaz {
private id_client = 'id client'; // в заказ добавляется ид клиента + ид доставки
private metall ='06, ultramat, gold';
private holes = false;
private corners = false;
private nakl = false;
private optional_info = 'about zakaz some useful info';

}

?>