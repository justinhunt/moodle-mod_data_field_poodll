<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 *
 * @package   datafield_poodll
 * @copyright 2018 Justin Hunt {@link http://www.poodll.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


namespace datafield_poodll;

defined('MOODLE_INTERNAL') || die();

class constants
{


const M_COMPONENT='datafield_poodll';
const M_FILEAREA = 'submissions_cloudpoodll';
const M_SUBPLUGIN='poodll';

const REC_AUDIO = 0;
const REC_VIDEO = 1;
const REC_AUDIOMP3 = 2; //deprecated
const REC_WHITEBOARDSIMPLE = 3;
const REC_WHITEBOARDFULL = 4;
const REC_SNAPSHOT = 5;

}