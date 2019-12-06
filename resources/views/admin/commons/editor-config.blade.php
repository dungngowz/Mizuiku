<script>
    var editor_config = {
        path_absolute : "",
        selector: "textarea.editor",
        content_style: "img {width:100%}",
        plugins: [
            "link image fullscreen code table textcolor"
        ],
        remove_script_host: false,
        init_instance_callback: function (editor) {
            editor.on('Change', function (e) {
                editor.save();
                
            });
        },
        relative_urls: false,
        height: 350,
        file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });     
      },
      setup: function (editor) {
          editor.on('init', function(e) {
              editor = e.target;
              editor.on('NodeChange', function(e) {
                  if (e && e.element.nodeName.toLowerCase() == 'img') {
                      tinyMCE.DOM.setAttribs(e.element, {'width': '100%','height': null});
                  }
              });
          });
      },
    };
    tinymce.init(editor_config);
</script>