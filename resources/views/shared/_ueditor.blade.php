<script type="text/javascript">
    var opt = {
        toolbars: [[
            'bold', 'italic', 'underline', 'removeformat', '|',
            'insertorderedlist', 'insertunorderedlist',
            'link', 'unlink', 'insertimage', 'drafts'
        ]],
        elementPathEnabled: false,
        wordCount: false
    };
    var ue = UE.getEditor('rixi-editor', opt);
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>