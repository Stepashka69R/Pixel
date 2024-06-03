<?php
/*
* SiteSEO
* https://siteseo.io/
* (c) SiteSEO Team <support@siteseo.io>
*/

/*
Copyright 2016 - 2024 - Benjamin Denis  (email : contact@seopress.org)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

namespace SiteSEO\Helpers;

if ( ! defined('ABSPATH')) {
	exit;
}

abstract class OpeningHoursHelper {
	public static function getDays() {
		return [
			__('Monday', 'siteseo'),
			__('Tuesday', 'siteseo'),
			__('Wednesday', 'siteseo'),
			__('Thursday', 'siteseo'),
			__('Friday', 'siteseo'),
			__('Saturday', 'siteseo'),
			__('Sunday', 'siteseo'),
		];
	}

	public static function getHours() {
		return ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
	}

	public static function getMinutes() {
		return ['00', '15', '30', '45', '59'];
	}
}
