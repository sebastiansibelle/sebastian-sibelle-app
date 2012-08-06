<?php
/**
 * The Class name should be {ThemeName}AppTheme
 */
class DefaultAppTheme extends AppTheme 
{
	// allow themes to override strings.
	public function str($str)
	{
		switch($str) {
			// put in overrides here.
			case 'Your session has expired.': return "You session has just expired.";
			default: return parent::str($str);
		}
	}
}