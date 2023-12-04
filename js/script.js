$(document).ready(function(){
    rating_value = 0;
//     $('#add_review').click(function(){

//         $('#myModal').modal('show')
//     })


    


// $('#sendReview').click(function(){
//     // pro_id  = $('#pro_id').val()
//     userName  = $('#userName').val()
//     userMessage  = $('#userMessage').val()
//     if(userName == '' || userMessage == ''){
//         alert('Please, Fill both Fields')
//         return false;
//     }else{
//         $.ajax({
//             url:'data-submit.php',
//             method:'POST',
//             data:{rating_value:rating_value, userName:userName, userMessage:userMessage},
//             success:function(data){
//                 // $('#myModal').modal('hide')
//                 console.log(data)
//                 loadData()
//             }
//         })
//     }


// })

function loadData(){
    
    $.ajax({
        url:'data-submit.php',
        method:"POST",
        data:{action:'load_data'},
       
        success:function(data){
            var parsedData = JSON.parse(data);

             
            console.log(parsedData)
            $('#avg_rating').text(parsedData.avgUserRatings)
            $('#total_review').text(parsedData.totalReviews)
            $('#total_five_star_review').text(parsedData.totalRatings5)
            $('#total_four_star_review').text(parsedData.totalRatings4)
            $('#total_three_star_review').text(parsedData.totalRatings3)
            $('#total_two_star_review').text(parsedData.totalRatings2)
            $('#total_one_star_review').text(parsedData.totalRatings1)

        
            $('#five_star_progress').css('width',(parsedData.totalRatings5 / parsedData.totalReviews)*100)
            $('#four_star_progress').css('width',(parsedData.totalRatings4 / parsedData.totalReviews)*100)
            $('#three_star_progress').css('width',(parsedData.totalRatings3 / parsedData.totalReviews)*100)
            $('#two_star_progress').css('width',(parsedData.totalRatings2 / parsedData.totalReviews)*100)
            $('#one_star_progress').css('width',(parsedData.totalRatings1 / parsedData.totalReviews)*100)


            var countStar = 0;
            $('.main_star').each(function(){
             
                    countStar++
                    console.log(Math.ceil(parsedData.avgUserRatings))
                    if(Math.ceil(parsedData.avgUserRatings) >= countStar){
                        $(this).addClass('text-warning')
                        $(this).removeClass('star-light')
                    }
            })
            

            if(parsedData.ratingsList.length > 0){
                var html = '';
                for(var count=0;count<parsedData.ratingsList.length;count++){
                console.log(count)
                    
              html +=  `<div class="card shadow-0 border rounded-3 ms-2 mt-2">`;
                    html +=  `<div class="card-body">`;
                      html +=  `<div class="row">`;
                      html +=   `<div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 d-flex">`;
                      html +=    `<div class="bg-image hover-zoom ripple rounded ripple-surface m-auto">`;
                      html +=     `<img src="../../img/upload/user.png" class="w-100" style="height:100px" />`;
                      html +=       `<a href="#!">`;
                      html +=         `<div class="hover-overlay">`;
                      html +=           `<div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>`;
                      html +=          `</div>`;
                      html +=        `</a>`;
                      html +=      `</div>`;
                      html +=    `</div>`;
                      html +=    `<div class="col-md-6 col-lg-6 col-xl-6">`;
                      html +=      `<div class="mt-2"> <span class="fw-bold">`;
                      html +=     `${parsedData.ratingsList[count].name}`;

                      html +=        `</span>`;
                      html +=       ` <span>`;
                      html +=  `${parsedData.ratingsList[count].datetime}`;
                    //   html +=   '</span>`;
                      html +=      `</div>`;
                      html +=      `<div class="d-flex flex-row">`;
                      html +=        `<div class="color-x mb-1 me-2">`;
                              for(var star = 0; star<5; star++){
                                      if(parsedData.ratingsList[count].rating >= star){
                                          className = 'text-warning'
                                      }else{
                                          className = 'star-light'
                                      }
                                      html += `<i class="fa fa-star mr-1 ${className}" ></i>`;
                                                      }
              html +=                `</div>`;
              html +=              `</div>`;
     
              html +=              `<p class="text-truncate mb-4 mb-md-0">`;          
              html +=              `${parsedData.ratingsList[count].message}`;                
                  html +=              `</p>`;          
                  html +=            `</div>`;              
                  
                  html +=            `<div class='col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start' >`;
     
              html +=              `<div class="d-flex h-100 flex-wrap">`;
              html +=  `<a href="my single review.php?id=${parsedData.ratingsList[count].review_id}&pro_id=${parsedData.ratingsList[count].product_id}" class="btn bg-x1  m-auto me-xxl-1" type="button">Details</a>`;
              html +=   `<a href="urigi.php?id=${parsedData.ratingsList[count].review_id}" class="btn btn-bg-x1 m-auto p-2 px-4  ms-xxl-1" type="button">Delete</a>`;
              html +=              `</div>`;
              html +=            `</div>`;
              html +=          `</div>`;
              html +=        `</div>`;
              html +=      `</div>`;
            //   html +=        `</div>`;
            //   html +=      `</div>`;


                }

            }

            $('#display_my_review').html(html)
            
        } // success
    })
}

loadData()

})