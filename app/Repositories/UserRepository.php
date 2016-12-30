<?php
/**
 * 描述.
 *
 * @author duanjin<duan.jin@mydreamplus.com>
 * @date 2016-12-30 14:27
 */

namespace App\Repositories;
use App\Model\Users;

class UserRepository
{
    public static $userRep;

    /**
     * 实例化
     * @return \App\Repositories\UserRepository
     */
    public function getInstance()
    {
        if (isNull(self::$userRep)) {
            self::$userRep = new self();
        }
        return self::$userRep;
    }

    /**
     * 新增用户
     * @param $data
     * @return mixed
     */
    public function insertUser($data)
    {
        $user = new Users();
        $user->name = $data['name'];
        $user->avatar = $data['avatar'];
        $user->role = $data['role'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->root_day = $data['root_day'];
        $user->more = $data['more'];
        return $user->save();
    }

}