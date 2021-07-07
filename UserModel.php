<?php


namespace sajjaddarre\phpmvc;


use sajjaddarre\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName():string;
}