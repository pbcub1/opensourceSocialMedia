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
	require_once '/../config/config.php';
	require_once 'exception.php';

	class Database {
		private $db_host;
		private $db_user;
		private $db_pass;
		private $db_db;

		public __construct($host, $user, $pass, $db) {
			//If arguments aren't null and are set, use them to open a connection
			if($host != null && $user != null && isset($pass) $db != null){
				$this->open($host, $user, $pass, $db);

			//Else if all the config arguments are set up, use them.
			}else if(DB_USER != null && DB_HOST != null && isset($pass) && DB_DB != null){
				$this->open(DB_HOST, DB_USER, DB_PASS, DB_DB);
			}else{
				//TODO: Fill out and throw an exception of class DatabaseException.
			}
		}

		private function open($host, $user, $pass, $db){

		}
	}
?>
