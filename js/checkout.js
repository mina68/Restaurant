$(document).ready(function(){

	show_checkout.total_price = 0; // without tips
	let tips = 0;

	$(".checkout .order-details .tibs p span").click(function()
    {
         $(".checkout .order-details .tibs .content-tibs").slideToggle();
    });

    // see client order
    
    $(".shop-basket").click(function()
    {
        $(".shopping-cart-content").slideToggle();

    });


    // scroll-button
	
	    var scrollButton = $(".scroll-top");

	    $(window).scroll(function()

	    {
	        $(this).scrollTop()>= 300 ? scrollButton.show(): scrollButton.hide();

	   });

	  scrollButton.click(function()
	  {
	      $("html,body").animate({scrollTop : 0},600);

	  });


	show_cart_data();
	total_price = show_checkout();

	$(document).on('click', '.delete_cart_item', function(){
		let selector = $(this);		
		let item_id = Number($(this).siblings('.item_id').val());
		$.ajax({
			url:'api/cart/delete_item.php',
			data:{item_id:item_id},
			type:'POST',
			success:function(data){
				show_cart_data();
				total_price = show_checkout();
			}
		})
	})

	$(document).on('input', '.edit_count', function(){
		let selector = $(this);		
		let item_id = Number($(this).siblings('.item_id').val());
		let count = Number($(this).val());
		$.ajax({
			url:'api/cart/edit_item_count.php',
			data:{item_id:item_id, count:count},
			type:'POST',
			success:function(data){
				show_cart_data();
				total_price = show_checkout();
			}
		})
	})

	$(document).on('click', '.pay-tips', function(){
		tips = Number($('.tips_input').val());
		let new_total = show_checkout.total_price + tips;
		$('.total_checkout span').text(new_total +' $');
        $(".checkout .order-details .tibs .content-tibs").slideUp();
	})

	$(document).on('click', '.checkout_submit', function(event)
	{
		event.preventDefault();
		let credit_name = $('.credit_name').val();
		let credit_number = $('.credit_number').val();
		let credit_expire = $('.credit_expire').val();
		let credit_password = $('.credit_password').val();
		let notes = $('.notes').val();

		if(!$('#paypal').is(':checked') & !$('#way2pay').is(':checked'))
		{
			$('.warn span').text('Please select a way to pay');
			$('.warn').show();
		}
		else if(credit_name === '')
		{
			$('.warn span').text('Please enter your credit card name');
			$('.warn').show();
		}
		else if(credit_number === '')
		{
			$('.warn span').text('Please enter your credit card number');
			$('.warn').show();
		}
		else if(credit_expire === '')
		{
			$('.warn span').text('Please enter your credit card expire date');
			$('.warn').show();
		}
		else if(credit_password === '')
		{
			$('.warn span').text('Please enter your credit card serial number');
			$('.warn').show();
		}
		else
		{
			$.ajax({
				url:'api/order/create.php',
				type:'POST',
				data:{tips:tips, price:show_checkout.total_price, notes:notes},
				success:function(data)
				{
					$.ajax({
						url:'api/order/add_cart_items.php',
						type:'POST',
						data:{order_id:data},
						success:function(data_2){
							console.log(data_2);
							window.location = 'feedback.php#leave';
						}
					})
				}
			})
		}
	})

	$('.checkout input').on('focus', function(){
		$('.warn').hide();
	})
})


function show_cart_data(){
	$.ajax({
		url:'api/cart/get_items.php',
		type:'POST',
		success:function(data){
			encoded_data = JSON.parse(data);
			$('.shopping-cart-content .list-unstyled').empty();
			$('.shop').text(encoded_data.length);
			if(encoded_data.length>0)
			{
				var total = 0;
				for(var i=0 ; i<encoded_data.length ; i++)
				{
					$('.shopping-cart-content .list-unstyled').append(
						'<li><div class="item-shopping-cart-content-img"><img src="'+encoded_data[i]['image_url']+'" alt=""></div><div class="info-shopping-cart-item"><div class="nam-prc"><span class="name-item">'+encoded_data[i]['item_name']+'</span><span>'+encoded_data[i]['count']+' x <strong> '+encoded_data[i]['price']+' $ </strong></span></div><div class="qty-remove"><input class="edit_count" title="Quantity" type="number" max="100" min="1" step="1" value="'+encoded_data[i]['count']+'"><input class="item_id" type="hidden" value="'+encoded_data[i]['item_id']+'"><i title="Remove" class="fa fa-trash-o delete_cart_item"></i></div></div></li>'
					)
					total += encoded_data[i]['count']*encoded_data[i]['price'];
				}
				$('.shopping-cart-content .list-unstyled').append(
					'<div class="subtotal"> subtotal : <span> '+total+' $ </span> </div><a href=""> checkout </a>'
                )
			}
		}
	})
}

function show_checkout(){
	$.ajax({
		url:'api/cart/get_items.php',
		type:'POST',
		success:function(data){
			encoded_data = JSON.parse(data);
			$('.item_in_chechout').detach();
			if(encoded_data.length>0)
			{
				var new_total;
				show_checkout.total_price = 0;
				for(var i=0 ; i<encoded_data.length ; i++)
				{
					item_price = encoded_data[i]['price']*encoded_data[i]['count'];
					show_checkout.total_price += item_price;
					new_total = show_checkout.total_price + Number($('.tips_input').val());

					$('.tibs').prepend('<div class="item_in_chechout"><p>'+encoded_data[i]['item_name']+'</p><span> '+item_price+' $</span></div>');
				}

				$('.total_checkout span').text(new_total+' $');
			}
		}
	})
}