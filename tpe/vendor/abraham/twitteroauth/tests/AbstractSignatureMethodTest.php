<?php

namespace Abraham\TwitterOAuth\Tests;

use Abraham\TwitterOAuth\SignatureMethod;

abstract class AbstractSignatureMethodTest extends \PHPUnit_Framework_TestCase
{
    protected $name;

    public function testGetName()
    {
        $this->assertEquals($this->name, $this->getClass()->getName());
    }

    /**
     * @return SignatureMethod
     */
    abstract public function getClass();

    /**
     * @dataProvider signatureDataProvider
     */
    public function testBuildSignature($expected, $request, $consumer, $token)
    {
        $this->assertEquals($expected, $this->getClass()->buildSignature($request, $consumer, $token));
    }

    abstract protected function signatureDataProvider();

    protected function getRequest()
    {
        return $this->getMockBuilder('Abraham\TwitterOAuth\Request')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function getConsumer($key = null, $secret = null, $callbackUrl = null)
    {
        return $this->getMockBuilder('Abraham\TwitterOAuth\Consumer')
            ->setConstructorArgs(array($key, $secret, $callbackUrl))
            ->getMock();
    }

    protected function getToken($key = null, $secret = null)
    {
        return $this->getMockBuilder('Abraham\TwitterOAuth\Token')
            ->setConstructorArgs(array($key, $secret))
            ->getMock();
    }
}
