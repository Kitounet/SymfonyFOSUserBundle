<?php
/**
 * Created by PhpStorm.
 * User: yilmaz_e
 * Date: 08/02/15
 * Time: 21:39
 */
namespace Ink\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;





    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


}