/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings, CKEDITOR) {
  'use strict';

  CKEDITOR.plugins.add('drupalfontawesome', {
    icons: 'drupalfontawesome',
    hidpi: true,

    init: function init(editor) {
      editor.addCommand('drupalfontawesome', {
        allowedContent: {
          i: {
            attributes: {
              '!class': true
            },
            classes: {}
          }
        },
        requiredContent: new CKEDITOR.style({
          element: 'i',
          attributes: {
            class: ''
          }
        }),
        modes: { wysiwyg: 1 },
        canUndo: true,
        exec: function exec(execEditor) {
          var saveCallback = function saveCallback(returnValues) {
            execEditor.fire('saveSnapshot');

            var selection = execEditor.getSelection();
            var range = selection.getRanges(1)[0];

            var icon = new CKEDITOR.dom.text('', execEditor.document);
            range.insertNode(icon);
            range.selectNodeContents(icon);

            var style = new CKEDITOR.style({ element: 'i', attributes: returnValues.attributes });
            style.type = CKEDITOR.STYLE_INLINE;
            style.applyToRange(range);
            range.select();

            execEditor.fire('saveSnapshot');

            execEditor.fire('insertedIcon');
          };

          var dialogSettings = {
            title: execEditor.config.drupalFontAwesome_dialogTitleAdd,
            dialogClass: 'fontawesome-icon-dialog'
          };

          Drupal.ckeditor.openDialog(execEditor, Drupal.url('fontawesome/dialog/icon/' + execEditor.config.drupal.format), {}, saveCallback, dialogSettings);
        }
      });

      if (editor.ui.addButton) {
        editor.ui.addButton('DrupalFontAwesome', {
          label: Drupal.t('Font Awesome'),
          command: 'drupalfontawesome'
        });
      }
    }
  });
})(jQuery, Drupal, drupalSettings, CKEDITOR);