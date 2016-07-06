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
	require_once 'generator.php';

	class App{
		private $appName;
		private $appVersion;

		//Constructor
		public __construct() {
			//Open database

			//TODO: Brainstorm what session variables to look for.
			//if session profile variable exist
				//get session entry based off session ID
				//if not expired
					//if type is session
						//generate feed page
					//else
						//generate logon page
				//else
					//generate logon page
			//else if cookie variables exist
				//get session entry based off cookie's session ID
				//if not expired
					//if type is cookie
						//create session variables
						//generate feed page
					//else
						//generate logon page
				//else
					//generate logon page
			//else
				//generate logon page
		}
	}
?>
