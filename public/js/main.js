$(document).ready(function() {

    // ==================================================================================
    // Инициализация основных модулей

    // FormStyler и модуль "button"
    function initializeFormStyler() {
        $('input, textarea, select').addClass('styler');
        $('.styler-disable *').removeClass('styler');
        var btn_tags = 'button,' +
                       'input[type=\"submit\"],'  +
                       'input[type=\"reset\"],' +
                       'input[type=\"button\"]';
        $(btn_tags).removeClass('styler').addClass('button');
        $('.styler').styler();
    };
    // Фикс работы селектбокса
    $(document).on('hover', '.jq-selectbox__select', function() {
        var fs_parent = $(this).parent('.jq-selectbox').find('select');
        fs_parent.removeClass('styler').trigger('refresh');
    });
    initializeFormStyler();

    // Скролл в начало страницы
    toPageTop.init();

    // Sticky - прилипание элемента
    $('.sticky').stick_in_parent();

    // ==================================================================================
    // Инициализация инпутов

    $('.calendar-main').datepicker({
        dateFormat: 'dd/mm/yyyy',
        view: "years",
    });

    // Слайдер - диапазон значений
    $('#slider_summ').ionRangeSlider({
        min: 0,
        max: 1000000,
        force_edges: true,
        step: 1000,
        hide_min_max: true,
        hide_from_to: true,
        onStart: function (data) {
            $('#slider_summ_value').html(data.from);
        },
        onChange: function (data) {
            $('#slider_summ_value').html(data.from);
        },
        onUpdate: function (data) {
            $('#slider_summ_value').html(data.from);
        },
        onFinish: function (data) {
            $('#slider_summ_value').html(data.from);
        }
    });

    // Слайдер - диапазон значений
    $('#slider_time').ionRangeSlider({
        min: 0,
        max: 100,
        force_edges: true,
        step: 1,
        hide_min_max: true,
        hide_from_to: true,
        onStart: function (data) {
            $('#slider_time_value').html(data.from);
        },
        onChange: function (data) {
            $('#slider_time_value').html(data.from);
        },
        onUpdate: function (data) {
            $('#slider_time_value').html(data.from);
        },
        onFinish: function (data) {
            $('#slider_time_value').html(data.from);
        }
    });


    // Слайдер в форме - сума кредита
    $('#amount_slider').ionRangeSlider({
        min: 0,
        max: 3000000,
        force_edges: true,
        step: 10000,
        hide_min_max: true,
        hide_from_to: true,
        onStart: function (data) {
            $('#amount').val(data.from);
        },
        onChange: function (data) {
            $('#amount').val(data.from);
        },
        onUpdate: function (data) {
            $('#amount').val(data.from);
        },
        onFinish: function (data) {
            $('#amount').val(data.from);
        }
    });

    // Слайдер в форме - срок
    $('#request_time_slider').ionRangeSlider({
        min: 2,
        max: 65,
        force_edges: true,
        step: 1,
        hide_min_max: true,
        hide_from_to: true,
        onStart: function (data) {
            $('#request_time').val(data.from);
        },
        onChange: function (data) {
            $('#request_time').val(data.from);
        },
        onUpdate: function (data) {
            $('#request_time').val(data.from);
        },
        onFinish: function (data) {
            $('#request_time').val(data.from);
        }
    });

    // Слайдер - сумма в сайдбаре
    $('#slider_side_time').ionRangeSlider({
        min: 0,
        max: 65,
        force_edges: true,
        step: 1,
        hide_min_max: true,
        hide_from_to: true,
        onStart: function (data) {
            $('#slider_side_time_input').val(data.from);
        },
        onChange: function (data) {
            $('#slider_side_time_input').val(data.from);
        },
        onUpdate: function (data) {
            $('#slider_side_time_input').val(data.from);
        },
        onFinish: function (data) {
            $('#slider_side_time_input').val(data.from);
        }
    });
    // Здесь слайдер получает значения из инпутов (по enter)
    var slider_side_time = $("#slider_side_time").data("ionRangeSlider");
    $('#slider_side_time_input').keypress(function(e) {
        if (e.which == 13) {
            var input_value = $(this).val();
            slider_side_time.update({
                from: input_value,
            });
        }
    });


    // ==================================================================================
    // Инициализация навигации

    // Модалка
    $('.call-modal-1').click(function(e) {
        e.preventDefault();
        $('#modal_1').arcticmodal();
    });

    // Эквивалентные табы
    $('.tabs-small').eqTabs({
        'nav'              : '.tabs-small__nav',
        'tab'              : '.tabs-small__tab',
        'main'             : '.tabs-small__main',
        'content'          : '.tabs-small__block',
        'activeTab'        : 'tabs-small__tab_active',
        'activeContent'    : 'tabs-small__block_active',
    });



    // ==================================================================================
    // Инициализация слайдера

    // Карусель - Slick
    $('.carousel-main__track').slick({
        autoplay: true,
        autoplaySpeed: 12000,
        speed: 800,
        dots: true,
        arrows: false,
    });



    // ==================================================================================
    // Инициализация галереи

    // Colorbox - настройки
    jQuery.extend(jQuery.colorbox.settings, {
        current: "{current} / {total}",
        previous: "назад",
        next: "вперёд",
        close: "закрыть",
        xhrError: "Не удалось загрузить содержимое.",
        imgError: "Не удалось загрузить изображение.",
        slideshowStart: "начать слайд-шоу",
        slideshowStop: "остановить слайд-шоу"
    });

    // Colorbox
    $('.gallery-colorbox__link').colorbox({
        rel:'group1',
        fixed: true,
        transition: 'none',
        width: '75%',
        height: '75%',
    });



    // ==============================================================
    // Всплывающая подсказка в форме

    var formTooltip = function()
    {
        function obj()
        {
            var self = this;
            self.events = function()
            {
                $('.form-main__help').bind('click', function() {
                    self.close();
                    $(this).addClass('form-main__help_active');
                    self.open(this);
                });
                $(document).click(function(event) {
                    if ($(event.target).closest('.form-main__tooltip').length
                        || $(event.target).closest('.form-main__help_active').length ) {
                        return;
                    };
                    self.close();
                });
                $(document).keydown(function(event) {
                    if (event.keyCode == 27) {
                        event.preventDefault();
                        self.close();
                    }
                });
            },
            self.open = function(el)
            {
                $(el).closest('.form-main__item').find('.form-main__tooltip').addClass('form-main__tooltip_opened');
            },
            self.close = function()
            {
                $('.form-main__help').removeClass('form-main__help_active');
                $('.form-main__tooltip').removeClass('form-main__tooltip_opened');
            }
        }
        return new obj();
    }();
    formTooltip.events();


});
