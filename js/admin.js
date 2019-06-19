$(document).ready(function()
{
    
    // admin see order from client
    
    $(".restaurant-tables .table").click(function()
    {
        $("html,body").animate({scrollTop : 620 },1000);
    });

    // admin finish order from client
    
    $(".online-order-list .finish").click(function()
    {
        $("html,body").animate({scrollTop : 0 },700);
    });

    get_unseen_orders.order_turn = 1;
    get_pending_feedbacks.counter = 0;
    get_unseen_orders.order_items = {};
    get_unseen_orders.notes = {};

    get_day_statistics();
    get_pending_feedbacks();
    setInterval(get_pending_feedbacks,2000);
    setInterval(get_unseen_orders,1000);

    $(document).on('click', '.table', function(){
        let table_number = Number($(this).find('.table_number').val());
        let order_id     = Number($(this).find('.order_id').val());
        $('.online-order-list h4 span').text('Table ' + table_number);
        $('.online-order-list .table_number').val(table_number);
        $('.online-order-list .order_id').val(order_id);
        $('.online-order-list tbody').empty();
        if(order_id !== 0)
        {
            let items = get_unseen_orders.order_items[order_id];
            let notes = get_unseen_orders.notes[order_id];
            for(var i = 0; i<items.length; i++)
            {
                $('.online-order-list tbody').append('<tr class="content-line"><td> '+items[i]['item_name']+' </td><td> '+items[i]['count']+' </td><td class="price-1"> '+items[i]['price']+' $ </td></tr>');
            }
            if(notes.length >0)
                $('.notes').text(notes).show();
        }
    })

    $(document).on('click', '.finish', function(){
        let order_id = Number($(this).siblings('.order_id').val());
        let table_number = Number($(this).siblings('.table_number').val());
        if(order_id !== 0)
        {
            $.ajax({
                url:'api/order/set_done.php',
                type:'POST',
                data:{order_id:order_id},
                success:function(data){
                    let this_order_turn = Number($('.table'+table_number+' span').text());
                    let temperory_number=0;

                    $('.notes').empty().hide();
                    $('.online-order-list tbody').empty();
                    $('.online-order-list h4 span').text('');
                    $('.table'+table_number+' span').detach();
                    $('.table'+table_number).removeClass('active');
                    get_day_statistics();
                    
                    get_unseen_orders.order_turn--;
                    for(var i=1; i<=8; i++)
                    {
                        temperory_number = Number($('.table'+i+' span').text());
                        if(temperory_number > this_order_turn)
                        {
                            temperory_number--;
                            $('.table'+i+' span').text(temperory_number);
                        }
                    }
                }
            })
        }  
    })

    $(document).on('click', '.approve', function(){
        let selector = $(this).parents('li');
        let feedback_id = Number($(this).siblings('.feedback_id').val());
        $.ajax({
            url:'api/feedback/approve.php',
            type:'POST',
            data:{feedback_id:feedback_id},
            success:function(data){
                get_pending_feedbacks.counter--;
                selector.detach();
            }
        })
    })

    $(document).on('click', '.reject', function(){
        let selector = $(this).parents('li');
        let feedback_id = Number($(this).siblings('.feedback_id').val());
        $.ajax({
            url:'api/feedback/delete.php',
            type:'POST',
            data:{feedback_id:feedback_id},
            success:function(){
                get_pending_feedbacks.counter--;
                selector.detach();
            }
        })
    })

});

function get_unseen_orders()
{
    let new_order = new Audio('audio/new_order.mp3');
    let play_audio = false;
    $.ajax({
        url:'api/order/get_undone_orders.php',
        type:'POST',
        success:function(data){
            let encoded_data = JSON.parse(data);
            for(var i=0; i<encoded_data.length; i++)
            {
                let selector = '.' + encoded_data[i]['username'];
                let order_id = encoded_data[i]['order_id'];
                get_unseen_orders.notes[order_id] = encoded_data[i]['notes'];
                if(!$(selector).hasClass('active'))
                {
                    $(selector).addClass('active');
                    $(selector).prepend('<span class="order-first">'+get_unseen_orders.order_turn+'</span>');
                    $(selector + ' .order_id').val(order_id);
                    get_unseen_orders.order_turn++;
                    play_audio = true;
                    $.ajax({
                        url:'api/order/get_items.php',
                        type:'POST',
                        data:{order_id:order_id},
                        success:function(data_2){
                            get_unseen_orders.order_items[order_id] = JSON.parse(data_2);
                        }
                    })
                }
            }
            if(play_audio == true)
                new_order.play();
        }
    })
}

function get_day_statistics()
{
    $.ajax({
        url:'api/order/get_day_orders.php',
        type:'POST',
        success:function(data){
            let encoded_data = JSON.parse(data);
            let total_paid = 0;
            let total_tips = 0;
            var i=0;
            for(i=0; i<encoded_data.length; i++)
            {
                total_paid += Number(encoded_data[i]['price']);
                total_tips += Number(encoded_data[i]['tips']);
            }
            $('.orders_number').text(i);
            $('.total_paid').text(total_paid + ' $');
            $('.total_tips').text(total_tips + ' $');
        }
    })
}

function get_pending_feedbacks()
{
    let feedback_count = 20;
    let new_feedback = new Audio('audio/new_feedback.mp3');

    $.ajax({
        url:'api/feedback/get_pending.php',
        type:'POST',
        data:{count:feedback_count},
        success:function(data){
            encoded_data = JSON.parse(data);

            let html_syntax = '';
            let div_started = false;
            if(encoded_data.length > get_pending_feedbacks.counter)
            {
                new_feedback.play();
                for(var i=0 ; i<encoded_data.length ; i++)
                {
                    if((i%5) == 0)
                    {
                        if(div_started == false)
                        {
                            html_syntax += '<div class="item"><ul class="list-unstyled">';
                            div_started = true;
                        }
                    }
                    html_syntax += '<li class="content-line"><label> '+encoded_data[i]['name']+' </label><span class="date"> '+encoded_data[i]['created_at']+' </span><div class="about-comment"><p> '+encoded_data[i]['body']+' </p><div class="state-comment"><input type="hidden" class="feedback_id" value="'+encoded_data[i]['feedback_id']+'"><span class="btn btn-success approve"> aprr </span><span class="btn btn-danger reject"> reje </span></div></div></li>';
                    if((i%5) == 4)
                    {
                        if(div_started == true)
                        {
                            html_syntax += '</ul></div>';
                            div_started = false;
                        }
                    }
                }

                if(div_started == true)
                {
                    html_syntax += '</ul></div>';
                    div_started = false;
                }

                $("#feedback-carousel").trigger('remove.owl.carousel',0);
                $('#feedback-carousel').append(html_syntax);

                let owl = $("#feedback-carousel");
                owl.owlCarousel();
                owl.trigger('destroy.owl.carousel');
                owl.owlCarousel({
                    items : 1
                });

                owl.find('.owl-item:first').remove();
                owl.trigger('destroy.owl.carousel');
                owl.owlCarousel({
                    items : 1
                });
            }

            get_pending_feedbacks.counter = encoded_data.length;     
        }
    })
}