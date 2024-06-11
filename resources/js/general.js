// import { ClassicEditor } from '@ckeditor/ckeditor5-editor-classic';
import { Essentials } from '@ckeditor/ckeditor5-essentials';
import { Paragraph } from '@ckeditor/ckeditor5-paragraph';
import { Bold, Italic } from '@ckeditor/ckeditor5-basic-styles';
import { MyUploadAdapter, ImageDeleteObserver } from "./uploadImageAdapter";


let csrf_token;
let urlUpload;
let urlDelete;

if (document.querySelector('meta[name="csrf-token"]')) {
  csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}
if (document.getElementById('form_general')) {
  urlUpload = document.getElementById('form_general')
                      .getAttribute('data-url-upload');
  urlDelete = document.getElementById('form_general')
                      .getAttribute('data-url-delete');
}

const general = () => {
  if (document.querySelector('#sejarah_sekolah')) {
    ckEditorForSejarah();
  }
};

function ckEditorForSejarah () {

  const ckEditorOptions = {
    cloudServices: {

    },
    extraPlugins: [
      // costumPluginUpload
      // costumPluginDelete
    ],
    toolbar: [
      'exportPDF','exportWord', '|',
      'findAndReplace', 'selectAll', '|',
      'heading', '|',
      'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
      'bulletedList', 'numberedList', 'todoList', '|',
      'outdent', 'indent', '|',
      'undo', 'redo',
      '-',
      'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
      'alignment', '|',
      'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
      'specialCharacters', 'horizontalLine', 'pageBreak', '|',
      'textPartLanguage', '|',
      'sourceEditing',
    ],
    list: {
      properties: {
        styles: true,
        startIndex: true,
        reversed: true
      }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
    heading: {
      options: [
        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
      ]
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
    placeholder: 'Welcome to CKEditor 5!',
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
    fontFamily: {
      options: [
        'default',
        'Arial, Helvetica, sans-serif',
        'Courier New, Courier, monospace',
        'Georgia, serif',
        'Lucida Sans Unicode, Lucida Grande, sans-serif',
        'Tahoma, Geneva, sans-serif',
        'Times New Roman, Times, serif',
        'Trebuchet MS, Helvetica, sans-serif',
        'Verdana, Geneva, sans-serif'
      ],
      supportAllValues: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
    fontSize: {
      options: [ 10, 12, 14, 'default', 18, 20, 22 ],
      supportAllValues: true
    },
    // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
    // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
    htmlSupport: {
      allow: [
        {
          name: /.*/,
          attributes: true,
          classes: true,
          styles: true
        }
      ]
    },
    // Be careful with enabling previews
    // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
    htmlEmbed: {
      showPreviews: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
    link: {
      decorators: {
        addTargetToExternalLinks: true,
        defaultProtocol: 'https://',
        toggleDownloadable: {
          mode: 'manual',
          label: 'Downloadable',
          attributes: {
            download: 'file'
          }
        }
      }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
    mention: {
      feeds: [
        {
          marker: '@',
          feed: [
            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
            '@sugar', '@sweet', '@topping', '@wafer'
          ],
          minimumCharacters: 1
        }
      ]
    },
  };

  // ClassicEditor
  //   .create(
  //     document.querySelector( '#sejarah_sekolah' ), ckEditorOptions)
  //   .then(editor => {
  //     editor.model.document.on('change:data', writer => {
  //       console.log(writer.type);
  //       console.log(editor.getData());
  //     });

  //     editor.model.document.on('image', (ev, data) => {
  //       console.log(data);
  //     })

  //   })
  //   .catch( error => {
  //       console.error( error );
  //   });


    ClassicEditor
    .create( document.querySelector('#sejarah_sekolah'), {
        plugins: [ Essentials, Paragraph, Bold, Italic ],
        toolbar: [ 'bold', 'italic' ],

    } )
    .then( editor => {
        console.log( 'Editor was initialized', editor );
    } )
    .catch( error => {
        console.error( error.stack );
    } );

}

// plugin upload
function costumPluginUpload( editor ) {
  editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        // Configure the URL to the upload script in your back-end here!
    return new MyUploadAdapter(
      loader,
      urlUpload,
      urlDelete,
      csrf_token
    );
  };
}

function deleteImage(imageSrc) {
  console.log('Attempting to delete image at path:', imageSrc); // Debugging log

  fetch(urlDelete, {
      method: 'DELETE',
      headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrf_token // Sesuaikan dengan token CSRF Anda
      },
      body: JSON.stringify({
          image_path: imageSrc
      })
  })
  .then(response => response.json())
  .then(data => {
      console.log('Delete response:', data); // Debugging log
      if (data.message) {
          console.log(data.message);
      } else if (data.error) {
          console.error(data.error);
      }
  })
  .catch(error => {
      console.error('Error:', error);
  });
}

export default general;
