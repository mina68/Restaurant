$(document).ready(function()
{
    
    // choose drinks || foods
    
    $(".overlay-menu ul .select-element").click(function(){
    	var target = $(this);
    	$(this).addClass('active-tap-menu-bar').siblings().removeClass('active-tap-menu-bar');
        if(target.is(":contains('Food')"))
        {
            $(".drinks ,.dessert ,.cocktail").filter(function(){return !$(this).is(':hidden')}).fadeOut(400,function(){
                $(".overlay-menu .restaurant-menu .food").fadeIn();
            });
        }
        else if(target.is(":contains('Drinks')"))
        {
            $(".food ,.dessert ,.cocktail").filter(function(){return !$(this).is(':hidden')}).fadeOut(400,function(){
                $(".overlay-menu .restaurant-menu .drinks").fadeIn();
            });
        }
        else if(target.is(":contains('Dessert')"))
        {
            $(".drinks ,.food ,.cocktail").filter(function(){return !$(this).is(':hidden')}).fadeOut(400,function(){
                $(".overlay-menu .restaurant-menu .dessert").fadeIn();
            });
        }
        else if(target.is(":contains('Cocktail')"))
        {
            $(".drinks ,.dessert ,.food").filter(function(){return !$(this).is(':hidden')}).fadeOut(400,function(){
                $(".overlay-menu .restaurant-menu .cocktail").fadeIn();
            });
        }
    });
    
    // admin see order from client
    
    $(".restaurant-tables .table").click(function()
      {
          $("html,body").animate({scrollTop : 620 },1000);

      });
    
    
    
    
    
    // show feedback
    
    var clicked=true;
    $(".give-feedback .btn-open-feedback").on('click', function(){
        if(clicked)
        {
            clicked=false;
            $(".give-feedback").animate({"left": "0"}, 700);
        }
        else
        {
            clicked=true;
            $(".give-feedback").animate({"left": "-400px"} , 700);
        }
    });






















    let feedback_count = 6;

    $.ajax({
        url:'api/feedback/get_approved.php',
        type:'POST',
        data:{count:feedback_count, page:1},
        success:function(data){
            encoded_data = JSON.parse(data);
            for(var i=0 ; i<encoded_data.length ; i++)
            {
                let feedback = '<div class="content-item"><div class="item"><p class="sec-font"> “ '+encoded_data[i]['body']+' ” </p><span> "'+encoded_data[i]['name']+'" </span><div class="client-rate">';
                for(var j=0 ; j<encoded_data[i]['stars']; j++)
                    feedback += '<i class="fa fa-star">';
                feedback += '</div></div></div>';
                $('#feedback-carousel').append(feedback);
            }

            let owl = $("#feedback-carousel");
            owl.trigger('destroy.owl.carousel');
            owl.owlCarousel({
                items : 2
            });

            owl.find('.owl-item:first').remove();
            owl.trigger('destroy.owl.carousel');
            owl.owlCarousel({
                items : 2
            });
        }
    })


    get_menu_items_by_type('Food', '.food');
    get_menu_items_by_type('Dessert', '.dessert');
    get_menu_items_by_type('Cocktail', '.cocktail');
    get_menu_items_by_type('Drinks', '.drinks');

    function get_menu_items_by_type(type, selector)
    {
        $.ajax({
            url:'api/menu/get_type.php',
            type:'POST',
            data:{type:type},
            success:function(data){
                encoded_data = JSON.parse(data);
                for(var i =0 ; i<=3 ; i++)
                {
                    $(selector +' .before').append('<li><div class="info-meal"><div class="meal-name"><h3> <a href="">'+encoded_data[i]['item_name']+'</a>  </h3><p>'+encoded_data[i]['content']+'</p></div><div class="buy-meal sec-font"><div class="price"><span> '+encoded_data[i]['price']+' $ </span></div><div class="add-cart"><input class="item_id" type="hidden" value="'+encoded_data[i]['item_id']+'"><i class="fa fa-shopping-cart add_to_cart"></i>Order</div></div></div></li>');
                }
                for(var i =4 ; i<=7 ; i++)
                {
                    $(selector +' .after').append('<li><div class="info-meal"><div class="meal-name"><h3> <a href="">'+encoded_data[i]['item_name']+'</a>  </h3><p>'+encoded_data[i]['content']+'</p></div><div class="buy-meal sec-font"><div class="price"><span> '+encoded_data[i]['price']+' $ </span></div><div class="add-cart"><input class="item_id" type="hidden" value="'+encoded_data[i]['item_id']+'"><i class="fa fa-shopping-cart"></i>Order</div></div></div></li>');
                }
            }
        })
    }

    let stars_clicked = false; // to check when mouseleave if i chould set the stars color to gray
    let stars   = 0; // this number set when clicking on a star , by knowing it's index

    $(document).on('mouseenter', '.feedback_stars i', function(){
        $(".feedback_stars li i").css("color","#b1b5bb");
        let index = $(this).index() + 1;
        for(var i=1 ; i<=index ; i++)
        {
            $(".feedback_stars li i:nth-child("+ i +")").css("color","#ffcf3b");
        }
    })

    $(document).on('mouseleave', '.feedback_stars i', function(){
        if(stars_clicked == false)
        {
            $(".feedback_stars li i").css("color","#b1b5bb");
        }
        else
        {
            $(".feedback_stars li i").css("color","#b1b5bb");
            for(var i=1 ; i<=stars ; i++)
            {
                $(".feedback_stars li i:nth-child("+ i +")").css("color","#ffcf3b");
            }
        }
    })

    $(document).on('click', '.feedback_stars i', function(){
        stars = $(this).index() + 1;
        stars_clicked = true;
    })

    $(document).on('focus', 'input', function(){
        $('.warn').hide();
    })

    $(document).on('click', '.add_feedback', function(event){
        event.preventDefault();
        let name = $('.enter_name').val();
        let body = $('.enter_feedback_body').val();
        if(name.length == 0)
        {
            $('.warn span').text('Please fill this field');
            $('.warn').show();
        }
        else if(body.length == 0)
        {
            $('.warn span').text('Please fill this field');
            $('.warn').show();
        }
        else if(name.length > 20)
        {
            $('.warn span').text('the name can not be more than 20 letters');
            $('.warn').show();
        }
        else if(stars == 0)
        {
            $('.warn span').text('it seems you forgot to give us a rate');
            $('.warn').show();
        }
        else
        {
            $.ajax({
                url:'api/feedback/add.php',
                type:'POST',
                data:{name:name, body:body, stars:stars},
                success:function(){
                    $('.enter_name').val('');
                    $('.enter_feedback_body').val('');
                    $(".feedback_stars li i").css("color","#b1b5bb");
                }
            })
        }
    })

    $(document).on('click', '.add-cart', function(){
        let item_id = Number($(this).find('.item_id').val());
        $.ajax({
            url:'api/cart/add_item.php',
            type:'POST',
            data:{item_id:item_id, count:1, size:'none'},
            success:function(data){
                show_cart_data();
            }
        })
    })
});