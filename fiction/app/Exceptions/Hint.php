<?php

namespace App\Exceptions;

use Exception;

class Hint extends Exception
{
    //登录成功
    const SUCCESS_CODE='200';
    const SUCCESS_CODE_MSG='登录成功成功';
    //登录失败
    const ERROR_CODE='00001';
    const ERROR_CODE_MSG='登录失败账号密码有误';
    //失败msg
    const FAIL_CODE='00002';
    //注册失败
    const FAIL_LOGIN_CODE='00003';

}
