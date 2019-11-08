
APK Provider for Faker
---

This package will allow [Faker](https://github.com/fzaninotto/Faker) to generate
fake APK package info fields which generate [AAPT or AAPT2](https://developer.android.com/studio/command-line/aapt2) tool with command:

```
./aapt dump badging ./test.apk
```
                                                 

[![Build Status](https://travis-ci.org/aalaap/faker-youtube.svg?branch=master)](https://travis-ci.org/aalaap/faker-youtube)

## Install

To install, use composer:

```bash
composer require actionm/faker-apk
```

## Use

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new Faker\Provider\Apk($faker));
```

```php
$faker->ApkPackageName()
/*
 com.example.example  
 com.example.example.example 
 com.example.example.example.example
*/

$faker->ApkVersionCode()
// 12345

$faker->ApkVersionName()
/*
 12.12
 12.12.12
 12.12.12.12
*/ 

$faker->ApkPlatformBuildVersionName()
/*
 12.12
 12.12.12
 12.12.12.12
*/

$faker->ApkCompileSdkVersion()
// 12

$faker->ApkCompileSdkVersionCodename()
// 1

$faker->ApkSdkVersion()
// 12

$faker->ApkTargetSdkVersion()
// 12

$faker->ApkLaunchableActivity()
/*
 com.example.example.ActivityMain  
 com.example.example.example.ActivityMain 
 com.example.example.example.example.ActivityMain
*/

$faker->ApkApplicationLabel()
// $faker->generator->lastName

$faker->ApkSupportsScreens()
// array with random values ('small', 'normal', 'large', 'xlarge')

$faker->ApkCompatibleScreens()
// array with random values ('200/560', '300/560', '400/560', '500/560', '200/640', '300/640', '400/640', '500/640')

$faker->ApkLocales()
/* 
array with random values (  '--_--',
  'af', 'ar', 'as', 'az', 'bg', 'bn', 'bs', 'ca', 'cb', 'cs', 'cx', 'da', 'de', 'el', 'en', 'en-GB', 'es',
  'es-ES', 'et', 'fa', 'fb', 'fb-LL', 'fi', 'fr', 'fr-CA', 'gn', 'gu', 'ha', 'hi', 'hr', 'hu', 'in', 'is',
  'it', 'iw', 'ja', 'jv', 'ka', 'km', 'kn', 'ko', 'lo', 'lt', 'lv', 'mg', 'mk', 'ml', 'mn', 'mr', 'ms', 'my',
  'nb', 'ne', 'nl', 'pa', 'pl', 'pt', 'pt-PT', 'qz', 'ro', 'ru', 'rw', 'si', 'sk', 'sl', 'sn', 'sq', 'sr',
  'sv', 'sw', 'ta', 'te', 'th', 'tl', 'tr', 'uk', 'ur', 'vi', 'zh-CN', 'zh-HK', 'zh-TW')
*/

$faker->ApkDensities()
// array with random values ('120', '160', '213', '240', '320', '480', '640')

$faker->ApkNativeCode()
// 'arm64-v8a' or 'armeabi-v7a'

$faker->ApkUsesPermission()
/*
array with random values (
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
    'android.permission.FOREGROUND_SERVICE'
)
*/

$faker->ApkFilename()
// word.apk

$faker->ApkGenerateFakeAAPT()

/*
Fake output from AAPT tool:

package: name='com.schmidt.mccullough.mosciski.weissnat' versionCode='4097567761' versionName='28.9.22.70'
install-location:'auto'
compatible-screens:'200/640','200/560','400/640','300/560'
sdkVersion:'29'
targetSdkVersion:'29'
uses-permission-sdk-61: name='android.permission.ACCESS_NETWORK_STATE'
uses-permission-sdk-61: name='android.permission.WRITE_CALENDAR'
uses-permission-sdk-61: name='android.permission.BATTERY_STATS'
uses-permission: name='android.permission.BROADCAST_STICKY'
uses-permission: name='android.permission.CHANGE_NETWORK_STATE'
uses-permission: name='android.permission.READ_EXTERNAL_STORAGE'
uses-permission: name='com.android.launcher.permission.INSTALL_SHORTCUT'
uses-permission: name='android.permission.WRITE_CALENDAR'
uses-permission: name='com.google.android.c2dm.permission.RECEIVE'
uses-permission: name='android.permission.DOWNLOAD_WITHOUT_NOTIFICATION'
uses-permission: name='android.permission.CAMERA'
uses-permission: name='android.permission.FOREGROUND_SERVICE'
uses-permission: name='android.permission.ACCESS_NETWORK_STATE'
uses-permission: name='android.permission.GET_ACCOUNTS'
uses-permission: name='android.permission.SYSTEM_ALERT_WINDOW'
uses-permission: name='android.permission.INTERNET'
uses-permission: name='com.google.android.providers.gsf.permission.READ_GSERVICES'
uses-permission: name='android.permission.RECORD_AUDIO'
uses-permission: name='android.permission.VIBRATE'
uses-permission: name='android.permission.NFC'
uses-permission: name='android.permission.READ_PROFILE'
uses-permission: name='android.permission.REQUEST_INSTALL_PACKAGES'
uses-permission: name='android.permission.GET_TASKS'
uses-permission: name='android.permission.WRITE_CONTACTS'
uses-permission: name='com.sec.android.provider.badge.permission.WRITE'
uses-permission: name='android.permission.WRITE_EXTERNAL_STORAGE'
uses-permission: name='android.permission.BATTERY_STATS'
uses-permission: name='android.permission.ACCESS_WIFI_STATE'
application-label:'Marks'
application-label-si:'Marks'
application-label-th:'Marks'
application-label-sl:'Marks'
application-label-ro:'Marks'
application-label-el:'Marks'
application-label-pt-PT:'Marks'
application-label-ne:'Marks'
application-label-lo:'Marks'
application-label-ca:'Marks'
application-label-az:'Marks'
application-label-ml:'Marks'
application-icon-160:'r/go.xml'
application-icon-240:'r/go.xml'
application-icon-320:'r/go.xml'
application-icon-480:'r/go.xml'
application-icon-640:'r/go.xml'
application: label='Marks' icon='r/go.xml'
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
supports-screens: 'large' 'small'
supports-any-density: 'true'
locales: 'si' 'th' 'sl' 'ro' 'el' 'pt-PT' 'ne' 'lo' 'ca' 'az' 'ml'
densities: '120'
native-code: 'armeabi-v7a'
*/

```

## License

This package is under the MIT license.

[LICENSE](https://github.com/actionm/faker-apk/LICENSE)

## Reporting an issue or a feature request

Fork it, send a PR. Issues and feature requests are tracked in the
[GitHub issue tracker](https://github.com/actionm/faker-apk/issues).