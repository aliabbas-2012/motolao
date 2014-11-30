jQuery(document).ready(function($) {

    /* ------------------- Client Carousel --------------------- */

    $('.clients-carousel').flexslider({
        animation: "slide",
        easing: "swing",
        animationLoop: true,
        itemWidth: 900,
        itemMargin: 0,
        minItems: 1,
        maxItems: 1,
        controlNav: false,
        directionNav: false,
        move: 1
    });


    /* ------------------ Back To Top ------------------- */

    jQuery('#footer-menu-back-to-top a').click(function() {
        jQuery('html, body').animate({scrollTop: 0}, 300);
        return false;
    });

    /* ------------------ Progress Bar ------------------- */
    $(function() {
        $(".meter > span").each(function() {
            $(this)
                    .data("origWidth", $(this).width())
                    .width(0)
                    .animate({
                        width: $(this).data("origWidth")
                    }, 1200);
        });
    });

    /* --------------------- Tabs ------------------------ */

    (function() {

        var $tabsNav = $('.tabs-nav'),
                $tabsNavLis = $tabsNav.children('li'),
                $tabContent = $('.tab-content');

        $tabsNav.each(function() {
            var $this = $(this);

            $this.next().children('.tab-content').stop(true, true).hide()
                    .first().show();

            $this.children('li').first().addClass('active').stop(true, true).show();
        });

        $tabsNavLis.on('click', function(e) {
            var $this = $(this);

            $this.siblings().removeClass('active').end()
                    .addClass('active');

            $this.parent().next().children('.tab-content').stop(true, true).hide()
                    .siblings($this.find('a').attr('href')).fadeIn();

            e.preventDefault();
        });

    })();


});


/* ------------------- Parallax --------------------- */

jQuery(document).ready(function($) {
    if ($('#da-slider').length > 0) {
        $('#da-slider').cslider({
            autoplay: true,
            bgincrement: 500

        });
    }

});

function showDiaryTarget(obj) {
    elem_id = $(obj).attr("data-id-target");
    $(".sub-part").hide();
    $("#" + elem_id).show("slow");
    return false;
}

function changePreview(obj) {
    elem_id = $(obj).parent().parent().parent().attr("id");
    src = $(obj).children().eq(0).attr("src");
    title = $(obj).children().eq(0).attr("title");
    css_class = $(obj).children().eq(0).attr("img-type");

    $("#" + elem_id + " .thumbnail").attr("href", src);
    $("#" + elem_id + " .thumbnail").addClass(css_class);
    $("#" + elem_id + " .thumbnail").children().eq(0).attr('src', src);
    $("#" + elem_id + " .thumbnail").children().eq(0).attr('title', title);
    $("#" + elem_id + " .thumbnail").children().eq(0).attr('alt', title);

    $("#" + elem_id + " h4.sub-part-title").html(title);

}

function submitAjaxContact() {
    $("#contact-form1").submit(function(event) {

        var data = $("#contact-form1").serialize();
        $("#cboxLoadingOverlay").show();
        $.post(
                $("#contact-form1").attr("action") + "?ajax=1",
                data,
                function(response) {
                    $("#cboxLoadingOverlay").hide();
                    $("#cboxLoadedContent").html(response);
                    
                    if (!response.success) {
                        alert('Failure!');
                    }
                    else {
                        alert("Thank you for feed back");
                    }
                    
                    submitAjaxContact();
                    
                    if($("#cboxLoadedContent input.error").length==0){
                        document.location.reload();
                    }

                   
                }
        );
        event.preventDefault();
    });
    
    return false;
}

function loadMore() {
    current = $(".pagination li.page.active");
    if ($(".pagination li.page.active").next().hasClass("page") == true) {
        $(".loading-indicator-wrapper").css("height", $(document).height() + "px");
        next = $(".pagination li.page.active").next().children().eq(0);
        homeLoader.show();

        $.post(
            $(next).attr("href"),
            {"ajax":1},
            function(response) {
                $(current).removeClass("active");
                $(next).addClass("active");
                $(".thumbnails").append(response);
                homeLoader.hide();
            }
        );
        event.preventDefault();
    }
    else {
        alert("No more data");
        $(".load").remove();
    }

}