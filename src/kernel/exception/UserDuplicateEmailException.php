<?php
	// Copyright (C) 2017  captaincode
	
	// This program is free software: you can redistribute it and/or modify it
	// under the terms of the GNU General Public License as published by the Free
	// Software Foundation, either version 3 of the License, or (at your option)
	// any later version.
	
	// This program is distributed in the hope that it will be useful, but WITHOUT
	// ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
	// FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
	// more details.
	
	// You should have received a copy of the GNU General Public License along
	// with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	namespace MyApp\Kernel\Exception;

	class UserDuplicateEmailException extends \LogicException{
		private $requested_email;

		public function __construct($message="", $requested_email=""){
			parent::__construct(100, $message, null);
			$this->requested_email = $requested_email;
			$this->message = ($message === "")?printf("The requested email: %s, exists in the database please select another", $this->requested_email):$message;
		}

		public function getRequestedEmail(){
			return $this->requested_email;
		}
	}