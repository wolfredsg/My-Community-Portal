<?php
require_once '/classes/data/UserManagerDB.php';
require_once '/classes/business/UserManager.php';
require_once '/classes/entity/User.php';
require_once '/classes/entity/Admin.php';
require_once '/classes/util/Config.php';
require_once '/classes/util/DBUtil.php';

use M5\classes\data\UserManagerDB;
use M5\classes\business\UserManager;
use M5\classes\entity\User;
use M5\classes\entity\Admin;
use M5\classes\util\DBUtil;
use M5\classes\util\Config;

/**
 * UserManagerDB test case.
 */
class UserManagerDB_Test extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var UserManagerDB
     */
    private $userManagerDB;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated UserManagerDB_Test::setUp()
        
        $this->userManagerDB = new UserManagerDB(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated UserManagerDB_Test::tearDown()
        $this->userManagerDB = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests UserManagerDB::fillUser()
     */
    public function testFillUser()
    {
        // TODO Auto-generated UserManagerDB_Test::testFillUser()
        $this->markTestIncomplete("fillUser test not implemented");
        
        UserManagerDB::fillUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::fillAdmin()
     */
    public function testFillAdmin()
    {
        // TODO Auto-generated UserManagerDB_Test::testFillAdmin()
        $this->markTestIncomplete("fillAdmin test not implemented");
        
        UserManagerDB::fillAdmin(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByEmailPassword()
     */
    public function testGetUserByEmailPassword()
    {
        // TODO Auto-generated UserManagerDB_Test::testGetUserByEmailPassword()
        $this->markTestIncomplete("getUserByEmailPassword test not implemented");
        
        UserManagerDB::getUserByEmailPassword(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByEmail()
     */
    public function testGetUserByEmail()
    {
        // TODO Auto-generated UserManagerDB_Test::testGetUserByEmail()
        $this->markTestIncomplete("getUserByEmail test not implemented");
        
        UserManagerDB::getUserByEmail(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUser()
     */
    public function testGetUser()
    {
        // TODO Auto-generated UserManagerDB_Test::testGetUser()
        $this->markTestIncomplete("getUser test not implemented");
        
        UserManagerDB::getUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::saveUser()
     */
    public function testSaveUser()
    {
        // TODO Auto-generated UserManagerDB_Test::testSaveUser()
        $this->markTestIncomplete("saveUser test not implemented");
        
        UserManagerDB::saveUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::updateUser()
     */
    public function testUpdateUser()
    {
        // TODO Auto-generated UserManagerDB_Test::testUpdateUser()
        $this->markTestIncomplete("updateUser test not implemented");
        
        UserManagerDB::updateUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::updatePassword()
     */
    public function testUpdatePassword()
    {
        // TODO Auto-generated UserManagerDB_Test::testUpdatePassword()
        $this->markTestIncomplete("updatePassword test not implemented");
        
        UserManagerDB::updatePassword(/* parameters */);
    }

    /**
     * Tests UserManagerDB::deleteUser()
     */
    public function testDeleteUser()
    {
        // TODO Auto-generated UserManagerDB_Test::testDeleteUser()
        $this->markTestIncomplete("deleteUser test not implemented");
        
        UserManagerDB::deleteUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getAllUsers()
     */
    public function testGetAllUsers()
    {
        // TODO Auto-generated UserManagerDB_Test::testGetAllUsers()
        $this->markTestIncomplete("getAllUsers test not implemented");
        
        UserManagerDB::getAllUsers(/* parameters */);
    }
}

