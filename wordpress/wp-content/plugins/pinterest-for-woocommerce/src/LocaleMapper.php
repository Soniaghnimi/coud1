<?php
/**
 * Pinterest for WooCommerce locale mapping class.
 *
 * @package Pinterest_For_WooCommerce/Classes/
 * @version 1.2.13
 */

namespace Automattic\WooCommerce\Pinterest;

defined( 'ABSPATH' ) || exit;

use Automattic\WooCommerce\Pinterest\Exception\PinterestApiLocaleException;

/**
 * Class LocaleMapper.
 *
 * This class maps WooCommerce locale codes to Pinterest locale codes.
 * Pinterest API uses a different set of locale codes than WordPress.
 * Most of the time, the locale codes are the same, but there are some exceptions.
 * Like for example German Standard is de_DE in WordPress, but de in Pinterest.
 *
 * @since 1.2.13
 */
class LocaleMapper {

	/**
	 * Pinterest locale codes.
	 * Locales have been collected on 01.02.2023 from Pinterest API response message.
	 */
	const PINTEREST_LOCALE_CODES = array(
		'it'     => 1,
		'es-419' => 1,
		'ru-RU'  => 1,
		'hu-HU'  => 1,
		'hr-HR'  => 1,
		'sv-SE'  => 1,
		'de'     => 1,
		'nb-NO'  => 1,
		'th-TH'  => 1,
		'sk-SK'  => 1,
		'ro-RO'  => 1,
		'es-MX'  => 1,
		'uk-UA'  => 1,
		'nl'     => 1,
		'en-AU'  => 1,
		'he-IL'  => 1,
		'tr'     => 1,
		'es-ES'  => 1,
		'pl-PL'  => 1,
		'cs-CZ'  => 1,
		'en-CA'  => 1,
		'fi-FI'  => 1,
		'pt-PT'  => 1,
		'el-GR'  => 1,
		'ja'     => 1,
		'ar-SA'  => 1,
		'fr-CA'  => 1,
		'en-GB'  => 1,
		'es-AR'  => 1,
		'da-DK'  => 1,
		'zh-CN'  => 1,
		'en-US'  => 1,
		'vi-VN'  => 1,
		'id-ID'  => 1,
		'bg-BG'  => 1,
		'zh-TW'  => 1,
		'en-IN'  => 1,
		'tl-PH'  => 1,
		'ko-KR'  => 1,
		'af-ZA'  => 1,
		'ms-MY'  => 1,
		'bn-IN'  => 1,
		'te-IN'  => 1,
		'fr'     => 1,
		'hi-IN'  => 1,
		'pt-BR'  => 1,
	);

	const PINTEREST_DEFAULT_LOCALE = 'en-US';

	/**
	 * Get Pinterest locale code for API.
	 * Pinterest API uses hyphens instead of underscores in locale codes so we need to replace them.
	 *
	 * @since 1.2.13
	 * @return string
	 * @throws PinterestApiLocaleException If no matching locale code is found.
	 */
	public static function get_locale_for_api(): string {
		$locale = self::get_wordpress_locale();

		// If the locale is in the list of Pinterest locales, return it.
		if ( array_key_exists( $locale, self::PINTEREST_LOCALE_CODES ) ) {
			return $locale;
		}

		// If the locale is not in the list of Pinterest locales, try to find a match for just the language code.
		[ $language ] = explode( '-', $locale );

		if ( array_key_exists( $language, self::PINTEREST_LOCALE_CODES ) ) {
			return $language;
		}

		// If no match was found, throw an exception.
		throw new PinterestApiLocaleException(
			sprintf(
				// translators: %s is the locale code.
				esc_html__( 'No matching Pinterest API locale found for %s', 'pinterest-for-woocommerce' ),
				esc_html( $locale )
			)
		);
	}

	/**
	 * Get WordPress locale code.
	 * WordPress defaults to en_US locale if nothing is found.
	 *
	 * @since 1.2.13
	 * @return string
	 */
	private static function get_wordpress_locale() {
		// Using `WPLANG` instead `get_locale()` since the last may return inconsistent results depending on the user session language.
		$wordpress_locale = get_option( 'WPLANG', self::PINTEREST_DEFAULT_LOCALE );
		return str_replace( '_', '-', $wordpress_locale );
	}
}
