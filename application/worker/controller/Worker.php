<?php

namespace app\worker\controller;
use think\worker\Server;
use think\cache\driver\Redis;
class Worker extends Server{
	
	protected $redis;
	
	protected $socket = 'websocket://127.0.0.1:2346';
	
	
// 	public function __construct(){
// // 		 $redis = new Redis();
// //     	 $redis->set('test','hello redis');
// //     	 echo $redis->get('test');
// 	}
	
	/**
	 * 收到信息
	 * @param $connection
	 * @param $data
	 */
	public function onMessage($connection, $data)
	{
		
		$redis=new  Redis();
		
		$connection->id=$data;
		$redis->set('Users'.$data, $data);
		$connection->send($connection->id);
// 		foreach($connection->worker->connections as $con)
// 		{
// 			$con->send($data);
// 		}
	}
	
	/**
	 * 当连接建立时触发的回调函数
	 * @param $connection
	 */
	public function onConnect($connection)
	{
	
	}
	
	/**
	 * 当连接断开时触发的回调函数
	 * @param $connection
	 */
	public function onClose($connection)
	{
	
	}
	
	/**
	 * 当客户端的连接上发生错误时触发
	 * @param $connection
	 * @param $code
	 * @param $msg
	 */
	public function onError($connection, $code, $msg)
	{
		echo "error $code $msg\n";
	}
	
	/**
	 * 每个进程启动
	 * @param $worker
	 */
	public function onWorkerStart($worker)
	{
	
	}
	
}

