<?php
/* Copyright (C) 2009 Winch Gate Property Limited
 *
 * This file is part of ryzom_api.
 * ryzom_api is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * ryzom_api is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with ryzom_api.  If not, see <http://www.gnu.org/licenses/>.
 */

// return the tick for a specific shard
function ryzom_time_tick($shardid) {
	return file_get_contents(ryzom_api_base_url()."time.php?shardid=$shardid");
}

/**
 * Takes a computed ryzom time array and returns a SimpleXMLElement
 */
function ryzom_time_xml($rytime) {
	return ryzom_time_xml_without_cache($rytime);
}

?>