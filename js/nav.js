$(document).ready(function()
{
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

	$(document).on('click', '.delete_cart_item', function(){
		let selector = $(this);		
		let item_id = Number($(this).siblings('.item_id').val());
		$.ajax({
			url:'api/cart/delete_item.php',
			data:{item_id:item_id},
			type:'POST',
			success:function(data){
				show_cart_data();
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
			}
		})
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
				var total_price = 0;
				for(var i=0 ; i<encoded_data.length ; i++)
				{
					$('.shopping-cart-content .list-unstyled').append(
						'<li><div class="item-shopping-cart-content-img"><img src="'+encoded_data[i]['image_url']+'" alt=""></div><div class="info-shopping-cart-item"><div class="nam-prc"><span class="name-item">'+encoded_data[i]['item_name']+'</span><span>'+encoded_data[i]['count']+' x <strong> '+encoded_data[i]['price']+' $ </strong></span></div><div class="qty-remove"><input class="edit_count" title="Quantity" type="number" max="100" min="1" step="1" value="'+encoded_data[i]['count']+'"><input class="item_id" type="hidden" value="'+encoded_data[i]['item_id']+'"><i title="Remove" class="fa fa-trash-o delete_cart_item"></i></div></div></li>'
					)
					total_price += encoded_data[i]['count']*encoded_data[i]['price'];
				}
				$('.shopping-cart-content .list-unstyled').append(
					'<div class="subtotal"> subtotal : <span> '+total_price+' $ </span> </div><a href="checkout.php"> checkout </a>'
                )
			}
		}
	})
}