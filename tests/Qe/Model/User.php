<?php
/**
 * Created by IntelliJ IDEA.
 * User: ashen
 * Date: 2017-11-12
 * Time: 21:13
 */

namespace Model;

use Qe\Core\Orm\ModelBase;
use Model\Human;

/**
 * @Table(masterDbName=master,slaveDbName=slave,tableName = users, primaryKey = id, where = id={userId} and `mobile`={mobile} and nickname like '%{name}%' and id in ({ids}) order by id asc)
 */
class User extends ModelBase
{
    /**
     * 主键
     * @var integer
     */
//    public $id;

    /**
     * 主键
     * @var string
     * @Column(id)
     */
    public $userId;
    /**
     * 手机号
     * @var string
     */
    public $mobile;
    /**
     * 昵称
     * @var string
     * @Column(nickname)
     */
    public $name;
    /**
     * 头像
     * @var string
     */
    public $avatar;
    /**
     * 性别
     * @var string
     */
    public $gender;
    /**
     * 最后修改时间
     * @var date
     */
    public $updated_at;
    /**
     * 创建时间
     * @var date
     */
    public $created_at;

    /**
     * 数据库里没有对应的字段
     * @var string
     * @Transient
     */
    public $otherProperty;

    /**
     * @var \Model\Human
     * @OneToOne(self=userId,mappedBy=userId)
     */
    public $human;

    /**
     * @var integer
     * @Column(create_user_id)
     */
//    public $createUserId;

    /**
     * @var \Model\User
     * @OneToOne(self=id,mappedBy=createUserId)
     */
//    public $createUserInfo;
    /**
     * @Transient
     */
    public $ids;
}