/*global $*/
$(function () {
    "use strict";
    //show & hide menu items
    var foodMenu = $(".food"),
        i;
    for (i = 0; i < foodMenu.length; i += 1) {
        foodMenu[i].addEventListener("click", function () {
            $(this).next().children().slideToggle(500);
            $(this).next().children().css("display", "flex");
            var menuIcon = $(this).find("i");
            if (menuIcon.attr("class") === "fa fa-angle-down") {
                menuIcon.slideToggle(200, function () {
                    menuIcon.attr("class", "fa fa-angle-up").slideToggle(200);
                });
                $(this).height(250);
            } else {
                menuIcon.slideToggle(200, function () {
                    menuIcon.attr("class", "fa fa-angle-down").slideToggle(200);
                });
                $(this).height(175);
            }
        });
    }

    //scroll to bootom function
    var goToBottom = $("#goto-bottom-icon");
    goToBottom.click(function () {
        $("html").animate({
            scrollTop: $("header").outerHeight(true)
        }, 1000);
    });

    //popup function
    var images = $(".zoom-pic"),
        popup = $(".food-popup"),
        popupImage = $("#main-image"),
        closeButton = popupImage.prev(),
        popupHeader = popupImage.next();
    for (var i = 0; i < images.length; i += 1) {
        images[i].addEventListener("click", function () {
            var imgSrc = $(this).attr("src"),
                imgHeader = $(this).parent().next().find("h3").text();
            popupImage.attr("src", imgSrc);
            popupHeader.text(imgHeader);
            popup.fadeToggle(700).css("display", "flex");
        });

        closeButton.click(function () {
            popup.fadeOut(700);
        });
    }

















    get_menu_items_by_type('Food', '.food_section');
    get_menu_items_by_type('Dessert', '.dessert_section');
    get_menu_items_by_type('Cocktail', '.cocktail_section');
    get_menu_items_by_type('Drinks', '.drinks_section');

    function get_menu_items_by_type(type, selector)
    {
        $.ajax({
            url:'api/menu/get_type.php',
            type:'POST',
            data:{type:type},
            success:function(data){
                encoded_data = JSON.parse(data);
                for(var i =0 ; i<encoded_data.length ; i++)
                {
                    $(selector).append('<div class="box"><div class="image"><img src="'+encoded_data[i]['image_url']+'" class="zoom-pic"></div><div class="text"><h3>'+encoded_data[i]['item_name']+'</h3><p>'+encoded_data[i]['content']+'</p><div><span>'+encoded_data[i]['price']+' $</span><input type="hidden" class="item_id" value="'+encoded_data[i]['item_id']+'"><button class="add_to_cart">Add To Cart<i class="fa fa-check-circle"></i></button></div></div></div>');
                }
            }
        })
    }


    $(document).on('click', '.add_to_cart', function(){
        let item_id = Number($(this).siblings('.item_id').val());
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