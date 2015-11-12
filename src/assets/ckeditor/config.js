/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'en';
	//config.uiColor = '#AADC6E';
};
CKEDITOR.plugins.load('pgrfilemanager');
CKEDITOR.config.removePlugins ='save';
CKEDITOR.on( 'dialogDefinition', function( ev ) {
	// Take the dialog name and its definition from the event data
	var dialogName = ev.data.name;
	var dialogDefinition = ev.data.definition;
	if ( dialogName == 'image' || dialogName == 'link' || dialogName == 'flash'  ) {
		// Remove upload tab
		dialogDefinition.removeContents('Upload');
		dialogDefinition.removeContents('upload');
	}
});