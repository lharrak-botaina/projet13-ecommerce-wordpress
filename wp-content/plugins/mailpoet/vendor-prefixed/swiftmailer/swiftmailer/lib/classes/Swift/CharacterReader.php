<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_CharacterReader
{
 const MAP_TYPE_INVALID = 0x1;
 const MAP_TYPE_FIXED_LEN = 0x2;
 const MAP_TYPE_POSITIONS = 0x3;
 public function getCharPositions($string, $startOffset, &$currentMap, &$ignoredChars);
 public function getMapType();
 public function validateByteSequence($bytes, $size);
 public function getInitialByteSize();
}
