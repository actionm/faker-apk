<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Apk;
use PHPUnit\Framework\TestCase;

class ApkTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = Factory::create();
        $faker->addProvider(new Apk($faker));
        $this->faker = $faker;
    }

    public function testApkPackageName()
    {
        $this->assertRegExp('#[a-z]{2,255}(\.[a-z]{2,255}){1,4}#', $this->faker->ApkPackageName());
    }

    public function testApkVersionCode()
    {
        $this->assertRegExp('#[0-9]{2,10}#', (string)$this->faker->ApkVersionCode());
    }


    public function testApkVersionName()
    {
        $this->assertRegExp('#[0-9]{1,2}(\.[0-9]{1,2}){1,3}#', $this->faker->ApkVersionName());
    }

    public function testApkPlatformBuildVersionName()
    {
        $this->assertRegExp('#[0-9]{1,2}(\.[0-9]{1,2}){1,3}#', $this->faker->ApkPlatformBuildVersionName());
    }

    public function testApkCompileSdkVersion()
    {
        $this->assertRegExp('#[0-9]{1,2}#', (string)$this->faker->ApkCompileSdkVersion());
    }

    public function testApkCompileSdkVersionCodename()
    {
        $this->assertRegExp('#[0-9]{1}#', (string)$this->faker->ApkCompileSdkVersionCodename());
    }

    public function testApkSdkVersion()
    {
        $this->assertRegExp('#[0-9]{1,2}#', (string)$this->faker->ApkSdkVersion());
    }

    public function testApkTargetSdkVersion()
    {
        $this->assertRegExp('#[0-9]{1,2}#', (string)$this->faker->ApkTargetSdkVersion());
    }

    public function testApkLaunchableActivity()
    {
        $this->assertRegExp('#[a-z]{2,255}(\.[a-z]{2,255}){1,4}\.Activity[A-z]{1,255}#', $this->faker->ApkLaunchableActivity());
    }

    public function testApkApplicationLabel()
    {
        $this->assertRegExp('#[A-z]{1,255}#', $this->faker->ApkApplicationLabel());
    }

    public function testApkSupportsScreens()
    {
        $this->isTrue(
            is_array($this->faker->ApkSupportsScreens())
        );
    }

    public function testApkCompatibleScreens()
    {
        $this->isTrue(
            is_array($this->faker->ApkCompatibleScreens())
        );
    }

    public function testApkLocales()
    {
        $this->isTrue(
            is_array($this->faker->ApkLocales())
        );
    }

    public function testApkDensities()
    {
        $this->isTrue(
            is_array($this->faker->ApkDensities())
        );
    }

    public function testApkNativeCode()
    {
        $this->isTrue(
            in_array($this->faker->ApkNativeCode(), array('arm64-v8a', 'armeabi-v7a'))
        );
    }

    public function testApkUsesPermission()
    {
        $this->isTrue(
            is_array($this->faker->ApkUsesPermission())
        );
    }

    public function testApkFilename()
    {
        $this->assertRegExp('#[A-z]{1,255}\.apk#', $this->faker->ApkFilename());
    }

    public function testApkGenerateFakeAAPT()
    {
        $this->isTrue($this->faker->ApkGenerateFakeAAPT());
    }
}