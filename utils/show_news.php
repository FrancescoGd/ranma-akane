<?php
/**
 * Legge le news dalla relativa cartella e ne restituisce l'HTML già preparato e formattato
 *
 * @version 2.0
 * @author Nibunnoichi aka Peter Pepper <inuyaksa@geocities.com>
 * @copyright Nibunnoichi aka Peter Pepper <inuyaksa@geocities.com>
 *
 */

//Per sicurezza ripulisco tutto...
require_once 'libs/HTMLPurifier/library/HTMLPurifier.auto.php';

$newsList = array();
$dir = 'newstext/';

if (is_dir($dir)) {
	if ($dh = @opendir($dir)) {

		$HTMLPurifierConfig = HTMLPurifier_Config::createDefault();
		$HTMLPurifierInstance = new HTMLPurifier($HTMLPurifierConfig);

		while (($file = @readdir($dh)) !== false) {
			//Faccio qualche controllo basico di sicurezza per verificare se sto realmente leggendo la cartella  e i file che voglio leggere
			if (@realpath($dir) === @realpath(@dirname($dir . $file)) && @is_file($dir . $file)
			&& strlen($file) == 12 && is_numeric(substr($file, 0, 8)) && substr($file, -4) == '.txt') {
				$HTMLFileContent = @file_get_contents($dir . $file);

				$newsList[substr($file, 0, 8)] =
				'<div style="border: 1px solid #cdcdcd;padding: 0.3em;margin: 0 auto;text-align: left;">'
				. '<img src="images/rondella.gif" align="absmiddle" width="20" height="20" />'
				. '<strong>&nbsp;' . substr($file, 6, 2) . '/' . substr($file, 4, 2) . '/' . substr($file, 0, 4) . '</strong><br />'
				. '<span style="padding-left: 16px;border-left: none;background: #ffffff url(images/inside_border_bkg.gif) left repeat-y;margin-top: 3px;border-top: 1px solid #cdcdcd;background-color: #ffffc0;display: block;">'
				. $HTMLPurifierInstance->purify($HTMLFileContent)
				. '</span>'
				. "</div><br>\r\n";

			} //if (@realpath($dir)

        } //while (($file = @readdir($dh)) !== false)
        closedir($dh);
        krsort($newsList);
        reset($newsList);
		foreach ($newsList as $data => $testo) {
			echo $testo;
		}
    }
}

?>