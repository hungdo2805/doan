
CKEDITOR.editorConfig = function( config )
{
        // Define changes to default configuration here. For example:
    // config.language = 'en';
    // // them vao
    // config.enterMode = CKEDITOR.ENTER_BR // pressing the ENTER KEY input <br/>
    //     config.shiftEnterMode = CKEDITOR.ENTER_P; //pressing the SHIFT + ENTER KEYS input <p>
    //     config.autoParagraph = false; // stops automatic insertion of <p> on focus
    // ket thuc them vao
        // config.uiColor = '#AADC6E';
        
        config.toolbar_Full = [
            ['Source','-','Save','NewPage','Preview','-','Templates'],
            ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            '/',
            ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['BidiLtr', 'BidiRtl' ],
            ['Link','Unlink','Anchor'],
            ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
            '/',
            ['Styles','Format','Font','FontSize'],
            ['TextColor','BGColor'],
            ['Maximize', 'ShowBlocks','-','About']
            ];
        
        config.entities = false;
        //config.entities_latin = false;
        

        config.filebrowserBrowseUrl = 'http://localhost/doanthue/public/admin_asset/ckeditor/ckfinder/ckfinder.html';

        config.filebrowserImageBrowseUrl = 'http://localhost/doanthue/public/admin_asset/ckeditor/ckfinder/ckfinder.html?type=Images';

        config.filebrowserFlashBrowseUrl = 'http://localhost/doanthue/public/admin_asset/ckeditor/ckfinder/ckfinder.html?type=Flash';

        config.filebrowserUploadUrl = 'http://localhost/doanthue/public/admin_asset/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

        config.filebrowserImageUploadUrl = 'http://localhost/doanthue/public/admin_asset/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

        config.filebrowserFlashUploadUrl = 'http://localhost/doanthue/public/admin_asset/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};  