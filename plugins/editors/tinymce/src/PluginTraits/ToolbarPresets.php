<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Editors.tinymce
 *
 * @copyright   (C) 2021 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Joomla\Plugin\Editors\TinyMCE\PluginTraits;

\defined('_JEXEC') or die();

/**
 * The ToolbarPresets trait holds the default presets for the toolbar.
 *
 * @since  __DEPLOY_VERSION__
 */
trait ToolbarPresets
{
	/**
	 * Return toolbar presets
	 *
	 * @return array
	 *
	 * @since __DEPLOY_VERSION__
	 */
	public static function getToolbarPreset()
	{
		return [
			'simple' => [
				'menu'     => [],
				'toolbar1' => [
					'bold', 'underline', 'strikethrough', '|',
					'undo', 'redo', '|',
					'bullist', 'numlist', '|',
					'pastetext', 'jxtdbuttons',
				],
				'toolbar2' => [],
			],
			'medium' => [
				'menu'     => ['edit', 'insert', 'view', 'format', 'table', 'tools', 'help'],
				'toolbar1' => [
					'bold', 'italic', 'underline', 'strikethrough', '|',
					'alignleft', 'aligncenter', 'alignright', 'alignjustify', '|',
					'formatselect', '|',
					'bullist', 'numlist', '|',
					'outdent', 'indent', '|',
					'undo', 'redo', '|',
					'link', 'unlink', 'anchor', 'code', '|',
					'hr', 'table', '|',
					'subscript', 'superscript', '|',
					'charmap', 'pastetext', 'preview', 'jxtdbuttons',
				],
				'toolbar2' => [],
			],
			'advanced' => [
				'menu'     => ['edit', 'insert', 'view', 'format', 'table', 'tools', 'help'],
				'toolbar1' => [
					'bold', 'italic', 'underline', 'strikethrough', '|',
					'alignleft', 'aligncenter', 'alignright', 'alignjustify', '|',
					'lineheight', '|',
					'styleselect', '|',
					'formatselect', 'fontselect', 'fontsizeselect', '|',
					'searchreplace', '|',
					'bullist', 'numlist', '|',
					'outdent', 'indent', '|',
					'undo', 'redo', '|',
					'link', 'unlink', 'anchor', 'image', '|',
					'code', '|',
					'forecolor', 'backcolor', '|',
					'fullscreen', '|',
					'table', '|',
					'subscript', 'superscript', '|',
					'charmap', 'emoticons', 'media', 'hr', 'ltr', 'rtl', '|',
					'cut', 'copy', 'paste', 'pastetext', '|',
					'visualchars', 'visualblocks', 'nonbreaking', 'blockquote', 'template', '|',
					'print', 'preview', 'codesample', 'insertdatetime', 'removeformat', 'jxtdbuttons',
					'language',
				],
				'toolbar2' => [],
			]
		];
	}
}