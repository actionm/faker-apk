<?php

namespace Faker\Provider;

class Apk extends Base
{

    /**
     * Generate APK package name
     * @return string
     */
    public function ApkPackageName()
    {

        switch ($this->numberBetween(1, 3)) {
            case 1:
                return sprintf('%s.%s.%s',
                    $this->generator->tld, $this->generator->domainWord, $this->generator->domainWord);
                break;
            case 2:
                return sprintf('%s.%s.%s.%s', $this->generator->tld,
                    $this->generator->domainWord, $this->generator->domainWord, $this->generator->domainWord);
                break;
            case 3:
                return sprintf('%s.%s.%s.%s.%s',
                    $this->generator->tld, $this->generator->domainWord, $this->generator->domainWord,
                    $this->generator->domainWord, $this->generator->domainWord);
                break;
        }
    }

    /**
     * Generate APK package versionCode
     * @return int
     */
    public function ApkVersionCode()
    {

        return $this->generator->randomNumber(5) . $this->generator->randomNumber(5);
    }

    /**
     * Generate APK package versionName
     * @return mixed
     */
    public function ApkVersionName()
    {

        switch ($this->numberBetween(1, 3)) {
            case 1:
                return sprintf('%s.%s',
                    $this->generator->randomNumber(2), $this->generator->randomNumber(2));
                break;
            case 2:
                return sprintf('%s.%s.%s',
                    $this->generator->randomNumber(2), $this->generator->randomNumber(2),
                    $this->generator->randomNumber(2));
                break;
            case 3:
                return sprintf('%s.%s.%s.%s',
                    $this->generator->randomNumber(2), $this->generator->randomNumber(2),
                    $this->generator->randomNumber(2), $this->generator->randomNumber(2));
                break;
        }
    }

    /**
     * Generate APK package platformBuildVersionName
     * @return mixed
     */
    public function ApkPlatformBuildVersionName()
    {
        return $this->ApkVersionName();
    }

    /**
     * Generate APK package compileSdkVersion
     * @return int
     */
    public function ApkCompileSdkVersion()
    {
        return $this->generator->randomNumber(2);
    }

    /**
     * Generate APK package compileSdkVersionCodename
     * @return int
     */
    public function ApkCompileSdkVersionCodename()
    {
        return $this->generator->randomNumber(1);
    }

    /**
     * Generate APK package sdkVersion
     * @return int
     */
    public function ApkSdkVersion()
    {
        return $this->generator->randomNumber(2);
    }

    /**
     * Generate APK package targetSdkVersion
     * @return int
     */
    public function ApkTargetSdkVersion()
    {
        return $this->generator->randomNumber(2);
    }

    /**
     * Generate APK package launchable-activity
     * @return string
     */
    public function ApkLaunchableActivity()
    {
        return $this->ApkPackageName() . '.Activity' . $this->randomElement($array = array('Main', 'Game', 'App'));
    }

    /**
     * Generate APK package application-label
     * @return string
     */
    public function ApkApplicationLabel()
    {
        return $this->generator->lastName;
    }


    /**
     * Generate APK package supports-screens
     * @return array
     */
    public function ApkSupportsScreens()
    {
        $arr = array('small', 'normal', 'large', 'xlarge');
        return $this->randomElements($arr, rand(1,count($arr)));
    }

    /**
     * Generate APK package compatible-screens
     * @return array
     */
    public function ApkCompatibleScreens()
    {
        $arr = array('200/560', '300/560', '400/560', '500/560', '200/640', '300/640', '400/640', '500/640');
        return $this->randomElements($arr, rand(1, count($arr)));
    }

    /**
     * Generate APK package locales
     * @return array
     */
    public function ApkLocales()
    {
        $arr = array(
            '--_--',
            'af', 'ar', 'as', 'az', 'bg', 'bn', 'bs', 'ca', 'cb', 'cs', 'cx', 'da', 'de', 'el', 'en', 'en-GB', 'es',
            'es-ES', 'et', 'fa', 'fb', 'fb-LL', 'fi', 'fr', 'fr-CA', 'gn', 'gu', 'ha', 'hi', 'hr', 'hu', 'in', 'is',
            'it', 'iw', 'ja', 'jv', 'ka', 'km', 'kn', 'ko', 'lo', 'lt', 'lv', 'mg', 'mk', 'ml', 'mn', 'mr', 'ms', 'my',
            'nb', 'ne', 'nl', 'pa', 'pl', 'pt', 'pt-PT', 'qz', 'ro', 'ru', 'rw', 'si', 'sk', 'sl', 'sn', 'sq', 'sr',
            'sv', 'sw', 'ta', 'te', 'th', 'tl', 'tr', 'uk', 'ur', 'vi', 'zh-CN', 'zh-HK', 'zh-TW'
        );
        return $this->randomElements($arr, rand(1,count($arr)));
    }


