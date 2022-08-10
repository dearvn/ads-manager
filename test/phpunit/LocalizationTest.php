<?php
declare(strict_types=1);
namespace Dearvn\Ads_manager\Test;

use Dearvn\Utils\Assets;
use Dearvn\Utils\Localization as UtilsLocalization;
use Dearvn\Ads_manager\Localization;
use Mockery;
use Mockery\MockInterface;
use ReflectionMethod;
use WP_Mock;
use WP_Mock\Tools\TestCase;

final class LocalizationTest extends TestCase {
    /** @var MockInterface|Localization */
    private $localization;

    public function setUp(): void {
        parent::setUp();
        $this->localization = Mockery::mock(Localization::class);
    }

    public function testOverride() {
        $locale = 'de_DE';
        $should = 'de_DE';

        $this->localization
            ->shouldAllowMockingProtectedMethods()
            ->shouldReceive('override')
            ->passthru();

        $method = new ReflectionMethod(Localization::class, 'override');
        $method->setAccessible(true);
        $actual = $method->invoke($this->localization, $locale);

        $this->assertEquals($should, $actual);
    }

    public function testGetPackageInfoBackend() {
        $should = [null, PHPUNIT_TD];

        WP_Mock::userFunction('path_join', [
            'args' => [PHPUNIT_PATH, 'languages'],
            'return' => null
        ]);

        $method = new ReflectionMethod(Localization::class, 'getPackageInfo');
        $method->setAccessible(true);
        $actual = $method->invoke($this->localization, UtilsLocalization::$PACKAGE_INFO_BACKEND);

        $this->assertEquals($should, $actual);
    }

    public function testGetPackageInfoFrontend() {
        $should = [null, PHPUNIT_TD];

        WP_Mock::userFunction('path_join', [
            'args' => [PHPUNIT_PATH, Assets::$PUBLIC_JSON_I18N],
            'return' => null
        ]);

        $method = new ReflectionMethod(Localization::class, 'getPackageInfo');
        $method->setAccessible(true);
        $actual = $method->invoke($this->localization, UtilsLocalization::$PACKAGE_INFO_FRONTEND);

        $this->assertEquals($should, $actual);
    }
}
