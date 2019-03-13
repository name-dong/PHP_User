<?php
namespace app\user\model;
use think\Model;

class AuthMiddleware extends Model
{
    protected $table='user';
    // 定义时间戳字段名
    protected $createTime = 'create_at';
    protected $updateTime = 'update_at';
    //设置json字段
    protected $json = ['in_charge_of'];

    public static function getMessages(){


        return 0;
    }
    public function checkAuthifMatched(){

    }
    public function getUsename($id){

        $user = self::where('id', $id)->find();

        return $user->username;
    }
    public function getPowerRank($id){
        $user = self::where('name', $id)->select();
        return $user->rank;
    }

    //
    public function getResponsibilityColumn(){


    }

}