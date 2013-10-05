<?php
use Jenssegers\Model\Model;

class Content extends Model {

	protected static $folder = 'content';

	public static function all()
	{
		// Get content files
		$files = File::files(base_path() . '/' . self::$folder);

		$models = array();

		// Loop all files
		foreach ($files as $file)
		{
			// Create block id based on file name
			$id = basename($file, '.md');
			$id = preg_replace('#[0-9]+-#', '', $id);
			$id = str_replace(' ', '-', $id);
			$id = strtolower($id);

			// Create a new model
			$model = new self;
			$model->id = $id;
			$model->raw = File::get($file);

			$models[] = $model;
		}

		return $models;
	}

	public function getHtmlAttribute($value)
	{
		// Check if parsed already
		if ($value) return $value;

		// Parse content to html
		$this->attributes['html'] = Parsedown::instance()->parse($this->raw);

		return $this->attributes['html'];
	}

	public function getTitleAttribute($value)
	{
		// Get first h1
		preg_match('#<h1[^>]*>([^>]+)</h1>#', $this->html, $matches);

		return strip_tags($matches[1]);
	}

}
