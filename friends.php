<?php
require 'vendor/autoload.php';

$app = new \atk4\ui\App('Party');
$app->initLayout('Centered');

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root','');

class Friends extends \atk4\data\Model {
  public $table = 'friends';
function init() {
  parent::init();
  $this->addField('name');
  $this->addField('surname');
  $this->addField('phone_number',['default'=>'+371']);
  $this->hasMany('Guests', new Guests);
}
}
//$button = $app->add(['Button','Save', 'teal']);


class Guests extends \atk4\data\Model {
  public $table = 'guests';
function init() {
  parent::init();
  $this->addField('name');
  $this->addField('surname');
  $this->addField('time', ['type' =>'time']);
  $this->hasOne('friends_id', new Friends)->addTitle();
}
}

$form = $app->layout->add('Form');
$form->setModel(new Guests($db));

$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});

//$button = $app->add(['Button','Save', 'teal']);

$form = $app->layout->add('Form');
$form->setModel(new Friends($db));

$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});
