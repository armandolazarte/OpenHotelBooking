<?php

class Setting extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'setting';

	/**
	 * The primary key for the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'name';

	/**
	 * Gets value of a setting
	 *
	 * @param  string $name Name of the setting
	 *
	 * @return string       Value of the setting
	 */
	public static function get($name)
	{
		$setting = Setting::find($name);
		if (!$setting) {
			return null;
		}

		return $setting->value;
	}

	/**
	 * Update the settings in mass
	 *
	 * @param  array   $settingsToUpdate Setting name => value array
	 *
	 * @return integer Number of settings that were affected
	 */
	public static function massUpdate($settingsToUpdate)
	{
		$affected = 0;

		foreach ($settingsToUpdate as $name => $value) {
			$setting = Setting::find($name);
			if (!$setting) {
				continue;
			}

			// Only update if there is a difference
			if ($setting->value != $value
				&& $setting->save()
			) {
				$affected++;
			}
		}

		return $affected;
	}
}