    /**
     * Generate APK package densities
     * @return array
     */
    public function ApkDensities()
    {
        $arr = array('120', '160', '213', '240', '320', '480', '640');
        return $this->randomElements($arr, rand(1,count($arr)));
    }


    /**
     * Generate APK package native-code
     * @return string
     */
    public function ApkNativeCode()
    {
        return $this->randomElement(array('arm64-v8a', 'armeabi-v7a' ));
    }

    /**
     * Generate APK package uses-permission
     * @return array
     */
    public function ApkUsesPermission()
    {

        $arr = array(
            'android.permission.ACCESS_COARSE_LOCATION',
            'android.permission.WAKE_LOCK',
            'android.permission.VIBRATE',
            'android.permission.READ_CONTACTS',
            'android.permission.WRITE_CONTACTS',
            'android.permission.GET_ACCOUNTS',
            'android.permission.MANAGE_ACCOUNTS',
            'android.permission.AUTHENTICATE_ACCOUNTS',
            'android.permission.READ_SYNC_SETTINGS',
            'android.permission.WRITE_SYNC_SETTINGS',
            'android.permission.ACCESS_FINE_LOCATION',
            'android.permission.ACCESS_NETWORK_STATE',
            'android.permission.BROADCAST_STICKY',
            'android.permission.DOWNLOAD_WITHOUT_NOTIFICATION',
            'android.permission.NFC',
            'android.permission.CAMERA',
            'android.permission.RECORD_AUDIO',
            'android.permission.WRITE_EXTERNAL_STORAGE',
            'android.permission.READ_PHONE_STATE',
            'android.permission.READ_CALENDAR',
            'android.permission.WRITE_CALENDAR',
            'android.permission.MODIFY_AUDIO_SETTINGS',
            'android.permission.READ_PROFILE',
            'android.permission.CHANGE_NETWORK_STATE',
            'android.permission.CHANGE_WIFI_STATE',
            'android.permission.SYSTEM_ALERT_WINDOW',
            'com.google.android.providers.gsf.permission.READ_GSERVICES',
            'android.permission.RECEIVE_BOOT_COMPLETED',
            'android.permission.GET_TASKS',
            'android.permission.INTERNET',
            'com.google.android.c2dm.permission.RECEIVE',
            'android.permission.READ_EXTERNAL_STORAGE',
            'android.permission.REQUEST_INSTALL_PACKAGES',
            'android.permission.BATTERY_STATS',
            'android.permission.ACCESS_WIFI_STATE',
            'com.android.launcher.permission.INSTALL_SHORTCUT',
            'com.sec.android.provider.badge.permission.READ',
            'com.sec.android.provider.badge.permission.WRITE',
            'android.permission.FOREGROUND_SERVICE',
        );

        return $this->randomElements($arr, rand(1,count($arr)));
    }

    /**
     * Generate APK package filename
     * @return string
     */
    public function ApkFilename() {
        return $this->generator->word. '.apk';
    }


