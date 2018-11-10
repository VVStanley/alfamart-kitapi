$(document).ready(function () {

    //  активируем селекты
    $('.select2').select2();

    /*
           Добавляем позицию
    */
    $('#kit-add-position').click(function (e) {
        e.preventDefault();

        let position = $('.panel-body').find('#kit-position').clone(),
            number = position.find('.number').val();

        position.attr('id', ('kit-position' + number));
        position.find('#kit-add-position').attr('class', ('btn btn-danger delete')).removeAttr("id").text('Удалить');
        position.find('.number').remove();
        position.find('input').val('');

        $('.number').val(parseInt(number) + 1);
        $('#kit-position').after(position);
    });

    /*
            Удаляем позицию
     */
    $('.panel-body').on('click', '.delete', function (e) {
        e.preventDefault();

        let input = $('.panel-body').find('.number'),
            number = input.val();

        $('#kit-position' + (parseInt(number) - 1)).remove();
        input.val((parseInt(number) - 1));
    });

    /*
            проверяем стоимость
     */
    $('#declared_price').keyup(function () {
        if (parseInt($(this).val()) >= 1000) {
            $('#insurance').prop('checked', true);
            $('#insurance_agent_code').attr('disabled', false);
        } else {
            $('#insurance').prop('checked', false);
            $('#insurance_agent_code').attr('disabled', true);
        }
        if (parseInt($(this).val()) >= 50000) {
            $('#have_doc').prop('checked', true);
        } else {
            $('#have_doc').prop('checked', false);
        }
    });

    /*
            нажатие страховка
     */
    $('#insurance').click(function () {
        if ($(this).prop('checked')) {
            $('#insurance_agent_code').attr('disabled', false);
        } else {
            $('#insurance_agent_code').attr('disabled', true);
        }
        if (parseInt($('#declared_price').val()) >= 1000) {
            $('#insurance').prop('checked', true);
            $('#insurance_agent_code').attr('disabled', false);
        }
    });

    /*
        нажатие документы
    */
    $('#have_doc').click(function () {
        if (parseInt($('#declared_price').val()) >= 50000) {
            $('#have_doc').prop('checked', true);
        }
    });

    /*
            Забор груза
     */
    $('#pickup_r-no').click(function () {
        $('.pickup_r-address input, .pickup_r-address select').attr('disabled', 'disabled');
        $('.pickup_r-address').hide();
    });

    $('#pickup_r-yes').click(function () {
        $('.pickup_r-address input, .pickup_r-address select').removeAttr('disabled');
        $('.pickup_r-address').show();
    });

    $('#pick_up-no').click(function () {
        $('.pick_up-block input, .pick_up-block select, .pick_up-block textarea').attr('disabled', 'disabled');
        $('.pick_up-block').hide();
    });

    $('#pick_up-yes').click(function () {
        $('.pick_up-block input,  .pick_up-block select, .pick_up-block textarea').removeAttr('disabled');
        $('.pick_up-block').show();
    });

    /*
            получатель
     */
    $('.kit-individual').hide().find('input, select').each(function () {
        $(this).attr('disabled', 'disabled');
    });
    $('.kit-legal').hide().find('input, select').each(function () {
        $(this).attr('disabled', 'disabled');
    });

    $('#receiver-no').click(function () {

        $('.receiver').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
    });

    $('#receiver-yes').click(function () {
        $('.receiver').show().find('input, select').each(function () {
            $(this).removeAttr('disabled');
        });
    });

    $('#debitor-physical').click(function () {
        $('.kit-physical').show().find('input, select').each(function () {
            $(this).removeAttr('disabled');
        });
        $('.kit-individual').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
        $('.kit-legal').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
    });

    $('#debitor-individual').click(function () {
        $('.kit-individual').show().find('input, select').each(function () {
            $(this).removeAttr('disabled');
        });
        $('.kit-physical').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
        $('.kit-legal').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
    });

    $('#debitor-legal').click(function () {
        $('.kit-legal').show().find('input, select').each(function () {
            $(this).removeAttr('disabled');
        });
        $('.kit-individual').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
        $('.kit-physical').hide().find('input, select').each(function () {
            $(this).attr('disabled', 'disabled');
        });
    });

    /*
            дополнительный сведения
     */
    $('#additional_get_message').click(function () {
        if ($(this).is(':checked')) {
            $('.additional-message').show().find('input, select').each(function () {
                $(this).removeAttr('disabled');
            });
        } else {
            $('.additional-message').hide().find('input, select').each(function () {
                $(this).attr('disabled', 'disabled');
            });
        }
    });
});
