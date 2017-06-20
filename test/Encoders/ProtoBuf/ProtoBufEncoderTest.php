<?php
namespace Nats\Test\Encoders\ProtoBuf;

use Nats;
use Nats\ConnectionOptions;
use Nats\EncodedConnection;
use Nats\Encoders\ProtoBufEncoder;

/**
 * Class ProtoBufEncoderTest.
 */
class ProtoBufEncoderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Client.
     *
     * @var Nats\Connection Client
     */
    private $c;


    /**
     * SetUp test suite.
     *
     * @return void
     */
    public function setUp()
    {
        $encoder = new ProtoBufEncoder();
        $options = new ConnectionOptions();
        $this->c = new EncodedConnection($options, $encoder);
        $this->c->connect();
    }

    public function testPerson()
    {
        $homer = new Person();
        $homer->setName("Homer");
        $homer->setAge(38);
        $homer->setAddress("742 Evergreen Terrace");

        $bart = new Person();
        $bart->setName("Bart");
        $bart->setAge(9);
        $bart->setAddress("742 Evergreen Terrace");

        $lisa = new Person();
        $lisa->setName("Lisa");
        $lisa->setAge(7);
        $lisa->setAddress("742 Evergreen Terrace");

        $maggie = new Person();
        $maggie->setName("Maggie");
        $maggie->setAge(2);
        $maggie->setAddress("742 Evergreen Terrace");

        $homer->setChildren($bart);
        $homer->setChildren($lisa);
        $homer->setChildren($maggie);

        var_dump($homer);
    }
}
