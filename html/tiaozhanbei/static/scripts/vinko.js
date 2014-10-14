(function() {
    // alert 关闭
    $('[data-dismiss="alert"]').click(function(e) {
        var $this = $(this),
            $parent = $this.hasClass('alert') ? $this : $this.parent();

        if (e) e.preventDefault();

        $parent.addClass('hide');
    });
})();
