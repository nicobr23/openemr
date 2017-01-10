<?php
/** @package Openemr::Model::DAO */

/**
 *
 * Copyright (C) 2016-2017 Jerry Padgett <sjpadgett@gmail.com>
 *
 * LICENSE: This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEMR
 * @author Jerry Padgett <sjpadgett@gmail.com>
 * @link http://www.open-emr.org
 */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("OnsiteDocumentMap.php");

/**
 * OnsiteDocumentDAO provides object-oriented access to the onsite_documents table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Openemr::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class OnsiteDocumentDAO extends Phreezable
{
	/** @var int */
	public $Id;

	/** @var int */
	public $Pid;

	/** @var int */
	public $Facility;

	/** @var int */
	public $Provider;

	/** @var int */
	public $Encounter;

	/** @var timestamp */
	public $CreateDate;

	/** @var string */
	public $DocType;

	/** @var int */
	public $PatientSignedStatus;

	/** @var date */
	public $PatientSignedTime;

	/** @var date */
	public $AuthorizeSignedTime;

	/** @var int */
	public $AcceptSignedStatus;

	/** @var string */
	public $AuthorizingSignator;

	/** @var date */
	public $ReviewDate;

	/** @var string */
	public $DenialReason;

	/** @var string */
	public $AuthorizedSignature;

	/** @var string */
	public $PatientSignature;

	/** @var blob */
	public $FullDocument;

	/** @var string */
	public $FileName;

	/** @var string */
	public $FilePath;



}
?>