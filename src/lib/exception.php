<?php
	/*
	OpenCore; The open source social network
	Copyright (C) 2016  David Green

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
	*/
	require_once 'db.php';

	class Exception {
		public const $TYPE = "General";
		public $message;
		public $source;
		public $time;

		public function displayMessage(){
			return 'There was an exception with the message: ' . $message . '; OF TYPE: '. $TYPE . ' AT: ' . $source . '; WHEN: ' . $time . PHP_EOL;
		}

		public function storeMessage(){
			if($TYPE != "DatabaseException"){
				//TODO: Create a custom database function.
			}
		}
	}

	class DatabaseException extends Exception {
		public const $TYPE = "Database";
	}
?>
