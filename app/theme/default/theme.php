<?php 
// maybe this should extend not theme, but an actuall theme specific class. later later...
// the Class name should be {ThemeName}AppTheme
class DefaultAppTheme extends AppTheme 
{
	// allow themes to override strings.
	public function str($str)
	{
		switch($str) {
			// put in overrides here.
			case 'Your session has expired.': return "You session has just expired.";
			default: return parent::theme_str($str);
		}
	}
}