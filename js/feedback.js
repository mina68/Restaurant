$(document).ready(function()
{
    let feedback_count = 5;

    show_feedback(feedback_count, 1);
    
    let page = 2;

    $(document).on('click', '.show-more', function(){
        show_feedback(feedback_count, page);
        page++;
    })

    function show_feedback(feedback_count, page)
    {
        $.ajax({
            url:'api/feedback/get_approved.php',
            type:'POST',
            data:{count:feedback_count, page:page},
            success:function(data){
                encoded_data = JSON.parse(data);
                for(var i=0 ; i<encoded_data.length ; i++)
                {
                    let feedback = '<div class="clients-feedback"><div class="row"><div class="col-sm-1"><div class="client-img"><img src="images/38.png" alt=""></div></div><div class="col-sm-11"><div class="client-feedback"><h4> '+encoded_data[i]['name']+' </h4><p>'+encoded_data[i]['body']+'</p><div class="wrapper"><span> '+encoded_data[i]['created_at']+' </span><span class="client-rate">rate |';
                    for(var j=0 ; j<encoded_data[i]['stars']; j++)
                        feedback += '<i class="fa fa-star">';
                    feedback += '</span></div></div></div></div></div>';
                    $('.show-more').before(feedback);
                }
                if(encoded_data.length < feedback_count)
                    $('.show-more').hide();
            }
        })
    }

    let stars_clicked = false; // to check when mouseleave if i chould set the stars color to gray
    let stars   = 0; // this number set when clicking on a star , by knowing it's index

    $(document).on('mouseenter', '.feedback_stars i', function(){
        $(".feedback_stars i").css("color","#b1b5bb");
        let index = $(this).index() + 1;
        for(var i=1 ; i<=index ; i++)
        {
            $(".feedback_stars i:nth-child("+ i +")").css("color","#ffcf3b");
        }
    })

    $(document).on('mouseleave', '.feedback_stars i', function(){
        if(stars_clicked == false)
        {
            $(".feedback_stars i").css("color","#b1b5bb");
        }
        else
        {
            $(".feedback_stars i").css("color","#b1b5bb");
            for(var i=1 ; i<=stars ; i++)
            {
                $(".feedback_stars i:nth-child("+ i +")").css("color","#ffcf3b");
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
                    $(".feedback_stars i").css("color","#b1b5bb");
                }
            })
        }
    })
});