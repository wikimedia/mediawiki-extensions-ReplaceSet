<?php
/**
 * ReplaceSet extension
 *
 * @file
 * @defgroup ReplaceSet
 * @package MediaWiki
 * @author Daniel Friesen (https://www.mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @copyright Copyright © 2009-2012 – Daniel Friesen
 * @link https://www.mediawiki.org/wiki/Extension:ReplaceSet Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'ReplaceSet',
	'url' => 'https://www.mediawiki.org/wiki/Extension:ReplaceSet',
	'version' => '1.2',
	'author' => "[https://www.mediawiki.org/wiki/User:Dantman Daniel Friesen]",
	'descriptionmsg' => 'replaceset-desc',
);

$wgHooks['ParserFirstCallInit'][] = 'efReplaceSetRegisterParser';

$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['ReplaceSet'] = $dir . 'ReplaceSet.class.php';
$wgExtensionMessagesFiles['ReplaceSet'] = $dir . 'ReplaceSet.i18n.php';
$wgExtensionMessagesFiles['ReplaceSetMagic'] = $dir . 'ReplaceSet.i18n.magic.php';

function efReplaceSetRegisterParser( &$parser ) {
	$parser->setFunctionHook( 'replaceset', array( 'ReplaceSet', 'parserFunction' ) );
	return true;
}

/*************************************************************************//**
 * @name   ReplaceSet configuration settings
 * @{
 */

/**
 * Max number of {{#replaceset:}} calls in a page.
 */
$egReplaceSetCallLimit = 25;

/**
 * Max number of replacements preg will make in a single string.
 */
$egReplaceSetPregLimit = 50;

/** @} */