    /**
     * Generate fake output from AAPT tool
     * http://manpages.org/aapt
     * Command: aapt dump badging ./test.apk
     *
     * AAPT2 tool
     * https://developer.android.com/studio/command-line/aapt2
     * Command: aapt2 dump badging ./test.apk
     *
     * @return string
     */
    public function ApkGenerateFakeAAPT() {

        $package_name = $this->ApkPackageName();
        $version_code = $this->ApkVersionCode();
        $version_name = $this->ApkVersionName();


        $compatible_screens_arr = $this->ApkCompatibleScreens();
        $compatible_screens = '';
        foreach ($compatible_screens_arr as $val) {
            $compatible_screens .= "'$val',";
        }
        $compatible_screens = substr($compatible_screens,0,-1);

        $sdk_version = $this->ApkSdkVersion();


        // Generate line: uses-permission-sdk-23: name='android.permission.USE_FINGERPRINT'
        $rand_sdk_version = $this->ApkSdkVersion();
        $uses_permissions_arr = $this->ApkUsesPermission();
        $uses_permissions_sdk = '';
        foreach ($uses_permissions_arr as $val) {
            $uses_permissions_sdk .= "uses-permission-sdk-".$rand_sdk_version.": name='$val'"."\n";
        }
        $uses_permissions_sdk = substr($uses_permissions_sdk,0,-1);


        // Generate line: uses-permission: name='android.permission.WRITE_SYNC_SETTINGS'
        $uses_permissions_arr = $this->ApkUsesPermission();
        $uses_permissions = '';
        foreach ($uses_permissions_arr as $val) {
            $uses_permissions .= "uses-permission: name='$val'"."\n";
        }
        $uses_permissions = substr($uses_permissions,0,-1);


        $appLabel = $this->ApkApplicationLabel();



        $supports_screens_arr = $this->ApkSupportsScreens();
        $supports_screens = '';
        foreach ($supports_screens_arr as $val) {
            $supports_screens .= " '$val'";
        }

        // Generate line: application-label-ca:'AppLabel'
        $application_locales_arr = $this->ApkLocales();


        $application_labels = '';
        foreach ($application_locales_arr as $val) {
            if ($val == '--_--:') continue;
            $application_labels .= "application-label-$val:'$appLabel'"."\n";
        }
        $application_labels = substr($application_labels,0,-1);


        $application_locales = '';
        foreach ($application_locales_arr as $val) {
            $application_locales .= " '$val'";
        }

        $densities_arr = $this->ApkDensities();
        $densities = '';
        foreach ($densities_arr as $val) {
            $densities .= " '$val'";
        }

        $native_code = $this->ApkNativeCode();



        $output = <<<AAPT_OUTPUT
package: name='$package_name' versionCode='$version_code' versionName='$version_name'
install-location:'auto'
compatible-screens:$compatible_screens
sdkVersion:'$sdk_version'
targetSdkVersion:'$sdk_version'
$uses_permissions_sdk
$uses_permissions
application-label:'$appLabel'
$application_labels
application-icon-160:'r/go.xml'
application-icon-240:'r/go.xml'
application-icon-320:'r/go.xml'
application-icon-480:'r/go.xml'
application-icon-640:'r/go.xml'
application: label='$appLabel' icon='r/go.xml'
uses-library-not-required:'org.apache.http.legacy'
uses-library-not-required:'com.amazon.device.messaging'
feature-group: label=''
  uses-gl-es: '0x20000'
  uses-feature-not-required: name='android.hardware.camera'
  uses-feature-not-required: name='android.hardware.camera.autofocus'
  uses-feature-not-required: name='android.hardware.camera.front'
  uses-feature-not-required: name='android.hardware.location'
  uses-feature-not-required: name='android.hardware.location.gps'
  uses-feature-not-required: name='android.hardware.location.network'
  uses-feature-not-required: name='android.hardware.microphone'
  uses-feature-not-required: name='android.hardware.telephony'
  uses-feature-not-required: name='android.hardware.wifi'
  uses-feature-sdk-23: name='android.hardware.bluetooth'
  uses-implied-feature-sdk-23: name='android.hardware.bluetooth' reason='requested android.permission.BLUETOOTH permission, requested android.permission.BLUETOOTH_ADMIN permission, and targetSdkVersion > 4'
  uses-feature: name='android.hardware.faketouch'
  uses-implied-feature: name='android.hardware.faketouch' reason='default feature for all apps'
  uses-feature: name='android.hardware.screen.landscape'
  uses-implied-feature: name='android.hardware.screen.landscape' reason='one or more activities have specified a landscape orientation'
  uses-feature: name='android.hardware.screen.portrait'
  uses-implied-feature: name='android.hardware.screen.portrait' reason='one or more activities have specified a portrait orientation'
provides-component:'wallpaper'
other-activities
other-receivers
other-services
supports-screens:$supports_screens
supports-any-density: 'true'
locales:$application_locales
densities:$densities
native-code: '$native_code'

AAPT_OUTPUT;

        return $output;

    }

}