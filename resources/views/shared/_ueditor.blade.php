<script type="text/javascript">
    var opt = {
        toolbars: [[
            'fullscreen', 'bold', 'italic', 'underline', 'removeformat', '|',
            'insertorderedlist', 'insertunorderedlist',
            'link', 'unlink', 'insertimage', 'drafts'
        ]],
        elementPathEnabled: false,
        initialFrameHeight: {{ $editor_height or 220 }},
        wordCount: false
    };
    var ue = UE.getEditor('rixi-editor', opt);
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>