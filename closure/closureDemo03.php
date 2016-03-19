<?php
class Di{
	private $_factory;
	public function set($id, $value){
		$this->_factory[$id] = $value;
	}

	public function get($id){
		$value = $this->_factory[$id];
		return $value();
	}
}

class User{
	private $_username;
	public function __construct($username = ''){
		$this->_username = $username;
	}
	public function getUserName(){
		return $this->_username;
	}
}

$di = new Di();
$di->set('zhangsan', function(){
	return new User('张三');
});
$di->set('lisi', function(){
	return new User('李四');
});

echo $di->get('zhangsan')->getUserName();
echo $di->get('lisi')->getUserName();


