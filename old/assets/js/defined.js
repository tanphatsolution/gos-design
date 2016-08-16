// show menu top
function makeEventHeaderMenu() {
    $('header .menu > ul > li').click(function() {
        $(this).attr('clicked', 1);
        var op = $(this).children().eq(1).css('opacity');

        if (op == 0) {
            $(this).children().eq(1).css('display', 'block');
            $(this).children().eq(1).animate({
                "opacity": 1,
                "margin-top": 0
            }, 300);
        } else {
            $(this).children().eq(1).css({
                "opacity": 0,
                "margin-top": "20px",
                "display": "none"
            });

        }
    });
}

// make menu mobile when display on mobile
function makeMenuMobile() {
    var menuSystem = $('header nav.menu[references="menu-system"]').html();
    $('#menuMobile > nav[references="menu-system"]').html(menuSystem);
    var menuTasks = $('#tasks nav.menu[references="menu-tasks"]').html();
    $('#menuMobile > nav[references="menu-tasks"]').html(menuTasks);

    $('#menuMobileToggle').click(function() {
        if ($(window).width() < 768) {
            $('#menuMobile').css('height', $(window).height());
            if ($(this).attr('data-display') == 0) {
                $('#menuMobile').animate({left: 0}, 350);
                $(this).attr('data-display', 1);
            } else {
                $('#menuMobile').animate({left: - $('#menuMobile').width()}, 350);
                $(this).attr('data-display', 0);
            }
        }
    });

    $(window).resize(function() {
        var width  = $(this).width();
        var height = $(this).height();
        if (width < 767) {
            $('#menuMobile').css('height', height).show();
        } else {
            $('#menuMobile').hide();
        }
    });
}

// make event scroll to top
function scrollTop() {
    $('#scrollTop').click(function() {
        $(this).css('text-decoration', 'none');
        $('body').animate({"scrollTop": 0}, 500);
    });
}

// table jquery
function showTableData(tableName) {
    $('select[table-name="'+ tableName +'"]').change(function() {
        var rows = parseInt($(this).val());

        if (!isNaN(rows)) {
            var selector = 'table[name="'+ tableName +'"] tbody tr';
            var element = $(selector);

            element.hide();
            rows = (rows <= element.length) ? rows : element.length;

            for (var i = 0; i < rows; i++) {
                element.eq(i).show();
            }
        }
    });
}

function toggleContent(className, seconds) {
    if (className === undefined) {
        className = 'toggle-content';
    }

    if (seconds === undefined) {
        seconds = 300;
    }

    $('.' + className).click(function() {
        var selector = $(this).attr('references');
        var element = $(selector);
        var display = $(this).attr('display');

        if (display == 1) {
            element.slideUp(seconds);
            $(this).attr('display', 0);
            $(this).html('<i class="fa fa-angle-right"></i>');
        } else {
            element.slideDown(seconds);
            $(this).attr('display', 1);
            $(this).html('<i class="fa fa-angle-down"></i>');
        }
    });
}

// add sort icon to table columns
function addTableSortIcon() {
    var columnTitle = '<a href="javascript:;" class="column-title" type="asc">' +
                        'label' +
                        '<span class="sort-icon">' +
                            '<i class="fa fa-angle-down"></i>' +
                        '</span>' +
                    '</a>';
    $('.table tr:first-child th').each(function() {
        var html = columnTitle.replace('label', $(this).html());
        $(this).html(html);
    });

    $('.column-title').click(function() {
        var type = $(this).attr('type');

        if (type == 'asc') {
            $(this).attr('type', 'desc');
            $(this).children().eq(0).html('<i class="fa fa-angle-down"></i>');
        } else {
            $(this).children().eq(0).html('<i class="fa fa-angle-up"></i>');
            $(this).attr('type', 'asc');
        }
    });
}
